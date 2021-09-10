<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Draws extends MY_Controller {
	 
	public function __construct() 
	{
        parent::__construct(); 
		$this->load->helper("common");	
		$this->login = $this->session->userdata('logged_in_admin');			
	    if(empty($this->login)){
		    redirect('login','refresh');
	    } 
        $this->load->model("Draw_model",'Draw');
       /* ========FOR MASTER TABEL=========== */ 			
        $this->fld_email="mst_email";	
        $this->fld_password="mst_password";	
        $this->table_master="tbl_master";	
         /* ========FOR CATEGORY TABEL=========== */ 			
        $this->table_category="tbl_property_category";
        /* ========FOR PRODUCT TABEL=========== */ 
        $this->p_id="p_id";
        $this->product="tbl_product";
        /* ========FOR REWARD TABEL=========== */ 
        $this->r_id="r_id";
        $this->table_reward="tbl_reward";
        /* ========FOR campaign TABEL=========== */ 
        $this->camp_id="id";
        $this->table_campaign="tbl_campaign";
        /*--- DRAW TABLE ---*/ 
        $this->drid="drw_id";
        $this->drcate="p_category";
        $this->draws="tbl_draws";
    }
 
	public function index() 
	{    	
        $content['admin']=admin_profile($this->login->mst_email);	     
        $content['draws']= $this->Draw->get_list($this->drid,$this->draws);
		$content['subview']="viewDrawList";
		$this->load->view('layout', $content);
	}	

	public function add() 
	{    	
        $content['admin']=admin_profile($this->login->mst_email);	
        $content['category'] = $this->Draw->cate_list($this->table_category);	    
        $content['product']= $this->Draw->get_product_list($this->p_id,$this->product);
		$content['subview']="addProducts";
		$this->load->view('layout', $content);   
	}	

	public function draw_save()
    {  
       	$checkName = $this->Draw->check($this->input->post('drw_title'),$this->draws); 
     	if(empty($checkName)){  
         	// Image
         	$path=FCPATH . 'uploads/videos';
    		$image_name='drw_video';
    		$image_data=$this->Draw->images_upload($image_name,$path); 
    		// Image	    	
    	    if(empty($_FILES['drw_thumbnail']['name'])){
    	    	 $image_thumb=$this->input->post('drw_thumbnail');
    	    }else{
         	  $path=FCPATH . 'uploads/videos';
    		  $image_thumb='drw_thumbnail';
    		  //$img1= $path.'/'. $checkName->drw_thumbnail;  
    		  //if (!unlink($img1)) {} else { }
    		  $image_thumbnail=$this->Draw->images_thumbnail_upload($image_thumb,$path);  
              // Image
            }
            
            if(!empty($this->input->post('drw_title'))){
                $data= array(
                    // 'drw_category' =>$this->input->post('drw_category'),
                    'drw_products' =>$this->input->post('drw_products'),
    	            'drw_title' =>$this->input->post('drw_title'),
    	            'drw_title_ar' =>$this->input->post('drw_title_ar'),
                    'drw_video' =>$image_data,
                    'drw_thumbnail'=>$image_thumbnail,
                    'drw_status' =>$this->input->post('drw_status'),
                    'drw_created' =>date('Y-m-d H:i:s')
                );
                //print_r($data);die;
    	        //Draw save      
    	        $result = $this->Draw->save($data,$this->draws);
    	        if($result){
    			   $this->session->set_flashdata('msg',array('message' => 'Saved.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
    			   redirect('draws/add'); 
    		   }else{
    			   $this->session->set_flashdata('msg',array('message' => "Some error occurred.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
    			   redirect('draws/add');   
    		   }
           }else{
               $this->session->set_flashdata('msg',array('message' => "file formate not allowed",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
    		   redirect('draws/add'); 
           }
	        
		}else{
			 $this->session->set_flashdata('msg',array('message' => "already added.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			 redirect('draws/add'); 
		}
    }

    public function draw_edit()
    {	 
        $content['admin']=admin_profile($this->login->mst_email);	       
   	    $did=decode($this->uri->segment(3)); 	    
	    $content['draws'] = $this->Draw->single_product($this->drid,$did,$this->draws);
	    $content['category'] = $this->Draw->cate_list($this->table_category);
	    $content['product']= $this->Draw->get_product_list($this->p_id,$this->product);
	    $RequestMethod = $this->input->server('REQUEST_METHOD');
        if($RequestMethod == "POST") { 	    	
    	  	// Image
         	$path=FCPATH . 'uploads/videos';
    		$image_name='drw_video';
    		$image_data=$this->Draw->images_upload($image_name,$path); 
    		// Image	    	
    	    if(empty($_FILES['drw_thumbnail']['name'])){
    	    	 $image_thumb=$this->input->post('drw_thumbnail');
    	    }else{
         	  $path=FCPATH . 'uploads/videos/thumbnails';
    		  $image_thumb='drw_thumbnail';
    		  $img1= $path.'/'. $content['draws']->drw_thumbnail;  
    		  if (!unlink($img1)) {} else { }
    		  $image_thumbnail=$this->Draw->images_thumbnail_upload($image_thumb,$path);  
              // Image
            }
             
            $data= array(
                'drw_category' =>$this->input->post('drw_category'),
                'drw_products' =>$this->input->post('drw_products'),
	            'drw_title' =>$this->input->post('drw_title'),
	            'drw_title_ar' =>$this->input->post('drw_title_ar'),
                'drw_video' =>$image_data,
                'drw_thumbnail'=>$image_thumbnail,
                'drw_status' =>$this->input->post('drw_status')
            );
            //print_r($data);die;

            //Draw Update      
            $result = $this->Draw->update($this->drid,$did,$data,$this->draws);

	        if($result){
			   $this->session->set_flashdata('msg',array('message' => 'updated.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
			   redirect('draws/draw-edit/'.$this->uri->segment(3)); 
		   }else{
			   $this->session->set_flashdata('msg',array('message' => "Some error occurred.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			    redirect('draws/draw-edit/'.$this->uri->segment(3));   
		   }

        }
	     $content['subview']="product_edit";
		 $this->load->view('layout', $content);
    }	


    public function draw_status()
	{	 
	    $content['admin']=admin_profile($this->login->mst_email);	       
	   	$did=$this->uri->segment(3);
	   	$status=$this->uri->segment(4); 	    
	    $data= array(
           'drw_status' =>$status,
           'drw_updated' =>date('Y-m-d H:i:s')
        );      
	    $result = $this->Draw->update($this->drid,$did,$data,$this->draws);
	
	    if($result){
		   $this->session->set_flashdata('msg',array('message' => 'Status has been Changed.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
		   redirect('draws'); 
		}else{
		   $this->session->set_flashdata('msg',array('message' => "Some error occurred.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
		   redirect('draws') ;
		}
    }	

      
    public function draw_delete() 
	{         	
		$did=$this->uri->segment(3);		 
	    $path=FCPATH . 'uploads/videos';
	    $productimg= $this->Draw->single_product($this->drid,$did,$this->draws);
	    $img1= $path.'/'. $productimg->drw_video;  
		if (!unlink($img1)) {} else { }
		$product=$this->Draw->delete($this->drid,$did,$this->draws);	
		$this->session->set_flashdata('msg',array('message' => 'record deleted.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
		redirect('draws');
	  }	


}
