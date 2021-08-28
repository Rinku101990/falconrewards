<?php 
    $this->load->view('include/header');
    if($this->website->web_lang=='en'){
        $this->load->view('include/topbar');
        $this->load->view($subview); 
        $this->load->view('include/footer'); 
    }else if($this->website->web_lang=='ar'){
        $this->load->view('include/topbar_ar');
        $this->load->view($subview); 
        $this->load->view('include/footer_ar');     
    }
 ?>