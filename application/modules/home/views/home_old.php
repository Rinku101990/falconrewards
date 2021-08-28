
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
   <div id="carousel-example-generic" class="carousel slide view" data-ride="carousel">
      <!-- Indicators -->
      <!-- Wrapper for slides -->
       <div class="carousel-inner" role="listbox">
         <div class="item active">
            <img src="<?php echo site_url('assets/img/slider3.jpg');?>" alt="Falconrewards Home Banner One" style="width:100%;object-fit:cover;">
         </div>
         <div class="item">
            <img src="<?php echo site_url('assets/img/slider2.jpg');?>" alt="Falconrewards Home Banner Two" style="width:100%;object-fit:cover;">
         </div>
         <div class="item">
            <img src="<?php echo site_url('assets/img/slider1.jpg');?>" alt="Falconrewards Home Banner Three" style="width:100%;object-fit:cover;">
         </div>
         
      </div>
      <!-- Controls -->
   </div>

   <!-- / banner section end -->
  
   <div class="reward-section">
      <div class="section_bg_gray">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-md-4">
                   <a href="<?php echo site_url('register');?>">
                  <div class="single_what_we_do">
                     <div class="top_line"></div>
                     <div class="what_we_do_figure">
                        <img src="<?php echo site_url('assets/img/register_home.jpg');?>" alt="" class="img-responsive" style="width:160px">
                     </div>
                     <h4 class="what_we_do_title">Register</h4>
                  </div>
                  </a>
               </div>
               <div class="col-sm-6 col-md-4">
                   <a href="<?php echo site_url();?>#products">
                  <div class="single_what_we_do">
                     <div class="top_line"></div>
                     <div class="what_we_do_figure">
                        <img src="<?php echo site_url('assets/img/exciting_home.jpg');?>" alt="" class="img-responsive" style="width:160px">
                     </div>
                     <h4 class="what_we_do_title">Buy a product</h4>
                  </div>
                  </a>
               </div>
               <div class="col-sm-6 col-md-4">
                  <div class="single_what_we_do">
                     <div class="top_line"></div>
                     <div class="what_we_do_figure">
                        <img src="<?php echo site_url('assets/img/buy_product_home.jpg');?>" alt="" class="img-responsive" style="width:160px">
                     </div>
                     <h4 class="what_we_do_title">Win Exciting prizes</h4>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- game-section start-->

   <div class="game-section" name="campaigns" >
      <?php if(!empty($products)){ ?>
      <div class="container">
            <a id="Campaigns" data-magellan-target="Campaigns"></a>
         <?php foreach($products as $pro){ ?>
        <div class="game-box mobile">
            <div class="row">
               <div class="col-md-12" style="padding: 0px;">
                  <div class="twoColumn productInformation">
                        <div class="blockImage">
                            <a href="#"> 
                                <img src="<?php echo site_url('admin/uploads/campaign/'.$pro->img);?>" style="width: 351px;height: 251px;object-fit: contain;"/>
                            </a>
                            <img src="<?php echo site_url('assets/img/be-right.png');?>" style="width: 185px;object-fit: contain;margin-top: -45px;" />
                                                    
                        </div>
                        <h3 style="font-size: 19px;">
                            <b>Buy a</b>
                            <span class="blockTitle"><?php echo $pro->p_name;?></span>  for:
                            <span class="PriceBlock"><?=currency($this->website->web_currency);?>&nbsp;<?php echo number_format(price($this->website->web_currency,$pro->product),2);?></span>
                        </h3>
                        <div class="row">
                            <!--<div class="col-xs-6">-->
                            <!--    <a href="javascript:void(0)" >-->
                            <!--        <button class="prizeDetails-btn" type="button" tabindex="0">Prize details</button>-->
                            <!--    </a>-->
                            <!--</div>-->
                            <div class="col-xs-5">
                                <div class="loading-circle-container" style="border: none;background: none; width: 100px; height: 100px;margin: -2px 0 -7px 0;">
                        <div class="loading-circle" data-circle="<?php echo round(sold($pro->p_id)*100/$pro->p_qty)+$pro->p_sold_plus;?>">
                            <svg width="102px" height="103px" viewBox="0 0 92 93" style="  width: 80px !important; height: 80px !important; margin-top: -37px;">
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
                                <circle r="39.5" cx="68.5" cy="46" transform="rotate(-90 57.5 57.5) " style="stroke-dasharray: 2.23514, 248.1; stroke: rgb(97, 198, 82); opacity: 1;"></circle>
                                <ellipse cx="46" cy="46" rx="34.425" ry="34.235" x="0" y="0" style="fill:#ffffff;"></ellipse>
                            </svg>
<div class="remaining" style=" margin-top: -18px;"><span class="number" style="font-size: 1.5rem;"><?php echo round(sold($pro->p_id)*100/$pro->p_qty)+$pro->p_sold_plus;?>%<span class="sold-label">SOLD</span></span>
                              <!-- <span class="second-liner"><span class="small-text">OUT OF</span>225</span> -->
                            </div>                        </div>
        </div>
                            </div>
                            <div class="col-xs-7">
                                <div class="count-input space-bottom" style="    margin-left: 24px;">
                     <a class="incr-btn" data-action="decrease" href="#">–</a>
                     <input class="quantity avail_qty" type="text" name="quantity" value="1">
                     <a class="incr-btn" data-action="increase" href="#">+</a>
                  </div>
                                <button class="add-to-cart-mobile add_to_cart" RefId="<?=encode($pro->id);?>" type="button" tabindex="0" style="margin-top: 9px;">Add to Cart</button>
                            </div>
                        </div>
                        <h3 class="bottom" style="font-size: 19px;">
                            <b>Get a chance to <span class="win">WIN:</span></b>
                            <span class="blockTitle"><?php echo $pro->r_title;?></span>
                        </h3>
                    </div>
               </div>
            </div>
         </div>
         <div class="game-box desktop">
            <div class="row">
               <div class="col-md-4">
                  <img src="<?php echo site_url('admin/uploads/product/'.$pro->p_picture);?>" style="width: 351px;height: 251px;object-fit: contain;"/>
                  <h2>Buy a</h2>
                  <span><?php echo $pro->p_name;?></span>
                  <p><?php echo $pro->p_description; /* $pshort = strlen($pro->p_description); if($pshort>=195){echo substr($pro->p_description,0,195).'..';}else{echo substr($pro->p_description,0,195);}*/ ?></p>
                  <div class="count-input space-bottom">
                     <a class="incr-btn" data-action="decrease" href="#">–</a>
                     <input class="quantity avail_qty" type="text" name="quantity" value="1"/>
                     <a class="incr-btn" data-action="increase" href="#">&plus;</a>
                  </div>
                  <button type="button" class="btn addcart-btn add-to-cart refresh-me add_to_cart" RefId="<?=encode($pro->id);?>">Add to Cart</button>
               </div>
               <div class="col-md-4">
                    <div class="loading-circle-container">
                        <div class="loading-circle" data-circle="<?php echo round(sold($pro->p_id)*100/$pro->p_qty)+$pro->p_sold_plus;?>">
                            <svg width="102px" height="103px" viewBox="0 0 92 93">
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
<div class="remaining"><span class="number"><?php echo round(sold($pro->p_id)*100/$pro->p_qty)+$pro->p_sold_plus;?>%<span class="sold-label">SOLD</span></span>
                              <!-- <span class="second-liner"><span class="small-text">OUT OF</span>225</span> -->
                            </div>                        </div>
                    </div>
                  <!--<div class="progress-div">-->
                  <!--   <div class="c100 p3 big">-->
                  <!--      <span>3%</span>-->
                  <!--      <div class="slice">-->
                  <!--         <div class="bar"></div>-->
                  <!--         <div class="fill"></div>-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--</div>-->
               </div>
               <div class="col-md-4">
                  <img src="<?php echo site_url('admin/uploads/reward/'.$pro->image);?>"  style="width: 351px;height: 251px;object-fit: contain;"/>
                  <h2>Get a chance to win:</h2>
                  <span><?php echo $pro->r_title;?></span>
                  <p><?php echo $pro->r_short_description; /* $short = strlen($pro->r_short_description); if($short>=195){echo substr($pro->r_short_description,0,195).'..';}else{echo substr($pro->r_short_description,0,195);}*/ ?></p>
                  <img src="<?php echo site_url('assets/img/be-right.png');?>" style="width: 185px;object-fit: contain;" />
               </div>
            </div>
            <div class="price-box">
               <p><?=currency($this->website->web_currency);?> <span class="price" style="color:#fff"><?php echo number_format(price($this->website->web_currency,$pro->product),2);?></span></p>
            </div>
         </div>
         <?php } ?>
      </div>
      <?php } ?>
      <div class="our-products" >
         <div class="container">
                <a id="products" data-magellan-target="products"></a>
            <h2 style="font-size: 26px;font-weight: 500">
               <span class="first"></span>&nbsp;<!--New Products coming soon--><span class="second"></span>
               <span class="owl-nav ">
               <span class="owl-prev" id="falcon-prev"> <img src="<?php echo site_url('assets/img/left-arrow.png');?>"> </span>
               <span class="owl-next" id="falcon-next"> <img src="<?php echo site_url('assets/img/right-arrow.png');?>"> </span>
               </span>
            </h2>
          
            <div class="owl-carousel" id="falcon-slider">
               <div class="item">
                  <a class="" href="#">
                     <div class="falcon-product-box">
                        <img src="<?php echo site_url('assets/img/new_product11.jpg');?>"/>
                        <p>Ecofriendly Pencil</p>
                     </div>
                  </a>
               </div>
               <div class="item">
                  <a class="" href="#">
                     <div class="falcon-product-box">
                        <img src="<?php echo site_url('assets/img/new_product22.jpg');?>"/>
                        <p>Recycled Newspaper Pencil </p>
                     </div>
                  </a>
               </div>
               <div class="item">
                  <a class="" href="#">
                     <div class="falcon-product-box">
                        <img src="<?php echo site_url('assets/img/new_product31.jpg');?>"/>
                        <p>Ecofriendly Pen</p>
                     </div>
                  </a>
               </div>
               <!--<div class="item">-->
               <!--   <a class="" href="#">-->
               <!--      <div class="falcon-product-box">-->
               <!--         <img src="<?php echo site_url('assets/img/none.jpg');?>"/>-->
               <!--         <p> News paper pencil </p>-->
               <!--      </div>-->
               <!--   </a>-->
               <!--</div>-->
            </div>
         </div>
      </div>
   </div>
   <!-- game-section end-->