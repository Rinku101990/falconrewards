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
         <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
      </ol>
      <div class="mt-3 mt-lg-0">
         <div class="d-flex align-items-center flex-wrap text-nowrap"> 
            <button type="button" onclick="history.go(-1)" class="btn btn-secondary btn-icon-text mr-2 mb-2 mb-md-0"> <i class="fa fa-arrow-left"></i> Go Back  </button>
            <a href="<?=base_url('products');?>">
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0"> <i class="fe fe-list "></i> List Products </button>
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
               <h3 class="card-title"><span>Edit Product</span></h3>
            </div>
            <div class="card-body">
               <div class="account_login_form">
                  <div class="GeneralResponse"> </div>                  
                  <form id="EditProductForm" action="" method="post" enctype="multipart/form-data" >
                    <input type="hidden" name="p_id" value="<?=$product->p_id;?>">

                        <?php $msg=$this->session->flashdata('msg');if($msg){  ?>
                        <div class=" row">
                            <div class="col-md-9">
                                <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible fade show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-<?php echo $msg['icon'] ?> "></i></span> <span class="alert-inner--text"><strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?></span> <button type="button" class="close text-black" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
                            </div>
                        </div>
                        <?php }?>
                        <div class="row">
                       
                            <div class="col-sm-12 col-md-12">
                               <label>Name(English) <span class="red">*</span></label>
                               <input type="text" name="p_name" class="form-control pd_name" value="<?=$product->p_name;?>" placeholder="Enter Product Name English">
                               <span id="name"></span>
                            </div>
                            
                            <div class="col-sm-6 col-md-6">
                               <label>Name(Arabic) <span class="red">*</span></label>
                               <input type="text" name="p_name_ar" class="form-control" value="<?=$product->p_name_ar;?>"  placeholder="Enter Product Name Arabic">
                               <span id="name_ar"></span>
                            </div>
                       
                            <div class="col-sm-6 col-md-6">
                               <label>Product Reference No. <span class="red">*</span></label>
                               <input type="text" name="p_reference_no"  value="<?=$product->p_reference_no;?>" class="form-control pd_reference_no" readonly />
                               <span id="reference_no"></span>
                            </div>
                        
                         <div class="col-sm-6 col-md-6">
                           <label>Category <span class="red">*</span></label>
                            <select name="p_category" class="form-control p_category">
                              <option value="">-Select-</option>
                              <?php if(!empty($category)){
                                 foreach ($category as $c_list) {?>
                                    <option value="<?php echo $cid=$c_list->procat_id;?>" <?php if($product->p_category==$cid)echo'selected';?>><?=$c_list->procat_name;?></option>
                                 <?php }
                                 }
                                 ?>
                           </select>
                           <span id="Category"></span>
                        </div>
                        <div class="col-sm-6 col-md-6">
                           <label>SKU <span class="red">*</span></label>
                           <input type="text" name="p_sku" class="form-control p_sku" value="<?=$product->p_sku;?>">
                           <span id="Sku"></span>
                        </div>
                         <div class="col-sm-2 col-md-2">
                           <label>AED <span class="red">*</span></label>
                           <input type="text" name="p_aed" class="form-control p_aed" placeholder="AED Price" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" value="<?=$product->p_aed;?>">
                           <span id="pd_price"></span>
                        </div>
                        <div class="col-sm-2 col-md-2">
                           <label>INR <span class="red">*</span></label>
                           <input type="text" name="p_inr" class="form-control p_inr" placeholder="INR Price" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" value="<?=$product->p_inr;?>">
                           <span id="inr"></span>
                        </div>
                        <div class="col-sm-2 col-md-2">
                           <label>OMR <span class="red">*</span></label>
                           <input type="text" name="p_omr" class="form-control p_omr" placeholder="OMR Price" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" value="<?=$product->p_omr;?>">
                           <span id="omr"></span>
                        </div>
                        <div class="col-sm-2 col-md-2">
                           <label>KWD <span class="red">*</span></label>
                           <input type="text" name="p_kwd" class="form-control p_kwd" placeholder="KWD Price"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" value="<?=$product->p_kwd;?>">
                           <span id="kwd"></span>
                        </div>
                         <div class="col-sm-2 col-md-2">
                           <label>BHD <span class="red">*</span></label>
                           <input type="text" name="p_bhd" class="form-control p_bhd" placeholder="BHD Price" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" value="<?=$product->p_bhd;?>">
                           <span id="bhd"></span>
                        </div>
                         <div class="col-sm-2 col-md-2">
                           <label>USD <span class="red">*</span></label>
                           <input type="text" name="p_usd" class="form-control p_usd" placeholder="USD Price"onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" value="<?=$product->p_usd;?>">
                           <span id="usd"></span>
                        </div>
                        
                         <div class="col-sm-4 col-md-4">
                           <label>Product Quantity  <span class="red">*</span></label>
                           <input type="text" name="p_qty" class="form-control p_qty" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" value="<?=$product->p_qty;?>">
                           <span id="qty"></span>
                        </div>
                         <div class="col-sm-4 col-md-4">
                           <label>Ticket Count  <span class="red">*</span></label>
                           <input type="text" name="p_ticket" class="form-control p_ticket" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" value="<?=$product->p_ticket;?>">
                           <span id="Ticket"></span>
                        </div>
                           <div class="col-sm-4 col-md-4">
                           <label>Sold Add  <span class="red">*</span></label>
                           <input type="text" name="p_sold_plus" class="form-control p_sold_plus" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" value="<?=$product->p_sold_plus;?>">
                           <span id="Ticket"></span>
                        </div>
                       
                        
                        <div class="col-sm-6 col-md-6" style="margin-bottom: 19px;">
                           <label>Description (English)<span class="red"></span></label>
                           <textarea rows="5" name="p_description" class="form-control pd_description" id="summernote2"><?=$product->p_description;?></textarea>
                           <span id="LongDesc"></span>
                        </div>
                        
                        <div class="col-sm-6 col-md-6" style="margin-bottom: 19px;">
                           <label>Description (Arabic)<span class="red"></span></label>
                           <textarea rows="5" name="p_description_ar" class="form-control" id="summernote3" placeholder="Enter Arabic Description"><?=$product->p_description_ar;?></textarea>
                           <span id="LongDescAr"></span>
                        </div>

                        <div class="col-sm-6 col-md-6">
                           <label>Meta title  <span class="red"></span></label>
                           <input type="text" name="p_meta_title" class="form-control p_meta_title" value="<?=$product->p_meta_title;?>" >
                           <span id="meta_title"></span>
                        </div>
                       
                        <div class="col-sm-6 col-md-6">
                           <label>Meta Keywords  <span class="red"></span></label>
                           <input type="text" name="p_meta_keyword" class="form-control p_meta_keyword" value="<?=$product->p_meta_keyword;?>">
                           <span id="meta_keyword"></span>
                        </div>
                        
                        <div class="col-sm-6 col-md-6">
                           <label>Meta title(Arabic)  <span class="red"></span></label>
                           <input type="text" name="p_meta_title_ar" class="form-control" value="<?=$product->p_meta_title_ar;?>" placeholder="Enter Arabic Meta title">
                           <span id="meta_title_ar"></span>
                        </div>
                       
                        <div class="col-sm-6 col-md-6">
                           <label>Meta Keywords(Arabic)  <span class="red"></span></label>
                           <input type="text" name="p_meta_keyword_ar" class="form-control" value="<?=$product->p_meta_keyword_ar;?>"  placeholder="Enter Arabic Meta Keywords">
                           <span id="meta_keyword_ar"></span>
                        </div>
                       
                        <div class="col-sm-6 col-md-6"><br>
                           <label>Meta Decsription <span class="red"></span></label>
                           <textarea name="p_meta_description" class="form-control p_meta_description" style="height:100px" placeholder="Enter Meta Description"><?=$product->p_meta_keyword;?></textarea>
                           <span id="MetaDesc"></span>
                        </div>
                        <div class="col-sm-6 col-md-6"><br>
                           <label>Meta Decsription(Arabic) <span class="red"></span></label>
                           <textarea name="p_meta_description_ar" class="form-control" style="height:100px" placeholder="Enter Arabic Meta Description"><?=$product->p_meta_description_ar;?></textarea>
                           <span id="MetaDescAr"></span>
                        </div>
                        <div class="col-sm-6 col-md-6">
                           <label>Product Image <span class="red">*</span></label>
                           <br/>
                           <input type="file" name="p_picture" class="form-control col-sm-10 col-md-10"  onchange="get_preview_image(1);" id="image_file1" accept="image/x-png,image/gif,image/jpg,image/jpeg," style="display: inline-block;">
                           <input type="hidden" name="prev_picture" value="<?=$product->p_picture;?>">
                           <div id="image_preview1" class="col-sm-2 col-md-2" style="display: inline-block;">
                             <?php if(!empty($product->p_picture)){ ?>
                            <img src="<?=base_url('uploads/product/').$product->p_picture;?>" style="width:70px; height: 50px">
                            <?php  }?>
                           </div>
                           
                        </div>
                        <div class="col-sm-6 col-md-6">
                           <label>Product Image <span class="red">*</span></label>
                           <br/>
                           <input type="file" name="p_mobile_picture" class="form-control col-sm-10 col-md-10"  onchange="get_preview_image(2);" id="image_file2" accept="image/x-png,image/gif,image/jpg,image/jpeg," style="display: inline-block;">
                           <input type="hidden" name="prev_mob_picture" value="<?=$product->p_mobile_picture;?>">
                           <div id="image_preview2" class="col-sm-2 col-md-2" style="display: inline-block;">
                             <?php if(!empty($product->p_mobile_picture)){ ?>
                            <img src="<?=$product->p_mobile_picture;?>" style="width:70px; height: 50px">
                            <?php  }?>
                           </div>
                           
                        </div>
                        <div class="col-sm-6 col-md-6">
                           <label>Product Status<span class="red">*</span></label>
                           <select name="p_status" class="form-control p_status">
                              <option value="">-Select-</option>
                              <option value="0" <?php if($product->p_status=='0')echo'selected';?>>Active</option>
                              <option value="1" <?php if($product->p_status=='1')echo'selected';?>>In-active</option>
                              
                           </select>
                           <span id="pstatus"></span>
                        </div>
                     </div>
                     <br>
                     <div class="save_button primary_btn default_button">
                        <button type="submit" class="btn btn-primary btn2 " ><i class="fa fa-save"></i> Update Product </button>
                        
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