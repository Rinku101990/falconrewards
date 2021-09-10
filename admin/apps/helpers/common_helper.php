<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/*! Common Helper
	* ================
	* Common Helper application file for All Common function . 
	* This fileshould be included in all pages.  
	* @Author  :  Rinku Vishwakarma
	* @Created :  01 Nov 2019
	*/
	
	
	function date_formate($date){
		return date_format(date_create($date),'d-M-Y ,h:i:s A');
	} 	
	//  function currency($id){ 
	// 	$ci=get_instance();		
	// 	$ci->db->where('id', $id);
 //        $query = $ci->db->get('tbl_currency');
	// 	if($query->num_rows() ==''){
	// 			return false;
	// 			}else{
	// 			return $query->row()->symbol;
	// 		}
	// } 
	
	 function sold($id){ 
		$ci=get_instance();
		$ci->db->select('SUM(op.pro_qty) as quantity');
		$ci->db->join('tbl_orders ord','ord.ord_id=op.ord_id','LEFT');
		$ci->db->where('op.pro_id', $id);
		$ci->db->where('ord.order_status', 'InProcess');
        $query = $ci->db->get('tbl_orders_product op');
        //  echo $ci->db->last_query($query);
        //  die;
		if($query->num_rows() ==''){
			return '0';
		}else{
			return $query->row()->quantity;
		}
	}
   
    function order($id){ 
		$ci=get_instance();
		$ci->db->select('count(`ord`.`ord_id`) AS `ORDER`');
		$ci->db->join('tbl_orders ord','ord.ord_id=op.ord_id','LEFT');
		$ci->db->where('op.pro_id', $id);
		$ci->db->where('ord.order_status', 'InProcess');
        $query = $ci->db->get('tbl_orders_product op');
        // echo $ci->db->last_query($query);
        // die;
		if($query->num_rows() ==''){
			return '0';
		}else{
			return $query->row()->ORDER;
		}
	}
   
    function get_total_product(){ 
		$ci=get_instance();		
        $query = $ci->db->get('tbl_campaign');
		if($query->num_rows() ==''){
				return '0';
				}else{
				return $query->num_rows();
			}
	} 
	
	function reward_name($p_id){ 
		$ci=get_instance();	
		$ci->db->select('rwd.r_price');
		$ci->db->join('tbl_reward rwd','rwd.r_id=cmp.reward','LEFT');
		$ci->db->where('cmp.product', $p_id);
        $query = $ci->db->get('tbl_campaign cmp');
		if($query->num_rows() ==''){
				return '';
				}else{
				return $query->row()->r_price;
			}
	} 
	
	
	function product($ord_id){ 
		$ci=get_instance();	
		$ci->db->select('pro_id,pro_name,pro_qty');
		$ci->db->where('ord_id', $ord_id);
        $query = $ci->db->get('tbl_orders_product');
		if($query->num_rows() ==''){
				return '';
				}else{
				return $query->result();
			}
	} 

 function get_total_order(){ 
		$ci=get_instance();		
		$ci->db->where('order_status','InProcess');
        $query = $ci->db->get('tbl_orders');
		if($query->num_rows() ==''){
				return '0';
				}else{
				return $query->num_rows();
			}
	} 	
	
	function get_total_ticket(){ 
		$ci=get_instance();	
		$ci->db->select('tk.id');
		$ci->db->join('tbl_orders ord','ord.ord_id=tk.odrer_id AND ord.cust_id=tk.cust_id','LEFT');
		$ci->db->where('ord.order_status','InProcess');
		$ci->db->where('tk.status','0');
        $query = $ci->db->get('tbl_ticket tk' );
        $ci->db->last_query($query);
        // die;
		if($query->num_rows() ==''){
				return '0';
				}else{
				return $query->num_rows();
			}
	} 	
	
		function get_total_user(){ 
		$ci=get_instance();	
		$ci->db->select('usr_id');
// 		$ci->db->join('tbl_orders ord','ord.ord_id=tk.odrer_id AND ord.cust_id=tk.cust_id','LEFT');
// 		$ci->db->where('ord.order_status','InProcess');
        $query = $ci->db->get('tbl_users' );
        $ci->db->last_query($query);
        // die;
		if($query->num_rows() ==''){
				return '0';
				}else{
				return $query->num_rows();
			}
	} 	
	
	 function category($id){ 
		$ci=get_instance();		
		$ci->db->where('procat_id', $id);
        $query = $ci->db->get('tbl_property_category');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->procat_name;
			}
	} 
	
    function admin_profile($email){ 
		$ci=get_instance();		
		$ci->db->where('mst_email', $email);
        $query = $ci->db->get('tbl_master');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->result()[0];
			}
	}
	
	function cate_name($id){ 
		$ci=get_instance();
		$ci->db->select('cate_name');
		$ci->db->where('cate_id', $id);
        $query = $ci->db->get('tbl_category');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->cate_name;
			}
	}
	function scate_name($id){ 
		$ci=get_instance();
		$ci->db->select('scate_name');
		$ci->db->where('scate_id', $id);
        $query = $ci->db->get('tbl_sub_category');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->scate_name;
			}
	}

	function page($id){ 
		$ci=get_instance();
		$ci->db->select('pg_title');
		$ci->db->where('pg_id', $id);
        $query = $ci->db->get('tbl_page');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->pg_title;
			}
	}

	function product_count($id){ 
		$ci=get_instance();
		$ci->db->where('p_vnd_id', $id);
        $query = $ci->db->get('tbl_product');
		if($query->num_rows() ==''){
				return false;
				}else{					
				return $query->num_rows();
			}
	}
	
	function cate_id($id){ 
		$ci=get_instance();
		$ci->db->select('cate_id');
		$ci->db->where('scate_id', $id);
        $query = $ci->db->get('tbl_sub_category');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->cate_id;
			}
	}
	function cate($id){ 
		$ci=get_instance();
		$ci->db->select('cate_id');
		$ci->db->where('scate_id', $id);
        $query = $ci->db->get('tbl_sub_category');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->cate_id;
			}
	}

	function scate($id){ 
		$ci=get_instance();
		$ci->db->select('scate_id');
		$ci->db->where('child_id', $id);
        $query = $ci->db->get('tbl_child_category');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->scate_id;
			}
	}

	function child_id($id){ 
		$ci=get_instance();
		$ci->db->select('p_child');
		$ci->db->where('p_id', $id);
        $query = $ci->db->get('tbl_product');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->p_child;
			}
	}

	  function category_count($id){      
		$ci=get_instance();		
		$ci->db->where('cate_id', $id);		
        $query = $ci->db->get('tbl_sub_category');
        $ci->db->last_query($query);
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->num_rows();
			}
	} 
	function scategory_count($id){ 
		$ci=get_instance();		
		$ci->db->where('scate_id', $id);
        $query = $ci->db->get('tbl_child_category');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->num_rows();
			}
	} 
	function country($id){ 
		$ci=get_instance();
		$ci->db->select('name');
		$ci->db->where('id', $id);
        $query = $ci->db->get('tbl_country');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->name;
			}
	}
	function state($id){ 
		$ci=get_instance();
		$ci->db->select('st_name');
		$ci->db->where('st_id', $id);
        $query = $ci->db->get('tbl_state');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->st_name;
			}
	}
	function city($id){ 
		$ci=get_instance();
		$ci->db->select('ct_name');
		$ci->db->where('ct_id', $id);
        $query = $ci->db->get('tbl_city');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->ct_name;
			}
	}
	
	function reward($id){ 
		$ci=get_instance();
		$ci->db->select('r_price');
		$ci->db->where('r_id', $id);
        $query = $ci->db->get('tbl_reward');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->r_price;
			}
	}	
	
	function getPro_price($id){ 
		$ci=get_instance();
		$ci->db->select('pro_price');
		$ci->db->where('pro_id', $id);
        $query = $ci->db->get('tbl_products');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->pro_price;
			}
	}
	
	function getCust_name($id){ 
		$ci=get_instance();
		$ci->db->select('custFname,custLname');
		$ci->db->where('custId', $id);
        $query = $ci->db->get('tbl_customers');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->custFname." ".$query->row()->custLname;
			}
	}	
	function getCust_email($id){ 
		$ci=get_instance();
		$ci->db->select('custEmail');
		$ci->db->where('custId', $id);
        $query = $ci->db->get('tbl_customers');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->custEmail;
			}
	}	
	function getCust_phone($id){ 
		$ci=get_instance();
		$ci->db->select('custPhoneNo');
		$ci->db->where('custId', $id);
        $query = $ci->db->get('tbl_customers');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->custPhoneNo;
			}
	}
   function getVnd_name($id){ 
		$ci=get_instance();
		$ci->db->select('vnd_name');
		$ci->db->where('vnd_id', $id);
        $query = $ci->db->get('tbl_vendor');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->vnd_name;
			}
	}
	function getVnd_email($id){ 
		$ci=get_instance();
		$ci->db->select('vndEmail');
		$ci->db->where('vndId', $id);
        $query = $ci->db->get('tbl_vendors');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->vndEmail;
			}
	}
	function getVnd_phone($id){ 
		$ci=get_instance();
		$ci->db->select('vndPhone');
		$ci->db->where('vndId', $id);
        $query = $ci->db->get('tbl_vendors');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->vndPhone;
			}
	}	

	function getStatecountry_id($id){ 
		$ci=get_instance();
		$ci->db->select('country_id');
		$ci->db->where('id', $id);
        $query = $ci->db->get('tbl_states');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row();
			}
	}
	function getCityName($id){ 
		$ci=get_instance();
		$ci->db->select('name');
		$ci->db->where('id', $id);
        $query = $ci->db->get('tbl_cities');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row();
			}
	}
	
	function getStateName($id){ 
		$ci=get_instance();
		$ci->db->select('name');
		$ci->db->where('id', $id);
        $query = $ci->db->get('tbl_states');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row();
			}
	}
	
	function getCountryName($id){ 
		$ci=get_instance();
		$ci->db->select('name');
		$ci->db->where('id', $id);
        $query = $ci->db->get('tbl_countries');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row();
			}
	}
	
	
	function getProductName($id){ 
		$ci=get_instance();
		$ci->db->select('p_name');
		$ci->db->where('p_id', $id);
        $query = $ci->db->get('tbl_product');
		if($query->num_rows() ==''){
				return false;
				}else{
				return $query->row()->p_name;
			}
	}
	/*------------ For Email Send Start -------------------------*/
	function email_send($to,$subject,$msg)
	{
	$ci = get_instance(); 
	$config = array();
	$config['useragent'] = "CodeIgniter";
	$config['mailpath'] = "/usr/sbin/sendmail"; 
	$config['protocol'] = "smtp";
	$config['smtp_host'] = "localhost";
	$config['smtp_port'] = "25";
	$config['mailtype'] = 'html';
	$config['charset']  = 'utf-8';
	$config['newline']  = "\r\n";
	$config['wordwrap'] = TRUE;
	$ci->load->library('email');
	$ci->email->initialize($config);
	$ci->email->from("Ordius It Solutions Pvt. Ltd.");
	$ci->email->to($to);
	//$ci->email->bcc($ci->website['data']->bcc_email_id);
	$ci->email->subject($subject);
	$ci->email->message($msg);
	if ($ci->email->send()){		
	echo "mail send";
	} else {
		
	echo "mail  not send";
	}
		 
	}
	
	function slug($string){
      $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
     return $slug;
     }
	 
	function encode($data) { 
	return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
	} 

	function decode($data) { 
	return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
	} 
	

	function nicetime($date){
		if(empty($date)) {
			return "No date provided";
		}
		$periods         = array("sec", "min", "hr", "day", "week", "month", "year", "decade");
		$lengths         = array("60","60","24","7","4.35","12","10");
		$now             = time();
		$unix_date         = strtotime($date);
		// check validity of date
		if(empty($unix_date)) {    
			return "Bad date";
		}
		// is it future date or past date
		if($now > $unix_date) {    
			$difference     = $now - $unix_date;
			$tense         = "ago";	
		} else {
			$difference     = $unix_date - $now;
			$tense         = "Just Now";
		}
		for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
			$difference /= $lengths[$j];
		}
		$difference = round($difference);
		if($difference != 1) {
			$periods[$j].= "s";
		}	
		return "$difference $periods[$j] {$tense}";
	}
	
	
	
	
	
	  
?>