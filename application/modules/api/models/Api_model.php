<?php 
class Api_model extends MY_Model{

    /*--- GET PRODUCTS AND PRODUCT DETAIL API MODEL ---*/ 
    public function getProductsList($cpid,$table)
	{
		$this->db->select('pro.p_id,pro.p_name,pro.p_category,pro.p_sku,pro.p_aed,pro.p_usd,pro.p_qty,pro.p_sold_plus,pro.p_soldplus,pro.p_ticket,pro.p_picture_url,pro.p_mobile_picture,pro.p_expirymsg,pro.p_description,rwd.r_title,rwd.r_category,r_image_url,rwd.r_short_description,camp.id AS camp_id,camp.product AS camp_product_id,camp.reward AS comp_reward_id,pro.p_available');
		$this->db->join('tbl_product pro','camp.product=pro.p_id','LEFT');
		$this->db->join('tbl_reward rwd','camp.reward=rwd.r_id','LEFT');
		$this->db->order_by('camp.sort_order',"ASC");
		$this->db->where('camp.status','0');
		$query=$this->db->get($table.' camp');
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}
	
	public function getCountryList($cntryid,$table)
	{
		$this->db->select('id,name,sortname,phonecode');
		$this->db->order_by($cntryid,'ASC');
		$query=$this->db->get($table);
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}
	
	public function getBannersList($bnrsid,$table)
	{
		$this->db->select('id,bannerurl');
		$this->db->where('bannerstatus','0');
		$this->db->order_by($bnrsid,'ASC');
		$query=$this->db->get($table);
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}

	public function getProductDetail($cpid,$proid,$table)
	{
		$this->db->select('pro.p_id,pro.p_name,pro.p_category,pro.p_sku,pro.p_aed,pro.p_usd,pro.p_qty,pro.p_sold_plus,pro.p_soldplus,pro.p_ticket,pro.p_picture_url,pro.p_mobile_picture,pro.p_expirymsg,pro.p_description,rwd.r_title,rwd.r_price,rwd.r_category,r_image_url,rwd.r_short_description,camp.id AS camp_id,camp.product AS camp_product_id,camp.reward AS comp_reward_id');
		$this->db->join('tbl_product pro','camp.product=pro.p_id','LEFT');
		$this->db->join('tbl_reward rwd','camp.reward=rwd.r_id','LEFT');
		$this->db->where('camp.'.$cpid,$proid);
		$query=$this->db->get($table.' camp');
		if($query->num_rows() != 0) return $query->row();
		else return false;
	}
	
	public function getCustomerProfileById($customerid,$cid,$table)
	{
	    $this->db->select('cs.usr_id,cs.usr_fname,cs.usr_lname,cs.usr_email,cs.usr_profile_photo,cs.usr_gender,cs.usr_area_phone,cs.usr_mobile,cs.usr_married,cs.usr_newsletter,cs.usr_location as location,cs.usr_nationality as nationality,cs.usr_status');
		//$this->db->select('cs.usr_id,cs.usr_fname,cs.usr_lname,cs.usr_email,cs.usr_profile_photo,cs.usr_gender,cs.usr_area_phone,cs.usr_mobile,cs.usr_married,cs.usr_newsletter,cs.usr_status,cnt.name as nationality,ct.name as location');
		$this->db->join('tbl_country cnt','cnt.id=cs.usr_nationality','LEFT');
		$this->db->join('tbl_city ct','ct.id=cs.usr_location','LEFT');
		$this->db->where('cs.usr_id',$cid);
		$query=$this->db->get($table.' cs');
		if($query->num_rows() != 0) return $query->row();
		else return false;
	}
	
	public function profile_detail($email,$table)
	{
	    $this->db->select('cs.usr_id,cs.usr_fname,cs.usr_lname,cs.usr_email,cs.usr_profile_photo,cs.usr_gender,cs.usr_area_phone,cs.usr_mobile,cs.usr_married,cs.usr_newsletter,cs.usr_location as location,cs.usr_nationality as nationality,cs.usr_status');
		//$this->db->select('cs.usr_id,cs.usr_fname,cs.usr_lname,cs.usr_email,cs.usr_profile_photo,cs.usr_gender,cs.usr_area_phone,cs.usr_mobile,cs.usr_married,cs.usr_newsletter,cs.usr_status,cnt.name as nationality,ct.name as location');
// 		$this->db->join('tbl_country cnt','cnt.id=cs.usr_nationality','LEFT');
// 		$this->db->join('tbl_city ct','ct.id=cs.usr_location','LEFT');
		$this->db->where('cs.usr_email',$email);
		$query=$this->db->get($table.' cs');
// 		echo $this->db->last_query($query);
// 		die;
		if($query->num_rows() != 0) return $query->row();
		else return false;
	}
	/*--- END GET PRODUCTS AND PRODUCT DETAIL API MODEL ---*/ 
	
	public function sinlge_product($pid,$proid,$table)
	{
		$this->db->select('p_id,p_name,p_aed,p_picture_url');
		$this->db->where($pid,$proid);
		$query=$this->db->get($table);
		if($query->num_rows() != 0) return $query->row();
		else return false;
	}
	
	
	public function order_list($uid,$table)
	{
		$this->db->select('t.id,t.ticket_no,t.price,t.created');
		$this->db->join('tbl_orders ord','ord.ord_id=t.odrer_id','LEFT');
		//$this->db->where('ord.ord_reference_no',$ord_id);
		$this->db->where('t.status','0');
		$this->db->where('ord.cust_id',$uid);
		$this->db->where('ord.order_status','InProcess');
		$query=$this->db->get($table.' t');
// 		echo $this->db->last_query($query);
// 		die;
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}
	
	
	/*--- USER SIGNUP AND LOGIN API MODEL ---*/ 
	public function check_email($uemail,$mail,$table)
	{	
	    $this->db->select('usr_id,usr_email,usr_status,usr_EmailVerifiedStatus');
		$this->db->where($uemail,$mail);		 
		$this->db->limit(1);		
		$query=$this->db->get($table);	 
		if($query->num_rows()== 1) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function save($data,$table)
    {
        $this->db->insert($table , $data);
        return $this->db->insert_id();
	}

	public function SaveOrderInformation($orderArray,$table){
		 
		$query=$this->db->insert($table,$orderArray);
		if($query) return $this->db->insert_id();
		else return false;
	}
	
	public function update_last_login($uemail,$email,$data,$table){
	    $this->db->where($uemail, $email);
        $query=$this->db->update($table, $data);
       // echo $this->db->last_query();
       // echo $query->num_rows();
        if($query){
			true;
		}else{
			return false;
		}
	}

	public function user_login($mail,$password,$table)
	{
		$this->db->select('usr_id,usr_fname,usr_lname,usr_email,usr_status,usr_EmailVerifiedStatus,usr_devicetype,usr_devicetoken');		
		$this->db->where('usr_email',$mail);		
		$this->db->where('usr_password',$password);
        $this->db->limit(1);		
		$query=$this->db->get($table);	 
		if($query->num_rows()== 1)
	    {
		 	return $query->row();
	    }
	    else
	    {
		 	return false;
	    }
	}
	/*--- END USER SIGNUP AND LOGIN API MODEL ---*/ 
	
	
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


   public function SaveOrderProduct($orderProducts,$table){
		 
		$query=$this->db->insert_batch($table,$orderProducts);
		if($query){
			return true;
		}else{
		   return false; 
		} 
	}
	
	public function check_password($fld_email,$email,$fld_password,$password,$tabel)
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
	
	
	/*-- Order Update --*/ 	
	
	public function check_user_info($uemail,$emailAddress,$table)
	{
	    $this->db->select('usr_id,usr_email');		
		$this->db->where($uemail,$emailAddress);	
        $this->db->limit(1);		
		$query=$this->db->get($table);	 
		if($query->num_rows()== 1)
	    {
		 	return $query->row();
	    }
	    else
	    {
		 	return false;
	    }
	}
	
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
		$this->db->select('tod.*,tc.usr_fname,tc.usr_lname,tc.usr_email');
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
	
    /*-- End Of Order Update --*/ 	
    public function tax_list($table){		
		$this->db->select('txt_id,txt_name,txt_per');
	     $this->db->where('txt_status','1');
	     $this->db->order_by('txt_id','ASC');
		$this->db->from($table);
		$query=$this->db->get();
		if($query->num_rows() != 0) return $query->result();
		else return false;
	}


}
?>