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
</style>
<div class="app-content">
<div class="section">
<!--  Page-header opened -->
<div class="page-header">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?=base_url('dashboard');?>"><i class="fe fe-home mr-1"></i> Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Edit Coming Product</li>
   </ol>
   <div class="mt-3 mt-lg-0">
      <div class="d-flex align-items-center flex-wrap text-nowrap"> 
         <button type="button" onclick="history.go(-1)" class="btn btn-secondary btn-icon-text mr-2 mb-2 mb-md-0"> <i class="fa fa-arrow-left"></i> Go Back  </button>
         <a href="<?=base_url('cms/product');?>">
         <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0"> <i class="fe fe-list "></i> List Coming Product</button>
         </a>   
      </div>
   </div>
</div>
<!--  Page-header closed -->
<!-- row opened -->
<div class="row">
   <div class="col-lg-10 col-xl-12 col-md-12 col-sm-12">
      <div class="card">
         <div class="card-header">
            <h3 class="card-title">Edit Coming Product</h3>
         </div>
         <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body">
               <?php $msg=$this->session->flashdata('msg');  
                  if($msg){  ?>
               <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible" data-dismiss="alert" aria-hidden="true">
                  <strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?>
               </div>
               <?php } ?>
               <div class="row">
                  <div class="col-lg-12 col-md-12">
                     <div class="row">
                        <div class="col-sm-6 col-md-2">
                           <div class="form-group">
                              <label class="form-label">Name <span class="text-red">*</span></label>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-10">
                           <div class="form-group">    
                              <input type="text" class="form-control" name="name" value="<?=$product->name;?>" placeholder="Coming Product Name"  required>                      
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12" >
                     <div class="row">
                        <div class="col-sm-6 col-md-2">
                           <div class="form-group">
                              <label class="form-label"> Image <span class="text-red">*</span></label>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-8">
                           <div class="form-group">    
                              <input type="file" class="form-control" name="img" id="image_file" onchange="preview_image();" />  
                              <input type="hidden" name="img" value="<?=$product->img;?>">
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-2">
                           <div class="form-group"> 
                              <span id="image_preview"><?php if($product->img){?><img src="<?=base_url('uploads/coming-soon-product/').$product->img;?>"  style="width:150px; height: 40px;border:1px solid gray" /><?php }?></span>                    
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                     <div class="row">
                        <div class="col-sm-6 col-md-2">
                           <div class="form-group">
                              <label class="form-label">Description <span class="text-red"></span></label>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-10">
                           <div class="form-group">    
                              <textarea class="form-control" name="desc" id="summernote2" placeholder="Description"  style="height:100px"><?=$product->desc;?></textarea>                      
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                     <div class="row">
                        <div class="col-sm-6 col-md-2">
                           <div class="form-group">
                              <label class="form-label">Name(Arabic) <span class="text-red">*</span></label>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-10">
                           <div class="form-group">    
                              <input type="text" class="form-control" name="name_ar" value="<?=$product->name_ar;?>" placeholder="Arabic Product Name"  required>                      
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                     <div class="row">
                        <div class="col-sm-6 col-md-2">
                           <div class="form-group">
                              <label class="form-label">Description(Arabic) <span class="text-red"></span></label>
                           </div>
                        </div>
                        <div class="col-sm-6 col-md-10">
                           <div class="form-group">    
                              <textarea class="form-control" name="desc_ar" id="summernote3" placeholder="Description"  style="height:100px"><?=$product->desc_ar;?></textarea>                      
                           </div>
                        </div>
                     </div>
                  </div>
                  <br/>
                  <div class="col-lg-12 col-md-12">
                     <div class="row">
                        <div class="col-sm-6 col-md-2"></div>
                        <div class="col-sm-6 col-md-10">
                            <button type="submit" class="btn btn-primary btn2" value="edit"><i class="fa fa-save"></i> Update Product</button>
                            <button type="reset" class="btn btn-secondary btn2" data-dismiss="modal"><i class="fa fa-remove"></i> Cancel</button> 
                        </div>
                        
                    </div>
                </div>
         </form>
         <br>
         </div>
         </div>
      </div>
      <!-- row closed -->
   </div>
</div>