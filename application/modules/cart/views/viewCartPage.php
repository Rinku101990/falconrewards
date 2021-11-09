 <!--winner-section start-->
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
      /* margin-top: 0px; */
      margin-top: -20px;
      margin-bottom: 5px;
      text-align: left;
   }
   @media only screen and (max-width: 600px) {
      .payment-box {
         margin-top: auto;
         display:  inline-block;
      }
      .childParentBox{
         margin-top: auto;
         display:  inline-block;
      }
   }
</style>
<div class="inner-common cart-page">
   <div class="container">
      <?php if($this->website->web_lang=='en'){ ?>
         <h1>Shopping Cart</h1>
      <?php }else if($this->website->web_lang=='ar'){ ?>
         <h1>عربة التسوق</h1>
      <?php } ?>
      <div class="row">
         <?php $total=0; if(!empty($this->cart->contents())){ ?>
         <div class="col-md-8">
            <?php   
               $sub_total=0;  $qty_total=0; foreach ($this->cart->contents() as $items) {
               //$item_price=price($this->website->web_currency,$items['id']); 
               $item_price=$items['price']; 
            ?>

            <div class="main-div">
               <?php 
                  $getItemQty = getQty($items['id']); // Total Item Quantity
                  $getSoldItemQty = sold($items['id']); // Sold Total Quantity
                  $getAvailableItemQty = $getItemQty-$getSoldItemQty; // Available Item Quantity
               ?>
               <!-- Item Box -->
               <div class="cart-box" style="padding: 0;">
                  <div class="row">
                     <div class="col-md-5" style="border-right: 2px solid #d0d0d0; ">
                        <div style="padding: 15px 15px;margin-bottom: 6px;">
                           <input type="hidden" name="id[]" value="<?php echo $items['id'];?>">
                           <input type="checkbox" name="rowid[]" class="rowid" value="<?php echo $items['rowid'];?>" style="opacity: 0"  checked>
                           <input type="hidden" name="quantity[]" value="<?php echo $items['qty'];?>">
                           <input type="hidden" name="item_price" class="item_price<?=$items['rowid'];?>" value="<?=$item_price;?>">
                           <?php if($this->website->web_lang=='en'){ ?>
                              <div class="product-image"><img src="<?php echo $items['img'];?>"></div>
                              <h1><?=currency($this->website->web_currency);?> <?php echo number_format($item_price,2);?> </h1>
                              <h4>Unit Price</h4>
                              <h3 style="margin-top: 0px !important;">Product</h3>
                              <h4><?php $productname = strlen($items['name']); if($productname>=20){echo substr($items['name'],0,20).'.';}else{echo substr($items['name'],0,20);}?></h4>
                           <?php }else if($this->website->web_lang=='ar'){ ?>
                              <div class="product-image" style="float:right;margin-left: 10px !important;"><img src="<?php echo $items['img'];?>"></div>
                              <h1 style="text-align:justify !important"><?=currency($this->website->web_currency);?> <?php echo number_format($item_price,2);?> </h1>
                              <h4 style="text-align:justify !important">سعر الوحدة</h4>
                              <h3 style="margin-top: 0px !important;text-align:justify !important">المنتج</h3>
                              <h4 style="text-align:justify !important"><?php $productname = strlen($items['name_ar']); if($productname>=20){echo substr($items['name_ar'],0,20).'.';}else{echo substr($items['name_ar'],0,20);}?></h4>
                           <?php } ?>
                        </div>
                     </div>
                     <div class="col-md-5" style="">
                        <div style="padding: 15px 15px;    margin-bottom: 6px;">
                           <?php if($this->website->web_lang=='en'){ ?>
                              <div class="product-image"><img src="<?php echo $items['rewardimg'];?>"> </div>
                              <h3 style="margin-top: 0px !important;">Prize</h3>
                              <h4 style="height:57px;overflow: hidden;  text-overflow: ellipsis;margin:0 auto;"><?php $rewardprice = strlen($items['rewardprice']); if($rewardprice>=18){echo substr($items['rewardprice'],0,18).'.';}else{echo substr($items['rewardprice'],0,18);}?></h4>
                           <?php }else if($this->website->web_lang=='ar'){ ?>
                              <div class="product-image" style="float:right;margin-left: 10px !important;"><img src="<?php echo $items['rewardimg'];?>"> </div>
                              <h3 style="margin-top: 0px !important;text-align:justify !important">جائزة</h3>
                              <h4 style="height:57px;overflow: hidden; text-align:justify !important; text-overflow: ellipsis;margin:0 auto;"><?php $rewardprice = strlen($items['rewardprice_ar']); if($rewardprice>=18){echo substr($items['rewardprice_ar'],0,18).'.';}else{echo substr($items['rewardprice_ar'],0,18);}?></h4>
                           <?php } ?>
                           
                           <span class="available<?=$items['rowid'];?>" style="font-size: 14px;float: left;padding: 3px 1px;font-weight: 600;"></span>
                        </div>
                     </div>
                     <div class="col-md-1">&nbsp;</div>
                     <div class="col-md-1 product-quantity2" style="background: #FAFAFA;height: 146px;border-radius: 0 7px 7px 0;">
                        <div class="product-quantity">
                           <span id="inc<?=$items['rowid'];?>"><button class="plus-btn icon-plus" type="button" name="button" onclick="inc('<?=$items['rowid'];?>',this)" style="padding: 11px 10px; border: none;background: #FAFAFA;"><i class="fa fa-plus" style=" background: transparent;font-size: 16px; color: #4a4a4a;"></i></button></span>
                           <input class="jsChangeCartItem avail_qty<?=$items['rowid'];?>" type="tel" name="qty" value="<?php echo $items['qty']; $qty_total+=$items['qty']; ?>" min="1" max="<?php echo $getAvailableItemQty;?>" style="font-size: 16px;font-weight: 800;padding: 20px 0;  width: 100%; text-align: center;  border: none; background: transparent;" disabled readonly>
                           <span id="dec<?=$items['rowid'];?>"> <button class="minus-btn icon-minus" type="button" onclick="dec('<?=$items['rowid'];?>',this)" style="padding: 11px 10px; border: none;background: #FAFAFA;"><i class="fa fa-minus" style=" background: transparent;font-size: 16px; color: #4a4a4a;"></i></button></span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Ticket Area -->
               <?php if($this->website->web_lang=='en'){ ?>
               <div class="ticket">
                  <span class="tickets<?=$items['rowid'];?>">
                     <!-- <i class="fa fa-ticket" aria-hidden="true"></i> -->
                  </span>
                  <span class="ticket_count<?=$items['rowid'];?>" data-itemcount="<?php echo $get_total_ticket=$items['qty']*2;?>"><i class="fa fa-ticket" aria-hidden="true"></i> <?=$items['qty']*2;?></span> <span class="ticket_name"><?php if($get_total_ticket > '1'){echo 'Tickets';}else{ echo "Ticket"; }?> Per Unit</span>
               </div>
               <!-- Item Total Amount -->
               <div class="amount">Items Total <span><?=currency($this->website->web_currency);?> <span id="sub_total<?=$items['rowid'];?>"><?php echo number_format($item_price*$items['qty'],2); $sub_total+=$item_price*$items['qty'];?></span></span></div>
               <?php }else if($this->website->web_lang=='ar'){ ?>
               <div class="ticket">
                  <span class="tickets<?=$items['rowid'];?>">
                     <!-- <i class="fa fa-ticket" aria-hidden="true"></i> -->
                  </span>
                  <span class="ticket_count<?=$items['rowid'];?>" data-itemcount="<?php echo $get_total_ticket=$items['qty']*2;?>"><i class="fa fa-ticket" aria-hidden="true"></i> <?=$items['qty']*2;?></span> <span class="ticket_name"><?php if($get_total_ticket > '1'){echo 'تذاكر';}else{ echo "تذكرة"; }?> لكل وحدة</span>
               </div>
               <!-- Item Total Amount -->
               <div class="amount">مجموع العناصر <span><?=currency($this->website->web_currency);?> <span id="sub_total<?=$items['rowid'];?>"><?php echo number_format($item_price*$items['qty'],2); $sub_total+=$item_price*$items['qty'];?></span></span></div>
               <?php } ?>
            </div>
            <?php } ?>
         </div>
         <div class="col-md-4 childParentBox">
            <div class="payment-box">
               <div class="cart-box">
                  <div class="section-d">
                     <?php if($this->website->web_lang=='en'){ ?>
                        <h2>Total Products</h2>
                     <?php }else if($this->website->web_lang=='ar'){ ?>
                        <h2>إجمالي المنتجات</h2>
                     <?php }?>
                     
                     <span class="total_product"><?=$qty_total;?></span>
                  </div>
                  <div class="section-d">
                     <h2 class="main_total_tickt"> 
                        <?php $main_total_tickt=$qty_total+$qty_total;
                        if($this->website->web_lang=='en'){

                           if($main_total_tickt > '1')
                           { 
                                 echo 'Total Tickets';
                           }else{ 
                              echo "Total Ticket"; 
                           }
                        }else if($this->website->web_lang=='ar'){
                           if($main_total_tickt > '1')
                           { 
                                 echo 'إجمالي التذاكر';
                           }else{ 
                              echo "إجمالي التذكرة"; 
                           }
                        }
                        ?></h2>
                     <span class="total_tickets"><?=$qty_total+$qty_total;?></span>
                  </div>
                  <form action="<?=base_url('checkout');?>" method="post" >
                     <div class="section-d">
                        <?php if($this->website->web_lang=='en'){ ?>
                           <h2>Donate to receive an additional entry</h2><br>
                           <p><small>I agree to donate all purchased products to charity<br> as per the "<a href="<?php echo site_url('terms-conditions');?>" style="font-size: 13px;">Draw Terms & Conditions</a>"</small></p>
                        <?php }else if($this->website->web_lang=='ar'){ ?>
                           <h2>تبرع لتحصل على دخول اضافي</h2><br>
                           <p><small style="font-size:84% !important">أوافق على التبرع بجميع المنتجات المشتراة للجمعيات الخيرية<br> وفقا ل "<a href="<?php echo site_url('terms-conditions');?>" style="font-size: 13px;">شروط وأحكام السحب</a>"</small></p>
                        <?php } ?>
                        <span>
                           <div class="form-group">
                              <div class="checkbox checbox-switch switch-primary">
                                 <label>
                                 <input type="checkbox" name="donate" id="donate" value="<?=$qty_total+$qty_total;?>" checked />
                                 <span></span>                                        
                                 </label>
                              </div>
                           </div>
                        </span>
                     </div>
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
                     <input type="hidden" id="txt" value="<?php echo @$tax[0]->txt_per;?>">
                     <div class="section-d">
                        <h2 style="font-size:22px;color:#000">
                           <?php if($this->website->web_lang=='en'){ ?>
                              GRAND TOTAL
                           <?php }else if($this->website->web_lang=='ar'){ ?>
                              المبلغ الإجمالي
                           <?php } ?>
                           
                        </h2>
                        <input type="hidden" name="item_price" value="<?php echo number_format($sub_total+$total_tax, 2);?>">
                        <span style="font-size:22px;color:#000"><?=currency($this->website->web_currency);?>&nbsp;<span id="get_total" style="font-size:22px;color:#000"><?php echo number_format($sub_total+$total_tax, 2);?></span></span>
                     </div>
                     <?php if($this->website->web_lang=='en'){ ?>
                        <button type="submit" class="btn payment-btn" href="<?=base_url('checkout');?>">Select Payment Method</button>
                     <?php }else if($this->website->web_lang=='ar'){ ?>
                        <button type="submit" class="btn payment-btn" href="<?=base_url('checkout');?>">اختار طريقة الدفع</button>
                     <?php } ?>
                     
                  </form>
               </div>
               <p>
                  <small>
                  <?php if($this->website->web_lang=='en'){ ?>
                  <?php echo $this->variables[35]->var_parent_name;?>
                  <?php }else if($this->website->web_lang=='ar'){?>
                  <?php echo $this->variables[35]->var_parent_name_ar;?>
                  <?php } ?>
                  <small>
               </p>
               <img src="<?=base_url('assets/');?>img/accepted_c22e0.png"/>
            </div>
         </div>
         <?php }else{ ?>  
         <div class="col-md-12">
            <div class="main-div">
               <div class="cart-box">
                  <?php if($this->website->web_lang=='en'){ ?>
                     <a href="<?php echo site_url('/');?>" class="btn payment-btn" style="padding: 6px 20px !important;">there are no items currently in your cart</a>
                  <?php }else if($this->website->web_lang=='ar'){ ?>
                     <a href="<?php echo site_url('/');?>" class="btn payment-btn" style="padding: 6px 20px !important;">لا يوجد عناصر في السلة</a>
                  <?php } ?>
               </div>
            </div>
         </div>
         <?php } ?>   
      </div>
   </div>
</div>
<!-- winner-section end