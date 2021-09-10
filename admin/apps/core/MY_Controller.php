<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* load the MX_Router class */
require APPPATH . "third_party/MX/Controller.php";

class MY_Controller extends MX_Controller
{	

	function __construct() 
	{
		parent::__construct();		
		$this->_hmvc_fixes();
		$this->load->model("MY_Model");
		/* ========FOR WEBSITE =========== */
		$this->fld_wid="web_id";	 			
		$this->table_website="tbl_website_info";
		/*--- FOR PRODUCTS ---*/ 
		$this->fld_pid="p_id";	 			
		$this->products="tbl_product";
		/*--- FOR VENDORS ---*/ 
		$this->fld_vid="vnd_id";	 			
		$this->vendors="tbl_vendor";
		/*--- FOR CUSTOMERS ---*/ 
		$this->fld_cid="cust_id";	 			
		$this->customers="tbl_customer";
		/*--- FOR SALES ---*/ 
		$this->fld_oid="cust_id";	 			
		$this->orders="tbl_orders";
		
		$Websitedata=$this->MY_Model->get_website($this->fld_wid,$this->table_website);
	    $this->website=$Websitedata; 
	    $this->set_timezone($this->website->web_timezone);
       	//$data['totalRevenue']=$this->MY_Model->get_revenue_list($this->orders);
       	// $data['totalProducts']=$this->MY_Model->get_list($this->fld_pid,$this->products);
       	// $data['totalVendors']=$this->MY_Model->get_list($this->fld_vid,$this->vendors);
       	// $data['totalCustomers']=$this->MY_Model->get_list($this->fld_cid,$this->customers);         
	    
	    $countRecord=array(
		  	'revenue'=>'0',
		  	'products'=>'0',
		  	'vendors'=>'0',
		  	'customers'=>'0',	  
		);    
		$this->AllProduct = $countRecord; 
	}
	
	public function set_timezone($id)
	{ 
        $this->db->select('zone_name');
        $this->db->from( 'tbl_timezone');
        $this->db->where('zone_id',$id);
        $query = $this->db->get();
		// $this->db->last_query();
        if ($query->num_rows() > 0) {
            date_default_timezone_set($query->row()->zone_name);
        }else {
            return false;
        }
    }
	
	function _hmvc_fixes()
	{		
		//fix callback form_validation		
		//https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc
		$this->load->library('form_validation');
		$this->form_validation->CI =& $this;
		
	}
	
	
	 

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
