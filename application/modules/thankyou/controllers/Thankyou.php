<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Thankyou extends MY_Controller{

    public function  __construct()
    {
        parent::__construct();
        $this->load->model('Thankyou_model','Thankyou');    
        $this->load->model("account/Account_model",'Account');
        if(!empty($this->session->userdata('logged_in_users'))){
            $this->customer=customer($this->session->userdata('logged_in_users')->usr_id);
        }

        date_default_timezone_set('Asia/Dubai'); 
        $this->ordId="ord_id";
        $this->refId="ord_reference_no";
        $this->table_orders="tbl_orders";
        /* ========FOR ORDER PRODUCTS =========== */
        $this->payments="tbl_payments";
        /* ========FOR PAYMENT TABLE =========== */
    }

    
    public function response()
    {
        $login = $this->session->userdata('logged_in_users');
        if(empty($login)){
          redirect('/');
        }
        $orderReferenceId = $this->session->userdata('orderReference');
    
        $content['recentOrd'] = $this->Thankyou->get_orderInfo($orderReferenceId,$this->table_orders);
        $mainId = $content['recentOrd']->ord_id;
        $custid=$this->customer->usr_id;  
        //$serverResponse = '8d395541-f425-4552-8dca-44a655740a41';
        if($this->input->get('ref')){
            

            $ref = $this->input->get('ref');
            //$outletRef   = "2688c131-45dc-48ef-9b88-4f8e44b1449d";                                                                       
            //$apikey      = "OTZmMGEyODctYzlhMi00YjEwLWJlMmItZDU5MTE4YjYzZDNlOjQ1YTg5NjJmLTc2OWMtNDMwYy04OTdiLTcxN2Y2NzFjNzBmZQ=="; 
            
            $outletRef   = "9fe1eebb-b168-4da0-9e3c-fddc621e1dba";                                                                       
            $apikey      = "MmMzZDE0NzUtNjg4MS00NTkxLWE3N2QtM2UzZDI2OGMwY2M5OjNjM2Q0MWYxLWY5NWItNDc1OC04YWYyLWVlODI0YTRmYjk0OA=="; 
            //$sessionToken = $_SESSION["token"];
            $sessionToken = $this->session->userdata('token');
            $token = $sessionToken;
        
            $curl = curl_init();
            curl_setopt_array($curl, [
                //CURLOPT_URL => "https://api-gateway.sandbox.ngenius-payments.com/transactions/outlets/".$outletRef."/orders/".$ref."",
                CURLOPT_URL => "https://api-gateway.ngenius-payments.com/transactions/outlets/".$outletRef."/orders/".$ref."",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "Authorization: Bearer ".$token, 
                    "Content-Type: application/vnd.ni-payment.v2+json", 
                    "Accept: application/vnd.ni-payment.v2+json"
                ],
            ]);
        
            $response = curl_exec($curl);
            $err = curl_error($curl);
            $data = json_decode($response);
            $err = curl_error($curl);
            curl_close($curl);
            if (empty($data->_embedded->payment[0]->state)) {
                echo "cURL Error #:" . $err;
                 redirect('/');
            } else {
                $data = json_decode($response); // Convert json data to array
                $get_status=$data->_embedded->payment[0]->state;
                /*-- If Transection is Unpaid --*/   
                if($get_status=='FAILED'){
                    $this->session->unset_userdata('orderReference');
                    /*-- Transection is Failed --*/ 
                    $orderUpdate = array(
                        'ord_txt_status' => $get_status,
                        'ord_txt_id' => $data->reference,
                        'order_status' => 'Waiting',
                        'ord_through' => 'Webapp',
                        'ord_updated' => date('Y-m-d h:i:s')
                    );
                    $updatestatus = $this->Thankyou->UpdateOrderInformation($this->refId,$orderReferenceId,$orderUpdate,$this->table_orders);
                    
                    /*-- Payment Function --*/
                    // $paymentUpdate = array(
                    //     'ord_id' => $orderReferenceId,
                    //     'cust_id' => $custid,
                    //     'reference_id' => $referenceId,
                    //     'track_id' => $trackId,
                    //     'transaction_id' => $transectionId,
                    //     'payment_id' => $paymentId,
                    //     'payment_gateway' => $paymentGateway,
                    //     'transaction_status' => $transactionStatus,
                    //     'create_time' => date('Y-m-d H:i:s')
                    // );
                    // $this->Thankyou->savePaymentInformation($paymentUpdate,$this->payments);
                    /*====================Start email send===========*/ 
                    $content['recentOrd'] = $this->Thankyou->get_orderInfo($orderReferenceId,$this->table_orders);
                    $mainId = $content['recentOrd']->ord_id;
                    $data1['cmpt_ord_detail']=$this->Thankyou->get_complete_list($orderReferenceId);
                    $data1['cmpt_ord_pro_detail']=$this->Thankyou->get_order_product_list($mainId);
                    $data1['payment_status'] = "Unpaid";
                    $emailsubject='Order Detail from falconrewards.com';
                    $toemail=$this->customer->usr_email; 
                    $emailmsg=$this->load->view('thankyou/email_order/emailOrderFailed',$data1,true);
                    //$mailsend=email_send($toemail,$emailsubject,$emailmsg);   
                    $from_email = "no-reply@falconrewards.com";
                    $this->load->library('email');
                    $config = array (
                    'mailtype' => 'html',
                    'charset'  => 'utf-8',
                    'priority' => '1'
                    );
                    $this->email->initialize($config);
                    $this->email->from($from_email, "Falcon Rewards");
                    $this->email->to($toemail);
                    $this->email->subject($emailsubject);
                    $this->email->message($emailmsg);
                    $this->email->send();
                    /*====================End email send ===========*/
                    /*- Distroy cart -*/
                    $this->cart->destroy();
                    $this->session->set_flashdata('msg',array('message' => 'Payment Unpaid','class' => 'success','type'=>'Ok!'));
    
                }else if($get_status=='CAPTURED'){
                    $this->session->unset_userdata('orderReference');
                    /*-- Transection is Successfull --*/ 
                    $orderUpdate = array(
                        'ord_txt_status' => $get_status,
                        'ord_txt_id' => $data->reference,
                        'order_status' => 'InProcess',
                        'ord_through' => 'Webapp',
                        'ord_updated' => date('Y-m-d h:i:s')
                    );
                    $updatestatus = $this->Thankyou->UpdateOrderInformation($this->refId,$orderReferenceId,$orderUpdate,$this->table_orders);
                    
                    /*====================Start email send===========*/ 
                    $content['recentOrd'] = $this->Thankyou->get_orderInfo($orderReferenceId,$this->table_orders);
                    $mainId = $content['recentOrd']->ord_id;
                    $data1['tickets'] = $this->Thankyou->get_ticket_list($mainId); 
                    $data1['cmpt_ord_detail']=$this->Thankyou->get_complete_list($orderReferenceId);
                    // echo "<pre>";
                    // print_r($data1['cmpt_ord_detail']);die;
                    $data1['cmpt_ord_pro_detail']=$this->Thankyou->get_order_product_list($mainId);
                    $data1['payment_status'] = "Paid";
                    $emailsubject='Order Detail from falconrewards.com';
                    $toemail=$this->customer->usr_email; 
                    $emailmsg=$this->load->view('thankyou/email_order/emailOrder',$data1,true);
                    $from_email = "no-reply@falconrewards.com";
                    $this->load->library('email');
                    $config = array (
                    'mailtype' => 'html',
                    'charset'  => 'utf-8',
                    'priority' => '1'
                    );
                    $this->email->initialize($config);
                    $this->email->from($from_email, "Falcon Rewards");
                    $this->email->to($toemail);
                    $this->email->subject($emailsubject);
                    $this->email->message($emailmsg);
                    $this->email->send();
                    /*====================End email send ===========*/
                    /*- Distroy cart -*/
                    $this->cart->destroy();
                }else{
                    $this->session->unset_userdata('orderReference');
                    /*-- Not Getting Response --*/ 
                    $orderUpdate = array(
                        'ord_txt_status' => $get_status,
                        'ord_txt_id' => $data->reference,
                        'order_status' => 'Waiting',
                        'ord_through' => 'Webapp',
                        'ord_updated' => date('Y-m-d h:i:s')
                    );
                    $updatestatus = $this->Thankyou->UpdateOrderInformation($this->refId,$orderReferenceId,$orderUpdate,$this->table_orders);
                    
                    /*====================Start email send===========*/ 
                    $data1['cmpt_ord_detail']=$this->Thankyou->get_complete_list($orderReferenceId);
                    $data1['cmpt_ord_pro_detail']=$this->Thankyou->get_order_product_list($mainId);
                    $data1['payment_status'] = "Payment Failure";
                    $emailsubject='Order Detail from falconrewards.com';
                    $toemail=$this->customer->usr_email; 
                    $emailmsg=$this->load->view('thankyou/email_order/emailOrderFailed',$data1,true);
                    $from_email = "no-reply@falconrewards.com";
                    $this->load->library('email');
                    $config = array (
                    'mailtype' => 'html',
                    'charset'  => 'utf-8',
                    'priority' => '1'
                    );
                    $this->email->initialize($config);
                    $this->email->from($from_email, "Falcon Rewards");
                    $this->email->to($toemail);
                    $this->email->subject($emailsubject);
                    $this->email->message($emailmsg);
                    $this->email->send();
                    /*====================End email send ===========*/
                    /*- Distroy cart -*/
                    $this->cart->destroy();
                    $this->session->set_flashdata('msg',array('message' => 'Payment Failure','class' => 'success','type'=>'Ok!'));
                }
    
                $content['subview']="thankyou/viewSuccess"; 
                $this->load->view('layout', $content);
            }
        }
    
    }
    
    public function cancel()
    {
        $login = $this->session->userdata('logged_in_users');
        if(empty($login)){
            redirect('/');
        }
        $this->cart->destroy();
        $content['subview']="thankyou/viewCancel"; 
        $this->load->view('layout', $content);
    }
    
    public function send()
    {
        $orderReferenceId='210126050615';
        /*====================Start email send===========*/ 
        $content['recentOrd'] = $this->Thankyou->get_orderInfo($orderReferenceId,$this->table_orders);

        $mainId = $content['recentOrd']->ord_id;
        $data['tickets'] = $this->Thankyou->get_ticket_list($mainId); 
        $data['cmpt_ord_detail']=$this->Thankyou->get_complete_list($orderReferenceId);
        $data['cmpt_ord_pro_detail']=$this->Thankyou->get_order_product_list($mainId);
        $data['payment_status'] = "Paid";
        $emailsubject='Order Detail from falconrewards.com';
        $toemail='manish.sandlus@gmail.com'; 
        $emailmsg=$this->load->view('thankyou/email_order/emailOrder2',$data,true);
        
        $mailsend=email_send($toemail,$emailsubject,$emailmsg); 
        $from_email = "no-reply@falconrewards.com";
        $this->load->library('email');
        $config = array (
        'mailtype' => 'html',
        'charset'  => 'utf-8',
        'priority' => '1'
        );
        $this->email->initialize($config);
        $this->email->from($from_email, "Falcon Rewards");
        $this->email->to($toemail);
        $this->email->subject($emailsubject);
        $this->email->message($emailmsg);
        $this->email->send();
        /*====================End email send ===========*/
    }
}