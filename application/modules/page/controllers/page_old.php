<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {
	 
	public function __construct() {
		parent::__construct(); 
		$this->load->model("Page_model","Page");
		if(!empty($this->session->userdata('logged_in_users'))){
	    	$this->customer=customer($this->session->userdata('logged_in_users')->usr_id);
	    }
		
		//$this->load->helper("common");	
    }
  
    public function about()
	{ 		
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
		$content['subview']='page/how_it_works';
		$this->load->view('layout', $content);
	}

	public function winners()
	{ 		
		$content['subview']='page/winners';
		$this->load->view('layout', $content);
	}

	public function faq()
	{ 		
		$content['subview']='page/faq';
		$this->load->view('layout', $content);
	}

	public function privacy()
	{ 		
		$content['subview']='page/privacy';
		$this->load->view('layout', $content);
	}

    public function terms()
	{ 		
		$content['subview']='page/terms';
		$this->load->view('layout', $content);
	}

	public function charities()
	{ 		
		$content['subview']='page/charities';
		$this->load->view('layout', $content);
	}
}
