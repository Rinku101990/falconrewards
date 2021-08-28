<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MY_Controller {
	 
	public function __construct() {
		parent::__construct(); 
		$this->load->model("Cart_model",'Cart');
	    if(!empty($this->session->userdata('logged_in_users'))){
	    $this->customer=customer($this->session->userdata('logged_in_users')->usr_id);
	    }
		/* ========FOR USERS =========== */
		$this->cust_id="usr_id"; 	
		$this->users="tbl_users";
		/* ========FOR PRODUCT =========== */
		$this->p_id="p_id"; 		
		$this->products="tbl_product";
		/* ========FOR CAMPAIGN =========== */
		$this->campid="id"; 		
		$this->campaign="tbl_campaign";
		/* ========FOR TAX =========== */
		$this->txt_id="txt_id"; 		
		$this->tax="tbl_tax";

    }


    public function index()
	{ 		
	    $content['tax'] = $this->Cart->tax_list($this->tax);	
	    $content['subview']='cart/viewCartPage';
	    $this->load->view('layout', $content);
	}


    public function cart_save()
	{   
		$current_date=date('Y-m-d');
		$pid=decode($this->input->post('RefId'));
		$price=$this->input->post('price');
		$qty=$this->input->post('qty');
		$product = $this->Cart->product_detail($this->campid,$pid,$this->campaign);		
		// if($product->sp_start_date <= $current_date && $product->sp_end_date >= $current_date){
		// 	$special_price=$product->sp_special_price; 
		// 	$price=$product->sp_special_price;
		// }else{ 
		// 	$special_price='';
		// 	$price=$product->p_selling_price; 
		// }
		$img=base_url('admin/uploads/product/'.$product->p_picture);
		$rewardimg = base_url('admin/uploads/reward/'.$product->image);
	    $product_url=base_url('product/').encode($product->p_id).'/'.slug($product->p_name);
		$product_name=$product->p_name;
		// if($product->p_tax=='1'){
		// 	$tax=tax($product->cate_id);
		// }else{
		// 	$tax='0';
		// }

		$data = array(
            'id' => $product->p_id, 
            'name' => $product_name, 
            'price' => $product->p_aed, 
            'qty' => $qty, 
            'img' => $img, 
			'product_url' =>$product_url, 
			'rewardimg' => $rewardimg,
			'rewardtitle'=> $product->r_title,
			'rewardprice'=> $product->r_price
        );
      	//print_r($data);die();
		$this->cart->insert($data);
        $result=$this->show_cart();       
       	echo json_encode($result);
	}

   	public function cart_remove()
	{   
		$rowid=$this->input->post('rowid');		
		$pdata = array(
			'rowid' => $rowid,
			'qty'   => 0,
		);			
		$this->cart->update($pdata);	
		$result['show_cart']=$this->show_cart(); 
		$result['cart']=$this->cart_details();      
       echo json_encode($result);
	}
	public function cart_add()
	{   
		$rowid=$this->input->post('rowid');		
		$qty=$this->input->post('qty');		
		$pdata = array(
			'rowid' => $rowid,
			'qty'   => $qty+1,
		);			
		$this->cart->update($pdata);	
		$result['show_cart']=$this->show_cart(); 
	//	$result['cart']=$this->cart_details();       
       echo json_encode($result);
	}

	public function cart_minus()
	{   
		$rowid=$this->input->post('rowid');		
		$qty=$this->input->post('qty');		
			$pdata = array(
				'rowid' => $rowid,
				'qty'   => $qty-1,
			);			
			$this->cart->update($pdata);	
			$result['show_cart']=$this->show_cart(); 
		//	$result['cart']=$this->cart_details();          
       echo json_encode($result);
	}

	function show_cart(){ 
        $output = '';     
        if(empty($this->cart->contents())){
			$total='0';
		}else{ 
			$total=count($this->cart->contents());
		} 
        //$price_symbol=$this->Cart->price_symbol();

        $output .=$total;
        return $output;
	}
	

	function cart_details(){ 
		$tax = $this->Cart->tax_list($this->table_tax);
		$price_symbol=$this->Cart->price_symbol();
		if(!empty($this->cart->contents())){
			$output ='';
			$output .='<div class="col-12">
		    <div class="table_desc">
			  <div class="cart_page table-responsive">
					 <table>
						 <thead>
							 <tr>
								
								 <th class="product_thumb">Image</th>
								 <th class="product_name">Product</th>
								 <th class="product-price">Price</th>
								 <th class="product-price" style="min-width: 100px;">Color</th>
								 <th class="product-price" style="min-width: 100px;">Size</th>
								 <th class="product_quantity">Quantity</th>
								<!-- <th class="product_total">Tax</th>-->
								 <th class="product_total">Total</th>
								 <th class="product_remove" >Delete</th>
							 </tr>
						 </thead>
						 <tbody>';
						 $total=0; 
			foreach ($this->cart->contents() as $items) { 	
			 if(!empty($items['special_price'])){
				$price='<span class="new_price">'.$price_symbol.'<span>'.$this->cart->format_number($items['special_price']).'</span>
				</span><br/>
				<span class="old_price">'.$price_symbol.'
				'.$this->cart->format_number($items['selling_price']).'</span>';
			 }else{
			    $price='<span class="new_price">'.$price_symbol.'<span>'.$this->cart->format_number($items['selling_price']).'</span>
				</span>';
				 }
			 if($items['size']!='Select Size'){
				$size=$items['size'];
				 }else{$size='';}
				 $item_tax=$items['tax']*$items['subtotal']/100;
				 $total +=$items['subtotal']+$item_tax;
				
            $output .=' <tr><input type="hidden" class="rowid" value="'.$items['rowid'].'" >
			  <td class="product_thumb">
				  <a href="'.$items['product_url'].'" target="_blank">
			  <img src="'.$items['img'].'" alt="'.$items['name'].'">
			</a></td>
			  <td class="product_name " align="center"><center>
				  <div class="small_product_name" style="float: left; width: 200px;"><a href="'.$items['product_url'].'" target="_blank">'.$items['name'].'</a></div></center></td>
		   <td class="product-price small_product_price ">'.$price.'
			</td>
			  <td class="product_size">'.$items['color'].'</td>
				</td>
				 <td class="product_size">'.$size.'</td>
				</td>
		   
		  </td>
			  <td class="product_quantity">  
			  <input type="hidden" class="url" value="'.base_url().'">        
				  <span class="dec qtybtn" data-proid="'.$items['rowid'].'">-</span>
				  <input type="text" value="'.$items['qty'].'" class="avail_qty'.$items['rowid'].'"  style="width: 35px;height: 30px;padding-left: 0;  text-align: center;;" disabled>    <span class="inc qtybtn" data-proid="'.$items['rowid'].'">+</span>
				  </td>
	<!--		  <td class="product_total  small_product_price "><span class="new_price">'.$price_symbol.'<span>'.$this->cart->format_number($item_tax).'</span></span></td>-->
			  <td class="product_total  small_product_price "><span class="new_price">'.$price_symbol.'<span >'.$item_subtotal=$this->cart->format_number($items['subtotal']+$item_tax).'</span></span></td>
			  <td class="product_remove "><a href="javascrip:void(0);" class="item_remove" item_id="'.$items['rowid'].'" ><i class="fa fa-trash-o"></i></a></td>


		  </tr>';
        }
		$output .= ' </tbody>
			</table>  
		</div>  

		</div>

		</div>

		<div class="col-lg-5 ml-auto">
		<!-- Cart Calculation Area -->
		<div class="cart-calculator-wrapper">
		<div class="cart-calculate-items"style="padding: 0 20px;">
		<h3>Cart Totals</h3>
		<div class="table-responsive">
			<table class="table" style="font-weight: 600;font-size:14px;">
				<tbody>
					<tr class="total">
					<td>Sub Total</td>  <td class="total-amount new_price" style="text-align: right;" >'.$price_symbol.' '.$this->cart->format_number($total).'</td>
																	
				</tr>';
				$gst_total=0;
				if($tax== true){
				foreach ($tax as $tax_value) {
					$gst_total +=$tax_value->txt_per*$total/100;
				$output .= '<tr>
					<td>'.$tax_value->txt_name.' ('.$this->cart->format_number($tax_value->txt_per).'%)</td>
					<td style="color:#CC2121;text-align: right" class="new_price">'.$price_symbol.' <span class="gst">'.$this->cart->format_number($tax_value->txt_per*$total/100).'</span></td>
				</tr>';
			 }
			}
		 $output .= '<tr class="total">
					<td>Total</td>
					<td class="total-amount new_price" style="text-align: right;" >'.$price_symbol.' '.$this->cart->format_number($total+$gst_total).'</td>
																	
				</tr>
			</tbody></table>
		</div>
		</div>
		<a href="'.base_url('checkout').'" class="btn btn__bg d-block">Proceed To Checkout</a>
		</div>
		</div>';
		return $output;
		}
       
    }
 

	public function my_order()
	{  
		if(empty($this->session->userdata('logged_in_customer'))){
			redirect('/');
		}else{
		$content['page']='3';
		$content['subview']='account/order';
		$this->load->view('layout', $content);
	    }  
	}


	public function change_password()
	{  
		if(empty($this->session->userdata('logged_in_customer'))){
			redirect('/');
		}else{			
		$content['page']='4';
		$content['subview']='account/change_password';
		$this->load->view('layout', $content);
	    }  
	}

	public function changepassword()
	{  
		
			  $RequestMethod = $this->input->server('REQUEST_METHOD');
	    if($RequestMethod == "POST") {
		   $cust_id=$this->customer->cust_id; 
		   $password=md5($this->input->post('old_password'));
		   $user_password=$this->Account->check_password($this->cust_id,$cust_id,$this->fld_password,$password,$this->table_customer);	

		   if($user_password){print_r($user_password);die();
			
			   $data=array($this->fld_password=>md5($this->input->post('new_password'))); 
			   $result = $this->Account->update($this->cust_id,$cust_id,$data,$this->table_customer);
			    // start email
			if(!empty($this->customer->cust_email)){
			$template=template(3);
			if(!empty($template)){
			$company=company_detail();				
			$login_url=base_url();
			$name=$this->customer->cust_fname.' '.$this->customer->cust_lname;
			 $token=array(
				'Company_Logo'=>$company['Company_Logo'],
				'website_url'=>$company['website_url'],
				'social_media_icons'=>$company['social_media_icons'],
				'website_name'=>$company['website_name'],
				'user_full_name'=>$name,
				'new_password'=>$this->input->post('new_password'),
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
			$to=$this->customer->cust_email;
			email_send($to,$subject,$get_msg);
			}
			}
		// end email 	
			   
			   if($result){
				   echo'success';
			   }else{
				  echo "Failed";
			   }
		    }else{ echo'NotMach';   } 
		}
		
	}

	public function forgot() {	   
			
	    $REQUESTMETHOD=$this->input->server('REQUEST_METHOD');
		if($REQUESTMETHOD=='POST'){	
  
		$useremail=$this->input->post('for_email'); 
		$email = $this->security->xss_clean($useremail);
		$check_email =$this->Account->check_email($this->fld_email,$email,$this->table_customer);
		if($check_email){
		$password=rand(10,1000000);
		$data=array($this->fld_password=>md5($password)); 
		$result = $this->Account->update($this->fld_email,$email,$data,$this->table_customer);
			
			   // start email
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
				'user_full_name'=>$check_email->cust_fname.' '.$check_email->cust_lname,
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
			$to=$email;
			email_send($to,$subject,$get_msg);
			}
			}
			
		// end email 	
			
			if($result){
			  echo'success';
			}else{
			   echo'Failed';
			}  	
				
			}else{
		    echo'Wrong';
			}
		}
	     
	   

	}
  
    public function singup()
	{ 	
		$REQUESTMETHOD=$this->input->server('REQUEST_METHOD');
		if($REQUESTMETHOD=='POST'){			
		$cust_email=$this->input->post('email');
		$check =$this->Account->check_email($this->fld_email,$cust_email,$this->table_customer); 
			if(empty($check)){			
			    $data=array(
				'cust_fname'=>$this->input->post('fname'),
				'cust_lname'=>$this->input->post('lname'),
				'cust_email'=>$cust_email,
				'cust_phone'=>$this->input->post('phone'),
				'cust_password'=>md5($this->input->post('password')),
				'cust_status'=>'1',
				'cust_created'=>date('Y-m-d H:i:s')
				);
			$result =$this->Account->save($data, $this->table_customer); 			
			// start email
			if(!empty($cust_email)){
			$template=template(1);
			if(!empty($template)){
			$company=company_detail();				
			$url=base_url("account/verify/")."". encode($cust_email);
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
			$to=$cust_email;             		
			email_send($to,$subject,$get_msg);
			}
			}
			// end email 			
			if($result){echo'Success';}else{ echo'Failed';}
			}
			else{
			 echo'Used';
			}
		}
		
	}

	public function verify()
	{
		$cust_email=decode($this->uri->segment(3));

		$check =$this->Account->check_email($this->fld_email,$cust_email,$this->table_customer);	

		if(empty($check->cust_EmailVerifiedStatus)){	
		if(!empty($check)){	
		$data=array(
			'cust_EmailVerifiedStatus'=>'1',
			'cust_status'=>'0',
			'cust_updated'=>date('Y-m-d H:i:s')
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
				'user_full_name'=>$check->cust_fname.' '.$check->cust_lname,			
				'contact_us_url'=>$company['website_url'],
				'contact_us_email'=>$company['contact_us_email']
			 );
			 $pattern = '{%s}';
			foreach($token as $key=>$val){
				$varMap[sprintf($pattern,$key)] = $val;
			}			
            $get_msg=strtr($template->tp_body,$varMap);
		    $subject=strtr($template->tp_subject,$varMap);	
			$to=$cust_email;             		
			email_send($to,$subject,$get_msg);
			}
			}
		// end email 		
		$result=$this->Account->update($this->fld_email,$cust_email,$data,$this->table_customer);
		
        if($result){
			   $this->session->set_flashdata('alert_msg',array('value' => '1'));
			   redirect('home'); 
			}else{
			 $this->session->set_flashdata('alert_msg',array('value' => '2'));
			   redirect('home');  
			} 
		}else{
		redirect('home'); 	
		} 
		}
        else{
	 $this->session->set_flashdata('alert_msg',array('value' => '3'));
			   redirect('home');  
		} 		
		
	}

	 public function thanks() {	
	 		$content['subview']='account/thanks';
		$this->load->view('layout', $content);
			
	}



	public function check()
	{   
		$REQUESTMETHOD=$this->input->server('REQUEST_METHOD');
		if($REQUESTMETHOD=='POST'){	
		
			$useremail=$this->input->post('email');
			$userpassword=md5($this->input->post('password'));
		    $email = $this->security->xss_clean($useremail);	
		    $password = $this->security->xss_clean($userpassword);	
			
			if(!empty($email) || !empty($password)){
				$result =$this->Account->login($email, $password,$this->table_customer); 
				if($result) {
				  if($result->cust_status=="0"){
				  	$this->session->set_userdata('logged_in_customer',$result);
					echo'success';
					} else {
					 echo'Active';
					}
				}else{
				   echo'Failed';
				}			
	
			}else{
                echo'Failed';
			} 	
		}
		
	}
	
	
	
	public function logout()
	{  
	   $this->login = $this->session->userdata('logged_in_customer');
		$this->session->unset_userdata('logged_in_customer');
		    redirect('/');
		
	}



	public function getState()
	{
		$CID = $this->input->get('CID');
		$getdata['State'] = $this->Account->get_location('st_name','st_status',$this->fld_cnt_id,$CID,$this->table_state);
		echo json_encode($getdata['State']);
	}
	
	public function getCity()
	{
		$SID = $this->input->get('SID');
		$getdata['City'] = $this->Account->get_location('ct_name','ct_status',$this->fld_st_id,$SID,$this->table_city);
		echo json_encode($getdata['City']);
	}
	public function getZip()
	{
		$CID = $this->input->get('CID');
		$getdata['Zip'] = $this->Account->get_location('zc_zipcode','zc_status',$this->fld_ct_id,$CID,$this->table_zipcode);
		echo json_encode($getdata['Zip']);
	}
	
	  


	
	
	 
	 
}
