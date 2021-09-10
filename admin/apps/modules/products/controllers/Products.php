<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Controller {
	 
	public function __construct() {
        parent::__construct(); 
		$this->load->helper("common");	
		$this->login = $this->session->userdata('logged_in_admin');			
    	  if(empty($this->login)){
    		redirect('login','refresh');
    	  } 
        $this->load->model("Products_model",'Product');
       /* ========FOR MASTER TABEL=========== */ 			
        $this->fld_email="mst_email";	
        $this->fld_password="mst_password";	
        $this->table_master="tbl_master";	
         /* ========FOR CATEGORY TABEL=========== */ 			
        $this->table_category="tbl_property_category";
        /* ========FOR PRODUCT TABEL=========== */ 
        $this->p_id="p_id";
        $this->table_product="tbl_product";
        /* ========FOR REWARD TABEL=========== */ 
        $this->r_id="r_id";
        $this->table_reward="tbl_reward";
        /* ========FOR campaign TABEL=========== */ 
        $this->camp_id="id";
        $this->table_campaign="tbl_campaign";			
    }
 
	public function index() 
	{    	
        $content['admin']=admin_profile($this->login->mst_email);	     
        $content['product']= $this->Product->get_list($this->p_id,$this->table_product);
		$content['subview']="viewProductsList";
		$this->load->view('layout', $content);
	}	

	public function add() 
	{    	
        $content['admin']=admin_profile($this->login->mst_email);	     
        $content['category'] = $this->Product->cate_list($this->table_category);	    
		$content['subview']="addProducts";
		$this->load->view('layout', $content);   
	}	

	public function product_save()
    {  
       	$checkName = $this->Product->check('p_name',$this->input->post('p_name'),$this->table_product); 
     	$reference = $this->Product->check('p_reference_no',$this->input->post('p_reference_no'),$this->table_product); 
     	if(empty($checkName) && empty($reference)){  
         	// Image
         	$path=FCPATH . 'uploads/product';
    		$image_name='p_picture';
    		$image_data=$this->Product->images_upload($image_name,$path); 
    		$image_name1='p_mobile_picture';
    		$image_data1=$this->Product->images_upload($image_name1,$path); 
    		$p_mobile=base_url('uploads/product/').$image_data1; 
            // Image
            $img_url=base_url('uploads/product/').$image_data;
           
	        $data= array(
	            'p_name' =>$this->input->post('p_name'),
	            'p_name_ar' =>$this->input->post('p_name_ar'),
                'p_reference_no' =>$this->input->post('p_reference_no'),
                'p_category' =>$this->input->post('p_category'),
                'p_sku' =>$this->input->post('p_sku'),
                'p_aed' =>$this->input->post('p_aed'),
                'p_inr' =>$this->input->post('p_inr'),
                'p_omr' =>$this->input->post('p_omr'),
                'p_kwd' =>$this->input->post('p_kwd'),
                'p_bhd' =>$this->input->post('p_bhd'),
                'p_usd' =>$this->input->post('p_usd'),
                'p_qty' =>$this->input->post('p_qty'),
                'p_ticket' =>$this->input->post('p_ticket'),
                'p_description' =>$this->input->post('p_description',true),
                'p_description_ar' =>$this->input->post('p_description_ar',true),
                'p_meta_title' =>$this->input->post('p_meta_title'),
                'p_meta_keyword' =>$this->input->post('p_meta_keyword'),
                'p_meta_description' =>$this->input->post('p_meta_description'),
                'p_meta_title_ar' =>$this->input->post('p_meta_title_ar'),
                'p_meta_keyword_ar' =>$this->input->post('p_meta_keyword_ar'),
                'p_meta_description_ar' =>$this->input->post('p_meta_description_ar'),
                'p_status' =>$this->input->post('p_status'),
                'p_picture' =>$image_data,
                'p_picture_url' =>$img_url,
                'p_mobile_picture' =>$p_mobile,
                'p_created' =>date('Y-m-d H:i:s')
            );

	        //Product save      
	        $result = $this->Product->save($data,$this->table_product);
	        if($result){
			   $this->session->set_flashdata('msg',array('message' => 'Product has been successfully Saved.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
			   redirect('products/add'); 
		   }else{
			   $this->session->set_flashdata('msg',array('message' => "Unable to Product .Some error occurred.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			    redirect('products/add');   
		   }
		}else{
			 $this->session->set_flashdata('msg',array('message' => "Product Already Added.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			 redirect('products/add'); 
		}
    }

    public function product_edit()
    {	 
        $content['admin']=admin_profile($this->login->mst_email);	       
   	    $pid=decode($this->uri->segment(3)); 	    
	    $content['product'] = $this->Product->single_product('p_id',$pid,$this->table_product);
	    $content['category'] = $this->Product->cate_list($this->table_category);
	    $RequestMethod = $this->input->server('REQUEST_METHOD');
        if($RequestMethod == "POST") { 	
	    	// Image	    	
    	    if(empty($_FILES['p_picture']['name'])){
    	    	 $image_data=$this->input->post('prev_picture');
    	    }else{
         	  $path=FCPATH . 'uploads/product';
    		  $image_name='p_picture';
    		  $img1= $path.'/'. $content['product']->p_picture;  
    		  if (!unlink($img1)) {} else { }
    		  $image_data=$this->Product->images_upload($image_name,$path);  
              // Image
            }
            $img_url=base_url('uploads/product/').$image_data;
            // Image
            if(empty($_FILES['p_mobile_picture']['name'])){
	    	 $image_data1=$this->input->post('prev_mob_picture');
    	    }else{
         	  $path=FCPATH . 'uploads/product';
    		  $image_name1='p_mobile_picture';
    		  $img2= $content['product']->p_mobile_picture;  
    		  if (!unlink($img2)) {} else { }
    		  $image_data1=base_url('uploads/product/').$this->Product->images_upload($image_name1,$path);  		
              // Image
            }
            $p_mobile=$image_data1; 
            $data= array(
                'p_name' =>$this->input->post('p_name'),
                'p_name_ar' =>$this->input->post('p_name_ar'),
                'p_reference_no' =>$this->input->post('p_reference_no'),
                'p_category' =>$this->input->post('p_category'),
                'p_sku' =>$this->input->post('p_sku'),
                'p_aed' =>$this->input->post('p_aed'),
                'p_inr' =>$this->input->post('p_inr'),
                'p_omr' =>$this->input->post('p_omr'),
                'p_kwd' =>$this->input->post('p_kwd'),
                'p_bhd' =>$this->input->post('p_bhd'),
                'p_usd' =>$this->input->post('p_usd'),
                'p_qty' =>$this->input->post('p_qty'),
                'p_sold_plus' =>$this->input->post('p_sold_plus'),
                'p_ticket' =>$this->input->post('p_ticket'),
                'p_description' =>$this->input->post('p_description',true),
                'p_description_ar' =>$this->input->post('p_description_ar',true),
                'p_meta_title' =>$this->input->post('p_meta_title'),
                'p_meta_keyword' =>$this->input->post('p_meta_keyword'),
                'p_meta_description' =>$this->input->post('p_meta_description'),
                'p_meta_title_ar' =>$this->input->post('p_meta_title_ar'),
                'p_meta_keyword_ar' =>$this->input->post('p_meta_keyword_ar'),
                'p_meta_description_ar' =>$this->input->post('p_meta_description_ar'),
                'p_status' =>$this->input->post('p_status'),
                'p_picture' =>$image_data,
                'p_picture_url' =>$img_url,
                'p_mobile_picture' =>$p_mobile,
                'p_updated' =>date('Y-m-d H:i:s')
            );

            //Product save      
            $result = $this->Product->update('p_id',$pid,$data,$this->table_product);

	        if($result){
			   $this->session->set_flashdata('msg',array('message' => 'Product has been successfully updated.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
			   redirect('products/product-edit/'.$this->uri->segment(3)); 
		   }else{
			   $this->session->set_flashdata('msg',array('message' => "Unable to Product .Some error occurred.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			    redirect('products/product-edit/'.$this->uri->segment(3));   
		   }

        }
	     $content['subview']="product_edit";
		 $this->load->view('layout', $content);
    }	


      public function product_status()
	   {	 
	     $content['admin']=admin_profile($this->login->mst_email);	       
	   	$pid=$this->uri->segment(3);
	   	$status=$this->uri->segment(4); 	    
		
	      $data= array(
	                   'p_status' =>$status,
	                   'p_updated' =>date('Y-m-d H:i:s')
	                    );

	      //Product save      
	      $result = $this->Product->update('p_id',$pid,$data,$this->table_product);
	
	        if($result){
			   $this->session->set_flashdata('msg',array('message' => 'Product Status has been successfully Changed.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
			   redirect('products'); 
		   }else{
			   $this->session->set_flashdata('msg',array('message' => "Unable to Product .Some error occurred.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			     redirect('products') ;
		   }

	   
     }	

      

	 public function product_delete() {         	
		 $p_id=$this->uri->segment(3);		 
	     $path=FCPATH . 'uploads/product';
	     $productimg= $this->Product->single_product('p_id',$p_id,$this->table_product);
	     $img1= $path.'/'. $productimg->p_picture;  
		     if (!unlink($img1)) {} else { }
		 $product=$this->Product->delete('p_id',$p_id,$this->table_product);	
		  
		$this->session->set_flashdata('msg',array('message' => 'Product Data has been successfully Delete.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
				   redirect('products');
	  }	

	public function rewards() 
	{    	
        $content['admin']=admin_profile($this->login->mst_email);	     
        $content['reward']= $this->Product->get_list($this->r_id,$this->table_reward);
		$content['subview']="viewRewardsList";
		$this->load->view('layout', $content);
	}
	public function reward_add() 
	{    	
        $content['admin']=admin_profile($this->login->mst_email);	     
        $content['category'] = $this->Product->cate_list($this->table_category);	    
		$content['subview']="reward_add";
		$this->load->view('layout', $content);   
	}		

	public function reward_save()
    {  
       	$checkName = $this->Product->check('r_title',$this->input->post('r_title'),$this->table_reward); 
     	if(empty($checkName)){  
     		// Image
     	  $path=FCPATH . 'uploads/reward';
		  $image_name='image';
		  $image_data=$this->Product->images_upload($image_name,$path);  
          // Image
           
	      $data= array('r_title' =>$this->input->post('r_title'),
	                   'r_url' =>$this->input->post('r_url'),
	                   'r_category' =>$this->input->post('r_category'),
	                   'r_short_description' =>$this->input->post('r_short_description'),
	                   'r_description' =>$this->input->post('r_description',true),
	                   'r_status' =>$this->input->post('r_status'),
	                   'image' =>$image_data,
	                   'r_created' =>date('Y-m-d H:i:s')
	                    );

	      //Reward save      
	      $result = $this->Product->save($data,$this->table_reward);
	
	        if($result){
			   $this->session->set_flashdata('msg',array('message' => 'Reward has been successfully Saved.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
			   redirect('products/reward_add'); 
		   }else{
			   $this->session->set_flashdata('msg',array('message' => "Unable to Reward .Some error occurred.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			    redirect('products/reward_add');   
		   }
		   }else{
			 $this->session->set_flashdata('msg',array('message' => "Reward Title Already Added.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			 redirect('products/reward_add'); 
				}
		
     }

    public function reward_edit()
	   {	 
	     $content['admin']=admin_profile($this->login->mst_email);	       
	   	$rid=decode($this->uri->segment(3)); 	    
		$content['reward'] = $this->Product->single_product('r_id',$rid,$this->table_reward);
		$content['category'] = $this->Product->cate_list($this->table_category);
		 $RequestMethod = $this->input->server('REQUEST_METHOD');
	    if($RequestMethod == "POST") { 	
	    	// Image	    	
	    if(empty($_FILES['image']['name'])){
	    	 $image_data=$this->input->post('prev_image');
	    }else{
     	  $path=FCPATH . 'uploads/reward';
		  $image_name='image';
		  $img1= $path.'/'. $content['reward']->image;  
		  if (!unlink($img1)) {} else { }
		  $image_data=$this->Product->images_upload($image_name,$path);  
          // Image
           }
	      $data= array('r_title' =>$this->input->post('r_title'),
	                   'r_url' =>$this->input->post('r_url'),
	                   'r_category' =>$this->input->post('r_category'),
	                   'r_short_description' =>$this->input->post('r_short_description'),
	                   'r_description' =>$this->input->post('r_description',true),
	                   'r_status' =>$this->input->post('r_status'),
	                   'image' =>$image_data,
	                   'r_updated' =>date('Y-m-d H:i:s')
	                    );

	      //Product save      
	      $result = $this->Product->update('r_id',$rid,$data,$this->table_reward);
	
	        if($result){
			   $this->session->set_flashdata('msg',array('message' => 'Reward has been successfully updated.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
			   redirect('products/reward-edit/'.$this->uri->segment(3)); 
		   }else{
			   $this->session->set_flashdata('msg',array('message' => "Unable to Reward .Some error occurred.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			    redirect('products/reward-edit/'.$this->uri->segment(3));   
		   }

	    }
	     $content['subview']="reward_edit";
		 $this->load->view('layout', $content);
     }	

       public function reward_status()
	   {	 
	     $content['admin']=admin_profile($this->login->mst_email);	       
	   	$rid=$this->uri->segment(3);
	   	$status=$this->uri->segment(4); 	    
		
	      $data= array(
	                   'r_status' =>$status,
	                   'r_updated' =>date('Y-m-d H:i:s')
	                    );

	      //Product save      
	      $result = $this->Product->update('r_id',$rid,$data,$this->table_reward);
	
	        if($result){
			   $this->session->set_flashdata('msg',array('message' => 'Reward Status has been successfully Changed.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
			   redirect('products/rewards'); 
		   }else{
			   $this->session->set_flashdata('msg',array('message' => "Unable to Reward .Some error occurred.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			     redirect('products/rewards') ;
		   }

	   
     }	

    public function reward_delete() {         	
		 $r_id=$this->uri->segment(3);		 
	     $path=FCPATH . 'uploads/reward';
	     $productimg= $this->Product->single_product('r_pid',$r_id,$this->table_reward);
	     $img1= $path.'/'. $productimg->image;  
		     if (!unlink($img1)) {} else { }
		 $product=$this->Product->delete('r_id',$r_id,$this->table_reward);	
		  
		$this->session->set_flashdata('msg',array('message' => 'Reward Data has been successfully Delete.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
				   redirect('products/rewards');
	  }	
	
	public function campaigns() 
	{    	
        $content['admin']=admin_profile($this->login->mst_email);	     
        $content['campaign']= $this->Product->campaign_list($this->r_id,$this->table_campaign);
		$content['subview']="viewCampaignList";
		$this->load->view('layout', $content);
	}
	public function campaign_add() 
	{    	
        $content['admin']=admin_profile($this->login->mst_email);	     
        $content['product'] = $this->Product->pro_list($this->table_product);	    
        $content['reward'] = $this->Product->reward_list($this->table_reward);
		$content['subview']="campaign_add";
		$this->load->view('layout', $content);   
	}		

	public function campaign_save()
    {  
       	$checkName = $this->Product->check('title',$this->input->post('title'),$this->table_campaign); 
     	if(empty($checkName)){  
     		           
	      $data= array('title' =>$this->input->post('title'),
	      	'ref_no' =>$this->input->post('ref_no'),
	                   'url' =>$this->input->post('url'),
	                   'product' =>$this->input->post('product'),
	                   'reward' =>$this->input->post('reward'),
	                   'target' =>$this->input->post('target',true),
	                   'status' =>$this->input->post('status'),
	                   'updated' =>date('Y-m-d H:i:s'),
	                   'created' =>date('Y-m-d H:i:s')
	                    );

	      //campaign save      
	      $result = $this->Product->save($data,$this->table_campaign);
	
	        if($result){
			   $this->session->set_flashdata('msg',array('message' => 'Campaign has been successfully Saved.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
			   redirect('products/campaign_add'); 
		   }else{
			   $this->session->set_flashdata('msg',array('message' => "Unable to Campaign .Some error occurred.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			    redirect('products/campaign_add');   
		   }
		   }else{
			 $this->session->set_flashdata('msg',array('message' => "Campaign Title Already Added.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			 redirect('products/campaign_add'); 
				}
		
     }

    public function campaign_edit()
	   {	 
	     $content['admin']=admin_profile($this->login->mst_email);	       
	   	$id=decode($this->uri->segment(3)); 	    
		$content['campaign'] = $this->Product->single_product('id',$id,$this->table_campaign);
		$content['product'] = $this->Product->pro_list($this->table_product);	    
        $content['reward'] = $this->Product->reward_list($this->table_reward);
		 $RequestMethod = $this->input->server('REQUEST_METHOD');
	    if($RequestMethod == "POST") { 	
	    	
	      $data= array('title' =>$this->input->post('title'),
	                   'url' =>$this->input->post('url'),
	                   'product' =>$this->input->post('product'),
	                   'reward' =>$this->input->post('reward'),
	                   'target' =>$this->input->post('target',true),
	                   'status' =>$this->input->post('status'),
	                   'updated' =>date('Y-m-d H:i:s')
	                   //'created' =>date('Y-m-d H:i:s')
	                    );

	         
	      $result = $this->Product->update('id',$id,$data,$this->table_campaign);
	
	        if($result){
			   $this->session->set_flashdata('msg',array('message' => 'Campaign has been successfully updated.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
			   redirect('products/campaign-edit/'.$this->uri->segment(3)); 
		   }else{
			   $this->session->set_flashdata('msg',array('message' => "Unable to Campaign .Some error occurred.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			    redirect('products/campaign-edit/'.$this->uri->segment(3));   
		   }

	    }
	     $content['subview']="campaign_edit";
		 $this->load->view('layout', $content);
     }	

       public function campaign_status()
	   {	 
	     $content['admin']=admin_profile($this->login->mst_email);	       
	   	$id=$this->uri->segment(3);
	   	$status=$this->uri->segment(4); 
	      $data= array(
	                   'status' =>$status,
	                   'updated' =>date('Y-m-d H:i:s')
	                    );

	      //Product save      
	      $result = $this->Product->update('id',$id,$data,$this->table_campaign);
	
	        if($result){
			   $this->session->set_flashdata('msg',array('message' => 'Campaign Status has been successfully Changed.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
			   redirect('products/campaigns'); 
		   }else{
			   $this->session->set_flashdata('msg',array('message' => "Unable to Campaign .Some error occurred.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			     redirect('products/campaigns') ;
		   }

	   
     }	

    public function campaign_delete() {         	
		 $id=$this->uri->segment(3);
		 $product=$this->Product->delete('id',$id,$this->table_campaign);	
		  
		$this->session->set_flashdata('msg',array('message' => 'Campaign Data has been successfully Delete.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
				   redirect('products/campaigns');
	  }	
	


	public function getSubCate()
	{
		$CID = $this->input->post('CID');
		$sub_category = $this->Catalog_Model->getCateList('cate_id',$CID,'scate_name','scate_remove','scate_status',$this->table_sub_category);
		echo $result = '';
			if(!empty($sub_category)){
			foreach($sub_category AS $scate_list){
		$name=$scate_list->scate_name;
		$id=$scate_list->scate_id;
		$count=scategory_count($id);
		$url="'".base_url()."'";
   if(!empty($count)){
	  echo $result='<li onClick="subcategory('.$id.','.$url.',this)" id="'.$id.'"><a href="javascript:void(0)" >'.$name.'('.$count.')</a></li>';
	   
	 }else{ echo $result='<li><a   href="javascript:void(0)">'.$name.'('.$count.')</a></li>';}
	 }
	    }else{ echo $result = '';}	
		 return $result;
	}
	
	public function getChildCate()
	{
		 $SID = $this->input->post('SID');
		$category = $this->Catalog_Model->getCateList('scate_id',$SID,'child_name','child_remove','child_status',$this->table_child_category);
		
		echo $result = '';
			if(!empty($category)){
			foreach($category AS $child_list){
		$name=$child_list->child_name;
		$id=$child_list->child_id;
        $url="'".base_url()."'";
         $getname="'".$name."'";		
	  echo $result='<li><a   href="javascript:void(0)"  onClick="childcategory('.$id.','.$getname.','.$url.',this)">'.$name.'</a></li>';
	   
			}
	    }else{ echo $result = '';}	
		 return $result;
	}



public function category_search()
	{ 	
	   $search=$this->input->post('search');
	   $category = $this->Catalog_Model->get_Cate_filter('cate_name',$search,'cate_name','cate_remove','cate_status',$this->table_category);
	     $get_sub_category = $this->Catalog_Model->cate_list('scate_name','scate_remove','scate_status',$this->table_sub_category);
	      $get_child_category = $this->Catalog_Model->cate_list('child_name','child_remove','child_status',$this->table_child_category);
	  $sub_category = $this->Catalog_Model->get_Cate_filter('scate_name',$search,'scate_name','scate_remove','scate_status',$this->table_sub_category);
	    $child_category = $this->Catalog_Model->get_Cate_filter('child_name',$search,'child_name','child_remove','child_status',$this->table_child_category);
       $url=base_url();
	 if (!empty($category))
     {  
     	  echo '<ul class="booking-list"  style="background: #fff; border: 1px solid #E3E3E3;    margin-bottom: -16px;">';
          foreach ($category as $row):  
     	  $cateid=$row->cate_id;
             echo '<li><a class="booking-item " href="javascript:void(0);" onclick="getValue(this);" id="'.$cateid.'" category="cate" url="'.$url.'">'.$row->cate_name.' </a>
                     </li>   ';
         if (!empty($get_sub_category)){ 
         foreach ($get_sub_category as $srow):  
     	 $scateid=$srow->scate_id;
     	 if($srow->cate_id==$cateid){
             echo '<li><a class="booking-item " href="javascript:void(0);" onclick="getValue(this);" id="'.$scateid.'" category="sub" url="'.$url.'"> - '.$srow->scate_name.' </a>
                     </li> ';
             if (!empty($get_child_category)){ 
               foreach ($get_child_category as $crow):       	
     	 if($crow->scate_id==$scateid){
             echo '<li><a class="booking-item " href="javascript:void(0);" onclick="getValue(this);" id="'.$crow->child_id.'" category="child" url="'.$url.'"> -- '.$crow->child_name.' </a>
                     </li>     ';
     	 }
          endforeach;
     	 }
     	}
          endforeach;
         }
          endforeach;
          echo '</ul>';
		 
     }elseif (!empty($sub_category)){
     	echo '<ul class="booking-list"  style="background: #fff; border: 1px solid #E3E3E3;    margin-bottom: -16px;">';
     	 foreach ($sub_category as $srow):  
     	 $scateid=$srow->scate_id;
             echo '<li><a class="booking-item " href="javascript:void(0);" onclick="getValue(this);" id="'.$scateid.'" category="sub" url="'.$url.'" > '.category_name($srow->cate_id).' - '.$srow->scate_name.' </a>
                     </li> ';
             if (!empty($get_child_category)){ 
               foreach ($get_child_category as $crow):       	
     	 if($crow->scate_id==$scateid){
             echo '<li><a class="booking-item " href="javascript:void(0);" onclick="getValue(this);" id="'.$crow->child_id.'"  category="child" url="'.$url.'"> '.category_name($srow->cate_id).' - '.$srow->scate_name.' -- '.$crow->child_name.' </a>
                     </li>     ';
     	 }
          endforeach;
     	 }
     	
          endforeach;
          echo '</ul>';

     }elseif (!empty($child_category)){
     echo '<ul class="booking-list"  style="background: #fff; border: 1px solid #E3E3E3;    margin-bottom: -16px;">';     	 
               foreach ($get_child_category as $crow):      	
     	
             echo '<li><a class="booking-item " href="javascript:void(0);" onclick="getValue(this);" id="'.$crow->child_id.'" category="child" url="'.$url.'"> '.category_name($crow->cate_id).' - '.sub_category_name($crow->scate_id).' -- '.$crow->child_name.' </a>
                     </li>     ';
     	
          endforeach;
           echo '</ul>';
     	 

     }
	  
		
		
		
	}









	
	
	
	 
	
	
	
	
	
	
}
