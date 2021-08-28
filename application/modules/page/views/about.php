<div class="inner-banner winner">
   <img src="<?php echo site_url('admin/uploads/content-page/').$page->pg_banner_img;?>" title="<?=$page->pg_title;?>"/>
</div>
<!-- / banner section end -->
<!-- winner-section start-->
<div class="inner-common">
   <div class="container">
      <?php if($this->website->web_lang=='en'){?>
      <h1><?php echo $page->pg_title;?></h1>
      <div class="about-page-section" style="background: #fff;padding: 41px;">
         <?=$page->content1;?>
      </div>
      <?php }else if($this->website->web_lang=='ar'){?>
      <h1><?php echo $page->pg_title_ar;?></h1>
      <div class="about-page-section" style="background: #fff;padding: 41px;">
         <?=$page->content2;?>
      </div>
      <?php } ?>
   </div>
</div>
<!-- winner-section end-->