<?php 
    $this->load->view('include/header');
    if($this->websiteLang=='en'){
        $this->load->view('include/topbar');
        $this->load->view($subview); 
        $this->load->view('include/footer'); 
    }else if($this->websiteLang=='ar'){
        $this->load->view('include/topbar_ar');
        $this->load->view($subview); 
        $this->load->view('include/footer_ar');     
    }
 ?>