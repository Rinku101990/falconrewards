<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/*! Common Helper
 * ================
 * Common Helper application file for All Common function .
 * This fileshould be included in all pages.
 * @Author  :  Rinku Vishwakarma, Manish Kumar
 * @Created :  01 June 2020
*/
function date_formate($date) {
    return date_format(date_create($date), 'd-M-Y ,h:i:s A');
}

function currency($id) {
    if ($id == '1') {
        echo 'AED';
    }
    // elseif ($id == '2') {
    //     echo 'INR';
    // } elseif ($id == '3') {
    //     echo 'KWD';
    // } elseif ($id == '4') {
    //     echo 'OMR';
    // } elseif ($id == '5') {
    //     echo 'AED';
    // } elseif ($id == '6') {
    //     echo 'USD';
    // }
}

function price($currency, $id) {
    $ci = get_instance();
    $ci->db->select('p_id,p_aed');
    $ci->db->where('p_id', $id);
    $query = $ci->db->get('tbl_product');
    //echo $ci->db->last_query();
    if ($query->num_rows() == '') {
        return false;
    } else {
        $price = $query->row()->p_aed; 
        return $price;
    }
}

/*--- Get Product Quantity ---*/ 

function getQty($id)
{
    $ci = get_instance();
    $ci->db->select('p_qty as itemQty');
    $ci->db->where('p_id', $id);
    $ci->db->where('p_status', '0');
    $query = $ci->db->get('tbl_product');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->itemQty;
    }
}

function sold($id) {
    $ci = get_instance();
    $ci->db->select('SUM(op.pro_qty) as quantity');
    $ci->db->join('tbl_orders ord', 'ord.ord_id=op.ord_id', 'LEFT');
    $ci->db->where('op.pro_id', $id);
    $ci->db->where('ord.order_status', 'InProcess');
    $query = $ci->db->get('tbl_orders_product op');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->quantity;
    }
}

function price_reward($id) {
    $ci = get_instance();
    $ci->db->select('r.r_price as price');
    $ci->db->join('tbl_reward r', 'r.r_id=c.reward', 'LEFT');
    $ci->db->where('c.product', $id);
    $query = $ci->db->get('tbl_campaign c');
    // echo $ci->db->last_query($query);
    // die;
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->price;
    }
}

function product_count($id) {
    $ci = get_instance();
    $ci->db->where('p_cate', $id);
    $query = $ci->db->get('tbl_product');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->num_rows();
    }
}

function sub_category($id) {
    $ci = get_instance();
    $ci->db->order_by('scate_name', 'ASC');
    $ci->db->where('cate_id', $id);
    $ci->db->where('scate_status', '1');
    $ci->db->where('scate_remove', '0');
    $query = $ci->db->get('tbl_sub_category');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->result();
    }
}

function child_category($id) {
    $ci = get_instance();
    $ci->db->order_by('child_name', 'ASC');
    $ci->db->where('scate_id', $id);
    $ci->db->where('child_status', '1');
    $ci->db->where('child_remove', '0');
    $query = $ci->db->get('tbl_child_category');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->result();
    }
}

function category_name($id) {
    $ci = get_instance();
    $ci->db->where('cate_id', $id);
    $query = $ci->db->get('tbl_category');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->cate_name;
    }
}

function sub_category_name($id) {
    $ci = get_instance();
    $ci->db->where('scate_id', $id);
    $query = $ci->db->get('tbl_sub_category');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->scate_name;
    }
}

function child_category_name($id) {
    $ci = get_instance();
    $ci->db->where('child_id', $id);
    $query = $ci->db->get('tbl_child_category');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->child_name;
    }
}

function cate_id($id) {
    $ci = get_instance();
    $ci->db->select('cate_id');
    $ci->db->where('scate_id', $id);
    $query = $ci->db->get('tbl_sub_category');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->cate_id;
    }
}

function cate($id) {
    $ci = get_instance();
    $ci->db->select('cate_id');
    $ci->db->where('scate_id', $id);
    $query = $ci->db->get('tbl_sub_category');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->cate_id;
    }
}

function scate($id) {
    $ci = get_instance();
    $ci->db->select('scate_id');
    $ci->db->where('child_id', $id);
    $query = $ci->db->get('tbl_child_category');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->scate_id;
    }
}

function child_id($id) {
    $ci = get_instance();
    $ci->db->select('p_child');
    $ci->db->where('p_id', $id);
    $query = $ci->db->get('tbl_product');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->p_child;
    }
}

function product_id($id) {
    $ci = get_instance();
    $ci->db->select('p_id');
    $ci->db->where('p_child', $id);
    $query = $ci->db->get('tbl_product');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->p_id;
    }
}

function product($id) {
    $ci = get_instance();
    $ci->db->select('p_name');
    $ci->db->where('p_id', $id);
    $query = $ci->db->get('tbl_product');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->p_name;
    }
}

function max_price() {
    $ci = get_instance();
    $ci->db->select('p_selling_price');
    $ci->db->order_by('p_selling_price', 'DESC');
    $query = $ci->db->get('tbl_product');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->p_selling_price;
    }
}

function policy($id) {
    $ci = get_instance();
    $ci->db->select('pp_title,pp_description');
    $ci->db->where('pp_id', $id);
    $query = $ci->db->get('tbl_policy');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row();
    }
}

function category_count($id, $vnd_id) {
    $array = array('0', $vnd_id);
    $ci = get_instance();
    $ci->db->where('cate_id', $id);
    $ci->db->where_in('vnd_id', $array);
    $query = $ci->db->get('tbl_sub_category');
    $ci->db->last_query($query);
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->num_rows();
    }
}

function scategory_count($id) {
    $ci = get_instance();
    $ci->db->where('scate_id', $id);
    $query = $ci->db->get('tbl_child_category');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->num_rows();
    }
}

function brand($id) {
    $ci = get_instance();
    $ci->db->select('brd_name');
    $ci->db->where('brd_id', $id);
    $query = $ci->db->get('tbl_brand');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->brd_name;
    }
}

function dimensions($id) {
    $ci = get_instance();
    $ci->db->select('ut_dime_name');
    $ci->db->where('ut_id', $id);
    $query = $ci->db->get('tbl_unit');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->ut_dime_name;
    }
}

function unit($id) {
    $ci = get_instance();
    $ci->db->select('ut_weight_name');
    $ci->db->where('ut_id', $id);
    $query = $ci->db->get('tbl_unit');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->ut_weight_name;
    }
}

function vendor_profile($email) {
    $ci = get_instance();
    $ci->db->where('vnd_email', $email);
    $query = $ci->db->get('tbl_vendor');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->result() [0];
    }
}

function option($id) {
    $ci = get_instance();
    $ci->db->where('opt_id', $id);
    $ci->db->where('opt_status', '1');
    $query = $ci->db->get('tbl_option');
    if ($query->num_rows() == '') {
        return 'Friendymart';
    } else {
        return $query->row();
    }
}

function pincode($id) {
    $ci = get_instance();
    $ci->db->select('zc_zipcode');
    $ci->db->where('zc_id', $id);
    $query = $ci->db->get('tbl_zipcode');
    if ($query->num_rows() == '') {
        return 'Admin';
    } else {
        return $query->row()->zc_zipcode;
    }
}

function tax($id) {
    $ci = get_instance();
    $ci->db->select('txt_per');
    $ci->db->where('cate_id', $id);
    $ci->db->where('txt_status', '1');
    $query = $ci->db->get('tbl_tax');
    if ($query->num_rows() == '') {
        return 'Admin';
    } else {
        return $query->row()->txt_per;
    }
}

function delivery() {
    $ci = get_instance();
    $ci->db->select('min_value,value');
    $ci->db->where('name', 'Delivery Charge');
    $query = $ci->db->get('tbl_setting');
    if ($query->num_rows() == '') {
        return 'Admin';
    } else {
        return $query->row();
    }
}

function Order_id($id) {
    $ci = get_instance();
    $ci->db->select('ord_id');
    $ci->db->where('ord_reference_no', $id);
    $query = $ci->db->get('tbl_orders');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->ord_id;
    }
}

function getVnd_Id($email) {
    $ci = get_instance();
    $ci->db->select('vndId');
    $ci->db->where('vndEmail', $email);
    $query = $ci->db->get('tbl_vendors');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->vndId;
    }
}

function getVnd_name($id) {
    $ci = get_instance();
    $ci->db->select('vnd_name');
    $ci->db->where('vnd_id', $id);
    $query = $ci->db->get('tbl_vendor');
    if ($query->num_rows() == '') {
        return 'Admin';
    } else {
        return $query->row()->vnd_name;
    }
}

function getVnd_email($id) {
    $ci = get_instance();
    $ci->db->select('vndEmail');
    $ci->db->where('vndId', $id);
    $query = $ci->db->get('tbl_vendors');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->vndEmail;
    }
}

function getVnd_phone($id) {
    $ci = get_instance();
    $ci->db->select('vndPhone');
    $ci->db->where('vndId', $id);
    $query = $ci->db->get('tbl_vendors');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->vndPhone;
    }
}

function country($id) {
    $ci = get_instance();
    $ci->db->select('name');
    $ci->db->where('id', $id);
    $query = $ci->db->get('tbl_country');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->name;
    }
}

function state($id) {
    $ci = get_instance();
    $ci->db->select('st_name');
    $ci->db->where('st_id', $id);
    $query = $ci->db->get('tbl_state');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->st_name;
    }
}

function city($id) {
    $ci = get_instance();
    $ci->db->select('ct_name');
    $ci->db->where('ct_id', $id);
    $query = $ci->db->get('tbl_city');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row()->ct_name;
    }
}

function customer($id) {
    $ci = get_instance();
    $ci->db->where('usr_id', $id);
    $query = $ci->db->get('tbl_users');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row();
    }
}

function category_banner($slug) {
    $ci = get_instance();
    $ci->db->where('mn_slug', $slug);
    $query = $ci->db->get('tbl_navigation');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row();
    }
}

function company_detail() {
    $ci = get_instance();
    $ci->db->limit(1);
    $query = $ci->db->get('tbl_website_info');
    if ($query->num_rows() == 1) {
        $website = $query->row();
    }
    $logo = '<img src="' . site_url('admin/uploads/website/logo/') . $website->web_company_logo . '" title="' . $website->web_company_name . '" style="width:200px">';
    $url = base_url();
    $social_media_icons = '<a href="' . $website->web_facebook_link . '"><img src="' . base_url() . 'assets/img/facebook.png" title="Facebook" style="width:40px;"></a>
             <a href="' . $website->web_twitter_link . '"><img src="' . base_url() . 'assets/img/twitter.png" title="Twitter" style="width:40px;"></a>
             <a href="' . $website->web_linkedin_link . '"><img src="' . base_url() . 'assets/img/linkedin.png" title="Google Pluse" style="width:40px;"></a>
             <a href="' . $website->web_instagram_link . '"><img src="' . base_url() . 'assets/img/instagram.png" title="Youtube" style="width:36px;"></a>';
    $data = array('Company_Logo' => $logo, 'website_url' => $url, 'social_media_icons' => $social_media_icons, 'website_name' => $website->web_company_name, 'contact_us_email' => $website->web_support_email);
    return $data;
}

function template($id) {
    $ci = get_instance();
    $ci->db->select('tp_name,tp_subject,tp_body');
    $ci->db->where('tp_id', $id);
    $ci->db->where('tp_status', '1');
    $query = $ci->db->get('tbl_template');
    if ($query->num_rows() == '') {
        return false;
    } else {
        return $query->row();
    }
}
/*------------ For Email Send Start -------------------------*/
function email_send($to, $subject, $msg) {
    $ci = get_instance();
    // Load PHPMailer library
    $ci->load->library('phpmailer_lib');
    // PHPMailer object
    $mail = $ci->phpmailer_lib->load();
    $ci->db->limit(1);
    $query = $ci->db->get('tbl_website_info');
    if ($query->num_rows() == 1) {
        $website = $query->row();
    }
    $email_protocal = $website->web_email_protocal;
    if ($email_protocal == 'SMTP Email') {
        // SMTP configuration
        $mail->isSMTP();
        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = 0; /* Debug Mode */
        $mail->Host = $website->web_smtp_host_name; //"mail.belacart.com"; /* smtp.zoho.in OR smtp.gmail.com*/
        $mail->SMTPAuth = true;
        $mail->Username = $website->web_email_id; //"falcon@belacart.com";
        $mail->Password = $website->web_email_password; //"falcon1234@";//
        $mail->SMTPSecure = $website->web_connection_type; //'TLS'; /* SSL OR TLS */
        $mail->Port = $website->web_smtp_port; //'587'; /* SMTP POST SSL-465 OR TLS-587 */
        $mail->setFrom($website->web_from_email_id, $website->web_company_name);
        $mail->addReplyTo($website->web_from_email_id, $website->web_company_name);
        // Add a recipient
        $mail->addAddress($to);
        // Email subject
        $mail->Subject = $subject;
        // Set email format to HTML
        $mail->isHTML(true);
        // Email body content
        $mailContent = $msg;
        $mail->Body = $mailContent;
        // Send email
        if (!$mail->send()) {
            //return false;
            
        } else {
            //return true;
            
        }
    }
}
function slug($string) {
    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
    return $slug;
}
function encode($data) {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}
function decode($data) {
    return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
}
?>
