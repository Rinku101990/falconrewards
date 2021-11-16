<link rel="stylesheet" href="<?=base_url('assets/css/all.css');?>" />
<!-- Current Draws -->
<?php if(!empty($draws)){ ?>
<div class="game-section" name="campaigns">
   <div class="container--fuild">
      <div class="game-box2 desktop">
         <div class="row">
            <?php foreach($draws as $drlist){ ?>
            <div class="col-md-3">
               <video autoplay="true" controls src="<?php echo site_url('admin/uploads/videos/'.$drlist->drw_video);?>" type="video/mp4" style="width: 290px !important;height: 161px;object-fit: contain;"></video>
                <?php if($this->websiteLang=='en'){?>
                    <strong><?php echo $drlist->drw_title;?></strong><br>
                <?php }else if($this->websiteLang=='ar'){?>
                    <strong><?php echo $drlist->drw_title_ar;?></strong><br>
                <?php } ?>
                <strong>Draw at <?php echo date('h:i a',strtotime($drlist->drw_created)).'.'.date('D',strtotime($drlist->drw_created).'').'.'.date('j F, Y',strtotime($drlist->drw_created).'');?></strong>
            </div>
            <?php } ?>
         </div>
      </div>
   </div>
</div>
<?php } ?>
<!--Past Draws -->
<?php if($pastdraws==true){?>
<div class="our-products"  style="margin-top: 50px;direction: ltr;" >
   <div class="container-fuild">
      <a id="products" data-magellan-target="products"></a>
      <h2 style="font-size: 26px;font-weight: 500">
         <span class="first"></span> 
         <?php if($this->websiteLang=='en'){?>
            Past Draws
         <?php }else if($this->websiteLang=='ar'){?>
            تعادلات الماضي
         <?php }?>
         <span class="second"></span>
         <span class="owl-nav ">
         <span class="owl-prev" id="demo1-prev"> <i class="fa fa-angle-left" aria-hidden="true"></i></span>
         <span class="owl-next" id="demo1-next"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
         </span>
      </h2>
      <br>
      <div class="owl-carousel owl-theme" id="demo1">
        <?php foreach ($pastdraws as $pastlist) {?>
        <div class="item" >
            <div class="falcon-product-box">
                <video autoplay="false" controls src="<?php echo site_url('admin/uploads/videos/'.$pastlist->drw_video);?>" type="video/mp4" style="width:193px !important;height:108px !important"></video>
                <?php if($this->websiteLang=='en'){?>
                    <h5><b> <?php echo $pastlist->drw_title;?></b></h5>
                <?php }else if($this->websiteLang=='ar'){?>
                    <h5><b> <?php echo $pastlist->drw_title_ar;?></b></h5>
                <?php } ?>
            </div>
        </div>
         <?php }?>
      </div>
   </div>
</div>
<?php } ?>
<!-- Winners-->
<?php if(!empty($winners)){?>
<div class="our-products"  style="margin-top: 50px; background: #1C745C;padding: 34px 36px;
   border-radius: 35px;direction: ltr;" >
   <div class="container-fuild">
      <a id="products" data-magellan-target="products"></a>
      <h2 style="font-size: 26px;font-weight: 500; color: #fff">
         <span class="first"></span> 
         <?php if($this->websiteLang=='en'){?>
            Winners
         <?php }else if($this->websiteLang=='ar'){?>
            الفائزون
         <?php }?>
         <span class="second"></span>
         <span class="owl-nav ">
         <span class="owl-prev" id="demo2-prev"> <i class="fa fa-angle-left" aria-hidden="true"></i></span>
         <span class="owl-next" id="demo2-next"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span>
         </span>
      </h2>
      <br>
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