<?php 
class User_model extends MY_Model{
	
	  
	 
	function get_customer_list($fld_cid,$table)
	{
		$this->db->select('cst.*,cty.loc_name as location');
		$this->db->join('tbl_locations cty','cst.usr_location=cty.loc_id','LEFT');
		$this->db->order_by('cst.'.$fld_cid,'DESC');
		$query=$this->db->get($table.' cst');
		// echo $this->db->last_query($query);
		// die;
		if($query->num_rows() > 0){
			return $query->result();
		}else{
		 	return false;
		}
	}
	
	function customer_list($fld_cid,$table)
	{
		$this->db->select('cst.usr_email');
		$this->db->order_by('cst.'.$fld_cid,'ASC');
		$this->db->limit('50', '1650');
		$query=$this->db->get($table.' cst');
// 		echo $this->db->last_query($query);
// 		die;
		if($query->num_rows() > 0){
			return $query->result();
		}else{
		 	return false;
		}
	}

	public function get_customer_profile($fld_cid,$id,$table)
	{
	 	$this->db->select('cst.*,cty.loc_name as location');
		$this->db->join('tbl_locations cty','cst.usr_location=cty.loc_id','LEFT');
	 	$this->db->where('cst.'.$fld_cid,$id);	
		$query=$this->db->get($table.' cst');
		//echo $this->db->last_query();
		if($query->num_rows() > 0){
			return $query->row();
		}else{
		 	return false;
		}
	}

	public function update_customer_account($fld_cid,$cstid,$cstSts,$table){
		$this->db->where($fld_cid, $cstid);
        $query=$this->db->update($table, $cstSts);
        if($query){
			return true;
		}else{
			return false;
		}
	}
	 
	function check_password($fld_email,$fld_password,$email,$password,$tabel){
	  
        $this->db->where($fld_email,$email);		
		$this->db->where($fld_password,$password);
        $this->db->limit(1);		
		$query=$this->db->get($tabel);	 
		if($query->num_rows()== 1)
	    {
		 return $query->row();
	    }
	    else
	    {
		 return false;
	    }	  
		
	}
	 
	public function update($fld_email,$email,$data,$table) {
        $this->db->where($fld_email, $email);
        $query=$this->db->update($table, $data);
        if($query){
			return true;
		}else{
			return false;
		}
    } 
	 
	function images_upload($image_name,$path) {	
		$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $path,
			'file_name' => date('YmdHms').'_'.rand(1,999999),
			'max_size' => 20000
		);		 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);	
		if($this->upload->do_upload($image_name))
			{
				$uploaded = $this->upload->data();
				$arr[$image_name] = $uploaded['file_name'];
			}
        $createdDate = strtotime(date('Y-m-d H:i:s'));	 
		return $names=$arr[$image_name]; 	    
        
	}

	/*--- Vendor Model ---*/ 
 
	public function get_vendor_list($fld_vid,$table)
	{
		$this->db->select('vnd_id,vnd_name,vnd_email,vnd_phone,vnd_gendor,vnd_category,vnd_status,vnd_created');
		$this->db->order_by($fld_vid,'DESC');
		$query=$this->db->get($table);
		if($query->num_rows() > 0){
			return $query->result();
		}else{
		 	return false;
		}
	}

	public function update_vendor_account($fld_vid,$vndrid,$vndrSts,$table){
		$this->db->where($fld_vid, $vndrid);
        $query=$this->db->update($table, $vndrSts);
        if($query){
			return true;
		}else{
			return false;
		}
	}

	public function get_vendor_profile($fld_vid,$vndrid,$table)
	{
		$this->db->select('vnd.*,cntry.cnt_name,st_name,cty.ct_name');
	 	$this->db->join('tbl_country cntry','vnd.vnd_country=cntry.cnt_id','LEFT');
	 	$this->db->join('tbl_state sts','vnd.vnd_state=sts.st_id','LEFT');
		$this->db->join('tbl_city cty','vnd.vnd_city=cty.ct_id','LEFT');
	 	$this->db->where('vnd.'.$fld_vid,$vndrid);	
		$query=$this->db->get($table.' vnd');
		//echo $this->db->last_query();
		if($query->num_rows() > 0){
			return $query->row();
		}else{
		 	return false;
		}
	}

	public function get_ordered_products($fld_vndsts,$vndrid,$table)
	{
		$this->db->select('op.pro_name,op.ord_create,ord.ord_id,ord.ord_reference_no,ord.ord_total_amounts,ord.ord_pay_mode,ord.order_status');
	 	$this->db->join('tbl_orders ord','op.ord_id=ord.ord_id','LEFT');
	 // 	$this->db->join('tbl_state sts','vnd.vnd_state=sts.st_id','LEFT');
		// $this->db->join('tbl_city cty','vnd.vnd_city=cty.ct_id','LEFT');
	 	$this->db->where('op.'.$fld_vndsts,$vndrid);	
		$query=$this->db->get($table.' op');
		//echo $this->db->last_query();
		if($query->num_rows() > 0){
			return $query->result();
		}else{
		 	return false;
		}
	}
	
}