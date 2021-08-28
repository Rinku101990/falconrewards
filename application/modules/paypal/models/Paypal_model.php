<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Paypal_model extends MY_Model {

	function __construct() {
		parent::__construct();
	}

	/* This function create new Service. */

	function create($ordid,$cust_id,$Total,$SubTotal,$Tax,$PaymentMethod,$PayerStatus,$PayerMail,$saleId,$CreateTime,$UpdateTime,$State) {
        $this->db->set('ord_id',$ordid);
        $this->db->set('cust_id',$cust_id);
         $this->db->set('txn_id',$saleId);
        $this->db->set('PaymentMethod',$PaymentMethod);
        $this->db->set('PayerStatus',$PayerStatus);
        $this->db->set('PayerMail',$PayerMail);
        $this->db->set('Total',$Total);
        $this->db->set('SubTotal',$SubTotal);
        $this->db->set('Tax',$Tax);
        $this->db->set('Payment_state',$State);
		$this->db->set('CreateTime',$CreateTime);
		$this->db->set('UpdateTime',$UpdateTime);
		$this->db->insert('payments');
		$id = $this->db->insert_id();
		return $id;
	}
	/* ==== UPDATE ORDER TABLE ==== */
	public function UpdateOrderInformation($productinfo,$orderUpdate,$table){

		$this->db->where('ord_reference_no',$productinfo); 
		$query=$this->db->update($table,$orderUpdate);
		//echo $this->db->last_query(); 
		if($query){
			return true;
		}else{
			return false; 
		} 

	}
	
	
	function SaveOrderInformation($orderArray,$table){
		 
		$query=$this->db->insert($table,$orderArray);
		if($query) return $this->db->insert_id();
		else return false;
	}
	
	function SaveOrderProduct($orderProducts,$table){
		 
		$query=$this->db->insert_batch($table,$orderProducts);
		if($query){
			return true;
		}else{
		   return false; 
		} 
	}

}