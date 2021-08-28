<?php 
class Account_model extends MY_Model{

	public function getCountryList($id, $table){
		$this->db->select('id,name,phonecode');
		$this->db->order_by($id,"ASC");
		$query=$this->db->get($table);
		if($query->num_rows() != 0) 
			return $query->result();
		else 
			return false;
	}
	
	function get_payment_list($custmerid,$mid,$table)
	{
	    $this->db->select('ord_id,transaction_id,payment_id,transaction_status,create_time');
		 $this->db->where($custmerid,$mid);		
		 $query=$this->db->get($table);
		 //echo $this->db->last_query();
		 if($query->num_rows()!= 0){
			return $query->result();
		 }else{
			 return false;
		 }
	}
	
	function get_tickets_list($custmerid,$mid,$table)
	{
	    $this->db->select('tkt.*,ord.ord_id');
	    $this->db->join('tbl_orders ord','ord.ord_id=tkt.odrer_id','LEFT');
	    $this->db->where('tkt.status','0');
		$this->db->where('tkt.'.$custmerid,$mid);
		$this->db->where('ord.order_status','InProcess');
		$query=$this->db->get($table.' tkt');
// 		echo $this->db->last_query($query);
// 		die;
		if($query->num_rows()!= 0){
			return $query->result();
		}else{
			 return false;
		}
	}

	// GET COUNTRY CODE //
    public function get_country_code_by_id($id,$table)
    {
        $this->db->select('sortname,phonecode');
        $this->db->where('id', $id);
        $query = $this->db->get($table);
        return $query->row();
    }

	function check_password($fld_email,$email,$fld_password,$password,$tabel)
	{
	  
        $this->db->where($fld_email,$email);		
		$this->db->where($fld_password,$password);
        $this->db->limit(1);		
		$query=$this->db->get($tabel);	 
		if($query->num_rows()== 1){
		 	return $query->row();
	    }else{
		 	return false;
	    }	  
		
	}

	public function update($id,$mid,$data,$table) {
        $this->db->where($id, $mid);
        $query=$this->db->update($table, $data);
        if($query){
			return true;
		}else{
			return false;
		}
    } 
    
       /* ============For Check Email Exist In Table============ */
	public function check_email($fld_email,$mail,$tabel){	 
	
		$this->db->where($fld_email,$mail);		 
		$this->db->limit(1);		
		$query=$this->db->get($tabel);	 
		if($query->num_rows()== 1) {
			 return $query->row();
			} else {
			 return false;
			}
		
	}

}