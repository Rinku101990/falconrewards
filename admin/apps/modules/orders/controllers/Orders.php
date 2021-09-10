<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends MY_Controller {
	 
	public function __construct() {
		parent::__construct(); 
		$this->load->helper("common");	
		$this->login = $this->session->userdata('logged_in_admin');			
		if(empty($this->login)){
			redirect('login','refresh');
		} 	
		$this->load->model("Orders_model",'Orders');

		// TABLE ORDER TABLE //
		$this->ordid="ord_id";
		$this->ordcstid="cust_id";
		$this->orders="tbl_orders";
		// FOR ORDER PRODUCT TABLE //
		$this->ordProid="op_id";
		$this->ordProducts="tbl_orders_product";
	}
	
	/*--- CUSTOMER ORDER LIST ---*/ 
	public function index()
	{
		$content['admin']=admin_profile($this->login->mst_email);
		$RequestMethod = $this->input->server('REQUEST_METHOD');
	    if(!empty($this->input->post('status'))) { 
    	    $status=$this->input->post('status');
    		$content['ordlist'] = $this->Orders->get_all_order($status,$this->ordid,$this->orders);
	    }else if(!empty($this->input->post('from') && !empty($this->input->post('to')))) { 
    	    $from=$this->input->post('from');
    	    $to=$this->input->post('to');
    		$content['ordlist'] = $this->Orders->order_date_between($from,$to,$this->ordid,$this->orders);
	    }else{
	   	    $content['ordlist'] = $this->Orders->get_all_orders($this->ordid,$this->orders);
	    }
// 		echo "<pre>";
// 		print_r($content['ordlist']);die;
		$content['subview']="orders/orders_list";
		$this->load->view('layout2', $content);
	}

	public function invoice($incvid=null)
	{	
		$content['ordInfo'] = $this->Orders->get_order_info($this->ordid,$incvid,$this->orders);
		if(!empty($content['ordInfo'])){
			$content['admin']=admin_profile($this->login->mst_email);
			$content['ordPro'] = $this->Orders->get_order_product($this->ordid,$incvid,$this->ordProducts);
			$content['subview']="orders/order_invoice";
			$this->load->view('layout', $content);
		}else{
			redirect('orders/badrequest');
		}
	}

	public function update($ordid=null,$action=null)
	{
		if(isset($ordid) && isset($action)){
			$uordid = $ordid;
			$status = array(
				'order_status'=>decode($action)
			);
			$updateStatus = $this->Orders->update_order_status($this->ordid,$uordid,$status,$this->orders);
			if($updateStatus){
				redirect('orders/invoice/'.$ordid);	
			}else{
				redirect('orders/invoice/'.$ordid);
			}
		}else{
			redirect('orders/badrequest');
		}
	}

	/*--- SELLERS ORDER LIST ---*/ 

	public function seller_orders()
	{
		$content['admin']=admin_profile($this->login->mst_email);
		$content['subview']="orders/seller_orders";
		$this->load->view('layout', $content);	
	}

	public function withdrawal()
	{
		$content['admin']=admin_profile($this->login->mst_email);
		$content['subview']="orders/withdrawal_request";
		$this->load->view('layout', $content);	
	}

	/*--- CUSTOMERS ORDER CANCELLATION ---*/ 
	public function cancellation()
	{
		$content['admin']=admin_profile($this->login->mst_email);
		$content['subview']="orders/cancellation_requests";
		$this->load->view('layout', $content);	
	}

	/*--- CUSTOMERS ORDER RETURN REQUEST ---*/ 
	public function returns()
	{
		$content['admin']=admin_profile($this->login->mst_email);
		$content['subview']="orders/return_requests";
		$this->load->view('layout', $content);	
	}
	
	/*--- UNAUTHRIZE ACCESS ---*/
	public function badrequest()
	{
		$content['admin']=admin_profile($this->login->mst_email);
		$content['subview']="orders/badrequest";
		$this->load->view('layout', $content);
	}
	
	
}
