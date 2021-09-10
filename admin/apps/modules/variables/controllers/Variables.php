<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Variables extends MY_Controller {
	 
	public function __construct() 
	{
        parent::__construct(); 
		$this->load->helper("common");	
		$this->login = $this->session->userdata('logged_in_admin');			
		if(empty($this->login)){
			redirect('login','refresh');
		}
		$this->load->model("Variables_model",'Variables');
		/*--- Property Category Table ---*/ 
		$this->pctid="procat_id";
		$this->pctname="procat_name";
		$this->pcategory="tbl_property_category";
		/*--- Property Group Table ---*/ 
		$this->pgid="pgrp_id";
		$this->pgname="pgrp_name";
		$this->pGroup="tbl_property_group";
		/*--- Location Table ---*/
		$this->loc_id="loc_id";
		$this->loc_name="loc_name";
		$this->tbl_locations="tbl_locations";        	
    }

    /*--- FOR PROPERTY TYPE LISTING ---*/
	 public function index()
	 {
 		$content['admin']=admin_profile($this->login->mst_email);	
    	$content['propertyCategoryList'] = $this->Variables->get_property_category_list($this->pctid,$this->pcategory);           
		$content['subview']="variables/propertyCategoryList";
		$this->load->view('layout', $content); 
 	}

 	public function add()
 	{
 		$REQUESTMETHOD=$this->input->server('REQUEST_METHOD'); 
		if($REQUESTMETHOD=="POST"){
			$checkPropertyCategory = $this->Variables->check_exist($this->pctname,$this->input->post('propertyCategory'),$this->pcategory);
			//print_r($checkPropertyCategory);die;
			if($checkPropertyCategory==FALSE){
				$createDate = date('Y-m-d H:i:s');
				$propertyDataArray = array(
					'procat_name'      => $this->input->post('propertyCategory'),
					'procat_slug' 	   => $this->input->post('propertyCategorySlug'),
					'procat_name_ar' 	   => $this->input->post('propertyCategoryArabic'),
					'procat_status'    => $this->input->post('propertyCategoryStatus'),
					'procat_created'   => $createDate
				);
				$savePropertyCategory = $this->Variables->save_record($propertyDataArray,$this->pcategory);
				if($savePropertyCategory){
					$this->session->set_flashdata('msg',array('message' => 'Property Category Saved','class' => 'success','type'=>'Success!'));
			   		redirect('variables/add');
				}else{
					$this->session->set_flashdata('msg',array('message' => 'Something went wrong!','class' => 'danger','type'=>'Oops'));
			   		redirect('variables/add');
				}
			}else{
				$this->session->set_flashdata('msg',array('message' => 'Property category name exist!','class' => 'danger','type'=>'Oops'));
			   	redirect('variables/add');
			}
		}
 		$content['admin']=admin_profile($this->login->mst_email);	           
		$content['subview']="variables/propertyCategory";
		$this->load->view('layout', $content);
 	}
 	
 	public function edit()
 	{
 	    $content['admin']=admin_profile($this->login->mst_email);	       
	   	$catid=decode($this->uri->segment(3)); 	    
		$content['category'] = $this->Variables->single_category_info($this->pctid,$catid,$this->pcategory);
 	    $REQUESTMETHOD=$this->input->server('REQUEST_METHOD'); 
		if($REQUESTMETHOD=="POST"){
			$propertyDataArray = array(
				'procat_name'      => $this->input->post('propertyCategory'),
				'procat_slug' 	   => $this->input->post('propertyCategorySlug'),
				'procat_name_ar' 	   => $this->input->post('propertyCategoryArabic'),
				'procat_status'    => $this->input->post('propertyCategoryStatus')
			);
			$updatePropertyCategory = $this->Variables->update($this->pctid,$catid,$propertyDataArray,$this->pcategory);
			if($updatePropertyCategory){
				$this->session->set_flashdata('msg',array('message' => 'Property Category Updated','class' => 'success','type'=>'Success!'));
		   		redirect('variables/edit/'.encode($catid));
			}else{
				$this->session->set_flashdata('msg',array('message' => 'Something went wrong!','class' => 'danger','type'=>'Oops'));
		   		redirect('variables/edit/'.encode($catid));
			}
		}
 		$content['admin']=admin_profile($this->login->mst_email);	           
		$content['subview']="variables/propertyCategoryEdit";
		$this->load->view('layout', $content);
 	}

 	public function trash($id=null)
 	{
 		if(isset($id)){
 			$procatid = decode($id);
 			$removeCategory = $this->Variables->remove_property_category($this->pctid,$procatid,$this->pcategory);
 			if($removeCategory==1){
 				$this->session->set_flashdata('msg',array('message' => 'Category removed','class' => 'success','type'=>'Success!'));
			   	redirect('variables');
 			}else{
 				$this->session->set_flashdata('msg',array('message' => 'Something went wrong!.','class' => 'danger','type'=>'Oops!'));
			   	redirect('variables');
 			}
 		}
	}


}
