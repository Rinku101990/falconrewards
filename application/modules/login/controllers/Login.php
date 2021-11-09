<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	 
	public function __construct() {
		parent::__construct(); 
		$this->load->model("Login_model",'Login');		
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
	}
	
	public function index()
	{
		$content['subview']='login/loginPage';
		$this->load->view('layout', $content);
	}

	// IN USE FOR LOGIN
	public function check()
	{   
		$REQUESTMETHOD=$this->input->server('REQUEST_METHOD');
		if($REQUESTMETHOD=='POST'){			
			$useremail=$this->input->post('email');
			$userpassword=md5($this->input->post('password'));
		    $email = $this->security->xss_clean($useremail);	
		    $password = $this->security->xss_clean($userpassword);	
			if(!empty($email) || !empty($password)){
				$result =$this->Login->login($email, $password,$this->table_users); 
				if($result) {
				  	if($result->usr_status==0){
				  		$this->session->set_userdata('logged_in_users',$result);
						echo'success';
					}else{
					 	echo'Active';
					}
				}else{
				   echo'Failed';
				}			
			}else{
                echo'Failed';
			} 	
		}
	}
		 
	public function forgot(){
		$content['subview']='login/forgot';
		$this->load->view('layout', $content);
	}

	public function forgot_password() 
	{	   
			
	    $REQUESTMETHOD=$this->input->server('REQUEST_METHOD');
		if($REQUESTMETHOD=='POST'){	
  
			$useremail=$this->input->post('email'); 
			$email = $this->security->xss_clean($useremail);
			$check_email =$this->Login->check_email($this->fld_email,$email,$this->table_users);
			if($check_email){
				$password=rand(100000,1000000);
				$data=array($this->fld_password=>md5($password)); 
				$result = $this->Login->update($this->fld_email,$email,$data,$this->table_users);
				
				// start email
				if(!empty($email)){
					$template=template(4);
					if(!empty($template)){
						$company=company_detail();				
						$login_url=base_url();
						$token=array(
							'Company_Logo'=>$company['Company_Logo'],
							'website_url'=>$company['website_url'],
							'social_media_icons'=>$company['social_media_icons'],
							'website_name'=>$company['website_name'],
							'user_full_name'=>$check_email->usr_fname.' '.$check_email->usr_lname,
							'new_password'=>$password,
							'login_link'=>$login_url,
							'contact_us_url'=>$company['website_url'],
							'contact_us_email'=>$company['contact_us_email']
						);
						$pattern = '{%s}';
						foreach($token as $key=>$val){
							$varMap[sprintf($pattern,$key)] = $val;
						}			
						$get_msg=strtr($template->tp_body,$varMap);
						$subject=strtr($template->tp_subject,$varMap);
						
						// $to=$email;
						// email_send($to,$subject,$get_msg);
						//print_r($get_msg);die;

						$from_email = "info@falconrewards.com";
						$to_email = $useremail;
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
					echo'success';
				}else{
					echo'Failed';
				}  
			}else{
		    	echo'Wrong';
			}
		}
	     
	   

	}
	
	public function account_verified(){
		$content['subview']='login/account_verified';
		$this->load->view('layout', $content);
	}
	
	public function send() {	   
			
	    $REQUESTMETHOD=$this->input->server('REQUEST_METHOD');
		if($REQUESTMETHOD=='POST'){	
  
		$useremail=$this->input->post('email'); 
		$email = $this->security->xss_clean($useremail);
		$check_email =$this->Login->check_email($this->fld_email,$email,$this->table_users);
		if($check_email){
			   // start email
			if(!empty($email)){
		 $template=template(1);
        			if(!empty($template)){
            			$company=company_detail();				
            			$url=base_url("account/verify/")."". encode($email);
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
		    
// 			$to=$email;
// 			email_send($to,$subject,$get_msg);

            $from_email = "info@falconrewards.com";
		    $to_email = $email;
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
           $result=$this->email->send();
           	if($result){
			  echo'success';
			}else{
			   echo'Failed';
			}  	

			}
			}
			
		// end email 	
			
		
				
			}else{
		    echo'Wrong';
			}
		}
	     
	   

	}
	
	
  public function account_send() {	   
	    
		$cust_email =$this->Login->get_cust_list($this->table_users);
// 		echo"<pre>";
// 		print_r($cust_email);
// 		die;
		foreach($cust_email as $cust_val){
	$email=$cust_val->usr_email;
			   // start email
			if(!empty($email)){
		 $template=template(1);
        			if(!empty($template)){
            			$company=company_detail();				
            			$url=base_url("account/verify/")."". encode($email);
            			$name=$cust_val->usr_fname .' '.$cust_val->usr_lname;
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
		    
// 			$to=$email;
// 			email_send($to,$subject,$get_msg);

            $from_email = "info@falconrewards.com";
		    $to_email = $email;
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
           $result=$this->email->send();
           	if($result){
			  echo'success';
			}else{
			   echo'Failed';
			}  	

			}
			}
			}

	}
		 
}

