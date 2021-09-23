<!-- winner-section start-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
   .product-image img {
   width: 136px;
   height: 76px;
   object-fit: contain;
   }
   .product-image {
   border: 1px solid #e8e8e8;
   max-height: 13.6rem;
   border-radius: 7px;
   float: left;
   border: 1px solid #cfcfcf;
   background-color: #fff;
   padding: 20px 0px;
   margin-right: 10px;
   }
   .cart-box h1 {
   color: #666;
   font-weight: 600;
   font-size: 19px;
   margin-top: 0px;
   margin-bottom: 5px;
   text-align: left;
   }
</style>
<div class="inner-common cart-page">
   <div class="container">

      <?php if(!empty($this->session->userdata('logged_in_users'))){ ?>
         <?php if($this->website->web_lang=='en'){ ?>
            <h1 style="margin-left: 17px;">Checkout</h1>
         <?php }else if($this->website->web_lang=='ar'){ ?>
            <h1 style="margin-left: 17px;margin-bottom: 0px !important;">الدفع</h1>
         <?php } ?>
      <?php }else{echo "<h1></h1>";} ?>

      <div class="row" style="margin-top:-40px">
         <?php if(!empty($this->session->userdata('logged_in_users'))){ $total=0; if(!empty($this->cart->contents())){?>
         
         <div class="col-md-12">
            <?php if($this->website->web_lang=='en'){ ?>
            <div class="col-md-8"></div>
            <div class="col-md-4">
               <div class="payment-box">
                  <span style="float: right;font-weight: 600;font-size: 28px;color:#1d755d"><span style="font-size:15px;font-weight:normal;color:#4a4a4a">Complete payment in</span> <span class="countdown"></span></span>
               </div>
            </div>
            <div class="col-md-8">
               <?php $sub_total=0; foreach ($this->cart->contents() as $items) { 
                  $item_price=$items['price']; ?>
               <?php //print("<pre>".print_r($items,true)."</pre>");?>
               <div class="main-div">
                  <div class="cart-box" style="padding: 0;">
                     <div class="row">
                        <div class="col-md-6" style="border-right: 2px solid #d0d0d0; ">
                           <div style="padding: 15px 15px;margin-bottom: 25px;">
                              <input type="hidden" name="rowid" class="rowid" value="<?php echo $items['rowid'];?>">
                              <input type="hidden" name="id[]" value="<?php echo $items['id'];?>">
                              <input type="hidden" name="quantity[]" value="<?php echo $items['qty'];?>">
                              <input type="hidden" name="sum_price[]" value="<?php echo number_format($item_price,2);?>">
                              <div class="product-image"><img src="<?php echo $items['img'];?>"></div>
                              <h1><?=currency($this->website->web_currency);?> <?php echo number_format($item_price,2);?></h1>
                              <h2>Unit Price</h2>
                              <h3 style="margin-top: 0px !important;">Product</h3>
                              <h4><?php $productname = strlen($items['name']); if($productname>=20){echo substr($items['name'],0,20).'.';}else{echo substr($items['name'],0,20);}?></h4>
                           </div>
                        </div>
                        <div class="col-md-6" style="">
                           <div style="padding: 15px 15px;margin-bottom: 25px;">
                              <div class="product-image"><img src="<?php echo $items['rewardimg'];?>"> </div>
                              <h3 style="margin-top: 0px !important;">Prize</h3>
                              <h4 style="height:57px;overflow: hidden;  text-overflow: ellipsis;  width: 35%;"><?php $rewardprice = strlen($items['rewardprice']); if($rewardprice>=18){echo substr($items['rewardprice'],0,18).'.';}else{echo substr($items['rewardprice'],0,18);}?></h4>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="ticket">
                     <span>
                     <i class="fa fa-ticket" aria-hidden="true"></i>       
                     </span> 
                     <?php if(empty($_POST['donate'])){?>
                     <span class="ticket_count"><?=$items['qty'];?></span> Ticket Per Unit
                     <?php }else{?>
                     <span class="ticket_count"><?=$items['qty']*2;?></span> Tickets Per Unit
                     <?php }?>
                  </div>
                  <div class="amount">Items Total <span><?=currency($this->website->web_currency);?> <?php echo number_format($item_price*$items['qty'],2); $sub_total+=$item_price*$items['qty'];?></span></div>
               </div>
               <?php } ?>
            </div>
            <div class="col-md-4">
               <div class="payment-box">
                  <div class="cart-box">
                     <?php $total_tax=0; if($tax==true){ 
                        foreach ($tax as $tx_val) {?>
                     <div class="section-d">
                        <h2><?=$tx_val->txt_name;?> (<?=$tx_val->txt_per;?>%)</h2>
                        <span ><?=currency($this->website->web_currency);?>&nbsp; <span class="txt-per"><?php $txt=$tx_val->txt_per*$sub_total/100;
                           echo number_format($txt, 2);
                           $total_tax+=$txt;
                           ?></span></span>
                     </div>
                     <?php }}?>
                     <div class="section-d-payment">
                        <input type="hidden" class="final-amount" name="final_amount" value="<?php echo number_format($items['subtotal']+$total_tax, 2);?>">
                        <input type="hidden" name="amount_currency" value="<?=currency($this->website->web_currency);?>">
                        <input type="hidden" name="discountAmount" value="">
                        <h2 style="padding-top: 10px;">GRAND TOTAL</h2>
                        <span style="float: right;font-weight: 600;font-size: 28px;margin-top: 0px;margin-bottom: 0px;"><?=currency($this->website->web_currency);?> <?php echo $total_price=number_format($sub_total+$total_tax, 2);?></span>
                     </div>
                  </div>
                  <br>  
                  <br>
                  <form action="<?=base_url('checkout/payment');?>" method="post">
                     <input type="hidden" name="total_amount" value="<?=intval(preg_replace('/[^\d.]/', '', $total_price));?>">
                     <input type="hidden" name="order_reference" value="<?=$customOrderReference;?>">
                     <button type="submit" id="paymentRedirect"  class="btn payment-btn" style="">Pay Now</button>
                  </form>
                  <!-- Myfatoorah Payment Gateway Integration -->
                  <!-- End Of the Myfatoorah Payment Gateway Integration -->
                  <br>
                  <img src="<?php echo site_url('assets/img/accepted_c22e0.png');?>">
               </div>
               <br>
            </div>
            <?php }else if($this->website->web_lang=='ar'){ ?>
               <div class="col-md-8"></div>
               <div class="col-md-4">
                  <div class="payment-box">
                     <span style="float: left;font-weight: 600;font-size: 28px;color:#1d755d"><span style="font-size:15px;font-weight:normal;color:#4a4a4a">دفع كامل في</span> <span class="countdown"></span></span>
                  </div>
               </div>
               <div class="col-md-8">
                  <?php $sub_total=0; foreach ($this->cart->contents() as $items) { $item_price=$items['price']; ?>
                  <div class="main-div">
                     <div class="cart-box" style="padding: 0;">
                        <div class="row">
                           <div class="col-md-6" style="border-right: 2px solid #d0d0d0; ">
                              <div style="padding: 15px 15px;margin-bottom: 25px;">
                                 <input type="hidden" name="rowid" class="rowid" value="<?php echo $items['rowid'];?>">
                                 <input type="hidden" name="id[]" value="<?php echo $items['id'];?>">
                                 <input type="hidden" name="quantity[]" value="<?php echo $items['qty'];?>">
                                 <input type="hidden" name="sum_price[]" value="<?php echo number_format($item_price,2);?>">
                                 <div class="product-image"><img src="<?php echo $items['img'];?>"></div>
                                 <h1><?=currency($this->website->web_currency);?> <?php echo number_format($item_price,2);?></h1>
                                 <h2>Unit Price</h2>
                                 <h3 style="margin-top: 0px !important;">Product</h3>
                                 <h4><?php $productname = strlen($items['name']); if($productname>=20){echo substr($items['name'],0,20).'.';}else{echo substr($items['name'],0,20);}?></h4>
                              </div>
                           </div>
                           <div class="col-md-6" style="">
                              <div style="padding: 15px 15px;margin-bottom: 25px;">
                                 <div class="product-image"><img src="<?php echo $items['rewardimg'];?>"> </div>
                                 <h3 style="margin-top: 0px !important;">Prize</h3>
                                 <h4 style="height:57px;overflow: hidden;  text-overflow: ellipsis;  width: 35%;"><?php $rewardprice = strlen($items['rewardprice']); if($rewardprice>=18){echo substr($items['rewardprice'],0,18).'.';}else{echo substr($items['rewardprice'],0,18);}?></h4>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="ticket">
                        <span>
                        <i class="fa fa-ticket" aria-hidden="true"></i>       
                        </span> 
                        <?php if(empty($_POST['donate'])){?>
                        <span class="ticket_count"><?=$items['qty'];?></span> تذكرة لكل وحدة
                        <?php }else{?>
                        <span class="ticket_count"><?=$items['qty']*2;?></span> تذاكر لكل وحدة
                        <?php }?>
                     </div>
                     <div class="amount">مجموع العناصر <span><?=currency($this->website->web_currency);?> <?php echo number_format($item_price*$items['qty'],2); $sub_total+=$item_price*$items['qty'];?></span></div>
                  </div>
                  <?php } ?>
               </div>
               <div class="col-md-4">
                  <div class="payment-box">
                     <div class="cart-box">
                        <?php $total_tax=0; if($tax==true){ 
                           foreach ($tax as $tx_val) {?>
                        <div class="section-d">
                           <h2><?=$tx_val->txt_name;?> (<?=$tx_val->txt_per;?>%)</h2>
                           <span ><?=currency($this->website->web_currency);?>&nbsp; <span class="txt-per"><?php $txt=$tx_val->txt_per*$sub_total/100;
                              echo number_format($txt, 2);
                              $total_tax+=$txt;
                              ?></span></span>
                        </div>
                        <?php }}?>
                        <div class="section-d-payment">
                           <input type="hidden" class="final-amount" name="final_amount" value="<?php echo number_format($items['subtotal']+$total_tax, 2);?>">
                           <input type="hidden" name="amount_currency" value="<?=currency($this->website->web_currency);?>">
                           <input type="hidden" name="discountAmount" value="">
                           <h2 style="padding-top: 0px;font-weight: 600;font-size: 28px;margin-top: 0px;margin-bottom: 0px;"><?=currency($this->website->web_currency);?> <?php echo $total_price=number_format($sub_total+$total_tax, 2);?></h2>
                           <span style="float: right;">المبلغ الإجمالي</span>
                        </div>
                     </div>
                     <br>  
                     <br>
                     <form action="<?=base_url('checkout/payment');?>" method="post">
                        <input type="hidden" name="total_amount" value="<?=intval(preg_replace('/[^\d.]/', '', $total_price));?>">
                        <input type="hidden" name="order_reference" value="<?=$customOrderReference;?>">
                        <button type="submit" id="paymentRedirect"  class="btn payment-btn" style="">ادفع الآن</button>
                     </form>
                     <!-- Myfatoorah Payment Gateway Integration -->
                     <!-- End Of the Myfatoorah Payment Gateway Integration -->
                     <br>
                     <img src="<?php echo site_url('assets/img/accepted_c22e0.png');?>">
                  </div>
                  <br>
               </div>
            <?php } ?>
            <?php }?>
            <!-- </form> -->
            <?php }else{ ?>

            <div class="col-md-8 col-sm-8 col-sm-offset-2">
               <div class="login-section">
                  <!-- Login Form -->
                  <div id="formContent" class="login_page">
                     <div class="head-top-heading">
                        <?php if($this->website->web_lang=='en'){ ?>
                           <p><?php echo $this->variables[0]->var_parent_name;?></p>
                        <?php }else if($this->website->web_lang=='ar'){?>
                           <p><?php echo $this->variables[0]->var_parent_name_ar;?></p>
                        <?php } ?>
                     </div>
                     <div class="loginResponse" style="padding:8px;margin-top:-23px"></div>
                     <?php $msg=$this->session->flashdata('msg');if($msg){  ?>
                     <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible  show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-<?php echo $msg['icon'] ?> "></i></span> <span class="alert-inner--text"><strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?></span> <button type="button" class="close text-black" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
                     <?php }?>  
                     <form method="POST" id="SigninForm">
                        <!-- Tabs Titles -->
                        <div class="row">
                            <?php if($this->website->web_lang=='en'){ ?>
                            <div class="col-sm-12">
                              <div class="form-group">
                                 <input type="email" class="cust_email form-control" name="email" placeholder="<?php echo $this->variables[1]->var_parent_name;?>" autocomplete="off">
                                 <span id="cust_email"></span>
                              </div>
                           </div>
                           <?php }else if($this->website->web_lang=='ar'){ ?>
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <input type="email" class="cust_email form-control" name="email" placeholder="<?php echo $this->variables[1]->var_parent_name_ar;?>" autocomplete="off">
                                 <span id="cust_email"></span>
                              </div>
                           </div>
                           <?php } ?>
                           <div class="col-sm-12">
                               <?php if($this->website->web_lang=='en'){ ?>
                              <div class="form-group">
                                 <input type="password" class="cust_password form-control" name="password" placeholder="Password" autocomplete="off">
                                 <span id="cust_password"></span>
                              </div>
                              <?php }else if($this->website->web_lang=='ar'){ ?>
                              <div class="form-group">
                                 <input type="password" class="cust_password form-control" name="password" placeholder="كلمه السر" autocomplete="off">
                                 <span id="cust_password"></span>
                              </div>
                              <?php } ?>
                           </div>
                            <?php if($this->website->web_lang=='en'){ ?>
                           <div class="col-sm-6 pull-left">
                              <div class="checkbox" style="margin-top: 0;float:left;">
                                 <label>
                                 <input type="checkbox" > Remember me</label>
                              </div>
                           </div>
                            <?php }else if($this->website->web_lang=='ar'){ ?>
                           <div class="col-sm-6 pull-right">
                              <div class="checkbox" style="margin-top: 0;float: right;">
                                 <label>
                                 <input type="checkbox" > تذكرنى</label>
                              </div>
                           </div>
                            <?php } ?>
                        </div>
                        <div class="row">
                           <?php if($this->website->web_lang=='en'){ ?>
                           <div class="col-sm-1 pull-left">
                              <button type="button" class="btn btn-default login-submit SignIn_btn">Login Now</button>
                           </div>
                           <div class="col-sm-4 pull-right"> 
                              <a class="new-account-sign btn_login pull-center" href="<?php echo site_url('register');?>" style="padding: 10px;">You have no account? Register</a> 
                           </div>
                           <?php }else if($this->website->web_lang=='ar'){ ?>
                           <div class="col-sm-1 pull-right">
                              <button type="button" class="btn btn-default login-submit SignIn_btn">تسجيل الدخول الآن</button>
                           </div>
                           <div class="col-sm-4 pull-left"> 
                              <a class="new-account-sign btn_login pull-center" href="<?php echo site_url('register');?>" style="padding: 10px;">ليس لديك حساب؟ يسجل</a> 
                           </div>
                           <?php } ?>
                        </div>
                     </form>
                  </div>
               </div>
            </div>

            <?php } ?>
         </div>
      </div>
   </div>
   <style>
      .modal {
      position: fixed;
      top: 50% !important;
      left: 50%;
      transform: translate(-50%, -50%);
      }
   </style>
<!-- Modal Box -->
<div id="myTimeOutBox" class="modal fade">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-body">
            <center>
               <h2>Timeout</h2>
            </center>
            <p class="text-warning">
            <center>You have run out of time for this attempted payment. Please click the button below to restart the payment process.</center>
            </p>
            <center>
            <a href="<?php echo site_url('checkout');?>" class="btn payment-btn">Restart Payment</a>
            <a  href="<?php echo site_url('cart');?>" class="btn payment-btn">Cancel</a>
            <center>
         </div>
      </div>
   </div>
</div>
<!-- LOAD PAYMENT PAGE -->
<div id="myLoadPaymentBox" class="modal fade">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-body">
            <center>
               <h2>Payment Module Under Development</h2>
            </center>
         </div>
      </div>
   </div>
</div>