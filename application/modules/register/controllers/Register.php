<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {
	 
	public function __construct() {
		parent::__construct(); 
		$this->load->model("Register_model",'Register');		
		$this->load->library("security");	
		if(!empty($this->session->userdata('logged_in_users'))){
	    	//$this->customer=customer($this->session->userdata('logged_in_users')->cust_id);
	    	redirect('/');
	    }
		/* ========FOR LOGIN =========== */
		$this->cust_id="usr_id"; 
		$this->fld_email="usr_email"; 	
        $this->fld_password="usr_password";	
		$this->table_users="tbl_users";
		/*-- LOCATION MODULE --*/
		$this->locid="loc_id";
		$this->locsts="loc_status";
		$this->tbl_locations="tbl_locations"; 
		/*--- COUNTRY TABLE ---*/
		$this->cntyid="id";
		$this->country="tbl_country";  
	}
	
	public function index()
	{
	    $content['country_code'] = $this->Register->get_country_code_by_id($this->country);
		$content['subview']='register/registerPage';
		$this->load->view('layout', $content);
	}

	public function signupCustomer()
	{
		$REQUESTMETHOD=$this->input->server('REQUEST_METHOD');
		if($REQUESTMETHOD=='POST'){			
			$cust_email=$this->input->post('email');
			$check =$this->Register->check_email($this->fld_email,$cust_email,$this->table_users); 
			if(empty($check)){		
				//$profile=$this->Login->profile_images_upload(); 	
			    $data=array(
					'usr_fname'=>$this->input->post('fname'),
					'usr_lname'=>$this->input->post('lname'),
					'usr_phone_code'=>$this->input->post('phonecode'),
					'usr_area_phone'=>$this->input->post('phonecode'),
					'usr_mobile'=>$this->input->post('phone'),
					'usr_email'=>$cust_email,
					'usr_password'=>md5($this->input->post('password')),
					'usr_status'=>'1',
					'usr_EmailVerifiedStatus'=>'1',	
					'usr_newsletter'=>$this->input->post('newsletter'),
					'usr_ipaddress'=>$this->input->post('ipaddress'),
					'usr_updated'=>date('Y-m-d H:i:s'),
					'usr_created'=>date('Y-m-d H:i:s')
				);
				$result =$this->Register->save($data, $this->table_users); 			
				// start email
    			if(!empty($cust_email)){
    			    $template=template(1);
        			if(!empty($template)){
            			$company=company_detail();				
            			$url=base_url("account/verify/")."". encode($cust_email);
            			$name=$this->input->post('fname').' '.$this->input->post('lname');
            			$token=array(
            				'Company_Logo'=>$company['Company_Logo'],
            				'website_url'=>$company['website_url'],
            				'social_media_icons'=>$company['social_media_icons'],
            				'website_name'=>$company['website_name'],
            				'user_full_name'=>$name,
            				'verification_url'=>$url,
            				'contact_us_url'=>$company['website_url']
            			 );
            			 $pattern = '{%s}';
            			foreach($token as $key=>$val){
            				$varMap[sprintf($pattern,$key)] = $val;
            			}			
                        $get_msg=strtr($template->tp_body,$varMap);
            		    $subject=strtr($template->tp_subject,$varMap);	
            // 			$to=$cust_email; 
            // 			email_send($to,$subject,$get_msg);
            
                        $from_email = "info@falconrewards.com";
            		    $to_email = $cust_email;
            		    $this->load->library('email');
            		    $config = array (
                          'mailtype' => 'html',
                          'charset'  => 'utf-8',
                          'priority' => '1'
                        );
                        $this->email->initialize($config);
            		    $this->email->from($from_email, "Falcon Rewards");
                        $this->email->to($to_email);
                        $this->email->subject($subject);
                        $this->email->message($get_msg);
                        $this->email->send();
            
        			}
			    }
			    // end email 
				if($result){
					echo'Success';
				}else{ 
					echo'Failed';
				}
			}else{
			 	echo'Used';
			}
		}
	}
		 
}
