<?php
class MY_Model extends CI_Model {	

	function get_website($fld_id,$table)
	{
		$this->db->order_by($fld_id,"desc");
		$this->db->limit(1);	
		$query=$this->db->get($table);
		if($query->num_rows()== 1){
			return $query->row();
		}else{
			return false;
		}	 
	}
	
	function get_variables($vrid,$table)
	{	
	  	$this->db->order_by($vrid,"asc");
		$query=$this->db->get($table);
		if($query->num_rows()!=0){
			return $query->result();
		}else{
			return false;
		}	
	}
	
}	