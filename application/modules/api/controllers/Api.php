<?php
   
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Mobile_Detect.php';
     
class Api extends REST_Controller {
    
	/**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
        parent::__construct();
        $this->load->library("security");
        $this->load->model("Api_model","API");
        /* --- FOR MOBILE BANNERS TABEL --- */ 			
        $this->fld_mbid="id";	
        $this->mbanners="tbl_mobile_banners";
        /*--- PROUCTS TABLE ---*/ 
	    $this->proid="p_id";
		$this->prosts="p_status";
		$this->products="tbl_product";
		/*--- REWARD TABLE ---*/ 
		$this->rid="r_id";
		$this->rsts="r_status";
		$this->reward="tbl_reward";
		/*--- CAMPAINS TABLE ---*/
		$this->campid="id";
		$this->cpid="product";
		$this->campsts="status";
		$this->campaign="tbl_campaign";
		/*--- Get Country List ---*/ 
        $this->cntryid="id";
        $this->country="tbl_country";
		/*--- USERS TABLE ---*/
        $this->uid="usr_id";
        $this->uemail="usr_email";
        $this->upassword="usr_password";
        $this->users="tbl_users"; 
        /* ========FOR ORDERS =========== */
        $this->fld_ordid="ord_id";
        $this->refId="ord_reference_no";
        $this->table_orders="tbl_orders";
        /* ========FOR ORDER PRODUCTS =========== */
        $this->fld_opid="pord_id";
        $this->table_order_products="tbl_orders_product";
         /* ========FOR TAX =========== */
        $this->txt_id="txt_id";         
        $this->tax="tbl_tax";
    }
    
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    
    public function banners_get()
    {
        $data = $this->API->getBannersList($this->fld_mbid,$this->mbanners);
        if(!empty($data)){
            $arrayData=array();
            foreach($data as $bnrsvalue){
                $arrayData[]=array(
                    'id'=>$bnrsvalue->id,
                    'bannerurl'=>$bnrsvalue->bannerurl
                );
            }
            $dataReturn=$arrayData;
            $this->response($dataReturn, REST_Controller::HTTP_OK);
        }else{
            $message = [
                'status' => FALSE,
                'message' => 'banners list not found'
            ];
            $this->response($message, REST_Controller::HTTP_NOT_FOUND);
        }
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function products_get($proid = 0)
	{
        if(!empty($proid)){
            $data1 = $this->API->getProductDetail($this->cpid,$proid,$this->campaign);
            $get_total=sold($data1->p_id)+$data1->p_soldplus;
            $sold= (round($get_total*100/$data1->p_qty)+$data1->p_sold_plus).'%';
             if(!empty($get_total)){$sold_P=$get_total;}else{$sold_P='0';}
            if($data1->p_id=='1'){$total_qty='300';}elseif($data1->p_id=='3'){$total_qty='300';}else{$total_qty=$data1->p_qty;} 
            if(!empty($data1)){
                $data=array('p_id' => $data1->p_id,
                'p_name' => $data1->p_name,
                'p_category' => $data1->p_category,
                'p_sku' => $data1->p_sku,
                'p_aed' => $data1->p_aed,
                'p_usd' => $data1->p_usd,
                'p_qty' => $data1->p_qty,
                'p_ticket' => $data1->p_ticket,
                // 'p_picture_url' => $data1->p_picture_url,
                'p_mobile_picture' => $data1->p_mobile_picture,
                'p_expirymsg' => $data1->p_expirymsg,
                'p_description' => strip_tags($data1->p_description),
                'r_title' => $data1->r_title,
                'r_price' => $data1->r_price,
                'r_category' => $data1->r_category,
                'r_image_url' => $data1->r_image_url,
                'r_short_description' => strip_tags($data1->r_short_description),
                'camp_id' => $data1->camp_id,
                'camp_product_id' => $data1->camp_product_id,
                'comp_reward_id' => $data1->comp_reward_id,
                'sold' => $sold,
                'sold_p' => $sold_P,
                'total_qty' => $total_qty
                );
            }else{
                $data=false;
                $this->response($data, REST_Controller::HTTP_NOT_FOUND);
            }
        }else{
            $data1 = $this->API->getProductsList($this->cpid,$this->campaign);
           
            $array1=array();
            foreach($data1 as $dt_value){
            $get_total=sold($dt_value->p_id)+$dt_value->p_soldplus;
               $sold= (round($get_total*100/$dt_value->p_qty)+$dt_value->p_sold_plus).'%';
                 if(!empty($get_total)){$sold_P=$get_total;}else{$sold_P='0';}
             if($dt_value->p_id=='1'){$total_qty='300';}elseif($dt_value->p_id=='3'){$total_qty='300';}else{$total_qty=$dt_value->p_qty;}        
                $array1[]=array('p_id' => $dt_value->p_id,
                'p_name' => $dt_value->p_name,
                'p_category' => $dt_value->p_category,
                'p_sku' => $dt_value->p_sku,
                'p_aed' => $dt_value->p_aed,
                'p_usd' => $dt_value->p_usd,
                'p_qty' => $dt_value->p_qty,
                'p_ticket' => $dt_value->p_ticket,
                // 'p_picture_url' => $dt_value->p_picture_url,
                'p_mobile_picture' => $dt_value->p_mobile_picture,
                'p_expirymsg' =>   $dt_value->p_expirymsg,
                'p_description' => strip_tags($dt_value->p_description),
                'r_title' => $dt_value->r_title,
                'r_category' => $dt_value->r_category,
                'r_image_url' => $dt_value->r_image_url,
                'r_short_description' => strip_tags($dt_value->r_short_description),
                'camp_id' => $dt_value->camp_id,
                'camp_product_id' => $dt_value->camp_product_id,
                'comp_reward_id' => $dt_value->comp_reward_id,
                'sold' => $sold,
                'sold_p' => $sold_P,
                 'total_qty' => $total_qty,
                 'available' => $dt_value->p_available
                );
            }
            $data=$array1;
            // echo"<pre>";
            // print_r( $data);
            // die;
        }
        $this->response($data, REST_Controller::HTTP_OK);
	}
	
	 /**
     * Get All Country List
     * 
     * @return Response
    */ 
    
    public function country_get()
    {
        $data = $this->API->getCountryList($this->cntryid,$this->country);
        if(!empty($data)){
            $arrayData=array();
            foreach($data as $cntryvalue){
                $arrayData[]=array(
                    'id'=>$cntryvalue->id,
                    'name'=>$cntryvalue->name,
                    'sortname'=>$cntryvalue->sortname,
                    'phonecode'=>$cntryvalue->phonecode
                );
            }
            $dataReturn=$arrayData;
            $this->response($dataReturn, REST_Controller::HTTP_OK);
        }else{
            $message = [
                'status' => FALSE,
                'message' => 'Country list not found'
            ];
            $this->response($message, REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
    /**
     * Get All Tax List
     * 
     * @return Response
    */ 
    
    public function tax_get()
    {
        $tax = $this->API->tax_list($this->tax);
        if(!empty($tax)){
            $dataReturn=$tax;
            $this->response($dataReturn, REST_Controller::HTTP_OK);
        }else{
            $message = [
                'status' => FALSE,
                'message' => 'Tax list not found'
            ];
            $this->response($message, REST_Controller::HTTP_NOT_FOUND);
        }
    }
	
	/**
     * USER LOGIN API
     * -------------
     * @param: username or email
     * @param: password
     * -------------
     * @method: POST
     * @link: api/login
    */ 
    public function login_post()
    {
        header("Access-Control-Allow-Origin: *");

        # XSS Filtering (https://www.codeigniter.com/user_guide/libraries/security.html)
        $_POST = $this->security->xss_clean($_POST);
        # Form Validation
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('devicetype', '', '');
        $this->form_validation->set_rules('devicetoken', '', '');
        if($this->form_validation->run() == FALSE)
        {
            // Form Validation Errors
            $message = array(
                'status' => false,
                'error' => $this->form_validation->error_array(),
                'message' => validation_errors()
            );

            $this->response($message, REST_Controller::HTTP_NOT_FOUND);
        }
        else
        {
            
            // Load Login Function
            $mail = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $output = $this->API->user_login($mail,$password,$this->users);
            
            if(!empty($output) AND $output != FALSE)
            {
               
                // before login update
                $uemail = $output->usr_email;
                
                //DETECTION ENGINE
                // $detect = new Mobile_Detect;
                // if ($detect->isMobile() || $detect->isTablet()) {
                //     if($detect->isiOS()){
                //         $devicetype="ios";
                //     }
                //     if($detect->isAndroidOS()){
                //         $devicetype="android";
                //     }
                // } else {
                //     $devicetype="desktop";
                // }
                
                if($this->input->post('devicetype')=='ios')
                {
                    $data = array(
                        'usr_devicetype' => $this->input->post('devicetype'),
                        'usr_devicetoken' => $this->input->post('devicetoken'),
                        'usr_updated' => date('Y-m-d H:i:s')
                    );    
                }else{
                    $data = array(
                        'usr_devicetype_android' => $this->input->post('devicetype'),
                        'usr_devicetoken_android' => $this->input->post('devicetoken'),
                        'usr_updated' => date('Y-m-d H:i:s')
                    );
                }
                
                
                 
                
                $updated=$this->API->update_last_login($this->uemail,$uemail,$data,$this->users);
                // echo"<pre>";
                //print_r($updated);die;
                // Load Authorization Token Library
                // $this->load->library('Authorization_Token');
                
                // // Generate Token
                // $token_data['usr_id'] = $output->usr_id;
                // $token_data['usr_fname'] = $output->usr_fname;
                // $token_data['usr_lname'] = $output->usr_lname;
                // $token_data['usr_email'] = $output->usr_email;
                // $token_data['usr_status'] = $output->usr_status;
                // $token_data['time'] = time();
                // $user_token = $this->authorization_token->generateToken($token_data);
                
                if($output->usr_status=='0' && $output->usr_EmailVerifiedStatus=='0'){
                    $return_data = [
                        'usr_id' => $output->usr_id,
                        'usr_fname' => $output->usr_fname,
                        'usr_lname' => $output->usr_lname,
                        'usr_email' => $output->usr_email,
                        'usr_status' => $output->usr_status,
                        'usr_devicetype' => $this->input->post('devicetype'),
                        'usr_devicetoken' => $this->input->post('devicetoken')
                    ];
                    // Login Success
                    $message = [
                        'status' => true,
                        'data' => $return_data,
                        'message' => 'You are logged in successfully'
                    ];
                    $this->response($message, REST_Controller::HTTP_OK);
                }else{
                     // Account not verified
                    $message = [
                        'status' => false,
                        'data' => $return_data,
                        'message' => 'email address not verified'
                    ];
                    $this->response($message, REST_Controller::HTTP_NOT_ACCEPTABLE);
                }
            }
            else
            {
                // Login Error
                $message = [
                    'status' => FALSE,
                    'message' => 'Invalid Username or Password'
                ];
                $this->response($message, REST_Controller::HTTP_OK);
            }
        }
    }
    
    /**
     * User Signup
     * -----------
     * @method: POST
     * @return Response
    */

    public function signup_post() 
    {
        $_POST = $this->security->xss_clean($_POST);
        # Form Validation
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required');
        $this->form_validation->set_rules('phonecode', 'Area Code', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|max_length[10]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[100]');
        //$this->form_validation->set_rules('newsletter', 'Newsletter', 'trim|required|max_length[100]');
       // $this->form_validation->set_rules('agree_terms', 'Agree Terms', '');

        if($this->form_validation->run() == FALSE)
        {
            // Form Validation Errors
            $message = array(
                'status' => False,
                'error' => $this->form_validation->error_array(),
                'message' => validation_errors()
            );
            $this->response($message, REST_Controller::HTTP_NOT_FOUND);
        }
        else
        {
            // CHECK IF GIVEN EMAIL ID EXISTS
            $email=$this->input->post('email');
            $check = $this->API->check_email($this->uemail,$email,$this->users);
            //print_r($check);die;
            if($check > 0){
                // Set the response and exit
                $message = array(
                    'status' => FALSE,
                    'message' => 'Email address already in use.'
                );
                $this->response($message, REST_Controller::HTTP_OK);

            }else{
                
                
                if(empty($this->input->post('newsletter'))){
                    // Insert user data
                    $savedData = array(
                        'usr_fname'=>$this->input->post('fname'),
    					'usr_lname'=>$this->input->post('lname'),
    					'usr_email'=>$email,
    					'usr_phone_code'=>$this->input->post('phonecode'),
    					'usr_mobile'=>$this->input->post('phone'),
    					'usr_password'=>md5($this->input->post('password')),
    					'usr_status'=>'1',
    					'usr_EmailVerifiedStatus'=>'1',
    					'usr_newsletter'=>'0',
                        'usr_ipaddress'=>$this->input->post('ipaddress'),
                       // 'usr_agree_terms'=>$agree_terms,
                        'usr_devicetype'=>'',
                        'usr_devicetoken'=>'',
    					'usr_updated'=>date('Y-m-d H:i:s'),
    					'usr_created'=>date('Y-m-d H:i:s')
                    );
                }else{
                      $savedData = array(
                        'usr_fname'=>$this->input->post('fname'),
    					'usr_lname'=>$this->input->post('lname'),
    					'usr_email'=>$email,
    					'usr_phone_code'=>$this->input->post('phonecode'),
    					'usr_area_phone'=>$this->input->post('phonecode'),
    					'usr_mobile'=>$this->input->post('phone'),
    					'usr_password'=>md5($this->input->post('password')),
    					'usr_status'=>'1',
    					'usr_EmailVerifiedStatus'=>'1',
    					'usr_newsletter'=>'1',
                        'usr_ipaddress'=>$this->input->post('ipaddress'),
                       // 'usr_agree_terms'=>$agree_terms,
                        'usr_devicetype'=>'',
                        'usr_devicetoken'=>'',
    					'usr_updated'=>date('Y-m-d H:i:s'),
    					'usr_created'=>date('Y-m-d H:i:s')
                    );
                    
                }
                
                $saved = $this->API->save($savedData, $this->users);
                /*--- SEND MAIL AFTER REGISTRATION ---*/ 
                if(!empty($email)){
    			    $template=template(1);
        			if(!empty($template)){
            			$company=company_detail();				
            			$url=base_url("api/verify?email=")."". $email;
            			$name=$this->input->post('fname').' '.$this->input->post('lname');
            			$token=array(
            				'Company_Logo'=>$company['Company_Logo'],
            				'website_url'=>$company['website_url'],
            				'social_media_icons'=>$company['social_media_icons'],
            				'website_name'=>$company['website_name'],
            				'user_full_name'=>$name,
            				'verification_url'=>$url,
            				'contact_us_url'=>$company['website_url']
            			 );
            			 $pattern = '{%s}';
            			foreach($token as $key=>$val){
            				$varMap[sprintf($pattern,$key)] = $val;
            			}			
                        $get_msg=strtr($template->tp_body,$varMap);
            		    $subject=strtr($template->tp_subject,$varMap);	
            			
            			// 	$to=$cust_email; 
                        // 	email_send($to,$subject,$get_msg);
            
                        $from_email = "no-reply@falconrewards.com";
            		    $to_email = $email;
            		    $this->load->library('email');
            		    $config = array (
                          'mailtype' => 'html',
                          'charset'  => 'utf-8',
                          'priority' => '1'
                        );
                        $this->email->initialize($config);
            		    $this->email->from($from_email, "Falcon Rewards");
                        $this->email->to($to_email);
                        $this->email->subject($subject);
                        $this->email->message($get_msg);
                        $this->email->send();
        			}
			    }
                /*-- CHECK IF THE USER DATA SAVED OR NOT ---*/
                if($saved){
                    // Set the response and exit
                    $message = array(
                        'status' => TRUE,
                        'message' => 'Your have registered successfully. Please verify email address.',
                        'data' => $savedData
                    );
                    $this->response($message, REST_Controller::HTTP_OK);
                }else{
                    // Set the response and exit
                    $message = array(
                        'status' => FALSE,
                        'message' => 'Some problems occurred, please try again.'
                    );
                    $this->response($message, REST_Controller::HTTP_BAD_REQUEST);
                }
            }
        }
    }
    
    
     /**
     * Verify_email
     * -----------
     * @method: GET
     * @return Response
    */

    public function verify_get() 
    {
        $cust_email=$this->input->get('email');
		$check =$this->API->check_email($this->uemail,$cust_email,$this->users);	
        //print_r($cust_email);die;
		if($check->usr_status=='1' && $check->usr_EmailVerifiedStatus=='1'){	
    		$data=array(
    			//'usr_EmailVerifiedStatus'=>'0',
    			'usr_status'=>'0',
    			'usr_EmailVerifiedStatus'=>'0',
    			'usr_updated'=>date('Y-m-d H:i:s')
    		); 

            // start email
			if(!empty($cust_email)){
    			$template=template(8);
    			if(!empty($template)){
        			 $company=company_detail();		
        			 $token=array(
        				'Company_Logo'=>$company['Company_Logo'],
        				'website_url'=>$company['website_url'],
        				'social_media_icons'=>$company['social_media_icons'],
        				'website_name'=>$company['website_name'],
        				'user_full_name'=>$check->usr_fname.' '.$check->usr_lname,			
        				'contact_us_url'=>$company['website_url'],
        				'contact_us_email'=>$company['contact_us_email']
        			 );
    			    $pattern = '{%s}';
        			foreach($token as $key=>$val){
        				$varMap[sprintf($pattern,$key)] = $val;
        			}			
                    $get_msg=strtr($template->tp_body,$varMap);
        		    $subject=strtr($template->tp_subject,$varMap);	
        			// 	$to=$cust_email; 
                    // 	email_send($to,$subject,$get_msg);
            
                    $from_email = "no-reply@falconrewards.com";
        		    $to_email = $cust_email;
        		    $this->load->library('email');
        		    $config = array (
                      'mailtype' => 'html',
                      'charset'  => 'utf-8',
                      'priority' => '1'
                    );
                    $this->email->initialize($config);
        		    $this->email->from($from_email, "Falcon Rewards");
                    $this->email->to($to_email);
                    $this->email->subject($subject);
                    $this->email->message($get_msg);
                    $this->email->send();
    			}
    		}
		    // end email 		
		    $result=$this->API->update($this->uemail,$cust_email,$data,$this->users);
            if($result){
                $message = array(
                    'status' => TRUE,
                   'message' => 'Your account has been verified.'
                );
                $this->response($message, REST_Controller::HTTP_OK);
            }else{
                // Set the response and exit
                $message = array(
                    'status' => FALSE,
                    'message' => 'Some problems occurred, please try again.'
                );
                $this->response($message, REST_Controller::HTTP_BAD_REQUEST);
            }
		}else{
            // Set the response and exit
            $message = array(
                'status' => FALSE,
                'message' => 'Email address already verified.'
            );
            $this->response($message, REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
    /**
     * Profile Detail
     * -----------
     * @method: GET
     * @return Response
    */
    public function profiledetail_get() 
    {
         
        $email=$this->input->get('email');
        $result = $this->API->profile_detail($email,$this->users);
        if($result){
            // Set the response and exit
            $message = array(
                'status' => TRUE,
                'data' => $result
            );
            $this->response($message, REST_Controller::HTTP_OK);
        }else{
            // Set the response and exit
            $message = array(
                'status' => FALSE,
                'message' => 'Invalid request.'
            );
            $this->response($message, REST_Controller::HTTP_OK);
        }
    }
    
     /**
     * User Forgot Password
     * -----------
     * @method: POST
     * @return Response
    */
    public function forgot_post() 
    {
        # XSS Filtering (https://www.codeigniter.com/user_guide/libraries/security.html)
        $_POST = $this->security->xss_clean($_POST);
        # Form Validation
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required');
        if($this->form_validation->run() == FALSE)
        {
            // Form Validation Errors
            $message = array(
                'status' => False,
                'error' => $this->form_validation->error_array(),
                'message' => validation_errors()
            );
            $this->response($message, REST_Controller::HTTP_NOT_FOUND);
        }
        else
        {
            // CHECK IF GIVEN EMAIL ID EXISTS
            $email=$this->input->post('email');
            $check = $this->API->check_email($this->uemail,$email,$this->users);
            //print_r($check);die;
            if($check > 0){
                // Update password
                $password=rand(10,1000000);
                $data=array($this->upassword=>md5($password)); 
                 $updated = $this->API->update($this->uemail,$email,$data, $this->users);
                 /*--- SEND MAIL AFTER REGISTRATION ---*/ 
                if(!empty($email)){
    			    $template=template(4);
        			if(!empty($template)){
            			$company=company_detail();				
        			$login_url=base_url();
        			 $token=array(
        				'Company_Logo'=>$company['Company_Logo'],
        				'website_url'=>$company['website_url'],
        				'social_media_icons'=>$company['social_media_icons'],
        				'website_name'=>$company['website_name'],
        				'user_full_name'=>$check_email->usr_fname.' '.$check_email->usr_lname,
        				'new_password'=>$password,
        				'login_link'=>$login_url,
        				'contact_us_url'=>$company['website_url'],
        				'contact_us_email'=>$company['contact_us_email']
        			 );
        			$pattern = '{%s}';
        			foreach($token as $key=>$val){
        				$varMap[sprintf($pattern,$key)] = $val;
        			}			
                    $get_msg=strtr($template->tp_body,$varMap);
        		    $subject=strtr($template->tp_subject,$varMap);	
        			
        			// 	$to=$cust_email; 
                    // 	email_send($to,$subject,$get_msg);
        
                    $from_email = "no-reply@falconrewards.com";
        		    $to_email = $email;
        		    $this->load->library('email');
        		    $config = array (
                      'mailtype' => 'html',
                      'charset'  => 'utf-8',
                      'priority' => '1'
                    );
                    $this->email->initialize($config);
        		    $this->email->from($from_email, "Falcon Rewards");
                    $this->email->to($to_email);
                    $this->email->subject($subject);
                    $this->email->message($get_msg);
                    $this->email->send();
        			}
        		}
			
		// end email 
		
		 /*-- CHECK IF THE USER DATA updated OR NOT ---*/
                if($updated){
                    // Set the response and exit
                    $message = array(
                        'status' => TRUE,
                        'message' => 'Your password has been successfully reset. Check your email id.',
                        //'data' => $data
                    );
                    $this->response($message, REST_Controller::HTTP_OK);
                }else{
                    // Set the response and exit
                    $message = array(
                        'status' => FALSE,
                        'message' => 'Some problems occurred, please try again.'
                    );
                    $this->response($message, REST_Controller::HTTP_BAD_REQUEST);
                }
                

            }else{
                // Set the response and exit
                $message = array(
                    'status' => FALSE,
                    'message' => 'Email address Invalid .'
                );
                $this->response($message, REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }
    
    
    /**
     * User Product Order
     * -----------
     * @method: POST
     * @return Response
    */

    public function order_post() 
    {
        # XSS Filtering (https://www.codeigniter.com/user_guide/libraries/security.html)
        $_POST = $this->security->xss_clean($_POST);
        # Form Validation
        $this->form_validation->set_rules('user_id', 'User Id', 'trim|required');
        $this->form_validation->set_rules('donate', 'Donate', '');
        $this->form_validation->set_rules('product_id[]', 'Multiple Product Id', 'trim|required');
        $this->form_validation->set_rules('quantity[]', ' Multiple Product Quantity', 'trim|required');
        if($this->form_validation->run() == FALSE)
        {
            // Form Validation Errors
            $message = array(
                'status' => False,
                'error' => $this->form_validation->error_array(),
                'message' => validation_errors()
            );
            $this->response($message, REST_Controller::HTTP_NOT_FOUND);
        }
        else
        {   
            date_default_timezone_set('Asia/Dubai'); 
            $year = date('y');
			$month = date('m');
			$random = rand(1000, 9999);
			$orderReferenceID = $year.$month.$random;
            $uid=$this->input->post('user_id');
            $product_id=explode(',',implode(",",$this->input->post('product_id')));
            $qty=explode(',',implode(",",$this->input->post('quantity')));
            $data=array();
            $price=0;
           
            
            foreach($product_id as $key=>$value){
            $product = $this->API->sinlge_product($this->proid,$value,$this->products);
            
            // echo $price1= $product->p_aed*$qty[$key];
            
            $price+= $product->p_aed*$qty[$key];
            }
            //tax 
             $tax_array = $this->API->tax_list($this->tax);
             $total_tax=0;
             if($tax_array==true){ 
             foreach ($tax_array as $tx_val) {
                $txt=$tx_val->txt_per*$price/100;                  
                     $total_tax+=$txt;
               }}
            $ord_total_amounts=$price+$total_tax;
            // echo"<pre>";
            //  print_r($price);
            //  die;
            
            $orderArray = array(
                'ord_reference_no' => $orderReferenceID,
                'cust_id' => $uid,
                 'tax' => $total_tax,
                'ord_total_amounts' =>$ord_total_amounts,
                'ord_created' =>date('Y-m-d h:i:s'),
                );
            $ordid=$this->API->SaveOrderInformation($orderArray,$this->table_orders);
            if($ordid){
                $orderProducts = array();               
                foreach($product_id as $key=>$data_val)
                {   
                     if(empty($this->input->post('donate'))){
				       $Tickets =$qty[$key];
        				}else{
        				    $Tickets =$qty[$key]*2;
        				}
            	    for ($x = 1; $x <= $Tickets; $x++) 
            		{    
    				    $no=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), -3).'-'.substr(uniqid('', true), -5).'-'.date('dhis');
    				    $orderTickets= array(
    				        'price' => price_reward($data_val),
    						'ticket_no' => $no,	
    						'cust_id' => $uid,	
    						'odrer_id' => $ordid,
    						'created' => date('Y-m-d H:i:s') 
    					
    					);
    					$Ticketsave=$this->API->SaveOrderInformation($orderTickets,'tbl_ticket');
    				}
                    $product_val = $this->API->sinlge_product($this->proid,$data_val,$this->products);
                    $orderProducts[] = array(
                        'ord_id' => $ordid,
                        'pro_id' => $data_val,                        
                        'pro_name' => $product_val->p_name,
                        'pro_price' => $product_val->p_aed,
                        'pro_currency' => 'AED',
                        'pro_qty' => $qty[$key],
                        'pro_ticket' => $Tickets,
                        'pro_img' => $product_val->p_picture_url
                    );
                }
                $check = $this->API->SaveOrderProduct($orderProducts,$this->table_order_products);
                // Set the response and exit
                $message = array(
                    'status' => TRUE,
                    'message' => 'Order has been saved',
                    'order_id' => $orderReferenceID
                );
                $this->response($message, REST_Controller::HTTP_OK);
            }else{
                // Set the response and exit
                $message = array(
                    'status' => FALSE,
                    'message' => 'Some problems occurred, please try again.'
                );
                $this->response($message, REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }
    public function orderpayment_get()
    {
      $postData = new StdClass(); 

$postData->action = "SALE"; 
$postData->amount = new StdClass();
$postData->amount->currencyCode = "AED"; 
$postData->amount->value = 100; 

 $outlet = "2688c131-45dc-48ef-9b88-4f8e44b1449d";
$token = $this->token_key(); //to ken generatig

$json = json_encode($postData);
$ch = curl_init(); 


   curl_setopt($ch, CURLOPT_URL, 'https://api-gateway-uat.ngenius-payments.com/transactions/outlets/'.$outlet.'/orders'); 
   curl_setopt($ch, CURLOPT_HTTPHEADER, array(
   "Authorization: Bearer ".$token, 
   "Content-Type: application/vnd.ni-payment.v2+json", 
    "Accept: application/vnd.ni-payment.v2+json")); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
   curl_setopt($ch, CURLOPT_POST, 1); 
   curl_setopt($ch, CURLOPT_POSTFIELDS, $json); 

  $output = json_decode(curl_exec($ch)); 
  $order_reference = $output->reference; 
 echo   $order_paypage_url = $output->_links->payment->href; 
 die;

  curl_close ($ch);
}
    
    function token_key(){
$apikey = "OTZmMGEyODctYzlhMi00YjEwLWJlMmItZDU5MTE4YjYzZDNlOjQ1YTg5NjJmLTc2OWMtNDMwYy04OTdiLTcxN2Y2NzFjNzBmZQ==";        // enter your API key here
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "https://identity-uat.ngenius-payments.com/auth/realms/ni/protocol/openid-connect/token"); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
"Authorization: Basic ".$apikey, 
"Content-Type: application/x-www-form-urlencoded")); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS,  
http_build_query(array('grant_type' => 
'client_credentials'))); 
$output = json_decode(curl_exec($ch)); 
$access_token = $output->access_token;
return $access_token;
 }
    public function ordertest_post()
    {
        # XSS Filtering (https://www.codeigniter.com/user_guide/libraries/security.html)
        $_POST = $this->security->xss_clean($_POST);
        # Form Validation
        $this->form_validation->set_rules('user_id', 'User Id', 'trim|required');
        $this->form_validation->set_rules('donate', 'Donate', '');
        $this->form_validation->set_rules('product_id[]', 'Multiple Product Id', 'trim|required');
        $this->form_validation->set_rules('quantity[]', ' Multiple Product Quantity', 'trim|required');
        if($this->form_validation->run() == FALSE)
        {
            // Form Validation Errors
            $message = array(
                'status' => False,
                'error' => $this->form_validation->error_array(),
                'message' => validation_errors()
            );
            $this->response($message, REST_Controller::HTTP_NOT_FOUND);
        }
        else
        {   
            date_default_timezone_set('Asia/Dubai'); 
            $year = date('y');
			$month = date('m');
			$random = rand(1000, 9999);
			$orderReferenceID = $year.$month.$random;
            $uid=$this->input->post('user_id');
            $product_id=explode(',',implode(",",$this->input->post('product_id')));
            $qty=explode(',',implode(",",$this->input->post('quantity')));
            $data=array();
            $price=0;
           
            foreach($product_id as $key=>$value){
                $product = $this->API->sinlge_product($this->proid,$value,$this->products);
                $price+= $product->p_aed*$qty[$key];
            }
            /*--- TAX ---*/
            $tax_array = $this->API->tax_list($this->tax);
            $total_tax=0;
            if($tax_array==true){ 
                foreach ($tax_array as $tx_val) {
                    $txt=$tx_val->txt_per*$price/100;                  
                    $total_tax+=$txt;
               }
            }
            $ord_total_amounts=$price+$total_tax;
            $orderArray = array(
                'ord_reference_no' => $orderReferenceID,
                'cust_id' => $uid,
                 'tax' => $total_tax,
                'ord_total_amounts' =>$ord_total_amounts,
                'ord_created' =>date('Y-m-d h:i:s'),
            );
            $getCustomerInfo = $this->API->getCustomerProfileById($this->uid,$uid,$this->users);
            if(!empty($getCustomerInfo->usr_nationality)){
               $country =country($this->customer->usr_nationality);
            }else{
                $country ='NA';
            }
            /*--- Ngenius Payment Gateway ---*/ 
            $outletRef = "2688c131-45dc-48ef-9b88-4f8e44b1449d";                                                                   
            $apikey    = "OTZmMGEyODctYzlhMi00YjEwLWJlMmItZDU5MTE4YjYzZDNlOjQ1YTg5NjJmLTc2OWMtNDMwYy04OTdiLTcxN2Y2NzFjNzBmZQ=="; 
            
            $idServiceURL  = "https://identity-uat.ngenius-payments.com/auth/realms/ni/protocol/openid-connect/token";          
            $txnServiceURL = "https://api-gateway-uat.ngenius-payments.com/transactions/outlets/".$outletRef."/orders";
    
            $tokenHeaders  = array("Authorization: Basic ".$apikey, "Content-Type: application/x-www-form-urlencoded");
            $tokenResponse = invokeCurlRequest("POST", $idServiceURL, $tokenHeaders, http_build_query(array('grant_type' => 'client_credentials')));
            $tokenResponse = json_decode($tokenResponse);
    
            //session_start(); // Start Session //
	        $sessionTokenGenerated = $tokenResponse->access_token;
            // $_SESSION['token'] = $sessionTokenGenerated;
            //$this->session->set_userdata('token',$sessionTokenGenerated);
        
            $access_token = $tokenResponse->access_token; // Generate Token Step - 1
    
            /*--- End Of Ngenius Payment Gateway ---*/ 
            print_r($access_token);die;    
            $ordid=$this->API->SaveOrderInformation($orderArray,$this->table_orders);
            if($ordid){
                $orderProducts = array();               
                foreach($product_id as $key=>$data_val)
                {   
                     if(empty($this->input->post('donate'))){
				       $Tickets =$qty[$key];
        				}else{
        				    $Tickets =$qty[$key]*2;
        				}
            	    for ($x = 1; $x <= $Tickets; $x++) 
            		{    
    				    $no=substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), -3).'-'.substr(uniqid('', true), -5).'-'.date('dhis');
    				    $orderTickets= array(
    				        'price' => price_reward($data_val),
    						'ticket_no' => $no,	
    						'cust_id' => $uid,	
    						'odrer_id' => $ordid,
    						'created' => date('Y-m-d H:i:s') 
    					
    					);
    					$Ticketsave=$this->API->SaveOrderInformation($orderTickets,'tbl_ticket');
    				}
                    $product_val = $this->API->sinlge_product($this->proid,$data_val,$this->products);
                    $orderProducts[] = array(
                        'ord_id' => $ordid,
                        'pro_id' => $data_val,                        
                        'pro_name' => $product_val->p_name,
                        'pro_price' => $product_val->p_aed,
                        'pro_currency' => 'AED',
                        'pro_qty' => $qty[$key],
                        'pro_ticket' => $Tickets,
                        'pro_img' => $product_val->p_picture_url
                    );
                }
                $check = $this->API->SaveOrderProduct($orderProducts,$this->table_order_products);
                // Set the response and exit
                $message = array(
                    'status' => TRUE,
                    'message' => 'Order has been saved',
                    'order_id' => $orderReferenceID
                );
                $this->response($message, REST_Controller::HTTP_OK);
            }else{
                // Set the response and exit
                $message = array(
                    'status' => FALSE,
                    'message' => 'Some problems occurred, please try again.'
                );
                $this->response($message, REST_Controller::HTTP_OK);
            }
        }
    }
    
    /**
     * Update Response Order
     * -----------
     * @method: POST
     * @return Response
    */

    public function updateorder_post() 
    {
        # XSS Filtering (https://www.codeigniter.com/user_guide/libraries/security.html)
        $_POST = $this->security->xss_clean($_POST);
        # Form Validation
        $this->form_validation->set_rules('order_id', 'Order Id', 'trim|required');
        $this->form_validation->set_rules('transaction_id', 'Transaction Id', 'trim|required');
        $this->form_validation->set_rules('transection_status', 'Status', 'trim|required');
        if($this->form_validation->run() == FALSE)
        {   
            // Form Validation Errors
            $message = array(
                'status' => False,
                'error' => $this->form_validation->error_array(),
                'message' => validation_errors()
            );
            $this->response($message, REST_Controller::HTTP_BAD_REQUEST);

        }else{
            $orderReferenceId = $this->input->post('order_id');
            $transectionId = $this->input->post('transaction_id');
            $transactionStatus = $this->input->post('transection_status');
            
            if($transactionStatus==1){

                $orderUpdate = array(
                    'ord_txt_id' => $transectionId,
                    'order_status' => 'Waiting'
                );
                
                $updatestatus = $this->API->UpdateOrderInformation($this->refId,$orderReferenceId,$orderUpdate,$this->table_orders);
                /*-- Payment Function --*/
                // $paymentUpdate = array(
                //     'ord_id' => $orderReferenceId,
                //     'cust_id' => $custid,
                //     'reference_id' => $referenceId,
                //     'track_id' => $trackId,
                //     'transaction_id' => $transectionId,
                //     'payment_id' => $paymentId,
                //     'payment_gateway' => $paymentGateway,
                //     'transaction_status' => $transactionStatus,
                //     'create_time' => date('Y-m-d H:i:s')
                // );
                // $this->API->savePaymentInformation($paymentUpdate,$this->payments);
                /*====================Start email send===========*/ 
                $content['recentOrd'] = $this->API->get_orderInfo($orderReferenceId,$this->table_orders);
                $mainId = $content['recentOrd']->ord_id;
                $data['cmpt_ord_detail']=$this->API->get_complete_list($orderReferenceId);
                $data['cmpt_ord_pro_detail']=$this->API->get_order_product_list($mainId);
                $data['payment_status'] = "Unpaid";
                $emailsubject='Order Detail from falconrewards.com';
                $emailAddress=$data['cmpt_ord_detail']->usr_email;
                $toemail=$emailAddress; 
                $emailmsg=$this->load->view('api/email_order/emailOrderFailed',$data,true);
                //$mailsend=email_send($toemail,$emailsubject,$emailmsg);	
                $from_email = "no-reply@falconrewards.com";
                $this->load->library('email');
                $config = array (
                'mailtype' => 'html',
                'charset'  => 'utf-8',
                'priority' => '1'
                );
                $this->email->initialize($config);
                $this->email->from($from_email, "Falcon Rewards");
                $this->email->to($toemail);
                $this->email->subject($emailsubject);
                $this->email->message($emailmsg);
                $this->email->send();
                /*====================End email send ===========*/
                $message = array(
                    'status' => TRUE,
                    'message' => 'your payment is unpaid',
                    'transaction_id' => $transectionId
                );
                $this->response($message, REST_Controller::HTTP_OK);

            }else if($transactionStatus==2){ 
                /*-- Transection is Successfull --*/ 
                $orderUpdate = array(
                    'ord_txt_id' => $transectionId,
                    'order_status' => 'InProcess'
                );
                $updatestatus = $this->API->UpdateOrderInformation($this->refId,$orderReferenceId,$orderUpdate,$this->table_orders);
                
                /*-- Payment Function --*/
                // $paymentUpdate = array(
                //     'ord_id' => $orderReferenceId,
                //     'cust_id' => $custid,
                //     'reference_id' => $referenceId,
                //     'track_id' => $trackId,
                //     'transaction_id' => $transectionId,
                //     'payment_id' => $paymentId,
                //     'payment_gateway' => $paymentGateway,
                //     'transaction_status' => $transactionStatus,
                //     'create_time' => date('Y-m-d H:i:s')
                // );
                // $this->API->savePaymentInformation($paymentUpdate,$this->payments);
                /*====================Start email send===========*/ 
                $content['recentOrd'] = $this->API->get_orderInfo($orderReferenceId,$this->table_orders);
                $mainId = $content['recentOrd']->ord_id;
                $data['tickets'] = $this->API->get_ticket_list($mainId); 
                $data['cmpt_ord_detail']=$this->API->get_complete_list($orderReferenceId);
                $data['cmpt_ord_pro_detail']=$this->API->get_order_product_list($mainId);
                $emailAddress=$data['cmpt_ord_detail']->usr_email;
                $data['payment_status'] = "Paid";
                $emailsubject='Order Detail from falconrewards.com';
                $toemail=$emailAddress; 
                $emailmsg=$this->load->view('api/email_order/emailOrder',$data,true);
                //$mailsend=email_send($toemail,$emailsubject,$emailmsg);	
                $from_email = "no-reply@falconrewards.com";
                $this->load->library('email');
                $config = array (
                'mailtype' => 'html',
                'charset'  => 'utf-8',
                'priority' => '1'
                );
                $this->email->initialize($config);
                $this->email->from($from_email, "Falcon Rewards");
                $this->email->to($toemail);
                $this->email->subject($emailsubject);
                $this->email->message($emailmsg);
                $this->email->send();
                /*====================End email send ===========*/
                /*- Distroy cart -*/
                
                $message = array(
                    'status' => TRUE,
                    'message' => 'Order has been received',
                    'transaction_id' => $transectionId
                );
                $this->response($message, REST_Controller::HTTP_OK);
                
            }else if($transactionStatus==3){

                $orderUpdate = array(
                    'ord_txt_id' => $transectionId,
                    'order_status' => 'Waiting'
                );
                $updatestatus = $this->API->UpdateOrderInformation($this->refId,$orderReferenceId,$orderUpdate,$this->table_orders);
                
                /*-- Payment Function --*/
                // $paymentUpdate = array(
                //     'ord_id' => $orderReferenceId,
                //     'cust_id' => $custid,
                //     'reference_id' => $referenceId,
                //     'track_id' => $trackId,
                //     'transaction_id' => $transectionId,
                //     'payment_id' => $paymentId,
                //     'payment_gateway' => $paymentGateway,
                //     'transaction_status' => $transactionStatus,
                //     'create_time' => date('Y-m-d H:i:s')
                // );
                // $this->API->savePaymentInformation($paymentUpdate,$this->payments);
                /*====================Start email send===========*/ 
                $content['recentOrd'] = $this->API->get_orderInfo($orderReferenceId,$this->table_orders);
                $mainId = $content['recentOrd']->ord_id;
                $data['cmpt_ord_detail']=$this->API->get_complete_list($orderReferenceId);
                $data['cmpt_ord_pro_detail']=$this->API->get_order_product_list($mainId);
                $data['payment_status'] = "Payment Failure";
                $emailsubject='Order Detail from falconrewards.com';
                $emailAddress=$data['cmpt_ord_detail']->usr_email;
                $toemail=$emailAddress; 
                $emailmsg=$this->load->view('api/email_order/emailOrderFailed',$data,true);
                //$mailsend=email_send($toemail,$emailsubject,$emailmsg);	
                $from_email = "no-reply@falconrewards.com";
                $this->load->library('email');
                $config = array (
                'mailtype' => 'html',
                'charset'  => 'utf-8',
                'priority' => '1'
                );
                $this->email->initialize($config);
                $this->email->from($from_email, "Falcon Rewards");
                $this->email->to($toemail);
                $this->email->subject($emailsubject);
                $this->email->message($emailmsg);
                $this->email->send();
                /*====================End email send ===========*/
                $message = array(
                    'status' => TRUE,
                    'message' => 'Your payment is failure',
                    'transaction_id' => $transectionId
                );
                $this->response($message, REST_Controller::HTTP_OK);
            }else{
                $message = array(
                    'status' => FALSE,
                    'message' => 'bad request'
                );
                $this->response($message, REST_Controller::HTTP_BAD_REQUEST);
            }
            
        }
    }
    
    
     /**
     * User Ticket List
     * -----------
     * @method: POST
     * @return Response
    */

    public function ticket_post() 
    {
        # XSS Filtering (https://www.codeigniter.com/user_guide/libraries/security.html)
        $_POST = $this->security->xss_clean($_POST);
        # Form Validation
        $this->form_validation->set_rules('user_id', 'User Id', 'trim|required');
        if($this->form_validation->run() == FALSE)
        {
            // Form Validation Errors
            $message = array(
                'status' => False,
                'error' => $this->form_validation->error_array(),
                'message' => validation_errors()
            );
            $this->response($message, REST_Controller::HTTP_NOT_FOUND);
        }
        else
        {   
            $uid=$this->input->post('user_id');
            $order_list = $this->API->order_list($uid,'tbl_ticket');
            if($order_list){
                // Set the response and exit
                $message = array(
                    'status' => TRUE,
                    'ticket' => $order_list
                );
                $this->response($message, REST_Controller::HTTP_OK);
            }else{
                // Set the response and exit
                $message = array(
                    'status' => FALSE,
                    'message' => 'Ticket not found !'
                );
                $this->response($message, REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    
     /**
     * User Profile Update
     * -----------
     * @method: POST
     * @return Response
    */

    public function profileupdate_post() 
    {
        # XSS Filtering (https://www.codeigniter.com/user_guide/libraries/security.html)
        $_POST = $this->security->xss_clean($_POST);
        # Form Validation
        $this->form_validation->set_rules('user_id', 'User Id', 'trim|required');
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
        $this->form_validation->set_rules('phonecode', 'Area Code', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|max_length[10]');
        $this->form_validation->set_rules('marriedstatus', 'Married Status', 'trim|required');
        $this->form_validation->set_rules('location', 'Location', 'trim|required');
        $this->form_validation->set_rules('nationality', 'Nationality', 'trim|required');
        $this->form_validation->set_rules('newsletter', 'Newsletter', 'trim|required');
        if($this->form_validation->run() == FALSE)
        {
            // Form Validation Errors
            $message = array(
                'status' => False,
                'error' => $this->form_validation->error_array(),
                'message' => validation_errors()
            );
            $this->response($message, REST_Controller::HTTP_NOT_FOUND);
        }
        else
        {   
            $uid=$this->input->post('user_id');
            $data=array(
                'usr_fname'=>$this->input->post('fname'),
                'usr_lname'=>$this->input->post('lname'),
                'usr_gender'=> $this->input->post('gender'),
                'usr_married'=> $this->input->post('marriedstatus'),
                'usr_location'=> $this->input->post('location'),
                'usr_nationality'=> $this->input->post('nationality'),
                'usr_area_phone'=> $this->input->post('phonecode'),
                'usr_mobile'=> $this->input->post('phone'),
                'usr_newsletter'=>$this->input->post('newsletter'),
                'usr_updated'=>date('Y-m-d H:i:s') 
            );   
            $update = $this->API->update($this->uid,$uid,$data,$this->users);
            
           if($update){
                      
                    // Set the response and exit
                    $message = array(
                        'status' => TRUE,
                        'message' => 'Profile updated successfully',
                        // 'ord_id' => $orderReferenceID
                    );
                    $this->response($message, REST_Controller::HTTP_OK);
                }else{
                    // Set the response and exit
                    $message = array(
                        'status' => FALSE,
                        'message' => 'Some problems occurred, please try again.'
                    );
                    $this->response($message, REST_Controller::HTTP_BAD_REQUEST);
                }
                

            
        }
    }


        /**
     * User Change Password
     * -----------
     * @method: POST
     * @return Response
    */

    public function changepassword_post() 
    {
        # XSS Filtering (https://www.codeigniter.com/user_guide/libraries/security.html)
        $_POST = $this->security->xss_clean($_POST);
        # Form Validation
        $this->form_validation->set_rules('user_id', 'User Id', 'trim|required');
        $this->form_validation->set_rules('old_password', 'Old Password', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('new_password', 'New Password', 'trim|required|max_length[100]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[new_password]|Max_length[100]');
        if($this->form_validation->run() == FALSE)
        {
            // Form Validation Errors
            $message = array(
                'status' => False,
                'error' => $this->form_validation->error_array(),
                'message' => validation_errors()
            );
            $this->response($message, REST_Controller::HTTP_NOT_FOUND);
        }
        else
        {   
            $uid=$this->input->post('user_id'); 
            $old_password=md5($this->input->post('old_password'));
            $user_password = $this->API->check_password($this->uid,$uid,$this->upassword,$old_password,$this->users);           
            if($user_password){
            $data=array('usr_password' => md5($this->input->post('new_password')));
            $result = $this->API->update($this->uid,$uid,$data,$this->users);
            
           if($result){                      
                    // Set the response and exit
                    $message = array(
                        'status' => TRUE,
                        'message' => 'Password changed successfully.',                        
                    );
                    $this->response($message, REST_Controller::HTTP_OK);
                }else{
                    // Set the response and exit
                    $message = array(
                        'status' => FALSE,
                        'message' => 'Some problems occurred, please try again.'
                    );
                    $this->response($message, REST_Controller::HTTP_BAD_REQUEST);
                }
            }else{
                    // Set the response and exit
                    $message = array(
                        'status' => FALSE,
                        'message' => 'Old Password doesn`t match Password.'
                    );
                    $this->response($message, REST_Controller::HTTP_BAD_REQUEST);
                }

            
        }
    }
    
    public function send_post(){
      $orderReferenceId='20087357';
      /*====================Start email send===========*/ 
                $content['recentOrd'] = $this->API->get_orderInfo($orderReferenceId,$this->table_orders);

                $mainId = $content['recentOrd']->ord_id;
                $data['tickets'] = $this->API->get_ticket_list($mainId); 
                $data['cmpt_ord_detail']=$this->API->get_complete_list($orderReferenceId);
                $data['cmpt_ord_pro_detail']=$this->API->get_order_product_list($mainId);
                $data['payment_status'] = "Paid";
                $emailsubject='Order Detail from falconrewards.com';
                $toemail='manish.sandlus@gmail.com'; 
                $emailmsg=$this->load->view('api/email_order/emailOrder',$data,true);
                
                $mailsend=email_send($toemail,$emailsubject,$emailmsg); 
                $from_email = "no-reply@falconrewards.com";
                $this->load->library('email');
                $config = array (
                'mailtype' => 'html',
                'charset'  => 'utf-8',
                'priority' => '1'
                );
                $this->email->initialize($config);
                $this->email->from($from_email, "Falcon Rewards");
                $this->email->to($toemail);
                $this->email->subject($emailsubject);
                $this->email->message($emailmsg);
                $this->email->send();
                /*====================End email send ===========*/
    }
    
    
}