<link rel="stylesheet" href="<?=base_url('assets/css/all.css');?>" />
<style type="text/css">
   .loading-circle svg circle {
   r: 40.5;
   cx: 68.5;
   cy: 46;
   fill: none;
   stroke-linecap: round;
   stroke: #51a700 !important;
   stroke-width: 8px;
   opacity: 0;
   transition: stroke .2s ease-out;
   }
   .loading-circle-container {
   border: 3px solid #111;
   margin: 78px auto auto auto;
   background: #f2f2f2;
   width: 193px;
   height: 190px;
   padding: 39px 4px;
   border-radius: 100%;
   }
   .loading-circle{
   padding: 5px 0;
   }
   .loading1 svg{
   border: none !important;
   }
   .loading-circle svg{
   border: 2px solid #111;
   background: white;
   border-radius: 100%;
   padding: 7px;
   }
   .loading-circle .remaining .sold-label {
   letter-spacing: 0;
   margin-top: 1px;
   margin-bottom: 0px;
   }.loading-circle .remaining .small-text{
   margin-bottom: 0px;
   }
</style>
<!-- banner section start-->
<?php if($this->websiteLang=='en'){?>
<div id="carousel-example-generic" class="carousel slide view" data-ride="carousel">
   <!-- Indicators -->
   <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox">
      <?php if(!empty($banner)){ foreach($banner as $bnrskey=>$bnrsvalue){?>
         <div class="item <?php if($bnrskey==0){echo "active";}else{echo "";}?>">
            <img src="<?php echo site_url('admin/uploads/banner/'.$bnrsvalue->slr_img);?>" alt="1" style="width:100%;object-fit:cover;">
         </div>
      <?php } }else{ ?>
      <div class="item">
         <img src="<?php echo site_url('assets/img/banner1.jpg');?>" alt="1" style="width:100%;object-fit:cover;">
      </div>
      <?php } ?>
   </div>
   <!-- Controls -->
</div>
<?php }else if($this->websiteLang=='ar'){?>
<div id="carousel-example-generic" class="carousel slide view" data-ride="carousel">
   <!-- Indicators -->
   <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox">
      <?php if(!empty($banner)){ foreach($banner as $bnrskey=>$bnrsvalue){?>
         <div class="item <?php if($bnrskey==0){echo "active";}else{echo "";}?>">
            <img src="<?php echo site_url('admin/uploads/banner/'.$bnrsvalue->slr_img_ar);?>" alt="1" style="width:100%;object-fit:cover;">
         </div>
      <?php } }else{ ?>
      <div class="item">
         <img src="<?php echo site_url('assets/img/banner1.jpg');?>" alt="1" style="width:100%;object-fit:cover;">
      </div>
      <?php } ?>
   </div>
   <!-- Controls -->
</div>
<?php } ?>
<!-- / banner section end -->
<div class="reward-section">
   <div class="section_bg_gray">
      <div class="container-fuild">
         <div class="row">
            <?php if($this->websiteLang=='en'){?>
            <div class="col-sm-6 col-md-6">
               <a href="#">
               <img src="<?php echo site_url('assets/img/Pallet-31.jpeg');?>" alt="" class="img-responsive" style="width:100%; margin-bottom: 20px;    border-radius: 15px;">
               </a>
            </div>
            <div class="col-sm-6 col-md-6">
               <a href="#">
               <img src="<?php echo site_url('assets/img/Pallet-32.jpeg');?>" alt="" class="img-responsive" style="width:100%;margin-bottom: 20px;    border-radius: 15px;">
               </a>
            </div>
            <?php }else if($this->websiteLang=='ar'){?>
            <div class="col-sm-6 col-md-6">
               <a href="#">
               <img src="<?php echo site_url('assets/img/Pallet-31-ar.jpg');?>" alt="" class="img-responsive" style="width:100%; margin-bottom: 20px;    border-radius: 15px;">
               </a>
            </div>
            <div class="col-sm-6 col-md-6">
               <a href="#">
               <img src="<?php echo site_url('assets/img/Pallet-32-ar.jpg');?>" alt="" class="img-responsive" style="width:100%;margin-bottom: 20px;    border-radius: 15px;">
               </a>
            </div>
            <?php } ?>
         </div>
      </div>
   </div>
</div>
<!-- game-section start-->
<?php //print("<pre>".print_r($products,true)."</pre>");?>
<div class="game-section" name="campaigns" >
   <?php if(!empty($products)){ ?>
   <div class="container--fuild">
      <a id="Campaigns" data-magellan-target="Campaigns"></a>
      <div class="game-box game-box1 desktop">
         <div class="row">
            <?php foreach($products as $pro){ ?>
            <div class="col-md-3">
               <img src="<?php echo site_url('admin/uploads/campaign/'.$pro->img);?>"style="width: 351px;height: 161px;object-fit: contain;margin-top:78px;"/>
               <?php if($this->websiteLang=='en'){?>
                  Buy a
                  <?php echo $pro->p_name;?>
               <?php }else if($this->websiteLang=='ar'){ ?>
                  شراء
                  <?php echo $pro->p_name_ar;?>
               <?php } ?>
               <br><span style="color:#056839"><b>AED<?php echo number_format(price(5,$pro->product),2);?></b></span></span>
               <?php  $get_t=sold($pro->p_id)+$pro->p_soldplus;  $get_tt=sold($pro->p_id)+$pro->p_soldplus+1; if($get_tt<=$pro->p_qty){ ?>
               
               <div class="count-input space-bottom">
                  <!--  <a class="incr-btn" data-action="decrease" href="#">–</a> -->
                  <input  class="quantity avail_qty" type="hidden" name="quantity" value="1"/>
                  <!--   <a class="incr-btn" data-action="increase" href="#">&plus;</a> -->
               </div>
               <br>
                  <?php if($this->websiteLang=='en'){?>
                     <button type="button" class="btn addcart-btn add-to-cart refresh-me add_to_cart" id="add_to_cart<?=encode($pro->id);?>" RefId="<?=encode($pro->id);?>" style='margin-top: 10px;'>Add to Cart</button>
                  <?php }else if($this->websiteLang=='ar'){?>
                     <button type="button" class="btn addcart-btn add-to-cart refresh-me add_to_cart" id="add_to_cart<?=encode($pro->id);?>" RefId="<?=encode($pro->id);?>" style='margin-top: 10px;'>أضف إلى السلة</button>
                  <?php } ?>
               
               <?php }else{?>
                  <br>
                  <?php if($this->websiteLang=='en'){?>
                     <button type="button" class="btn addcart-btn refresh-me " disabled="" style='margin-top: 10px;'>Sold Out</button>
                  <?php }else if($this->websiteLang=='ar'){?>
                     <button type="button" class="btn addcart-btn refresh-me " disabled="" style='margin-top: 10px;'>نفذ</button>
                  <?php }?>
               
               <?php }?>
               <?php 
                  $soldOutProductStocks = $get_t;
                  $productStocks = $pro->p_qty;
                  if($soldOutProductStocks >= $productStocks){
                     $soldOut = $productStocks;
                  }else{
                     $soldOut = $soldOutProductStocks;
                  }
               ?>
               <?php if($this->websiteLang=='en'){?>
                  <h4>Get a chance to <span style="color:#ff6262;font-style: italic;">WIN </span>: <br><?php $winLength = strlen($pro->r_win); if($winLength > 32){echo substr($pro->r_win,0,30);}else{echo $pro->r_win;}?></h4>
               <?php }else if($this->websiteLang=='ar'){?>
                  <h4>احصل على فرصة <span style="color:#ff6262;font-style: italic;">فوز </span>: <br><?php $winLength = mb_strlen($pro->r_win); if($winLength > 32){echo mb_substr($pro->r_win_ar,0,30);}else{echo $pro->r_win_ar;}?></h4>
               <?php } ?>
               
               <!-- <button type="button" class="btn addcart-btn add-to-cart refresh-me add_to_cart" RefId="<?=encode($pro->id);?>">Add to Cart</button>-->
               <div class="price-box1">
                  <div class="loading-circle loading1" data-circle="<?php  //$get_t=sold($pro->p_id)+$pro->p_soldplus; 
                     echo round($get_t*100/$pro->p_qty)+$pro->p_sold_plus;?>">
                     <svg width="92px" height="93px" viewBox="0 0 92 93">
                        <defs>
                           <path id="path-1" d="M46,92.4245283 C20.5949015,92.4245283 0,71.7345929 0,46.2122642 C0,20.6899354 20.5949015,0 46,0 C71.4050985,0 92,20.6899354 92,46.2122642 C92,71.7345929 71.4050985,92.4245283 46,92.4245283 Z M46,79.9827649 C64.5652643,79.9827649 79.6153846,64.8631967 79.6153846,46.2122642 C79.6153846,27.5613316 64.5652643,12.4417634 46,12.4417634 C27.4347357,12.4417634 12.3846154,27.5613316 12.3846154,46.2122642 C12.3846154,64.8631967 27.4347357,79.9827649 46,79.9827649 Z"></path>
                           <filter id="filter-17945" x="-4.9%" y="-4.9%" width="109.8%" height="109.7%" filterUnits="objectBoundingBox">
                              <feGaussianBlur stdDeviation="4.5" in="SourceAlpha" result="shadowBlurInner1"></feGaussianBlur>
                              <feOffset dx="0" dy="0" in="shadowBlurInner1" result="shadowOffsetInner1"></feOffset>
                              <feComposite in="shadowOffsetInner1" in2="SourceAlpha" operator="arithmetic" k2="-1" k3="1" result="shadowInnerInner1"></feComposite>
                              <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.182093524 0" type="matrix" in="shadowInnerInner1"></feColorMatrix>
                           </filter>
                        </defs>
                        <g id="Oval-2-Copy-22">
                           <use fill="#F2F2F2" fill-rule="evenodd" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#path-1"></use>
                           <use fill="black" fill-opacity="1" filter="url(#filter-)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#path-1"></use>
                        </g>
                        <circle r="39.5" cx="68.5" cy="46" transform="rotate(-90 57.5 57.5) " style="stroke-dasharray: 47.139, 248.1; stroke: #1c745c; opacity: 1;"></circle>
                        <ellipse cx="46" cy="46" rx="34.425" ry="34.235" x="0" y="0" style="fill:#ffffff;"></ellipse>
                     </svg>

                     <?php if($this->websiteLang=='en'){?>
                        <div class="remaining">
                           <span class="number"><?php if(!empty($soldOut)){echo $soldOut;}else{echo'0';}?><span class="sold-label">SOLD</span></span>
                           <span class="second-liner"><span class="small-text">OUT OF</span><?php echo $productStocks;?></span> 
                        </div>
                     <?php }else if($this->websiteLang=='ar'){?>
                        <div class="remaining">
                           <span class="number"><?php if(!empty($soldOut)){echo $soldOut;}else{echo'0';}?><span class="sold-label">تم بيع</span></span>
                           <span class="second-liner"><span class="small-text">من مجموع</span><?php echo $productStocks;?></span> 
                        </div>
                     <?php }?>
                     
                  </div>
               </div>
            </div>
            <?php }?>
         </div>
      </div>
   </div>
   <?php }?>
</div>

<!-- game-section end-->
<div class="our-products"  >
   <div class="container-fuild">
      <a id="products" data-magellan-target="products"></a>
      <h2 style="font-size: 26px;font-weight: 500; margin-bottom: 0">
         <span class="first"></span> &nbsp;              
      </h2>
   </div>
</div>

<!-- Sold Out Products -->
<div class="our-products"  style="background:#1C745C;border-radius: 35px;padding: 34px 36px;direction:ltr">
   <div class="container-fuild">
      <a id="products" data-magellan-target="products"></a>
        
        
            <?php if($this->websiteLang=='en'){?>
               <h2 style="font-size: 26px;font-weight: 500;color: #fff">
                  <div class="row">
                     <div class="col-md-6">
                        <b style="font-weight:400 !important">
                           <span class="first"></span> 
                              Sold Out 
                           <span class="second"></span>
                           <p style="color: #fff">All our sold out campaigns along with their corresponding draw dates are listed here.</p>
                        </b>
                     </div>
                     <div class="col-md-6">
                        <span class="owl-nav" style="float:right">
                           <span class="owl-prev" id="demo-prev"> <i class="fa fa-angle-left" aria-hidden="true"></i></span>
                           <span class="owl-next" id="demo-next"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                        </span>
                     </div>
                  <div>  
               </h2> 
            <?php }else if($this->websiteLang=='ar'){?>
            <h2 style="font-size: 26px;font-weight: 500;color: #fff">
               <div class="row">
                  <div class="col-md-6">
                     <span class="owl-nav" style="float:left">
                        <span class="owl-prev" id="demo-prev"> <i class="fa fa-angle-left" aria-hidden="true"></i></span>
                        <span class="owl-next" id="demo-next"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                     </span>
                  </div>
                  <div class="col-md-6">
                     <b style="font-weight:400 !important;float:right;text-align: end;">
                        <span class="first"></span> 
                           نفذ
                        <span class="second"></span>
                        <p style="color: #fff;">جميع حملاتنا التي تم بيعها مع تواريخ السحب مذكورة هنا.</p>
                     </b>
                  </div>
                  
               </div>
            </h2>
            <?php }?>
       
        
      
      <br>
      <div class="owl-carousel owl-theme" id="falcon-slider2" >
         <div class="item" >
            <a class="" href="#">
               <div class="falcon-product-box">
                  <img src="<?php echo site_url('assets/img/sold/Win-Samsung.png');?>" title="1" style="width: 100%;padding: 29px; height: 260px; object-fit: contain;" class="product-img" />
                  <img src="<?php echo site_url('assets/img/sold/sold.png');?>" class="soldoutLabelImage" style="width: 175px;">
                  <h5><b>Samsung S20+ 4G 128 GB</b></h5>
                  <?php if($this->websiteLang=='en'){?>
                  <h5>Draw Date:</h5>
                  <?php }else if($this->websiteLang=='ar'){?>
                  <h5>تاريخ السحب:</h5>
                  <?php } ?>
                  <h6><span>11 May, 2021   </span>     </h6>
               </div>
            </a>
         </div>
         <div class="item" >
            <a class="" href="#">
               <div class="falcon-product-box">
                  <img src="<?php echo site_url('assets/img/sold/I-Pod.png');?>" title="1" style="width: 100%;padding: 29px; height: 260px; object-fit: contain;" class="product-img" />
                  <img src="<?php echo site_url('assets/img/sold/sold.png');?>" class="soldoutLabelImage" style="width: 175px;">
                  <h5><b>Apple AirPods Prod</b></h5>
                  <?php if($this->websiteLang=='en'){?>
                  <h5>Draw Date:</h5>
                  <?php }else if($this->websiteLang=='ar'){?>
                  <h5>تاريخ السحب:</h5>
                  <?php } ?>
                  <h6><span>03 May, 2021   </span>     </h6>
               </div>
            </a>
         </div>
         <div class="item" >
            <a class="" href="#">
               <div class="falcon-product-box">
                  <img src="<?php echo site_url('assets/img/sold/Phillips-TV.png');?>" title="1" style="width: 100%;padding: 29px; height: 260px; object-fit: contain;" class="product-img" />
                  <img src="<?php echo site_url('assets/img/sold/sold.png');?>" class="soldoutLabelImage" style="width: 175px;">
                  <h5><b>Philips 50 inch Slim 4K UHD Smart TV</b></h5>
                  <?php if($this->websiteLang=='en'){?>
                  <h5>Draw Date:</h5>
                  <?php }else if($this->websiteLang=='ar'){?>
                  <h5>تاريخ السحب:</h5>
                  <?php } ?>
                  <h6><span>29 Jan, 2021   </span>     </h6>
               </div>
            </a>
         </div>
         <div class="item" >
            <a class="" href="#">
               <div class="falcon-product-box">
                  <img src="<?php echo site_url('assets/img/sold/Win-I-Phone-11.png');?>" title="1" style="width: 100%;padding: 29px; height: 260px; object-fit: contain;" class="product-img" />
                  <img src="<?php echo site_url('assets/img/sold/sold.png');?>" class="soldoutLabelImage" style="width: 175px;">
                  <h5><b>iPhone 11 Pro 256GB Product – Newspaper Pencil</b></h5>
                  <?php if($this->websiteLang=='en'){?>
                  <h5>Draw Date:</h5>
                  <?php }else if($this->websiteLang=='ar'){?>
                  <h5>تاريخ السحب:</h5>
                  <?php } ?>
                  <h6><span>14 Oct, 2020   </span>     </h6>
               </div>
            </a>
         </div>
         <div class="item" >
            <a class="" href="#">
               <div class="falcon-product-box">
                  <img src="<?php echo site_url('assets/img/sold/Win-Cash.png');?>" title="1" style="width: 100%;padding: 29px; height: 260px; object-fit: contain;" class="product-img" />
                  <img src="<?php echo site_url('assets/img/sold/sold.png');?>" class="soldoutLabelImage" style="width: 175px;">
                  <h5><b>AED 2,500 Cash</b></h5>
                  <?php if($this->websiteLang=='en'){?>
                  <h5>Draw Date:</h5>
                  <?php }else if($this->websiteLang=='ar'){?>
                  <h5>تاريخ السحب:</h5>
                  <?php } ?>
                  <h6><span>14 Oct, 2020   </span>     </h6>
               </div>
            </a>
         </div>
      </div>
   </div>
</div>

<!-- Coming Soon Products -->
<?php if($coming_product==true){?>
<div class="our-products"  style="margin-top: 50px;direction: ltr;" >
   <div class="container-fuild">
      <a id="products" data-magellan-target="products"></a>
      <h2 style="font-size: 26px;font-weight: 500">
         
         <?php if($this->websiteLang=='en'){?>
          <b><span class="first"></span> 
            Falcon Products
            <span class="second"></span></b>
            <span class="owl-nav ">
                 <span class="owl-prev" id="demo1-prev"> <i class="fa fa-angle-left" aria-hidden="true"></i></span>
                 <span class="owl-next" id="demo1-next"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
             </span>
         <?php }else if($this->websiteLang=='ar'){?>
            <b style="float:right"><span class="first"></span> 
            منتجات فالكون
            <span class="second"></span></b>
            <span class="owl-nav" style="float:left">
                 <span class="owl-prev" id="demo1-prev"> <i class="fa fa-angle-left" aria-hidden="true"></i></span>
                 <span class="owl-next" id="demo1-next"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
             </span><br>
         <?php }?>
         
         
      </h2>
      <div class="owl-carousel owl-theme" id="demo1">
         <?php foreach ($coming_product as $cp_value) {?>
         <div class="item" >
            <a class="" href="<?=base_url('product/').encode($cp_value->id);?>">
               <div class="falcon-product-box">
                  <img src="<?php echo site_url('admin/uploads/coming-soon-product/').$cp_value->img;?>" title="<?=$cp_value->name;?>" style="width: 100%; height: 200px; object-fit: contain;    border-radius: 15px;" class="product-img" />
                  <?php if($this->websiteLang=='en'){?>
                     <h5><b> <?=$cp_value->name;?></b></h5>
                  <?php }else if($this->websiteLang=='ar'){?>
                     <h5><b> <?=$cp_value->name_ar;?></b></h5>
                  <?php } ?>
               </div>
            </a>
         </div>
         <?php }?>
      </div>
   </div>
</div>
<?php } ?>

<?php if(!empty($winners)){?>
<div class="our-products"  style="margin-top: 50px; background: #1C745C;padding: 34px 36px;
   border-radius: 35px;direction: ltr;" >
   <div class="container-fuild">
      <a id="products" data-magellan-target="products"></a>
      <h2 style="font-size: 26px;font-weight: 500; color: #fff">
         
         <?php if($this->websiteLang=='en'){?>
            <b><span class="first"></span> 
                Winners
            <span class="second"></span></b>
            <span class="owl-nav ">
                 <span class="owl-prev" id="demo2-prev"> <i class="fa fa-angle-left" aria-hidden="true"></i></span>
                 <span class="owl-next" id="demo2-next"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
             </span>
         <?php }else if($this->websiteLang=='ar'){?>
            <b style="float:right"><span class="first"></span> 
            الفائزون
            <span class="second"></span></b>
            <span class="owl-nav " style="float:left">
                 <span class="owl-prev" id="demo2-prev"> <i class="fa fa-angle-left" aria-hidden="true"></i></span>
                 <span class="owl-next" id="demo2-next"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
             </span><br>
         <?php }?>
         
         
      </h2>
      <div class="owl-carousel owl-theme" id="demo2">
         <?php foreach($winners as $winkey => $winvalue) {?>
         <div class="item" >
            <a class="" href="#">
               <div class="falcon-product-box">
                  <?php if(!empty($winvalue->usr_profile_photo)){ ?>
                     <img src="<?php echo site_url('admin/uploads/winners/'.$winvalue->usr_profile_photo);?>" title="1" style="width: 370px; height: 260px; object-fit: contain;padding:20px 0;" class="product-img" />
                  <?php }else{ ?>
                     <img src="<?php echo site_url('admin/uploads/winners/'.$winvalue->usr_profile);?>" title="1" style="width: 370px; height: 260px; object-fit: contain;padding:20px 0;" class="product-img" />
                  <?php } ?>
                  <?php if($this->websiteLang=='en'){?>
                  <h5><b><?php echo $winvalue->drw_title;?></b></h5>
                  <?php }else if($this->websiteLang=='ar'){?>
                     <h5><b><?php echo $winvalue->drw_title_ar;?></b></h5>
                  <?php } ?>
               </div>
            </a>
         </div>
         <?php } ?>
      </div>
   </div>
</div>
<?php } ?>