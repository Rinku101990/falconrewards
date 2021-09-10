<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	 
	public function __construct()
	{
        parent::__construct(); 
		$this->load->helper("common");	
		$this->login = $this->session->userdata('logged_in_admin');			
		if(empty($this->login)){
			redirect('login','refresh');
		}  	
        $this->load->model("User_model",'User_Model');	
       	/* ========FOR MASTER TABEL=========== */ 			
        $this->fld_cid="usr_id";	
        $this->fld_csts="usr_status";	
        $this->customers="tbl_users";
        /* ========FOR VENDORS TABEL=========== */ 			
        $this->fld_vid="vnd_id";	
        $this->fld_vsts="vnd_status";	
        $this->vendors="tbl_vendor";
        /*--- FOR VENDOR PRODUCTS LIST ---*/
        $this->fld_opid="op_id";
        $this->fld_oid="ord_id";
        $this->fld_pid="pro_id";	
        $this->fld_vndsts="ord_vendors";	
        $this->ordproducts="tbl_orders_product";
    }
 
    public function index()
    {
        $content['admin']=admin_profile($this->login->mst_email);
        $content['customers'] = $this->User_Model->get_customer_list($this->fld_cid,$this->customers);	      
		$content['subview']="user";
		$this->load->view('layout2', $content);   
	}
	
	public function mail()
    {
        $content['admin']=admin_profile($this->login->mst_email);
        $content['customers'] = $this->User_Model->get_customer_list($this->fld_cid,$this->customers);	  
         $RequestMethod = $this->input->server('REQUEST_METHOD');
	    if($RequestMethod == "POST") { 
	    	if(!empty($this->input->post('user'))){	
	    	$email=$this->input->post('user');
	    	
	    if(count($email) <= 100){
	    	foreach ($email as $value) {
	        // start email								
            $get_msg=$this->load->view('user/email/template','',true);
		    $subject=$this->input->post('subject');
            $from_email = "no-reply@falconrewards.com";
		    $to_email = $value;
		    $this->load->library('email');
		    $config = array (
              'mailtype' => 'html',
              'charset'  => 'utf-8',
              'priority' => '1'
            );
            // echo"<pre>";
            // print_r($get_msg);
            // print_r($subject);
            // print_r($to_email);
            // die;
            $this->email->initialize($config);
		    $this->email->from($from_email, "Falcon Rewards");
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($get_msg);
            $this->email->send();			
			// end email
            }			
			   $this->session->set_flashdata('msg',array('message' => 'email has been successfully sent.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
			   redirect('user/mail'); 
		   }else{
			   $this->session->set_flashdata('msg',array('message' => "maximum 100 email id .",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			    redirect('user/mail');   
		   }
		}else{
			$this->session->set_flashdata('msg',array('message' => "emial is invalid .",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			 redirect('user/mail'); 
				}
		
			
	    }    
		$content['subview']="user_mail";
		$this->load->view('layout', $content);   
	}	
	
	
	public function custom()
    {
        $content['admin']=admin_profile($this->login->mst_email);
        $content['customers'] = $this->User_Model->get_customer_list($this->fld_cid,$this->customers);	  
         $RequestMethod = $this->input->server('REQUEST_METHOD');
	    if($RequestMethod == "POST") { 
	    	if(!empty($this->input->post('user'))){	
	    	$email=$this->input->post('user');
	    	$subject=$this->input->post('subject');
	    	$msg_detail=$this->input->post('msg',true);
	   // 	print_r($email);
	   // 	die;
	    	
	    if(count($email) <= 100){
	    	foreach ($email as $value) {
	        // start email								
            $get_msg=$msg_detail;
		    $subject=$subject;
            $from_email = "info@falconrewards.com";
		    $to_email = $value;
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
			// end email
            }			
			   $this->session->set_flashdata('msg',array('message' => 'email has been successfully sent.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
			   redirect('user/custom'); 
		   }else{
			   $this->session->set_flashdata('msg',array('message' => "maximum 100 email id .",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			    redirect('user/custom');   
		   }
		}else{
			$this->session->set_flashdata('msg',array('message' => "emial is invalid .",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			 redirect('user/custom'); 
				}
		
			
	    }    
		$content['subview']="custom_mail";
		$this->load->view('layout', $content);   
	}	
	
	public function profile($id=null)
	{
		$content['profile'] = $this->User_Model->get_customer_profile($this->fld_cid,$id,$this->customers);
		if(!empty($content['profile'])){
			$content['admin']=admin_profile($this->login->mst_email);	 
			$content['subview']="customerProfile";
			$this->load->view('layout', $content);
		}else{
			$content['admin']=admin_profile($this->login->mst_email);	 
			$content['subview']="badrequest";
			$this->load->view('layout', $content);
		}	
	}

	public function custUpdate($custid=null,$custStatus=null)
	{
		if(isset($custid) && isset($custStatus)){
			$cstid = decode($custid);
			$cstSts = array(
				'usr_status'=>decode($custStatus),
				'usr_EmailVerifiedStatus'=>decode($custStatus)
			);
			$updateStatus = $this->User_Model->update_customer_account($this->fld_cid,$cstid,$cstSts,$this->customers);
			if($updateStatus){
				redirect('user/profile/'.$cstid);
			}else{
				redirect('user/profile/'.$cstid);
			}
		}else{
			redirect('user');
		}
	}

	public function profile_edit(){
		$content['admin']=admin_profile($this->login->mst_email);
        $RequestMethod = $this->input->server('REQUEST_METHOD');
	    if($RequestMethod == "POST") { 			
		   	$data=array(
			   'mst_ref_id'=>$this->input->post('mst_ref_id'),			  
			   'mst_name'=>$this->input->post('mst_name'),
			   'mst_mobile_number'=>$this->input->post('mst_mobile_number'),
			   'mst_address'=>$this->input->post('mst_address'),
			   'mst_about'=>$this->input->post('mst_about'), 
			   'mst_updated'=>date('Y-m-d H:i:s') 
		   	);  
		     
		   $result = $this->Dashboard_Model->update($this->fld_email,$this->login->mst_email,$data,$this->table_master);
		   if($result){
			   $this->session->set_flashdata('msg',array('message' => 'Profile has been successfully Update.','class' => 'success','type'=>'Ok!'));
			   redirect('dashboard/profile-edit'); 
		   }else{
			   $this->session->set_flashdata('msg',array('message' => "Unable to Change Password.Some error occurred.",'class' => 'danger','type'=>'Oops!'));
			   redirect('dashboard/profile-edit');  
		   }
		    
		}			 
		$content['subview']="profile_edit";
		$this->load->view('layout', $content);
	}
	 
	public function change_password() {
		
	   $RequestMethod = $this->input->server('REQUEST_METHOD');
	    if($RequestMethod == "POST") {
		   $email=$this->login->mst_email; 
		   $password=md5($this->input->post('old_password'));
		   $user_password=$this->Dashboard_Model->check_password($this->fld_email,$this->fld_password,$email,$password,$this->table_master);
		   if($user_password){
			   
			   $data=array($this->fld_password=>md5($this->input->post('password'))); 
			   $result = $this->Dashboard_Model->update($this->fld_email,$email,$data,$this->table_master);
			   if($result){
				   $this->session->set_flashdata('p_msg',array('message' => 'Password has been successfully changed.','class' => 'success','type'=>'Ok!'));
				   redirect('dashboard/profile-edit'); 
			   }else{
				   $this->session->set_flashdata('p_msg',array('message' => "Unable to Change Password.Some error occurred.",'class' => 'danger','type'=>'Oops!'));
				   redirect('dashboard/profile-edit');  
			   }
		    }else{
			   $this->session->set_flashdata('p_msg',array('message' => "Old Password doesn't match Password",'class' => 'danger','type'=>'Oops!'));
				redirect('dashboard/profile-edit');  
		    } 
		}				  	  
	}
	
	public function profile_image(){ 
		$RequestMethod = $this->input->server('REQUEST_METHOD');
	    if($RequestMethod == "POST") {  
		
			$profile_info=admin_profile($this->login->mst_email);  
		  
			  $path=FCPATH . 'uploads/profile';
				$image_name='mst_picture';
				$img_files= $path.'/'.$profile_info->mst_picture;  
				if (!unlink($img_files)) {} else { }
				$image_data=$this->Dashboard_Model->images_upload($image_name,$path);
			
		   	$data=array(			  
			   'mst_picture'=>$image_data,			 
			   'mst_updated'=>date('Y-m-d H:i:s') 
		   	); 
		     
		   $result = $this->Dashboard_Model->update($this->fld_email,$profile_info->mst_email,$data,$this->table_master);
		   redirect('dashboard/profile'); 
		 
		    
		}				
	}

	/*--- Vendors Activities ---*/
	public function vendors()
	{
		$content['admin']=admin_profile($this->login->mst_email);
        $content['vendors'] = $this->User_Model->get_vendor_list($this->fld_vid,$this->vendors);	      
		$content['subview']="user/vendors_list";
		$this->load->view('layout', $content); 
	}

	public function vndUpdate($vndid=null,$vndStatus=null)
	{
		if(isset($vndid) && isset($vndStatus)){
			$vndrid = decode($vndid);
			$vndrSts = array(
				'vnd_status'=>decode($vndStatus)
			);
			$updateStatus = $this->User_Model->update_vendor_account($this->fld_vid,$vndrid,$vndrSts,$this->vendors);
			if($updateStatus){
				redirect('user/seller/'.$vndid);
			}else{
				redirect('user/seller/'.$vndid);
			}
		}else{
			redirect('user/vendors');
		}
	}

	public function seller($vndrsid=null)
	{
		if(isset($vndrsid)){
			$vndrid = decode($vndrsid);
			$content['vender'] = $this->User_Model->get_vendor_profile($this->fld_vid,$vndrid,$this->vendors);
			$content['myOrders'] = $this->User_Model->get_ordered_products($this->fld_vndsts,$vndrid,$this->ordproducts); 	 
			if(!empty($content['vender'])){
				$content['admin']=admin_profile($this->login->mst_email);	 
				$content['subview']="user/vendorProfile";
				$this->load->view('layout', $content);
			}else{
				$content['admin']=admin_profile($this->login->mst_email);	 
				$content['subview']="badrequest";
				$this->load->view('layout', $content);
			}
		}else{
			$content['admin']=admin_profile($this->login->mst_email);	 
			$content['subview']="badrequest";
			$this->load->view('layout', $content);
		}	
	}

	public function myProductOrders()
	{
		$content['admin']=admin_profile($this->login->mst_email);
		$vndrid = "0";
		$content['myOrders'] = $this->User_Model->get_ordered_products($this->fld_vndsts,$vndrid,$this->ordproducts); 	 
		$content['subview']="user/myProductOrders";
		$this->load->view('layout', $content);
	}


    public function send()
    {
       // $content['admin']=admin_profile($this->login->mst_email);
      $content['customers'] = $this->User_Model->customer_list($this->fld_cid,$this->customers);	  
        // echo"<pre>";
        // print_r($content['customers']);
        // die;
    //      $RequestMethod = $this->input->server('REQUEST_METHOD');
	   // if($RequestMethod == "POST") { 
	   // 	if(!empty($this->input->post('user'))){	
	   // 	$email=$this->input->post('user');
	    //	
	   // if(count($email) <= 100){
	// $email=array('manish.sandlus@gmail.com','dubeyneelam042@gmail.com','chiragjangla123@gmail.com','falconrewards@outlook.com');
	// ,'chiragjangla123@gmail.com','falconrewards@outlook.com'
    //	$email=array('manish.sandlus@gmail.com','manishkumar95360@gmail.com');
	  
	    	foreach ($content['customers'] as $value) {
	        // start email							
	        //echo  $to_email = $value;
            $get_msg=$this->load->view('user/email/test','',true);
            //$get_msg='HELLO';
            // echo"<pre>";
            // print_r($get_msg);
            // die;
          // $get_msg='Hello';
		    $subject='WIN SONY PLAYSTATION 5 !!';
            $from_email = "info@falconrewards.com";
		    $to_email = $value->usr_email;
		  // $to_email = $value;
		    $this->load->library('email');
		    $config = array (
             'charset'=>'utf-8',
                'mailtype' => 'html',
               'priority' => '1'
            );
            $this->email->initialize($config);
		    $this->email->from($from_email, "Falcon Rewards");
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($get_msg);
            $result=$this->email->send();	
	    	}
            if($result){
                echo'true';
            }else{
                echo'false';
            }
			// end email
            //}			
// 			   $this->session->set_flashdata('msg',array('message' => 'email has been successfully sent.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
// 			   redirect('user/mail'); 
// 		   }else{
// 			   $this->session->set_flashdata('msg',array('message' => "maximum 100 email id .",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
// 			    redirect('user/mail');   
// 		   }
// 		}else{
// 			$this->session->set_flashdata('msg',array('message' => "emial is invalid .",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
// 			 redirect('user/mail'); 
// 				}
		
			
// 	    }    
// 		$content['subview']="user_mail";
// 		$this->load->view('layout', $content);   
	}	
	/*--- End Of the Vendors Activities ---*/ 
	
	public function badrequest()
	{ 
		$content['subview']="dashboard/badrequest";
		$this->load->view('layout', $content);
	}
			
	
}
