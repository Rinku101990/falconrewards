<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends MY_Controller {
	 
	public function __construct() 
	{
		parent::__construct(); 
		$this->load->model("Videos_model","Video");
		if(!empty($this->session->userdata('logged_in_users'))){
	    	$this->customer=customer($this->session->userdata('logged_in_users')->usr_id);
	    }
	    /*--- Draws Table ---*/
	    $this->drid="drw_id";
	    $this->drsts="drw_status";
	    $this->draws="tbl_draws";
	    
        /*--- For Winners Table ---*/ 
        $this->winid="win_id";
        $this->winners="tbl_winners";
    }
  
    public function index()
	{ 		
		$content['pastdraws'] = $this->Video->past_draw_list($this->drid,$this->drsts,$this->draws);
		$content['draws'] = $this->Video->draws_list($this->drid,$this->drsts,$this->draws);
		$content['winners'] = $this->Video->winner_list($this->winid,$this->winners);
		$content['subview']='videos/videos';
		$this->load->view('layout', $content);
	}

	
}
