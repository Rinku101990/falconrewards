<?php if($this->websiteLang=='en'){?>
   <div class="inner-banner winner">
      <img src="<?php echo site_url('admin/uploads/content-page/').$page->pg_banner_img;?>" title="<?=$page->pg_title;?>"/>
   </div>
<?php }else if($this->websiteLang=='ar'){?>
   <div class="inner-banner winner">
      <img src="<?php echo site_url('admin/uploads/content-page/').$page->pg_banner_img_ar;?>" title="<?=$page->pg_title_ar;?>"/>
   </div>
<?php } ?>
<!-- / banner section end --> 
<!-- winner-section start-->
<div class="inner-common">
   <div class="container">
      <?php if($this->websiteLang=='en'){?>
      <h1><?php echo $page->pg_title;?></h1>
      <?=$page->content1;?>
      <?php }else if($this->websiteLang=='ar'){?>
      <h1><?php echo $page->pg_title_ar;?></h1>
      <?=$page->content2;?>
      <?php } ?>
   </div>
</div>
<!-- winner-section end