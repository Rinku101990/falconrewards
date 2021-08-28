<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {
	 
	public function __construct() {
		parent::__construct(); 
		$this->load->model("Page_model","Page");
		if(!empty($this->session->userdata('logged_in_users'))){
	    	$this->customer=customer($this->session->userdata('logged_in_users')->usr_id);
	    }

	   /* ========FOR PAGE TABEL=========== */ 			
            $this->fld_pg_id="pg_id";	
            $this->table_page="tbl_page";
		
		//$this->load->helper("common");	
    }
  
    public function about()
	{ 		
		$content['page'] = $this->Page->get_page_list('1',$this->table_page);
		$content['subview']='page/about';
		$this->load->view('layout', $content);
	}

    public function contacts()
	{ 		
		$content['subview']='page/contact';
		$this->load->view('layout', $content);
	}

	public function works()
	{ 		
		$content['page'] = $this->Page->get_page_list('2',$this->table_page);
		$content['subview']='page/how_it_works';
		$this->load->view('layout', $content);
	}

	public function winners()
	{ 		
		$content['page'] = $this->Page->get_page_list('3',$this->table_page);
		$content['subview']='page/winners';
		$this->load->view('layout', $content);
	}

	public function faq()
	{ 		
		$content['page'] = $this->Page->get_page_list('4',$this->table_page);
		$content['subview']='page/faq';
		$this->load->view('layout', $content);
	}

	public function privacy()
	{ 		
		$content['page'] = $this->Page->get_page_list('6',$this->table_page);
		$content['subview']='page/privacy';
		$this->load->view('layout', $content);
	}

    public function terms()
	{ 		
		$content['page'] = $this->Page->get_page_list('7',$this->table_page);
		$content['subview']='page/terms';
		$this->load->view('layout', $content);
	}

	public function charities()
	{ 		
		$content['page'] = $this->Page->get_page_list('5',$this->table_page);
		$content['subview']='page/charities';
		$this->load->view('layout', $content);
	}
	public function test()
	{ 		
		//$content['subview']='page/test';
		$this->load->view('page/test');
	}
}
