<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Winners extends MY_Controller {
	 
	public function __construct() 
	{
        parent::__construct(); 
		$this->load->helper("common");	
		$this->login = $this->session->userdata('logged_in_admin');			
	    if(empty($this->login)){
		    redirect('login','refresh');
	    } 
        $this->load->model("Winners_model",'Winners');
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
        /*--- Winner TABLE ---*/ 
        $this->winid="win_id";
        $this->winners="tbl_winners";
        /*--- User Table ---*/
        $this->uid="usr_id";
        $this->users="tbl_users";
    }
 
	public function index() 
	{    	
        $content['admin']=admin_profile($this->login->mst_email);	     
        $content['winners']= $this->Winners->getWinnerslist($this->winid,$this->winners);
		$content['subview']="viewWinnersList";
		$this->load->view('layout', $content);
	}	

	public function add() 
	{    	
        $content['admin']=admin_profile($this->login->mst_email);	
        $content['category'] = $this->Winners->cate_list($this->table_category);	    
        $content['draws']= $this->Winners->get_list($this->drid,$this->draws);
        $content['user'] = $this->Winners->user_list($this->uid,$this->users);
		$content['subview']="winner_add";
		$this->load->view('layout', $content);   
	}	

	public function winner_save()
    {  
       	$checkName = $this->Winners->check($this->input->post('ticket_id'),$this->winners); 
     	if(empty($checkName)){  
         	// Image
         	$path=FCPATH . 'uploads/winners';
    		$image_name='win_proile';
    		$image_data=$this->Winners->images_upload($image_name,$path); 
            $img_url=base_url('uploads/winners/').$image_data;
            $data= array(
                'draw_id' =>$this->input->post('drw_products'),
	            'usr_id' =>$this->input->post('usr_name'),
	            'ticket_id' =>$this->input->post('ticket'),
                'usr_profile' =>$image_data,
                'win_created' =>date('Y-m-d H:i:s')
            );
            //print_r($data);die;
	        $result = $this->Winners->save($data,$this->winners);
	        if($result){
			   $this->session->set_flashdata('msg',array('message' => 'Saved.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
			   redirect('winners/add'); 
		   }else{
			   $this->session->set_flashdata('msg',array('message' => "Some error occurred.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			   redirect('winners/add');   
		   }
	        
		}else{
			 $this->session->set_flashdata('msg',array('message' => "already added.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			 redirect('winners/add'); 
		}
    }

    public function winner_edit()
    {	 
        $content['admin']=admin_profile($this->login->mst_email);	       
   	    $did=decode($this->uri->segment(3)); 	    
	    $content['draws'] = $this->Winners->single_product($this->drid,$did,$this->draws);
	    $content['category'] = $this->Winners->cate_list($this->table_category);
	    $content['product']= $this->Winners->get_product_list($this->p_id,$this->product);
	    $RequestMethod = $this->input->server('REQUEST_METHOD');
        if($RequestMethod == "POST") { 	
	    	// Image	    	
    	   // if(empty($_FILES['p_picture']['name'])){
    	   // 	 $image_data=$this->input->post('prev_picture');
    	   // }else{
        //  	  $path=FCPATH . 'uploads/product';
    		  //$image_name='p_picture';
    		  //$img1= $path.'/'. $content['product']->p_picture;  
    		  //if (!unlink($img1)) {} else { }
    		  //$image_data=$this->Draw->images_upload($image_name,$path);  
        //       // Image
        //     }
             
            $data= array(
                'drw_category' =>$this->input->post('drw_category'),
                'drw_products' =>$this->input->post('drw_products'),
	            'drw_title' =>$this->input->post('drw_title'),
	            'drw_title_ar' =>$this->input->post('drw_title_ar'),
                //'drw_video' =>$img_url,
                'drw_status' =>$this->input->post('drw_status')
            );

            //Draw Update      
            $result = $this->Winners->update($this->drid,$did,$data,$this->draws);

	        if($result){
			   $this->session->set_flashdata('msg',array('message' => 'updated.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
			   redirect('winners/winner-edit/'.$this->uri->segment(3)); 
		   }else{
			   $this->session->set_flashdata('msg',array('message' => "Some error occurred.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
			    redirect('winners/winner-edit/'.$this->uri->segment(3));   
		   }

        }
	     $content['subview']="winner_edit";
		 $this->load->view('layout', $content);
    }	


    public function winner_status()
	{	 
	    $content['admin']=admin_profile($this->login->mst_email);	       
	   	$did=$this->uri->segment(3);
	   	$status=$this->uri->segment(4); 	    
	    $data= array(
           'drw_status' =>$status,
           'drw_updated' =>date('Y-m-d H:i:s')
        );      
	    $result = $this->Winners->update($this->drid,$did,$data,$this->draws);
	
	    if($result){
		   $this->session->set_flashdata('msg',array('message' => 'Status has been Changed.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
		   redirect('winners'); 
		}else{
		   $this->session->set_flashdata('msg',array('message' => "Some error occurred.",'class' => 'danger','type'=>'Oops!','icon'=>'slash'));
		   redirect('winners') ;
		}
    }	

      
    public function winner_delete() 
	{         	
		$did=$this->uri->segment(3);		 
	    $path=FCPATH . 'uploads/winners';
	    $productimg= $this->Winners->single_product($this->drid,$did,$this->draws);
	    $img1= $path.'/'. $productimg->drw_video;  
		if (!unlink($img1)) {} else { }
		$product=$this->Winners->delete($this->drid,$did,$this->draws);	
		$this->session->set_flashdata('msg',array('message' => 'record deleted.','class' => 'success','type'=>'Ok!','icon'=>'thumbs-up'));
		redirect('winners');
	  }	


}
