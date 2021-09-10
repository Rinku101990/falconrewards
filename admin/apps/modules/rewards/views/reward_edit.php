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
         <li class="breadcrumb-item active" aria-current="page">Edit Reward</li>
      </ol>
      <div class="mt-3 mt-lg-0">
         <div class="d-flex align-items-center flex-wrap text-nowrap"> 
            <button type="button" onclick="history.go(-1)" class="btn btn-secondary btn-icon-text mr-2 mb-2 mb-md-0"> <i class="fa fa-arrow-left"></i> Go Back  </button>
            <a href="<?=base_url('rewards');?>">
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0"> <i class="fe fe-list "></i> List Rewards </button>
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
               <h3 class="card-title"><span>Edit Reward</span></h3>
            </div>
            <div class="card-body">
               <div class="account_login_form">
                  <div class="GeneralResponse"> </div>                  
                    <form id="Edit_RewardForm" action="" method="post" enctype="multipart/form-data" >
                        
                        <input type="hidden" name="r_id" value="<?=$reward->r_id;?>">
                        <?php $msg=$this->session->flashdata('msg');  if($msg){  ?>
                        <div class=" row">
                            <div class="col-md-9">
                                <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible fade show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-<?php echo $msg['icon'] ?> "></i></span> <span class="alert-inner--text"><strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?></span> <button type="button" class="close text-black" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div></div></div>
                        <?php }?>
                        <div class="row">
                       
                            <div class="col-sm-6 col-md-6">
                               <label>Title <span class="red">*</span></label>
                               <input type="text" name="r_title" value="<?=$reward->r_title;?>" class="form-control" placeholder="Enter Reward Title">
                            </div>
                            <div class="col-sm-6 col-md-6">
                               <label>Title(Arabic) <span class="red">*</span></label>
                               <input type="text" name="r_title_ar" value="<?=$reward->r_title_ar;?>" class="form-control" placeholder="Enter Reward Arabic Title">
                            </div>
                       
                            <div class="col-sm-6 col-md-6">
                               <label>URL Text <span class="red">*</span></label>
                               <input type="text" name="r_url" value="<?=$reward->r_url;?>"  class="form-control " placeholder="Enter Reward URL Text"/>
                            </div>
                            <div class="col-sm-6 col-md-6">
                               <label>URL Text(Arabic) <span class="red">*</span></label>
                               <input type="text" name="r_url_ar" value="<?=$reward->r_url_ar;?>"  class="form-control " placeholder="Enter Reward Arabic URL Text"/>
                            </div>
                            
                            <div class="col-sm-6 col-md-6">
                               <label>Winning Price(English) <span class="red">*</span></label>
                               <input type="text" name="r_price" value="<?=$reward->r_price;?>"  class="form-control " placeholder="Enter Winning Price Description"/>
                            </div>
                            <div class="col-sm-6 col-md-6">
                               <label>Winning Price(Arabic) <span class="red">*</span></label>
                               <input type="text" name="r_price_ar" value="<?=$reward->r_price_ar;?>"  class="form-control " placeholder="Enter  Winning Price Description in Arabic"/>
                            </div>
                        
                             <div class="col-sm-6 col-md-6">
                               <label>Category <span class="red">*</span></label>
                                <select name="r_category" class="form-control p_category">
                                  <option value="">-Select-</option>
                                 
                                 <?php if(!empty($category)){
                                     foreach ($category as $c_list) {?>
                                        <option value="<?php echo $cid=$c_list->procat_id;?>" <?php if($reward->r_category==$cid)echo'selected';?>><?=$c_list->procat_name;?></option>
                                     <?php }
                                     }
                                     ?>
                               </select>
                               <span id="Category"></span>
                            </div>
                            
                             <div class="col-sm-6 col-md-6">
                               <label>Image <span class="red">*</span></label>
                               <br/>
                               <input type="file" name="image" class="form-control col-sm-10 col-md-10"  onchange="get_preview_image(1);" id="image_file1" accept="image/x-png,image/gif,image/jpg,image/jpeg," style="display: inline-block;">
                                <input type="hidden" name="prev_image" value="<?=$reward->image;?>">
    
                               <div id="image_preview1" class="col-sm-2 col-md-2" style="display: inline-block;"><?php if(!empty($reward->image)){ ?>
                                <img src="<?=base_url('uploads/reward/').$reward->image;?>" style="width:70px; height: 50px">
                                <?php  }?></div>
                            </div>
                            
                           <div class="col-sm-6 col-md-6" >
                               <label>Short Decsription <span class="red">*</span></label>
                               <textarea name="r_short_description" class="form-control " style="height:100px"><?=$reward->r_short_description;?></textarea>
                            </div>
                             <div class="col-sm-6 col-md-6" >
                               <label>Short Decsription(Arabic) <span class="red">*</span></label>
                               <textarea name="r_short_description_ar" class="form-control " style="height:100px"><?=$reward->r_short_description_ar;?></textarea>
                            </div>
                        
                            <div class="col-sm-6 col-md-6" style="    margin-bottom: 19px;">
                               <label> Decsription <span class="red"></span></label>
                               <textarea rows="5" name="r_description" class="form-control " id="summernote2" style="height:100px"><?=$reward->r_description;?></textarea>
                            </div>
                            <div class="col-sm-6 col-md-6" style="    margin-bottom: 19px;">
                               <label> Decsription(Arabic) <span class="red"></span></label>
                               <textarea rows="5" name="r_description_ar" class="form-control " id="summernote3" style="height:100px"><?=$reward->r_description_ar;?></textarea>
                            </div>
                            
                            <div class="col-sm-6 col-md-6">
                               <label> Status<span class="red">*</span></label>
                               <select name="r_status" class="form-control ">
                                  <option value="" >-Select-</option>
                                  <option value="0" <?php if($reward->r_status=='0')echo'selected';?>>Active</option>
                                  <option value="1" <?php if($reward->r_status=='1')echo'selected';?>>In-active</option>
                               </select>
                            </div>
                        </div>
                        <br>
                         <div class="save_button primary_btn default_button">
                            <button type="submit" class="btn btn-primary btn2 " ><i class="fa fa-save"></i> Update Reward </button>
                            
                         </div>
                    </form>
               </div>
            </div>
         </div>
      </div>
   </div>
  
  
 
</div>