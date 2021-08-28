<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends MY_Controller {
	 
	public function __construct() {
		parent::__construct(); 
	}
	
    /*--- DETECT DEVICE TYPE ---*/ 	
    public function index()
    {
        preg_match("/iPhone|Android|iPad|iPod|webOS/", $_SERVER['HTTP_USER_AGENT'], $matches);
        $os = current($matches);
        
        switch($os){
           case 'iPhone': echo "iPhone"; break;
           case 'Android': echo "Android"; break;
           case 'iPad': echo "iPad"; break;
           case 'iPod': echo "iPod"; break;
           case 'webOS': echo "WebOS"; break;
        }
            
    }
}