<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Invoice Templates</title>
    <style>
    /* -------------------------------------
        INLINED WITH htmlemail.io/inline
    ------------------------------------- */
    /* -------------------------------------
        RESPONSIVE AND MOBILE FRIENDLY STYLES
    ------------------------------------- */
    @media only screen and (max-width: 620px) {
      table[class=body] h1 {
        font-size: 28px !important;
        margin-bottom: 10px !important;
      }
      table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
        font-size: 16px !important;
      }
      table[class=body] .wrapper,
            table[class=body] .article {
        padding: 10px !important;
      }
      table[class=body] .content {
        padding: 0 !important;
      }
      table[class=body] .container {
        padding: 0 !important;
        width: 100% !important;
      }
      table[class=body] .main {
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
      }
      table[class=body] .btn table {
        width: 100% !important;
      }
      table[class=body] .btn a {
        width: 100% !important;
      }
      table[class=body] .img-responsive {
        height: auto !important;
        max-width: 100% !important;
        width: auto !important;
      }
    }

    /* -------------------------------------
        PRESERVE THESE STYLES IN THE HEAD
    ------------------------------------- */
    @media all {
      .ExternalClass {
        width: 100%;
      }
      .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
        line-height: 100%;
      }
      .apple-link a {
        color: inherit !important;
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important;
      }
      
      .btn-primary a:hover {
        background-color: #34495e !important;
        border-color: #34495e !important;
      }
    }
</style>
  </head>
  <body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
    <table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;">
      <tr>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
        <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;">
          <div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">

            <!-- START CENTERED WHITE CONTAINER -->
            
			
            <table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">
                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                    <tr>
          						<td><img src="<?php echo site_url('admin/uploads/website/logo/').$this->website->web_company_logo;?>" alt="Company Logo" title="Company Logo" style="width:25%;float:right"></td>
          					</tr>
          					<tr>
                      <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">

                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Hi Weldkart Team : New Order Received.</p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;font-size:17px;color:#6370c9">Following are the <b>Customer Detail.</b></p>

                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">
                          <tbody>
                            <tr>
                              <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; border:1px solid #555">
                                  <tbody>
                                    <tr>
                                      <th style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">Name</th>
                                      <td style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;"><?php echo $cmpt_ord_detail->cust_fname.' '.$cmpt_ord_detail->cust_lname;?></td>
                                    </tr>
                                    <tr>
                                      <th style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">Email Address</th>
                                      <td style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;"><?php if(!empty($cmpt_ord_detail->shippingEmail)){echo $cmpt_ord_detail->shippingEmail;}else{echo "NA";};?></td>
                                    </tr>
                                    <tr>
                                      <th style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">Mobile No</th>
                                      <td style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;"><?php if(!empty($cmpt_ord_detail->shippingNumber)){echo $cmpt_ord_detail->shippingNumber;}else{ echo "NA";};?></td>
                                    </tr>
                                    <tr>
                                      <th style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">Alternate no</th>
                                      <td style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">NA</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
						            
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;font-size:17px;color:#6370c9">	Following are the <b>Transaction Details:</b></p>
                        
                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">
                          <tbody>
                            <tr>
                              <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; border:1px solid #555">
                                  <tbody>
                                    <tr>
                                      <th style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">Website/Store</th>
                  									  <td style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">www.friendymart.com</td>
                                    </tr>
								
                  									<tr>
                                      <th style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">Order Id</th>
                  									  <td style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">#<?php echo $cmpt_ord_detail->ord_reference_no;?></td>
                                    </tr>
                  									<?php if($cmpt_ord_detail->ord_pay_mode != "COD"){?>
                  									<tr>
                                      <th style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">Transaction Id</th>
                  									  <td style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">#<?php echo $cmpt_ord_detail->ord_txt_id;?></td>
                                    </tr>
                  									<?php }?>
                  									<tr>
                                      <th style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">Mode Of Payment</th>
                  									  <td style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">
                  									  <?php if($cmpt_ord_detail->ord_pay_mode == "COD"){
                  										echo"Cash on Delivery(COD)";
                  										}else{
                  										echo"Online Payment";
                  										}?>
                  									</tr>
                  									<tr>
                                      <th style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">Payment Amount</th>
                  									  <td class="text-uppercase" style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">₹<?php echo number_format($cmpt_ord_detail->ord_adj_amount,2);?></td>
                                    </tr>
                                                      
                  									<tr>
                                      <th style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">Date/Time of Payment</th>
                  									  <td style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;"><?php echo date_format(date_create($cmpt_ord_detail->ord_created_date),'d-F-Y , h:i A');?></td>
                                    </tr>
                                                      
                                    <tr>
                                      <th style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">Order Status</th>
                  									  <td class="text-uppercase" style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">
                  									  <?php if($cmpt_ord_detail->ord_txt_status== ""){
                  										echo "Success";
                  										}else{
                  										echo $cmpt_ord_detail->ord_txt_status;
                  										}?>
                  									  </td>
                                    </tr>
                  									<tr>
                                      <th style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">Message</th>
                  									  <td style="border: 1px solid #d5d2d2;padding: 5px;text-align: left;">
                  									  <?php if($cmpt_ord_detail->ord_pay_mode == "COD"){?>Your Order has been recieved.<?php }?>
                  									  <?php if($cmpt_ord_detail->ord_txt_status == "Success"){?>Your Payment has been recieved.<?php }?>
                  									  <?php if($cmpt_ord_detail->ord_txt_status == "Failure"){?>Bank failed to authenticate the customer.<?php }?>
                  									  <?php if($cmpt_ord_detail->ord_txt_status == "Failed"){?>Bank failed to authenticate the customer.<?php }?>
                  									  <?php if($cmpt_ord_detail->ord_txt_status == "Aborted"){?>Payment Process has been cancelled by the customer.<?php }?>
                  									  </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
						            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;font-size:17px;color:#6370c9">	Following are the <b>Purchases Products details</b>:</p>
                        
                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">
                          <tbody>
                            <tr>
                              <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; border:1px solid #555">
                									<thead>
                										<tr>
                											<th style="padding: 5px;text-align: left;border: 1px solid #d5d2d2;">S.No</th>
                											<th style="padding: 5px;text-align: left;border: 1px solid #d5d2d2;">Product</th>
                											<th style="padding: 5px;text-align: left;border: 1px solid #d5d2d2;">Dimension</th>
                											<th style="padding: 5px;text-align: left;border: 1px solid #d5d2d2;">Qty</th>
                											<th style="padding: 5px;text-align: left;border: 1px solid #d5d2d2;">Price</th>
                											<th style="padding: 5px;text-align: left;border: 1px solid #d5d2d2;"><?php echo $this->AllProduct['tax']->tax_name.'('.$this->AllProduct['tax']->tax_percentage.'%)';?></th>
                											<th style="padding: 5px;text-align: left;border: 1px solid #d5d2d2;">Total</th>
                										</tr>
                									</thead>
                									<tbody>
                										<?php $i=0; foreach($cmpt_ord_pro_detail as $pro){$i++;?>
                										<tr>
                											<td style="padding: 5px;text-align: left;border: 1px solid #d5d2d2;"><?=$i?></td>
                											<td style="padding: 5px;text-align: left;border: 1px solid #d5d2d2;"><?=$pro->pro_name?></td>
                											
                											<?php if(!empty($pro->pro_length)){ ?>
                        							<td style="padding: 5px;text-align: left;border: 1px solid #d5d2d2;"><?=$pro->pro_length.'×'.$pro->pro_breadth;?></td>
                        							<?php }else{ ?>
                        							<td style="padding: 5px;text-align: left;border: 1px solid #d5d2d2;"><a href="javascript:void(0)">Customize</a> :<?=$pro->pro_custom_length.'×'.$pro->pro_custom_breadth;?></td>
                        							<?php } ?>
                											
                											<td style="padding: 5px;text-align: left;border: 1px solid #d5d2d2;"><?=$pro->pord_qty?></td>
                											<td style="padding: 5px;text-align: left;border: 1px solid #d5d2d2;">₹<?=number_format($pro->pro_price,2);?></td>
                											<td style="padding: 5px;text-align: left;border: 1px solid #d5d2d2;">₹<?=number_format($pro->pro_gst_price,2);?></td>
                											<td style="padding: 5px;text-align: left;border: 1px solid #d5d2d2;">₹<?php echo number_format($pro->pord_qty*$pro->pord_price,2);?></td>
                										</tr>
                										<?php }?>
                										<tr>
                											<td colspan="5"></td>
                											<th style="padding: 5px;text-align: left;border: 1px solid #d5d2d2;">Total</th>
                											<td style="padding: 5px;text-align: left;border: 1px solid #d5d2d2;">₹<?=number_format($cmpt_ord_detail->ord_adj_amount,2);?></td>
                										</tr>
                									</tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>

            						<p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;font-size:17px;color:#6370c9">	<b>Shipping Address</b>:</p>
                        <hr>
            						
                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">
            							<tbody>
            								<tr>
            									<td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
            										<p><strong>Contact Person</strong>:	<?=$cmpt_ord_detail->shippingFirstName?> <?=$cmpt_ord_detail->shippingLastName?> | <?=$cmpt_ord_detail->shippingNumber?></p>
            										<p><strong>Shipping Address</strong>: <?=$cmpt_ord_detail->shippingAddress?>, <?=$cmpt_ord_detail->City_Name?> <?=$cmpt_ord_detail->shippingPincode?>, <?=$cmpt_ord_detail->State_Name?>, <?=$cmpt_ord_detail->Country_Name?>
            									<td>
            								</tr>
            							</tbody>
            						</table>

                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">	If you have any issues, feel free to contact us at care@friendymart.com</p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Good luck!</p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>

            <!-- START FOOTER -->
            <div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;">
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                <tr>
                  <td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">
                    <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;"><?php echo $this->website->web_address;?></span>
                    <?php if(!empty($this->webiste->web_site_url)){?>
                      <br> Powered by <a href="<?php echo $this->webiste->web_site_url;?>" target="_blank" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;"><b><?php echo $this->website->web_company_name;?></b></a>.
                    <?php }else{ ?>
                      
                    <?php } ?>
                    
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
