<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tickets extends MY_Controller {
	 
	public function __construct() 
	{
        parent::__construct(); 
		$this->load->helper("common");	
		$this->login = $this->session->userdata('logged_in_admin');			
		if(empty($this->login)){
			redirect('login','refresh');
		}            		
        $this->load->model("Ticket_model",'Ticket');
       /* ========FOR MASTER TABEL=========== */ 			
        $this->fld_email="mst_email";	
        $this->fld_password="mst_password";	
        $this->table_master="tbl_master";	
         /* ========FOR CATEGORY TABEL=========== */ 			
        $this->table_category="tbl_property_category";
        /* ========FOR PRODUCT TABEL=========== */ 
        $this->p_id="p_id";
        $this->table_product="tbl_product";
        /* ========FOR REWARD TABEL=========== */ 
        $this->r_id="r_id";
        $this->table_reward="tbl_reward";
        /* ========FOR campaign TABEL=========== */ 
        $this->camp_id="id";
		$this->table_campaign="tbl_campaign";	
		/* ========FOR campaign TABEL=========== */ 
        $this->utktid="id";
        $this->tickets="tbl_ticket";
        /*--- Order Product Table ---*/
        $this->poid="op_id";
        $this->ptkt="pro_ticket";
        $this->porder="tbl_orders_product";
    }
 
	public function index() 
	{    	
        $content['admin']=admin_profile($this->login->mst_email);	     
        $content['tickets']= $this->Ticket->get_list($this->utktid,$this->tickets);
		$content['subview']="viewTicketsList";
		$this->load->view('layout', $content);
	}
	
	public function bycategory()
	{
	    $content['admin']=admin_profile($this->login->mst_email);
	    $content['category'] = $this->Ticket->cate_list($this->table_reward);	    
	    $content['subview']="tickets/byCategory";
		$this->load->view('layout', $content);
	}
	public function ticket_list() 
	{    	
        $content['admin']=admin_profile($this->login->mst_email);	     
        $content['tickets']= $this->Ticket->get_all_ticket_list($this->utktid,$this->tickets);
		$content['subview']="tickets/ticket";
		$this->load->view('layout2', $content);
	}
	
	public function ticketbycategory()
	{ 
	    //print_r($_POST);die;
	    
	    $categoryid = $this->input->post('r_category');
	    $tktvalue=$categoryid;
	   // if($categoryid=='4'){
	   //     $tktvalue="iPhone 11 Pro 256GB";
	   // }else if($categoryid=='6'){
	   //     $tktvalue="Win AED 2,500 Cash.";
	   // }
	   //$from = $this->input->post('from');
	   //$to = $this->input->post('to');
	   $donate = $this->input->post('donate');
	    
	    if(!empty($this->input->post('from') && !empty($this->input->post('to')))) { 
    	    $from=$this->input->post('from');
    	    $to=$this->input->post('to');
    		//$content['ordlist'] = $this->Orders->order_date_between($from,$to,$this->ordid,$this->orders);
    		$content['ticketsbycategory']= $this->Ticket->get_ticket_date_between_list($from,$to,$this->utktid,$this->ptkt,$donate,$tktvalue,$this->tickets);
	    }else{
	   	    $content['ticketsbycategory']= $this->Ticket->get_ticket_list($this->utktid,$this->ptkt,$donate,$tktvalue,$this->tickets);
	    }
	    
	    $content['admin']=admin_profile($this->login->mst_email);	
	    
	   // echo "<pre>";
	   // print_r($content['ticketsbycategory']);die;
	  
                
                // $emailsubject='Donate (Win AED 2,500 Cash)';
                // $toemail='manish.sandlus@gmail.com'; 
                // $emailmsg=$this->load->view('tickets/email/email_order',$content,true);
                // echo"<pre>";

                // print_r($emailmsg);
                // die;
                // $mailsend=email_send($toemail,$emailsubject,$emailmsg); 
                // $from_email = "no-reply@falconrewards.com";
                // $this->load->library('email');
                // $config = array (
                // 'mailtype' => 'html',
                // 'charset'  => 'utf-8',
                // 'priority' => '1'
                // );
                // $this->email->initialize($config);
                // $this->email->from($from_email, "Falcon Rewards");
                // $this->email->to($toemail);
                // $this->email->subject($emailsubject);
                // $this->email->message($emailmsg);
                // $this->email->send();
                /*====================End email send ===========*/
	    $content['subview']="tickets/categoryByTickets";
	    
		$this->load->view('layout2', $content);
	}
	
	public function badrequest()
	{
	    $content['admin']=admin_profile($this->login->mst_email);	 
	    $content['subview']="tickets/badrequest";
		$this->load->view('layout', $content);
	}
	
}
