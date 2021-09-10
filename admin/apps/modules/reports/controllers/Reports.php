<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends MY_Controller {
	 
	public function __construct() {
		parent::__construct(); 
		$this->load->helper("common");	
		$this->login = $this->session->userdata('logged_in_admin');			
		if(empty($this->login)){
			redirect('login','refresh');
		} 	
		$this->load->model("Reports_model",'Reports');
		$this->load->library("excel"); // For Excel Generation //
		// TABLE ORDER TABLE //
		$this->ordid="ord_id";
		$this->ordcstid="cust_id";
		$this->reports="tbl_orders";
		// FOR ORDER PRODUCT TABLE //
		$this->ordProid="op_id";
		$this->ordVnId="ord_vendors";
		$this->ordProducts="tbl_orders_product";
		/*--- FOR BUYER REPORTS ---*/
		$this->cust_id="cust_id";
		$this->customers="tbl_customer";
		/*--- FOR SELLER REPORTS ---*/
		$this->slrs_id="vnd_id";
		$this->sellers="tbl_vendor";
		/*--- FOR SELLER PRODUCT REPORTS ---*/
		$this->vnd_id="p_vnd_id";
		$this->catid="p_cate";
		$this->products="tbl_product";
		/*--- FOR CATEGORY PRODUCT REPORTS ---*/
		$this->cate_id="cate_id";
		$this->category="tbl_category";
	}
	
	/*--- CUSTOMER ORDER LIST ---*/ 
	public function all()
	{
		$content['admin']=admin_profile($this->login->mst_email);
		$content['salesReports'] = $this->Reports->get_sales_reports($this->reports);
		$content['subview']="reports/reports_list";
		$this->load->view('layout', $content);
	}

	public function export_sales()
 	{
  		$object = new PHPExcel();
  		$object->setActiveSheetIndex(0);
  		$table_columns = array("NO OF ORDERS", "NET AMOUNT", "ADJUST AMOUNT", "GST", "SHIPPING CHARGE", "DATE");
  		$column = 0;
		foreach($table_columns as $field)
		{
		   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
		   $column++;
		}
  		$salesReport = $this->Reports->get_sales_reports($this->reports);
  		$excel_row = 2;
	    foreach($salesReport as $row)
		{
		   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->ORDERS);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->NETAMNT);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->ADJAMNT);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->GST);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->SHIPPING);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->CREATED);
		   $excel_row++;
        }
  		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  		header('Content-Type: application/vnd.ms-excel');
  		header('Content-Disposition: attachment;filename="sales_reports.'.date('d').''.date('m').''.date('Y').''.date('H:i:s').'.xls"');
  		$object_writer->save('php://output');
 	}

 	/*--- BUYERS  REPORTS ---*/ 
 	public function buyers()
	{
		$content['admin']=admin_profile($this->login->mst_email);
		$content['buyerReports'] = $this->Reports->get_buyer_reports($this->customers);
		$content['subview']="reports/buyers_list";
		$this->load->view('layout', $content);
	}

	public function export_buyers()
	{
		$object = new PHPExcel();
  		$object->setActiveSheetIndex(0);
  		$table_columns = array("NAME", "EMAIL ADDRESS", "CONTACT NO", "ORDER PLACED", "PURCHASE AMOUNT", "REGISTRATION DATE");
  		$column = 0;
		foreach($table_columns as $field)
		{
		   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
		   $column++;
		}
  		$buyerReport = $this->Reports->get_buyer_reports($this->customers);
  		$excel_row = 2;
	    foreach($buyerReport as $row)
		{
		   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->cust_fname.' '.$row->cust_lname);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->cust_email);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->cust_phone);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->Orders);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->Amount);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->cust_created);
		   $excel_row++;
        }
  		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  		header('Content-Type: application/vnd.ms-excel');
  		header('Content-Disposition: attachment;filename="buyers_reports.'.date('d').''.date('m').''.date('Y').''.date('H:i:s').'.xls"');
  		$object_writer->save('php://output');
	}
 	/*--- SELLRS REPORTS ---*/ 
	public function sellers()
	{
		$content['admin']=admin_profile($this->login->mst_email);
		$content['sellerReports'] = $this->Reports->get_seller_reports($this->sellers);
		// echo "<pre>";
		// print_r($content);die;
		$content['subview']="reports/sellers_list";
		$this->load->view('layout', $content);
	}

	public function export_sellers()
	{
		$object = new PHPExcel();
  		$object->setActiveSheetIndex(0);
  		$table_columns = array("NAME", "EMAIL ADDRESS", "CONTACT NO", "ORDER PLACED", "REGISTRATION DATE");
  		$column = 0;
		foreach($table_columns as $field)
		{
		   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
		   $column++;
		}
  		$sellerReport = $this->Reports->get_seller_reports($this->sellers);
  		$excel_row = 2;
	    foreach($sellerReport as $row)
		{
		   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->vnd_name);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->vnd_email);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->vnd_phone);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->Orders);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->vnd_created);
		   $excel_row++;
        }
  		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  		header('Content-Type: application/vnd.ms-excel');
  		header('Content-Disposition: attachment;filename="sellers_reports.'.date('d').''.date('m').''.date('Y').''.date('H:i:s').'.xls"');
  		$object_writer->save('php://output');
	}
	/*--- PRODUCT REPORTS ---*/ 

	public function products()
	{
		$content['admin']=admin_profile($this->login->mst_email);
		$content['getSellers'] = $this->Reports->get_sellers_list($this->sellers);
		$content['subview']="reports/sellerwise";
		$this->load->view('layout', $content);
	}

	public function sellerwise()
	{
		$vndid = $this->input->post('getSellerProducts');
		if(!empty($vndid)){
			$vndId = decode($vndid);
			$content['admin']=admin_profile($this->login->mst_email);
			$content['slrsProducts'] = $this->Reports->get_seller_products($this->vnd_id,$vndId,$this->products);
			$content['subview']="reports/productSellerWise";
			$this->load->view('layout', $content);
		}else{
			$content['admin']=admin_profile($this->login->mst_email);
			$content['subview']="reports/badrequest";
			$this->load->view('layout', $content);
		}
	}

	public function export_productBySellers($vndrid=null)
	{
		if(!empty($vndrid)){
			$vndId = decode($vndrid);

			$object = new PHPExcel();
	  		$object->setActiveSheetIndex(0);
	  		$table_columns = array("ID", "REFRENCE NO", "NAME", "MODEL", "BRAND", "SELLING PRICE", "LENGTH", "WIDTH", "HEIGHT","WEIGHT UNIT","WEIGHT", "DATE");
	  		$column = 0;
			foreach($table_columns as $field)
			{
			   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			   $column++;
			}
	  		$sellerReport = $this->Reports->get_seller_products($this->vnd_id,$vndId,$this->products);
	  		$excel_row = 2;
		    foreach($sellerReport as $row)
			{
			   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->p_id);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->p_reference_no);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->p_name);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->p_model);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->brd_name);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->p_selling_price);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->p_lenght);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->p_width);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->p_height);
			   if( $row->ut_weight_name!=''){
			   	$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->ut_weight_name);
			   }else{
			   	$object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->ut_dime_name);
			   }
			   $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->p_weight);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->p_created);
			   $excel_row++;
	        }
	  		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
	  		header('Content-Type: application/vnd.ms-excel');
	  		header('Content-Disposition: attachment;filename="products_by_seller_reports.'.date('d').''.date('m').''.date('Y').''.date('H:i:s').'.xls"');
	  		$object_writer->save('php://output');
		}else{
			$content['admin']=admin_profile($this->login->mst_email);
			$content['subview']="reports/badrequest";
			$this->load->view('layout', $content);
		}
	}

	/*--- CATEGORY PRODUCTS ---*/ 
	public function category()
	{
		$content['admin']=admin_profile($this->login->mst_email);
		$content['getCategory'] = $this->Reports->get_category_list($this->category);
		$content['subview']="reports/categorywise";
		$this->load->view('layout', $content);
	}

	public function categorywise()
	{
		$catid = $this->input->post('getCategoryProducts');
		if(!empty($catid)){
			$catId = decode($catid);
			$content['admin']=admin_profile($this->login->mst_email);
			//$content['cateProducts'] = "Work in Progress";
			$content['cateProducts'] = $this->Reports->get_category_products($this->catid,$catId,$this->ordProducts);
			// echo "<pre>";
			// print_r($content['cateProducts']);die;
			$content['subview']="reports/productCategoryWise";
			$this->load->view('layout', $content);
		}else{
			$content['admin']=admin_profile($this->login->mst_email);
			$content['subview']="reports/badrequest";
			$this->load->view('layout', $content);
		}
	}

	public function export_productByCategory($cateid=null)
	{
		if(!empty($cateid)){
			$catId = decode($cateid);

			$object = new PHPExcel();
	  		$object->setActiveSheetIndex(0);
	  		$table_columns = array("CATE ID", "CATE NAME", "ORDER ID", "ORDER REFRENCE NO", "NAME", "SELLING PRICE", "SPECIAL PRICE", "QAUNTITY", "EFFECTIVE PRICE", "SHIPPING CHARGE", "GST", "TAX", "COUPON", "COUPON AMOUNT", "TOTAL", "COMMISSION", "ORDER DATE");
	  		$column = 0;
			foreach($table_columns as $field)
			{
			   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
			   $column++;
			}
	  		$sellerReport = $this->Reports->get_category_products($this->catid,$catId,$this->ordProducts);
	  		$excel_row = 2;
		    foreach($sellerReport as $row)
			{
			   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->cate_id);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->cate_name);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->ord_id);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->ord_reference_no);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->pro_name);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->pro_selling_price);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->pro_special_price);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->pro_qty);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->pro_price);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->min_value);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->pro_gst);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(11, $excel_row, $row->txt_per);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(12, $excel_row, $row->pro_coupon);
			   $object->getActiveSheet()->setCellValueByColumnAndRow(13, $excel_row, $row->pro_discount_value);
			   /*--- TOTAL ---*/
			   $total = ($row->pro_price*$row->pro_qty)+$row->min_value+$row->pro_gst;
			   $object->getActiveSheet()->setCellValueByColumnAndRow(14, $excel_row, number_format((float)$total, 2, '.', ''));
			   /*-- COMMISSION --*/ 
			   $grandTotal = ($row->pro_price+$row->min_value+$row->pro_gst)/$row->txt_per;
			   $object->getActiveSheet()->setCellValueByColumnAndRow(15, $excel_row, number_format((float)$grandTotal, 2, '.', ''));
			   /*-- END COMMISSION --*/ 
			   $object->getActiveSheet()->setCellValueByColumnAndRow(16, $excel_row, $row->ord_create);
			   $excel_row++;
	        }
	  		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
	  		header('Content-Type: application/vnd.ms-excel');
	  		header('Content-Disposition: attachment;filename="products_by_category_reports.'.date('d').''.date('m').''.date('Y').''.date('H:i:s').'.xls"');
	  		$object_writer->save('php://output');
		}else{
			$content['admin']=admin_profile($this->login->mst_email);
			$content['subview']="reports/badrequest";
			$this->load->view('layout', $content);
		}
	}

	/*--- TOP PRODUCTS ---*/

	public function top_products()
	{
		$content['admin']=admin_profile($this->login->mst_email);
		$content['topProducts'] = $this->Reports->get_top_products_list($this->ordProducts);
		$content['subview']="reports/topProducts";
		$this->load->view('layout', $content);
	}

	public function export_topProducts()
	{
		$object = new PHPExcel();
  		$object->setActiveSheetIndex(0);
  		$table_columns = array("CATEGORY ID","CATEGORY NAME", "PRODUCT ID", "PRODUCTS NAME", "CREATED DATE");
  		$column = 0;
		foreach($table_columns as $field)
		{
		   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
		   $column++;
		}
  		$topProductsReport = $this->Reports->get_top_products_list($this->ordProducts);
  		$excel_row = 2;
	    foreach($topProductsReport as $row)
		{
		   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->p_cate);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->cate_name);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->pro_id);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->pro_name);
		   $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, date('j M Y, G:i A',strtotime($row->ord_create)));
		   $excel_row++;
        }
  		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  		header('Content-Type: application/vnd.ms-excel');
  		header('Content-Disposition: attachment;filename="top_products_reports.'.date('d').''.date('m').''.date('Y').''.date('H:i:s').'.xls"');
  		$object_writer->save('php://output');
	}
	/*--- COMMISSION REPORTS ---*/ 

	public function commission()
	{
		$content['admin']=admin_profile($this->login->mst_email);
		$content['subview']="reports/badrequest";
		$this->load->view('layout', $content);
	}
	
}
