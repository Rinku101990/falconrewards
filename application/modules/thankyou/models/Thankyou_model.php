<?php 
class Thankyou_model extends MY_Model{

    public function UpdateOrderInformation($refid,$refOrdId,$orderUpdate,$table){
		$this->db->where($refid,$refOrdId); 
		$query=$this->db->update($table,$orderUpdate); 
		if($query){
			return true;
		}else{
			return false; 
		} 
	}
	
	public function get_ticket_list($mainId){
		$this->db->where('odrer_id', $mainId);
		$query=$this->db->get('tbl_ticket');
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}
	
	public function get_orderInfo($ordRefNo,$table){
	    $this->db->select('ord_id,ord_reference_no');
	    $this->db->where('ord_reference_no',$ordRefNo);
		$query=$this->db->get($table);
		if($query->num_rows() ==''){
			  return '';
		}else{
			  return $query->row();
		}
	}
	
	public function savePaymentInformation($paymentUpdate,$table)
    {
        $this->db->insert($table , $paymentUpdate);
        return $this->db->insert_id();
    }
    
    //EMAIL FOR COD ORDER//
	function get_complete_list($ord_id){
		$this->db->select('tod.*,tc.usr_fname,tc.usr_lname');
		$this->db->join('tbl_users tc','tc.usr_id = tod.cust_id','LEFT');
		$this->db->from('tbl_orders tod');
		$this->db->where('tod.ord_reference_no='.$ord_id.'');
		$query=$this->db->get();
		if($query->num_rows() != 0) return $query->row();
		else return false;
	}
	
		
	function get_order_product_list($mainId){
		
		$this->db->select('pdn.*,top.*');
		$this->db->from('tbl_orders_product top');
		$this->db->join('tbl_product pdn','pdn.p_id = top.pro_id','LEFT');
		$this->db->where('top.ord_id='.$mainId.'');
		$query=$this->db->get();
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}
    
}