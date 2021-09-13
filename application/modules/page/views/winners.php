<?php if($this->website->web_lang=='en'){?>
   <div class="inner-banner winner">
      <img src="<?php echo site_url('admin/uploads/content-page/').$page->pg_banner_img;?>" title="<?=$page->pg_title;?>"/>
   </div>
<?php }else if($this->website->web_lang=='ar'){?>
   <div class="inner-banner winner">
      <img src="<?php echo site_url('admin/uploads/content-page/').$page->pg_banner_img_ar;?>" title="<?=$page->pg_title_ar;?>"/>
   </div>
<?php } ?>
<!-- / banner section end -->
<!-- winner-section start-->
<div class="inner-common">
   <div class="container">
      <h1>Winners</h1>
  <?=$page->content1;?>
   </div>
</div>
<!-- winner-section end-->