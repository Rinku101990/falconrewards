<?php 
class Draw_model extends MY_Model{
	
	  
	 function get_list($fld_id,$table)
	 {	
		$this->db->order_by($fld_id,"desc");
		$query=$this->db->get($table);
		if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
		}
	}
	

	
	public function get_product_list($proid,$table)
	{
	    $this->db->select('pro.p_id, pro.p_name,rwd.r_price');
	    $this->db->join('tbl_campaign cmp','pro.p_id=cmp.product','LEFT');
	    $this->db->join('tbl_reward rwd','cmp.reward=rwd.r_id','LEFT');
	    $this->db->order_by('pro.'.$proid,"desc");
	    $this->db->where('pro.p_status','0');
		$query=$this->db->get($table.' pro');
		//echo $this->db->last_query($query);
		if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
		}
	}
	
	function check($drwname,$tabel)
	{
        $this->db->where('drw_title',$drwname);
        $this->db->limit(1);		
		$query=$this->db->get($tabel);
		if($query->num_rows()==1){
		    return $query->row();
	    }else{
		    return false;
	    }	  
	}
	
	public function save($data,$table)
    {
        $this->db->insert($table , $data);
        return $this->db->insert_id();
    }
    
    public function update($drawid,$did,$data,$table) 
    {
        $this->db->where($drawid, $did);
        $query=$this->db->update($table, $data);
        if($query){
			return true;
		}else{
			return false;
		}
    }
    
    public function single_product($fld,$id,$tabel)
	{
		$this->db->where($fld,$id);
		$query=$this->db->get($tabel);
		$this->db->last_query($query);
        if($query->num_rows() ==''){
		    return '';
		}else{		
		     return $query->row();
		}
	}
    
    
    function images_upload($image_name,$path) 
    {	
		$config = array(
			'allowed_types' => 'mp4|webm|mov|flv|avi',
			//'allowed_types' => 'jpg|png|gif',
			'upload_path' => $path,
			'file_name' => date('YmdHms').'_'.rand(1,999999),
			'max_size' => 5120
		);		 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);	
		if($this->upload->do_upload($image_name))
		{
			$uploaded = $this->upload->data();
			$arr[$image_name] = $uploaded['file_name'];
			//$this->createThumbnail(APPPATH.'../uploads/videos/'.$arr[$image_name],APPPATH.'../uploads/videos/thumbnails/'.$arr[$image_name],200,100); 
			// conversion
// 			$directory_path 	 = $data['upload_data']['file_path'];
// 	        $directory_path_full      = $data['upload_data']['full_path'];
// 	        $file_name 		= $data['upload_data']['raw_name'];
//             exec("ffmpeg -i ".$directory_path_full." ".$directory_path.$file_name.".flv"); 
			
		}else{
		    $arr[$image_name] = "1";
		}
        $createdDate = strtotime(date('Y-m-d H:i:s'));	 
		return $names=$arr[$image_name]; 	    
        
	}
	
	function images_thumbnail_upload($image_thumb,$path) 
    {	
		$config = array(
			'allowed_types' => 'jpg|png|jpeg|gif',
			'upload_path' => $path,
			'file_name' => date('YmdHms').'_'.rand(1,999999),
			'max_size' => 5120
		);		 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);	
		if($this->upload->do_upload($image_thumb))
		{
			$uploaded = $this->upload->data();
			$arr[$image_thumb] = $uploaded['file_name'];
			$this->createThumbnail(APPPATH.'../uploads/videos/'.$arr[$image_thumb],APPPATH.'../uploads/videos/thumbnails/'.$arr[$image_thumb],640,480); 
			
		}else{
		    $arr[$image_thumb] = "1";
		}
        $createdDate = strtotime(date('Y-m-d H:i:s'));	 
		return $names=$arr[$image_thumb]; 	    
        
	}
    
    public function createThumbnail($source,$destination,$width,$height = false)
    {
		$this->load->library('image_lib');
		$config['image_library'] = 'gd2';
		$config['source_image'] = $source;
		$config['new_image'] = $destination;
		$config['maintain_ratio'] = FALSE;
		$config['width'] = $width;
		if($height){
			$config['height'] = $height;
		}
		$this->image_lib->initialize($config);
		$this->image_lib->resize();
		$this->image_lib->clear();
	}





	public function pro_list($table){	
		$this->db->select('p_id,p_name');
 		  $this->db->order_by('p_name',"asc");
		   $this->db->where('p_status',"0");
		   $query=$this->db->get($table);
		   //$this->db->last_query($query);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
		
	}
	public function reward_list($table){	
		$this->db->select('r_id,r_title');
 		  $this->db->order_by('r_title',"asc");
		   $this->db->where('r_status',"0");
		   $query=$this->db->get($table);
		   //$this->db->last_query($query);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
		
	}

     public function campaign_list($int_email,$table){		
		  $this->db->select('a.*,b.p_name,b.p_picture,c.r_title,c.image');
		  $this->db->order_by('a.id',"DESC");
		  $this->db->from($table.' a');
		  $this->db->join('tbl_product b','b.p_id=a.product','LEFT');	
		  $this->db->join('tbl_reward c','c.r_id=a.reward','LEFT');		  
		   $query=$this->db->get();
		  // echo $this->db->last_query($query);
		  // die;
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
		
	} 
	
	
	public function cate_list($table){	
		$this->db->select('procat_id,procat_name,procat_slug');
 		  $this->db->order_by('procat_name',"asc");
		   $this->db->where('procat_status',"0");
		   $query=$this->db->get($table);
		   //$this->db->last_query($query);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
		
	}
	

	function featured_list($fld_id,$table){	
	
		  $this->db->order_by($fld_id,"desc");
		  	 $this->db->where('p_feature','1');	
		  $query=$this->db->get($table);		
		 $this->db->last_query($query);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
		
	}

	function trending_list($fld_id,$table){	
	
		  $this->db->order_by($fld_id,"desc");
		    $this->db->where('p_trending','1');	
		  $query=$this->db->get($table);		 
		   $this->db->last_query($query);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
		
	}

	function single_record($fld_id,$id,$tabel){
		 $this->db->order_by($fld_id,"desc");
		 $this->db->where($fld_id,$id);	
		 $this->db->limit(1);	
		 $query=$this->db->get($tabel);
		 if($query->num_rows()== 1){
			return $query->row();
		 }else{
			 return false;
		 }
		 
	 }
	function profiledata($fld_email,$email,$tabel){
		 
		 $this->db->where($fld_email,$email);	
		 $this->db->limit(1);	
		 $query=$this->db->get($tabel);
		 if($query->num_rows()== 1){
			return $query->row();
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

	

	

	 
 

     public function delete($fld_email,$email,$table) {
        $this->db->where($fld_email, $email);
        $this->db->delete($table);
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

	

	function get_single_product($id)
	{

	$this->db->select('PD.p_id,PD.p_cate,PD.p_scate,PD.p_child,PD.p_reference_no,PD.p_name,PD.p_model,PD.p_brand,PD.p_selling_price,CT.cate_id,CT.cate_name AS cate_name,SCT.scate_id,SCT.scate_name AS scate_name,CHT.child_id,CHT.child_name AS child_name,BT.brd_id,BT.brd_name AS brand_name');
    $this->db->from('tbl_product AS PD');
    $this->db->where('PD.p_id', $id);
    $this->db->join('tbl_category AS CT', 'CT.cate_id = PD.p_cate', 'left');
    $this->db->join('tbl_sub_category AS SCT', 'SCT.scate_id = PD.p_scate', 'left');
    $this->db->join('tbl_child_category AS CHT', 'CHT.child_id = PD.p_child', 'left'); 
    $this->db->join('tbl_brand AS BT', 'BT.brd_id = PD.p_brand', 'left');    
    $query = $this->db->get();   
	 $this->db->last_query($query);
          if($query->num_rows() ==''){
		     return '';
			}else{		
		     return $query->row();
			}
	 }

 function category_list($fld,$id,$tabel)
	{
		 $this->db->where($fld,$id);
		$query=$this->db->get($tabel);
		$this->db->last_query($query);
          if($query->num_rows() ==''){
		     return '';
			}else{		
		     return $query->row();
			}
	 }

	function unit_list($fld_name,$fld_status,$table){
		  $this->db->order_by($fld_name,"asc");
	      $this->db->where($fld_status,'1');
		  $query=$this->db->get($table);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
		
	}

	function policy_list($table){		    
		  $this->db->order_by('pp_id',"asc");		  	
		  $this->db->where('pp_status','1');		
		  $query=$this->db->get($table);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
	}

	 function brd_list($table){		    
		  $this->db->order_by('brd_name',"asc");
		  $this->db->where('brd_status','1');	
		  $this->db->where('brd_remove','0');		
		  $query=$this->db->get($table);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
	}
	 function option_list($table){		      
		  $this->db->order_by('opt_id',"asc");
		  $this->db->where('opt_status','1');
		  	   // $this->db->where('vnd_id','0');	
		  $query=$this->db->get($table);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
	}

	 function option_gorup_list(){
		  $this->db->order_by('opt_id',"asc");
		  $this->db->where('opt_status','1');
		   // $this->db->where('vnd_id','0');
		  $query=$this->db->get('tbl_option');
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
	}

	function getCateList($fld_id,$id,$name,$remove,$status,$table){	
	
		  $this->db->order_by($name,"asc");
		  $this->db->where($fld_id,$id);
		  $this->db->where($remove,'0');
		  $this->db->where($status,'1');
		  $query=$this->db->get($table);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
		
	}
	function get_Cate_filter($fld_id,$id,$name,$remove,$status,$table){	
	
		  $this->db->order_by($name,"asc");
		  $this->db->like($fld_id,$id);
		  $this->db->where($remove,'0');
		  $this->db->where($status,'1');
		  $this->db->limit(5);
		  $query=$this->db->get($table);
		// echo $this->db->last_query($query);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
		
	}

	function cate_export_list($select,$fld_id,$remove,$status,$table){	
		  $this->db->select($select);
		  $this->db->order_by($fld_id,"asc");
		  $this->db->where($remove,'0');
		  $this->db->where($status,'1');
		  $query=$this->db->get($table);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
	}

	function scate_export_list($select,$fld_id,$remove,$status,$table)
	{	
		
	      $this->db->select($select);
		  $this->db->order_by($fld_id,"asc");
		  $this->db->where($remove,'0');
		  $this->db->where($status,'1');		 	
		  $query=$this->db->get($table);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
	}

	function Product_export_list($table)
	{	
		  $this->db->order_by('p_id',"DESC");		  
		  $query=$this->db->get($table);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
	}

	function export_list($fld_id,$table)
	{	
		  $this->db->order_by($fld_id,"DESC");		
		  $query=$this->db->get($table);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
	}

	function get_location_list($fld_id,$table){	
	
		  $this->db->order_by($fld_id,"asc");		
		  $query=$this->db->get($table);
		   if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
		
	}
	
	public function get_product_list_test($proCateId,$cateId,$table)
	{
	    $this->db->select('pro.p_id, pro.p_name,rwd.r_price');
	    $this->db->join('tbl_campaign cmp','pro.p_id=cmp.product','LEFT');
	    $this->db->join('tbl_reward rwd','cmp.reward=rwd.r_id','LEFT');
	    $this->db->order_by('pro.p_id',"desc");
	    $this->db->where($proCateId,$cateId);
	    $this->db->where('pro.p_status','0');
		$query=$this->db->get($table.' pro');
		//echo $this->db->last_query($query);
		if($query->num_rows() ==''){
			return '';
		}else{
			return $query->result();
		}
	}



	
	
}