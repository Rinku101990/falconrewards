<style type="text/css">
   span#select2-sp_pid-oc-container {
   line-height: 40px;
   }
   span.select2-selection.select2-selection--single {
   height: 40px;
   border: 1px solid #e8e7ea;
   border-radius: 4px !important;
   }
   .select2-container--default .select2-selection--single .select2-selection__rendered {
   color: #444;
   line-height: 35px;
   }
   .select2-container--default .select2-selection--single .select2-selection__arrow {
   height: 40px;
   position: absolute;
   top: 1px;
   right: 1px;
   width: 20px;
   }
   span.select2.select2-container.select2-container--default {
   width: 100% !important;
   height: 40px;
   }
   .input-group-addon {
   padding: .5rem .75rem;
   margin-bottom: 0;
   font-size: 1rem;
   font-weight: 400;
   line-height: 1.25;
   color: #b7bec5;
   text-align: center;
   border: 1px solid #e3ebf3;
   border-right: 1px solid #e3ebf3;
   border-radius: 0 .25rem .2rem 0; 
   }
   h3.card-title span {
   padding-bottom: 13px;
   color: #ff3a59;
   border-bottom: 1px solid red;
   }
   ul.category-list {
   border: 1px solid #d6d6d6;
   }
   ul.category-list li {
   display: block;
   margin: 0;
   padding: 10px;
   border-bottom: solid 1px #e8e7ea;
   font-size: 0.9em;
   }
   ul.category-list li a {
   color: #ea3a3c;
   font-weight: 500;
   font-size: 1rem;
   }
   .form-control {
   margin-bottom: 15px;   
   }
   span.red {
   color: #ff0000;
   }
   ul.booking-list li {
   padding: 4px 0;
   list-style: none;
   border-bottom: 1px solid #E3E3E3;
   }
   ul.booking-list li a {
   /* margin: 37px; */
   padding: 20px;
   color: #111;
   }
</style>
<div class="app-content">
<div class="section">
   <!--  Page-header opened -->
   <div class="page-header">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="<?=base_url('dashboard');?>"><i class="fe fe-home mr-1"></i> Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">Edit Draw</li>
      </ol>
      <div class="mt-3 mt-lg-0">
         <div class="d-flex align-items-center flex-wrap text-nowrap"> 
            <button type="button" onclick="history.go(-1)" class="btn btn-secondary btn-icon-text mr-2 mb-2 mb-md-0"> <i class="fa fa-arrow-left"></i> Go Back  </button>
            <a href="<?=base_url('draws');?>">
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0"> <i class="fe fe-list "></i> List Draw </button>
            </a>   
         </div>
      </div>
   </div>
   <!--  Page-header closed -->
   <!-- row opened -->
 
   <!-- General  -->
   <div class="row" id="general" >
      <div class="col-lg-10 col-xl-12 col-md-12 col-sm-12">
         <div class="card">
            <div class="card-header" style="padding-bottom: 0px;">
               <h3 class="card-title"><span>Edit Draw</span></h3>
            </div>
            <div class="card-body">
               <div class="account_login_form">
                  <div class="GeneralResponse"> </div>                  
                  <form action="" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="drw_id" value="<?=$draws->drw_id;?>">

                        <?php $msg=$this->session->flashdata('msg');if($msg){  ?>
                        <div class=" row">
                            <div class="col-md-9">
                                <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible fade show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-<?php echo $msg['icon'] ?> "></i></span> <span class="alert-inner--text"><strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?></span> <button type="button" class="close text-black" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
                            </div>
                        </div>
                        <?php }?>
                        <div class="row">
                            
                            <div class="col-sm-6 col-md-6">
                                <label>Product for draw <span class="red">*</span></label>
                                <select name="drw_products" class="form-control drw_products" required>
                                    <option value="">select product for draw</option>
                                    <?php if(!empty($product)){ foreach ($product as $prolist) { ?>
                                        <?php if($prolist->r_price!=''){ ?>
                                            <option value="<?php echo $prolist->p_id;?>"<?php if($draws->drw_products==$prolist->p_id)echo'selected';?>><?php echo $prolist->p_name."( ".$prolist->r_price." )";?></option>
                                        <?php }else{ ?>
                                            <option value="<?php echo $prolist->p_id;?>"<?php if($draws->drw_products==$prolist->p_id)echo'selected';?>><?php echo $prolist->p_name."( NA )";?></option>
                                        <?php } ?>
                                    <?php  } } ?>
                               </select>
                               <span id="drw_products"></span>
                            </div>
                            
                            <div class="col-sm-12 col-md-12">
                               <label>Name(English) <span class="red">*</span></label>
                               <input type="text" name="drw_title" class="form-control drw_title" value="<?=$draws->drw_title;?>" placeholder="Enter Draw Name English">
                               <span id="name"></span>
                            </div>
                            
                            <div class="col-sm-12 col-md-12">
                               <label>Name(Arabic) <span class="red">*</span></label>
                               <input type="text" name="drw_title_ar" class="form-control" value="<?=$draws->drw_title_ar;?>"  placeholder="Enter Draw Name Arabic">
                               <span id="drw_title_ar"></span>
                            </div>
                       
                            
                            <div class="col-sm-4 col-md-4">
                               <label>Video File<span class="AlertMessageFile"></span></label>
                               <input type="file" name="drw_video" id="drw_video" class="form-control drwvideo" required>
                               <small>(Allowed file extension: .mp4, .webm, .avi, .flv, .mov)</small><br>
                               <span id="drwvideo"></span>
                            </div>
                            <div class="col-sm-2 col-md-2">
                                <label></label>
                                <div class="form-group">
                                    <span id="image_preview">
                                        <!--<img src="<?php echo site_url('uploads/videos/thumbnails/'.$draws->drw_thumbnail);?>" style="width:100px; height: 50px;">-->
                                        <iframe width="100" height="60" src="<?php echo site_url('uploads/videos/'.$draws->drw_video);?>" frameborder="0" allowfullscreen></iframe>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="col-sm-4 col-md-4">
                               <label>Video Thumbnails Image</label>
                               <input type="file" name="drw_thumbnail" class="form-control" required>
                               <small>(Allowed file extension: .jpg, .png, .jpeg, .gif)</small>
                            </div>
                            <div class="col-sm-2 col-md-2">
                                <label></label>
                                <div class="form-group">
                                    <span id="image_preview">
                                        <img src="<?php echo site_url('uploads/videos/thumbnails/'.$draws->drw_thumbnail);?>" style="width:100px; height: 50px;">
                                    </span>
                                </div>
                            </div>
                            
                            
                            <div class="col-sm-6 col-md-6">
                               <label>status<span class="red">*</span></label>
                               <select name="drw_status" class="form-control drw_status">
                                  <option value="">select</option>
                                  <option value="0" <?php if($draws->drw_status=='0')echo'selected';?>>active</option>
                                  <option value="1" <?php if($draws->drw_status=='1')echo'selected';?>>inactive</option>
                               </select>
                               <span id="pstatus"></span>
                            </div>
                            
                        </div>
                        <br>
                        <div class="save_button primary_btn default_button">
                            <button type="submit" class="btn btn-primary btn2 " ><i class="fa fa-save"></i> Update Draw </button>
                        </div>
                    </form>
                </div>
            </div>
         </div>
      </div>
   </div>
  
  
 
</div>
<style>
    .note-editable .card-block{
        height:150px !important;
    }
</style>