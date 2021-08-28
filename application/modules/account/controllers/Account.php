<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends MY_Controller {
	 
	public function __construct() {
		parent::__construct(); 
		$this->load->model("Account_model","Account");
		if(!empty($this->session->userdata('logged_in_users'))){
	    	$this->customer=customer($this->session->userdata('logged_in_users')->usr_id);
	    }
		//$this->load->helper("common");
		/*-- USERS TABLE --*/
		$this->usrid="usr_id";
		$this->fld_email="usr_email"; 
		$this->usrpass="usr_password";
		$this->usrsts="usr_status";
		$this->users="tbl_users";
		/*--- COUNTRY TABLE ---*/
		$this->cntyid="id";
		$this->country="tbl_country"; 
		/*--- PAYMENT TABLE ---*/
		$this->cstid="cust_id";
		$this->payments="tbl_payments"; 
		/*--- TICKET TABLE ---*/
		$this->tcstid="cust_id";
		$this->tickets="tbl_ticket"; 
    }
  
    public function dashboard()
	{
		$content['subview']='account/dashboard';
		$this->load->view('layout', $content);
	}

	// GET COUNTRY CODE //
    public function get_country_code(){
    	$countryid = $this->input->post('countries_id');
    	$result['country_code'] = $this->Account->get_country_code_by_id($countryid,$this->country);
    	if($result){
    		echo json_encode($result);
    	}
    }

	public function profile()
	{
		$content['country'] = $this->Account->getCountryList($this->cntyid, $this->country);
		$content['subview']='account/profile';
		$this->load->view('layout', $content);
	}

	public function update($id=null)
	{
		$mid = $this->customer->usr_id;
		$RequestMethod = $this->input->server('REQUEST_METHOD');
	    if($RequestMethod == "POST") {  	
		   	$data=array(
				'usr_fname'=>$this->input->post('f_name'),
			   	'usr_lname'=>$this->input->post('l_name'),
				'usr_gender'=> $this->input->post('gender'),
				'usr_married'=> $this->input->post('marriedstatus'),
				'usr_location'=> $this->input->post('residence'),
				'usr_nationality'=> $this->input->post('nationality'),
				'usr_area_phone'=> $this->input->post('phonecode'),
				'usr_mobile'=> $this->input->post('mobile'),
			   	'usr_newsletter'=>$this->input->post('newsletter'),
			   	'usr_updated'=>date('Y-m-d H:i:s') 
			);   
		   	$result = $this->Account->update($this->usrid,$mid,$data,$this->users);
		   	if($result){
			   $this->session->set_flashdata('msg',array('message' => 'Profile updated.','class' => 'success','type'=>'Ok!'));
			   redirect('account/profile'); 
		   	}else{
			   $this->session->set_flashdata('msg',array('message' => "Unable to update.Some error occurred.",'class' => 'danger','type'=>'Oops!'));
			   redirect('account/profile');  
		   	}
		    
		}
	}

	public function change_profile_picture()
	{ 
		if(!empty($_FILES['image_file']['name'])){
			$mid = $this->customer->usr_id;
			
			$this->load->library('upload');
			$config['upload_path'] = APPPATH.'../uploads/users/profile/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['file_name'] = date('YmdHms').'_'.rand(1,999999);
			$this->upload->initialize($config);
			
			$path=APPPATH.'../uploads/users/profile';
			$previmg=$this->input->post('prev_img');
			$prev_file= $path.'/'.$previmg;  
			if (!unlink($prev_file)) {} else { }
			
			if($this->upload->do_upload('image_file'))
			{
				$uploaded = $this->upload->data();
				$arr['usr_profile_photo'] = $uploaded['file_name'];
			} 
			$names=$arr['usr_profile_photo']; 
			$data=array(			  
			   'usr_profile_photo'=>$names,			 
			   'usr_updated'=>date('Y-m-d H:i:s') 
		   	);
		  // 	echo "<pre>";
		  // 	print_r($data);die;
		   	$result = $this->Account->update($this->usrid,$mid,$data,$this->users);
		   	if($result){
			   $this->session->set_flashdata('msg',array('message' => 'profile picture changed.','class' => 'success','type'=>'Ok!'));
			   redirect('account/profile'); 
		   	}else{
			   $this->session->set_flashdata('msg',array('message' => "Unable to update.Some error occurred.",'class' => 'danger','type'=>'Oops!'));
			   redirect('account/profile');  
		   	}
		}				
	}
	
	public function payment()
	{  
	    $mid = $this->customer->usr_id;
	    $content['payments'] = $this->Account->get_payment_list($this->cstid,$mid,$this->payments);
	    //print_r($content['payments']);die;
    	$content['subview']='account/payment';
		$this->load->view('layout', $content);
	}


	public function change_password()
	{
		$content['subview']='account/changePassword';
		$this->load->view('layout', $content);
	}

	public function password()
	{  
		$RequestMethod = $this->input->server('REQUEST_METHOD');
	    if($RequestMethod == "POST") {
		   $cust_id=$this->customer->usr_id; 
		   $password=md5($this->input->post('old_password'));
		   $user_password=$this->Account->check_password($this->usrid,$cust_id,$this->usrpass,$password,$this->users);	
		   	if($user_password){
			   $data=array('usr_password'=>md5($this->input->post('new_password'))); 
			   $result = $this->Account->update($this->usrid,$cust_id,$data,$this->users);
			    // start email
				// if(!empty($this->customer->cust_email)){
				// 	$template=template(3);
				// 	if(!empty($template)){
				// 		$company=company_detail();				
				// 		$login_url=base_url();
				// 		$name=$this->customer->cust_fname.' '.$this->customer->cust_lname;
				// 		$token=array(
				// 			'Company_Logo'=>$company['Company_Logo'],
				// 			'website_url'=>$company['website_url'],
				// 			'social_media_icons'=>$company['social_media_icons'],
				// 			'website_name'=>$company['website_name'],
				// 			'user_full_name'=>$name,
				// 			'new_password'=>$this->input->post('new_password'),
				// 			'login_link'=>$login_url,
				// 			'contact_us_url'=>$company['website_url'],
				// 			'contact_us_email'=>$company['contact_us_email']
				// 		);
				// 		$pattern = '{%s}';
				// 		foreach($token as $key=>$val){
				// 			$varMap[sprintf($pattern,$key)] = $val;
				// 		}			
			    //         $get_msg=strtr($template->tp_body,$varMap);
				// 	    $subject=strtr($template->tp_subject,$varMap);	
				// 		$to=$this->customer->cust_email;
				// 		email_send($to,$subject,$get_msg);
				// 	}
				// }
				// end email 	
			   if($result){
				   echo'success';
			   }else{
				  echo "Failed";
			   }
		    }else{ 
		    	echo'NotMach';   
			} 
		}
	}

	public function active_tickets()
	{
	    $mid = $this->customer->usr_id;
	    $content['tickets'] = $this->Account->get_tickets_list($this->tcstid,$mid,$this->tickets);
		$content['subview'] = 'account/activeTickets';
		$this->load->view('layout', $content);
	}
	
	public function verify()
	{
		$cust_email=decode($this->uri->segment(3));
		$check =$this->Account->check_email($this->fld_email,$cust_email,$this->users);	
        
		if($check->usr_EmailVerifiedStatus=='1'){	
		if(!empty($check)){	
		$data=array(
		    'usr_status'=>'0',
			'usr_EmailVerifiedStatus'=>'0',			
			'usr_updated'=>date('Y-m-d H:i:s')
		); 

      // start email
			if(!empty($cust_email)){
			$template=template(8);
			if(!empty($template)){
			$company=company_detail();		
			 $token=array(
				'Company_Logo'=>$company['Company_Logo'],
				'website_url'=>$company['website_url'],
				'social_media_icons'=>$company['social_media_icons'],
				'website_name'=>$company['website_name'],
				'user_full_name'=>$check->usr_fname.' '.$check->usr_lname,			
				'contact_us_url'=>$company['website_url'],
				'contact_us_email'=>$company['contact_us_email']
			 );
			 $pattern = '{%s}';
			foreach($token as $key=>$val){
				$varMap[sprintf($pattern,$key)] = $val;
			}			
            $get_msg=strtr($template->tp_body,$varMap);
		    $subject=strtr($template->tp_subject,$varMap);
		    
// 			$to=$cust_email;             		
// 			email_send($to,$subject,$get_msg);

            $from_email = "no-reply@falconrewards.com";
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
		$result=$this->Account->update($this->fld_email,$cust_email,$data,$this->users);
		
        if($result){
			 $this->session->set_flashdata('msg',array('message' => 'Your email has been successfully verified ','class' => 'success','type'=>'Success!','icon'=>'thumbs-up'));
				redirect('login');
			}else{
			 $this->session->set_flashdata('msg',array('message' => 'Unable to Remove.Some error occurred.','class' => 'danger','type'=>'Oops!','icon'=>'slash'));
				redirect('register');  
			} 
		}else{
		redirect('home'); 	
		} 
		}
        else{
	 $this->session->set_flashdata('msg',array('message' => 'Your email already verified !','class' => 'danger','type'=>'Oops!','icon'=>'slash'));
				redirect('login');  
		} 		
		
	}
	
	 public function currency()
	{  
		$url=$this->input->post('currenturl');
		$data=array('web_currency'=>$this->input->post('web_currency'));       
		$result=$this->Account->update('web_id','1',$data,'tbl_website_info');
		redirect($url);
	}
	
   


	public function logout()
	{  
	   	$this->login = $this->session->userdata('logged_in_users');
		$this->session->unset_userdata('logged_in_users');
		redirect('/');
	}


}
