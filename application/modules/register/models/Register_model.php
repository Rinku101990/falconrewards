<?php 
class Register_model extends MY_Model{
	
	/* ============For Check Email Exist In Table============ */
	function check_email($fld_email,$mail,$table)
	{	 
		$this->db->where($fld_email,$mail);		 
		$this->db->limit(1);		
		$query=$this->db->get($table);	 
		if($query->num_rows()== 1) {
			return $query->row();
		} else {
			return false;
		}
		
	}
	
	public function get_country_code_by_id($table)
    {
        $this->db->select('id,name,phonecode');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get($table);
        if($query->num_rows() != 0) return $query->result();
		else return false;
    }
	
	public function get_location($status,$table)
	{
		$this->db->where($status,'0');	
		$query=$this->db->get($table);	 
		if($query->num_rows()!='') {
			return $query->result();
		} else {
			return false;
		}
	}
	
	/* ============For Seller Login ============ */
	function login($mail,$password,$table)
	{	 
    	$this->db->select('usr_id,usr_fname,usr_lname,usr_username,usr_email,usr_status');		
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

	/* ============For Insert Data============ */
	public function save($data,$table)
    {
        $this->db->insert($table , $data);
        return $this->db->insert_id();
	}
	
	public function profile_images_upload() 
	{	
		if(!empty($_FILES['picture']['name'])){
			$this->load->library('upload');
			$config['upload_path'] = APPPATH.'../uploads/customers/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['file_name'] = date('YmdHms').'_'.rand(1,999999);
			$this->upload->initialize($config);
			if($this->upload->do_upload('picture'))
			{
				$uploaded = $this->upload->data();
				$arr['picture'] = $uploaded['file_name'];
				//$this->resize_image(APPPATH.'../uploads/blog/'.$arr['blog_picture'],900);
				$this->createThumbnail(APPPATH.'../uploads/customers/'.$arr['picture'],APPPATH.'../uploads/customers/thumbnail/'.$arr['picture'],140,140); 
				$this->createThumbnail(APPPATH.'../uploads/customers/'.$arr['picture'],APPPATH.'../uploads/customers/thumbnail/thumbs/'.$arr['picture'],40,40); 
			}
			$createdDate = strtotime(date('Y-m-d H:i:s'));	 
			return $names=$arr['picture']; 
		}else{
			return $names='';
		}
	}

	public function createThumbnail($source,$destination,$width,$height)
	{

		$this->load->library('image_lib');
		$config['image_library'] = 'gd2';
		$config['source_image'] = $source;
		$config['new_image'] = $destination;
		$config['maintain_ratio'] = FALSE;
		$config['width'] = $width;
		$config['height'] = $height;

		$this->image_lib->initialize($config);
		$this->image_lib->resize();
		$this->image_lib->clear();
	}

}