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
 @media only screen and (max-width: 600px) {
.payment-box {
    margin-top: 358px
}
}
</style>
<div class="inner-common cart-page">
   <div class="container">
      <h1>Shopping Cart</h1>
      <div class="row">
        <?php $total=0; if(!empty($this->cart->contents())){ ?>
         <div class="col-md-8"> 
            <?php 	
            $sub_total=0;  $qty_total=0; foreach ($this->cart->contents() as $items) {
            //$item_price=price($this->website->web_currency,$items['id']); 
            $item_price=$items['price']; 
            ?>
            <?php // print("<pre>".print_r($items,true)."</pre>");?>
            <div class="main-div">
               <div class="cart-box" style="padding: 0;">
                  <div class="row">
                     <div class="col-md-5" style="border-right: 2px solid #d0d0d0; ">
                         <div style="padding: 15px 15px;margin-bottom: 6px;">
                        <input type="hidden" name="id[]" value="<?php echo $items['id'];?>">
                         <input type="checkbox" name="rowid[]" class="rowid" value="<?php echo $items['rowid'];?>" style="opacity: 0"  checked>
                        <input type="hidden" name="quantity[]" value="<?php echo $items['qty'];?>">
                        <input type="hidden" name="item_price" class="item_price<?=$items['rowid'];?>" value="<?=$item_price;?>">
                        <div class="product-image"><img src="<?php echo $items['img'];?>"></div>
                        <h1><?=currency($this->website->web_currency);?> <?php echo number_format($item_price,2);?> </h1>
                        <h4>Unit Price</h4>
                        <h3 style="margin-top: 0px !important;">Product</h3>
                        <h4><?php $productname = strlen($items['name']); if($productname>=20){echo substr($items['name'],0,20).'.';}else{echo substr($items['name'],0,20);}?></h4>
                     </div></div>
                    
                     <div class="col-md-5" style="">
                        <div style="padding: 15px 15px;    margin-bottom: 6px;">
                            <div class="product-image"><img src="<?php echo $items['rewardimg'];?>"> </div>
                            <h3 style="margin-top: 0px !important;">Prize</h3>
                            <h4 style="height:57px;overflow: hidden;  text-overflow: ellipsis;  width: 45%;"><?php $rewardprice = strlen($items['rewardprice']); if($rewardprice>=18){echo substr($items['rewardprice'],0,18).'.';}else{echo substr($items['rewardprice'],0,18);}?></h4>
                        </div>
                     </div>
                    <div class="col-md-1">&nbsp;</div>
                        <div class="col-md-1 product-quantity2" style="background: #FAFAFA;height: 146px;border-radius: 0 7px 7px 0;">
                            <div class="product-quantity">
                              <span id="inc<?=$items['rowid'];?>"><button class="plus-btn icon-plus" type="button" name="button" onclick="inc('<?=$items['rowid'];?>',this)" style="padding: 11px 10px; border: none;background: #FAFAFA;"><i class="fa fa-plus" style=" background: transparent;font-size: 16px; color: #4a4a4a;"></i></button></span>
                                <input class="jsChangeCartItem avail_qty<?=$items['rowid'];?>" type="tel" name="qty" value="<?php echo $items['qty']; $qty_total+=$items['qty']; ?>" style="font-size: 16px;font-weight: 800;padding: 20px 0;  width: 100%; text-align: center;  border: none; background: transparent;" disabled readonly>
                                <span id="dec<?=$items['rowid'];?>"> <button class="minus-btn icon-minus" type="button" onclick="dec('<?=$items['rowid'];?>',this)" style="padding: 11px 10px; border: none;background: #FAFAFA;"><i class="fa fa-minus" style=" background: transparent;font-size: 16px; color: #4a4a4a;"></i></button></span>
                            </div>
                        </div>
                  </div>
               </div>
                <div class="ticket">
                  <span class="tickets<?=$items['rowid'];?>">
                  <!-- <i class="fa fa-ticket" aria-hidden="true"></i> -->
                  </span> 
                  <span class="ticket_count<?=$items['rowid'];?>" data-itemcount="<?php echo $get_total_ticket=$items['qty']*2;?>"><i class="fa fa-ticket" aria-hidden="true"></i> <?=$items['qty']*2;?></span> <span class="ticket_name"><?php if($get_total_ticket > '1'){echo 'Tickets';}else{ echo "Ticket"; }?> Per Unit</span>
               </div>
               <div class="amount">Items Total <span><?=currency($this->website->web_currency);?> <span id="sub_total<?=$items['rowid'];?>"><?php echo number_format($item_price*$items['qty'],2); $sub_total+=$item_price*$items['qty'];?></span></span></div>
            </div>
            <?php } ?>
         </div>

         <div class="col-md-4">
            <div class="payment-box">
               <div class="cart-box">
                  <div class="section-d">
                     <h2>Total Products</h2>
                     <span class="total_product"><?=$qty_total;?></span>
                  </div>
                 <div class="section-d">
                     <h2 class="main_total_tickt"> <?php $main_total_tickt=$qty_total+$qty_total;
                      if($main_total_tickt > '1'){echo 'Total Tickets';}else{ echo "Total Ticket"; }
                      ?></h2>
                     <span class="total_tickets"><?=$qty_total+$qty_total;?></span>
                  </div>
                  <form action="<?=base_url('checkout');?>" method="post" >
                  <div class="section-d">
                     <h2>Donate to receive an additional entry</h2>
                     <br>
                     <p><small>I agree to donate all purchased products to charity<br> as per the "<a href="<?php //echo site_url('terms-conditions');?>#" style="font-size: 13px;">Draw Terms & Conditions</a>"</small></p>
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
                  <div class="section-d">
                     <h2 style="font-size:22px;color:#000">GRAND TOTAL
                     <!--<br><small style="font-size:75%">Prices Included VAT </small>-->
                     </h2>
                     <input type="hidden" name="item_price" value="<?php echo number_format($sub_total, 2);?>">
                     <span style="font-size:22px;color:#000"><?=currency($this->website->web_currency);?>&nbsp;<span id="get_total" style="font-size:22px;color:#000"><?php echo number_format($sub_total, 2);?></span></span>
                  </div>
                  <button type="submit" class="btn payment-btn" href="<?=base_url('checkout');?>">Select Payment Method</button>
                  </form>
               </div>
               <p><small>Our payments are secured with state of the art three dimensional security system. We do not store any of your payment or credit card details. Accepting world class payment providers.<small></p>
               <img src="<?=base_url('assets/');?>img/accepted_c22e0.png"/>
            </div>
         </div>
        <?php }else{ ?>  
        <div class="col-md-12">
          <div class="main-div">
            <div class="cart-box">
              <a href="<?php echo site_url('/');?>" class="btn payment-btn" style="padding: 6px 20px !important;">There are no items currently in your cart</a>
            </div>
          </div>
        </div> 
        <?php } ?>   
      </div>
   </div>
</div>
<!-- winner-section end-->