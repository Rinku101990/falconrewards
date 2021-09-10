<?php 
class Orders_model extends MY_Model{
	
	public function get_all_orders($ordid,$table)
	{
		$this->db->select('cust.usr_fname,cust.usr_lname,cust.usr_email,cust.usr_mobile,pmt.transaction_status,ord.*');
		$this->db->join('tbl_users cust','ord.cust_id=cust.usr_id','LEFT');
		$this->db->join('tbl_payments pmt','ord.ord_reference_no=pmt.ord_id','LEFT');
		$this->db->order_by('ord.'.$ordid, 'DESC');
		$query = $this->db->get($table.' ord');
		//echo $this->db->last_query();
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
	public function get_all_order($status,$ordid,$table)
	{
		$this->db->select('cust.usr_fname,cust.usr_lname,cust.usr_email,cust.usr_mobile,pmt.transaction_status,ord.*');
		$this->db->join('tbl_users cust','ord.cust_id=cust.usr_id','LEFT');
		$this->db->join('tbl_payments pmt','ord.ord_reference_no=pmt.ord_id','LEFT');
		$this->db->order_by('ord.'.$ordid, 'DESC');
		$this->db->where('ord.order_status', $status);
		$query = $this->db->get($table.' ord');
// 		echo $this->db->last_query();
// 		die;
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function order_date_between($from,$to,$ordid,$table)
	{
		$this->db->select('cust.usr_fname,cust.usr_lname,cust.usr_email,cust.usr_mobile,pmt.transaction_status,ord.*');
		$this->db->join('tbl_users cust','ord.cust_id=cust.usr_id','LEFT');
		$this->db->join('tbl_payments pmt','ord.ord_reference_no=pmt.ord_id','LEFT');
		$this->db->order_by('ord.'.$ordid, 'DESC');
		$this->db->where('ord.ord_created >=', $from);
		$this->db->where('ord.ord_created <=', $to);
		$query = $this->db->get($table.' ord');
		// echo $this->db->last_query();
		// die;
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function get_order_info($ordid,$incvid,$table)
	{
		//$this->db->select('ship.shippingFirstName,ship.shippingLastName,ship.shippingNumber,ship.shippingEmail,ship.shippingAddress,ord.*');
		//$this->db->join('tbl_shipping_address ship','ord.ord_delivery_address=ship.fld_id','LEFT');
		$this->db->where($ordid, $incvid);
		$this->db->order_by($ordid, 'DESC');
		$query = $this->db->get($table.' ord');
		//echo $this->db->last_query();
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
		else
		{
			return false;
		}
	}

	public function get_order_product($ordid,$incvid,$table)
	{
		$this->db->select('*');
		$this->db->where($ordid, $incvid);
		$query = $this->db->get($table);
		//echo $this->db->last_query();
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function update_order_status($ordid, $uordid, $status, $table)
	{
		$this->db->where($ordid, $uordid);
        $query=$this->db->update($table, $status);
        if($query){
			return true;
		}else{
			return false;
		}
	}
	
}