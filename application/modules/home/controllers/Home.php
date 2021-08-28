<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	 
	public function __construct() 
	{
		parent::__construct(); 
		$this->load->model("Home_model","Home");
		if(!empty($this->session->userdata('logged_in_users'))){
	    	$this->customer=customer($this->session->userdata('logged_in_users')->usr_id);
	    }
		//$this->load->helper("common");

		/*--- Products Table ---*/ 
		$this->proid="p_id";
		$this->prosts="p_status";
		$this->products="tbl_products";

		/*--- Reward Table ---*/ 
		$this->rid="r_id";
		$this->rsts="r_status";
		$this->reward="tbl_reward";

		/*--- Campain Table ---*/
		$this->campid="id";
		$this->cpid="product";
		$this->campsts="status";
		$this->campaign="tbl_campaign"; 

		/*--- For Banner Table ---*/ 			
        $this->fld_slr_id="slr_id";	
        $this->table_banner="tbl_banner";

        /*--- For Coming Products Table---*/ 			
        $this->fld_cp_id="id";	
        $this->table_coming_product="tbl_coming_product";

        /*--- For Winners Table ---*/ 
        $this->winid="win_id";
        $this->winners="tbl_winners";
    }
  
    public function index()
	{ 		
	   	$content['banner'] = $this->Home->get_banner_list($this->table_banner);
	   	$content['products'] = $this->Home->getProductsList($this->cpid,$this->campaign);
		$content['coming_product'] = $this->Home->coming_product_list($this->table_coming_product);
		$content['winners'] = $this->Home->winner_list($this->winid,$this->winners);
		$content['subview']='home/home';
		$this->load->view('layout', $content);
	}

	public function search()
	{ 		
		$RequestMethod = $this->input->server('REQUEST_METHOD');
		if($RequestMethod == "POST") { 
			$content['products'] = $this->Home->Product_name_Search($this->input->post('search'),$this->campaign);
		}else{
			$com_id=decode($this->uri->segment(3));		
			$content['products'] = $this->Home->Product_id_Search($com_id,$this->campaign);
	   	}
		$content['subview']='home/search';
		$this->load->view('layout',$content);
	}

	public function search_data()
	{		
	 	$search = $this->input->post('search');	
	 	$Product = $this->Home->Product_Search($search,$this->campaign);
	 	if (!empty($Product))
     	{  
     		echo'<div class="typed-search-box"><div id="search-content">
     			 	<div class="product">            
             			<ul style="padding:10px"> ';
          				foreach ($Product as $row):    
               				echo ' <li style="list-style: none;">
                    					<a href="'.base_url('home/search/').encode($row->id).'">
                     						<div class="d-flex search-product align-items-center">
					                            <div class="w-100 overflow--hidden" style="margin-left:3%">
					                                <div class="product-name text-truncate float-left">
					                                 	<p style="font-size: 15px;    margin-bottom: 0px;">  '.$row->p_name.' &nbsp; - &nbsp; <b>AED'.number_format(price($this->website->web_currency,$row->product),2).'</b></p>
					                                </div>
                                    			</div>
                                    		</div>
                                    	</a>
                					</li>';
          				endforeach;
           	echo' </ul></div></div></div>';
		}else{
           echo "<p style='font-size: 13px;position: absolute;top: 105%;border: 1px solid #eceff1;box-shadow: 0 5px 25px 0 rgba(123,123,123,0.15);background: #fff;width: calc(53% - 48px);transition: all 0.3s;-webkit-transition: all 0.3s;-ms-webkit-transition: all 0.3s;min-height: 40px;z-index: 999999;height: 40px;background:#fff;padding:10px;width: 100%;border: 1px solid #f1f3f6;''> <em> No Record found ... </em> </p>";
     	}	
		
	 }
	 
 	public function product()
	{ 	
	    $pid=decode($this->uri->segment(2));
		$content['coming_product'] = $this->Home->coming_product($pid,$this->table_coming_product);
		$content['product'] = $this->Home->single_coming_product($pid,$this->table_coming_product);
		$content['subview']='home/product';
		$this->load->view('layout', $content);
	}

	/*--- Language switcher ---*/ 
	public function language()
	{ 	  
		$REQUESTMETHOD=$this->input->server('REQUEST_METHOD');
		if($REQUESTMETHOD=='POST'){	    
			$lang=$this->input->post('customLang');
			$data=array('web_lang' => $lang);
			$update=$this->Home->update('web_id','1',$data,'tbl_website_info');
			echo "set";
		}else{
			echo "unset";
		}
	}

}
