<?php 
class Ticket_model extends MY_Model{
	
	  
	function get_list($fld_id,$table)
	{	
		$this->db->select('tkt.*,ord.ord_reference_no');
		$this->db->join('tbl_orders ord','ord.ord_id=tkt.odrer_id AND ord.cust_id=tkt.cust_id','LEFT');
		$this->db->order_by('tkt.id',"DESC");
		$this->db->where('ord.order_status!=',"Waiting");
		$this->db->where('tkt.status','0');
	    $query=$this->db->get($table.' tkt');
	   // $this->db->last_query($query);
	    if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
  		}	
	}
	
    function get_all_ticket_list($fld_id,$table)
	{	
		$this->db->select('tkt.*,ord.ord_reference_no,usr.usr_fname,usr.usr_lname');
		$this->db->join('tbl_orders ord','ord.ord_id=tkt.odrer_id AND ord.cust_id=tkt.cust_id','LEFT');
		$this->db->join('tbl_users usr','ord.cust_id=usr.usr_id','LEFT');
		$this->db->where('ord.order_status!=',"Waiting");
		$this->db->where('tkt.price',"Win AED 2,500 Cash.");
		//	$this->db->where('tkt.price',"iPhone 11 Pro 256GB");
	    $query=$this->db->get($table.' tkt');
	   // echo$this->db->last_query($query);
	   // die;
	    if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
  		}	
	}
	
	function get_ticket_list($fldid,$ptkt,$donate,$tktvalue,$table)
	{	
		$this->db->select('tkt.*,ord.ord_reference_no,ptkt.pro_ticket,usr.usr_fname,usr.usr_lname');
		$this->db->join('tbl_orders ord','ord.ord_id=tkt.odrer_id AND ord.cust_id=tkt.cust_id','LEFT');
		if($donate==1){
    		$this->db->join('tbl_orders_product ptkt','ord.ord_id=ptkt.ord_id AND ptkt.pro_ticket=ptkt.pro_qty','LEFT');
		}else{
		    $this->db->join('tbl_orders_product ptkt','ord.ord_id=ptkt.ord_id AND ptkt.pro_ticket!=1','LEFT');
		}
	//	$this->db->distinct('`tkt`.`ticket_no`');
		$this->db->join('tbl_users usr','ord.cust_id=usr.usr_id','LEFT');
		$this->db->order_by('tkt.created',"DESC");
		$this->db->group_by('`tkt`.`ticket_no`');
		$this->db->where('ord.order_status!=',"Waiting");
		$this->db->where('ptkt.pro_ticket IS NOT NULL');
		$this->db->where('tkt.price=', $tktvalue);
	    $query=$this->db->get($table.' tkt');
	    //echo $this->db->last_query($query);
	    if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
  		}	
	}
	
	function get_ticket_date_between_list($from,$to,$fldid,$ptkt,$donate,$tktvalue,$table)
	{	
		$this->db->select(' tkt.*,ord.ord_reference_no,ptkt.pro_ticket,usr.usr_fname,usr.usr_lname');
		$this->db->join('tbl_orders ord','ord.ord_id=tkt.odrer_id AND ord.cust_id=tkt.cust_id','LEFT');
		if($donate==1){
    		$this->db->join('tbl_orders_product ptkt','ord.ord_id=ptkt.ord_id AND ptkt.pro_ticket=ptkt.pro_qty','LEFT');
		}else{
		    $this->db->join('tbl_orders_product ptkt','ord.ord_id=ptkt.ord_id AND ptkt.pro_ticket!=1','LEFT');		}
			
		$this->db->join('tbl_users usr','ord.cust_id=usr.usr_id','LEFT');
		$this->db->order_by('tkt.created',"DESC");
		$this->db->group_by('`tkt`.`ticket_no`');
		$this->db->where('ord.order_status!=',"Waiting");
		$this->db->where('ptkt.pro_ticket IS NOT NULL');
		$this->db->where('tkt.price=', $tktvalue);
		$this->db->where('tkt.created >=', $from);
		$this->db->where('tkt.created <=', $to);
	    $query=$this->db->get($table.' tkt');
	   // echo $this->db->last_query($query);
	   // die;
	    if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
  		}	
	}
	
	function cate_list($table)
	{	
		$this->db->select('r_id,r_price');
 		$this->db->order_by('r_id',"asc");
		$this->db->where('r_status',"0");
		$query=$this->db->get($table);
		if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
		}
	}

		
}