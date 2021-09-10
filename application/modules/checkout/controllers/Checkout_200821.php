<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Checkout extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Checkout_model", 'Checkout');
        $this->load->model("account/Account_model", 'Account');
        if (!empty($this->session->userdata('logged_in_users'))) {
            $this->customer = customer($this->session->userdata('logged_in_users')->usr_id);
        }
        date_default_timezone_set('Asia/Dubai');
        /* ========FOR USERS =========== */
        $this->cust_id = "usr_id";
        $this->users = "tbl_users";
        /* ========FOR PRODUCT =========== */
        $this->p_id = "p_id";
        $this->products = "tbl_product";
        /* ========FOR CAMPAIGN =========== */
        $this->campid = "id";
        $this->campaign = "tbl_campaign";
        /* ========FOR ORDERS =========== */
        $this->fld_ordid = "ord_id";
        $this->table_orders = "tbl_orders";
        /* ========FOR ORDER PRODUCTS =========== */
        $this->fld_opid = "pord_id";
        $this->table_order_products = "tbl_orders_product";
        /* ========FOR TAX =========== */
        $this->txt_id = "txt_id";
        $this->tax = "tbl_tax";
        /*--- For Ticket ---*/ 
        $this->tkid="id";
        $this->ordtkid="odrer_id";
        $this->ticket="tbl_ticket";
    }

    public function index() 
    {    
        if(!empty($this->session->userdata('logged_in_users')))
        {
            foreach($this->cart->contents() as $item)
            { 
                $product=$this->Checkout->product_detail($item['id'],'tbl_product');
                $sold_total=sold($product->p_id)+$product->p_soldplus+$product->p_sold_plus;
                $max=$product->p_qty-$sold_total;
                if ($item['qty'] > $max) {
                    $this->session->set_flashdata('msg',array('message' => 'Out Stock','class' => 'error','type'=>'Ok!'));
                    redirect('cart');
                }
            }

            $custid = $this->customer->usr_id; /*--- Check User Login OR Not ---*/ 
            $content['tax'] = $this->Checkout->tax_list($this->tax);
            if (!empty($custid)) {

                if(!empty($this->session->userdata('orderReference'))){
                    $content['customOrderReference'] = $this->session->userdata('orderReference');
                    $getOrderId = $this->Checkout->getOrderId('ord_reference_no',$content['customOrderReference'],$this->table_orders);

                    if(!empty($getOrderId)){

                        $total_tax = 0;
                        if ($content['tax'] == true) {
                            foreach ($content['tax'] as $tx_val) {
                                $txt = $tx_val->txt_per * $this->cart->total() / 100;
                                $total_tax+= $txt;
                            }
                        }
                        $ord_total_amounts = $this->cart->total() + $total_tax;
                        $orderArray = array(
                            'tax' => $total_tax,
                            'ord_total_amounts' => round($ord_total_amounts),
                            'ord_updated' => date('Y-m-d h:i:s')
                        );
                        $ordid = $this->Checkout->UpdateOrderInformation($this->fld_ordid,$getOrderId,$orderArray, $this->table_orders);
                        if(!empty($ordid)) {
                            $getOrderProductList = $this->Checkout->getOrderProductsList($this->fld_ordid,$getOrderId,$this->table_order_products);
                            
                            if(!empty($getOrderProductList)){
                                foreach($getOrderProductList as $ordPro){
                                    $this->Checkout->delete($this->fld_ordid,$getOrderId,$this->table_order_products); 
                                }
                            }
                            $getOrderTicketList = $this->Checkout->getOrderTicketList($this->ordtkid,$getOrderId,$this->ticket);
                            if(!empty($getOrderTicketList)){
                                foreach($getOrderTicketList as $ordTkt){
                                    $this->Checkout->delete($this->ordtkid,$getOrderId,$this->ticket); 
                                }
                            }

                            $orderProducts = array();
                            foreach ($this->cart->contents() as $data) {
                                if (empty($this->input->post('donate'))) {
                                    $Tickets = $data['qty'];
                                } else {
                                    $Tickets = $data['qty'] * 2;
                                }
                                for ($x = 1;$x <= $Tickets;$x++) {
                                    $no = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), -3) . '-' . substr(uniqid('', true), -5) . '-' . date('dhis');
                                    /*--- Donated Order Ticket ---*/ 
                                    $orderTickets = array(
                                        'cust_id' => $custid,
                                        'price' => price_reward($data['id']),
                                        'ticket_no' => $no,
                                        'odrer_id' => $getOrderId,
                                        'created' => date('Y-m-d h:i:s')
                                    );
                                    $Ticketsave = $this->Checkout->SaveOrderInformation($orderTickets, 'tbl_ticket');
                                }
                                /*--- Save Order Products ---*/ 
                                $orderProducts[] = array(
                                    'ord_id' => $getOrderId,
                                    'pro_id' => $data['id'],
                                    'pro_name' => $data['name'],
                                    'pro_ticket' => $Tickets,
                                    'pro_price' => $data['price'],
                                    'pro_currency' => $this->input->post('item_currency'),
                                    'pro_qty' => $data['qty'],
                                    'pro_img' => $data['img']
                                );
                            }
                            $check = $this->Checkout->SaveOrderProduct($orderProducts, $this->table_order_products);
                            $content['customOrderReference'] = $content['customOrderReference'];

                        }
                    }else{
                        redirect('/');
                    }
                }else{

                    $total_tax = 0;
                    if ($content['tax'] == true) {
                        foreach ($content['tax'] as $tx_val) {
                            $txt = $tx_val->txt_per * $this->cart->total() / 100;
                            $total_tax+= $txt;
                        }
                    }
                    // GET ORDERS REFERENCE ID //
                    $year = date('y');
                    $month = date('m');
                    $date = date('d');
                    $time = date('his');
                    $random = rand(1000, 9999);
                    $orderReferenceID = $year . $month . $date . $time;
                    $ord_total_amounts = $this->cart->total() + $total_tax;
                    $orderArray = array(
                        'ord_reference_no' => $orderReferenceID,
                        'cust_id' => $custid,
                        'tax' => $total_tax,
                        'ord_total_amounts' => round($ord_total_amounts),
                        'ord_created' => date('Y-m-d h:i:s')
                    );
                    $ordid = $this->Checkout->SaveOrderInformation($orderArray, $this->table_orders);
                    
                    /*-- Set Order Session --*/
                    $myCustomReferenceId = $this->session->set_userdata('orderReference', $orderReferenceID);
                    /*-- End Of The Order Session --*/
                    if ($ordid) {
                        $orderProducts = array();
                        foreach ($this->cart->contents() as $data) {
                            if (empty($this->input->post('donate'))) {
                                $Tickets = $data['qty'];
                            } else {
                                $Tickets = $data['qty'] * 2;
                            }
                            for ($x = 1;$x <= $Tickets;$x++) {
                                $no = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), -3) . '-' . substr(uniqid('', true), -5) . '-' . date('dhis');
                                /*--- Donated Order Ticket ---*/ 
                                $orderTickets = array(
                                    'cust_id' => $custid,
                                    'price' => price_reward($data['id']),
                                    'ticket_no' => $no,
                                    'odrer_id' => $ordid,
                                    'created' => date('Y-m-d h:i:s')
                                );
                                $Ticketsave = $this->Checkout->SaveOrderInformation($orderTickets, 'tbl_ticket');
                            }
                            /*--- Save Order Products ---*/ 
                            $orderProducts[] = array(
                                'ord_id' => $ordid,
                                'pro_id' => $data['id'],
                                'pro_name' => $data['name'],
                                'pro_ticket' => $Tickets,
                                'pro_price' => $data['price'],
                                'pro_currency' => $this->input->post('item_currency'),
                                'pro_qty' => $data['qty'],
                                'pro_img' => $data['img']
                            );
                        }
                        $check = $this->Checkout->SaveOrderProduct($orderProducts, $this->table_order_products);

                        $content['customOrderReference'] = $orderReferenceID;
                    }
                }
                
            }
        }
        $content['subview'] = 'checkout/viewCheckout';
        $this->load->view('layout', $content);
    }

    public function payment() 
    {
        if (!empty($this->input->post('total_amount'))) {
            $content['total_amount'] = $this->input->post('total_amount') * 100;
            $content['reference'] = $this->input->post('order_reference');
            $content['subview'] = 'checkout/viewpayment';
        } else {
            redirect('checkout');
        }
        //print_r($content);die;
        $this->load->view('layout', $content);
    }

    /* ===== SHIPPING ADDRESS ===== */
    public function address() 
    {
        $login = $this->customer;
        $RequestMethod = $this->input->server("REQUEST_METHOD");
        if ($RequestMethod == "POST") {
            $createdDate = date('Y-m-d H:i:s');
            $addressDefault = $this->input->post('addressDefault');
            if ($addressDefault == "yes") {
                $shipping = $this->Checkout->get_defaultaddress($addressDefault, $this->cust_id, $login->cust_id, $this->table_shipping);
                //print_r($shipping);die;
                $id = $shipping->fld_id;
                $data = array("addressDefault" => null,);
                $this->Checkout->update_shippingAddress($this->cust_id, $login->cust_id, $this->fld_shid, $id, $data, $this->table_shipping);
            }
            $data = array("shippingFirstName" => $this->input->post('shippingFirstName'), "cust_id" => $login->cust_id, "shippingLastName" => $this->input->post('shippingLastName'), "shippingNumber" => $this->input->post('shippingNumber'), "shippingEmail" => $this->input->post('shippingEmail'), "shippingCountry" => $this->input->post('shippingCountry'), "shippingState" => $this->input->post('shippingState'), "shippingCity" => $this->input->post('shippingCity'), "shippingPincode" => $this->input->post('shippingPincode'), "shippingAddress" => $this->input->post('shippingAddress'), "addressType" => $this->input->post('addressType'), "addressDefault" => $this->input->post('addressDefault'), 'shippingCreated' => date('Y-m-d H:i:s'));
            $savedata = $this->Checkout->saveShippingAddress($data, $this->table_shipping);
            if ($savedata) {
                $data = array("type" => "success", "message" => ('<div class="alert alert-success" ><strong>Ok ..</strong> Your shipping address is save </div>'));
                echo json_encode($data);
            } else {
                $data = array("type" => "error", "message" => ('<div class="alert alert-danger" ><strong>Oops! ..</strong> Some error occurred. Try again. </div>'));
                echo json_encode($data);
            }
        } 
    }

    public function shipping_edit() 
    {
        $fld_id = $this->input->post('SID');
        $shipping = $this->Checkout->get_shippingAddress($this->fld_shid, $fld_id, $this->table_shipping);
        $content['shipping'] = $shipping[0];
        $content['country'] = $this->Checkout->location_list('cnt_name', 'cnt_status', $this->table_country);
        $content['state'] = $this->Checkout->location_list('st_name', 'st_status', $this->table_states);
        $content['city'] = $this->Checkout->location_list('ct_name', 'ct_status', $this->table_city);
        $content['zip'] = $this->Checkout->location_list('zc_zipcode', 'zc_status', $this->table_zipcode);
        echo json_encode($content);
    }

    public function shipping_update() 
    {
        $login = $this->customer;
        $RequestMethod = $this->input->server("REQUEST_METHOD");
        if ($RequestMethod == "POST") {
            $cureent_url = $this->input->post('get_current');
            $fldid = $this->input->post('fldid');
            $addressDefault = $this->input->post('addressDefault');
            if ($addressDefault == "yes") {
                $shipping = $this->Checkout->get_defaultaddress($addressDefault, $this->cust_id, $login->cust_id, $this->table_shipping);
                //print_r($shipping);die;
                $id = $shipping->fld_id;
                $data1 = array("addressDefault" => null,);
                $this->Checkout->update_shippingAddress($this->cust_id, $login->cust_id, $this->fld_shid, $id, $data1, $this->table_shipping);
            }
            $data = array("shippingFirstName" => $this->input->post('shippingFirstName'), "shippingLastName" => $this->input->post('shippingLastName'), "shippingNumber" => $this->input->post('shippingNumber'), "shippingEmail" => $this->input->post('shippingEmail'), "shippingCountry" => $this->input->post('shippingCountry'), "shippingState" => $this->input->post('shippingState'), "shippingCity" => $this->input->post('shippingCity'), "shippingPincode" => $this->input->post('shippingPincode'), "shippingAddress" => $this->input->post('shippingAddress'), "addressType" => $this->input->post('addressType'), "addressDefault" => $this->input->post('addressDefault'));
            $updatedata = $this->Checkout->update_shippingAddress($this->cust_id, $login->cust_id, $this->fld_shid, $fldid, $data, $this->table_shipping);
            if ($updatedata) {
                $this->session->set_flashdata('msg', array('message' => 'Your shipping address is update', 'class' => 'success', 'type' => 'Ok!'));
                redirect($cureent_url);
            } else {
                $this->session->set_flashdata('msg', array('message' => 'Unable to Remove.Some error occurred.', 'class' => 'danger', 'type' => 'Oops!'));
                redirect($cureent_url);
            }
        }
    }
    
    public function removeShipping($id = null) 
    {
        if ($id !== NULL) {
            $result = $this->Checkout->delete_single($this->fld_shid, $id, $this->table_shipping);
            if ($result) {
                redirect('checkout');
            } else {
                redirect('checkout');
            }
        } else {
            redirect('checkout');
        }
    }
    /* === END SHIPPING ADDRESS === */

    public function successcash() 
    {
        $content['subview'] = 'checkout/success';
        $this->load->view('layout', $content);
    }

}
