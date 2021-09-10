<?php 
class Cart_model extends MY_Model{
		 

	/* ============For Product Deatils ============ */
	
	function product_detail($campid,$pid,$table)
	{
		$this->db->select('pro.p_id,pro.p_name,pro.p_name_ar,pro.p_category,pro.p_sku,pro.p_aed,pro.p_inr,pro.p_omr,pro.p_kwd,pro.p_bhd,pro.p_usd,pro.p_ticket,pro.p_picture,pro.p_description,pro.p_description_ar,rwd.r_title,rwd.r_title_ar,rwd.r_price,rwd.r_price_ar,rwd.r_url,rwd.r_url_ar,rwd.r_category,rwd.image,rwd.r_short_description,camp.id,camp.product,camp.reward');
		$this->db->join('tbl_product pro','camp.product=pro.p_id','LEFT');
		$this->db->join('tbl_reward rwd','camp.reward=rwd.r_id','LEFT');
		$this->db->order_by('camp.'.$campid,"ASC");
		$this->db->where('camp.'.$campid,$pid);
		$query=$this->db->get($table.' camp');
		//echo $this->db->last_query();
		if($query){
			return $query->row();
		}else{
			return false;
		}
	}
	

	  /* ============For Update Data============ */
	public function update($fld_email,$email,$data,$table) {
        $this->db->where($fld_email, $email);
        $query=$this->db->update($table, $data);
        if($query){
			return true;
		}else{
			return false;
		}
    } 

		/* ============For Insert Data============ */
	public function save($data,$table)
    {
        $this->db->insert($table , $data);
        return $this->db->insert_id();
    }

 function price_symbol(){		
		$this->db->select('cr.symbol');
		$this->db->join('tbl_currency cr','cr.id=w.web_currency','LEFT');
		$this->db->from('tbl_website_info'.' w');
		$query=$this->db->get();
		if($query->num_rows() != 0) return $query->row()->symbol;
		else return false;
	}
	function tax_list($table){		
		$this->db->select('txt_id,txt_name,txt_per');
	     $this->db->where('txt_status','1');
	     $this->db->order_by('txt_id','ASC');
		$this->db->from($table);
		$query=$this->db->get();
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}


	function location_list($fld_name,$fld_status,$table){
		  $this->db->order_by($fld_name,"asc");
	      $this->db->where($fld_status,'1');
		  $query=$this->db->get($table);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
		
	}

	function get_location($fld_name,$fld_status,$fld_id,$id,$table){
		  $this->db->order_by($fld_name,"asc");
	      $this->db->where($fld_id,$id);		  
	      $this->db->where($fld_status,'1');
		  $query=$this->db->get($table);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
		
	}

	
	
}