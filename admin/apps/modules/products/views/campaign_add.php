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
         <li class="breadcrumb-item active" aria-current="page">Add Campaign</li>
      </ol>
      <div class="mt-3 mt-lg-0">
         <div class="d-flex align-items-center flex-wrap text-nowrap"> 
            <button type="button" onclick="history.go(-1)" class="btn btn-secondary btn-icon-text mr-2 mb-2 mb-md-0"> <i class="fa fa-arrow-left"></i> Go Back  </button>
            <a href="<?=base_url('products/campaigns');?>">
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0"> <i class="fe fe-list "></i> List Campaign </button>
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
               <h3 class="card-title"><span>Add Campaign</span></h3>
            </div>
            <div class="card-body">
               <div class="account_login_form">
                  <div class="GeneralResponse"> </div>                  
                  <form id="CampaignForm" action="<?=base_url('products/campaign_save');?>" method="post"  >
                      <input type="hidden" name="ref_no"  value="<?php $date=strtotime(date('Y-m-d H:i:s')); echo (rand(0,$date)); ?>" class="form-control pd_reference_no" readonly />
                      <?php $msg=$this->session->flashdata('msg');  
    if($msg){  ?>
     <div class=" row">
     <div class="col-md-9">
<div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible fade show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-<?php echo $msg['icon'] ?> "></i></span> <span class="alert-inner--text"><strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?></span> <button type="button" class="close text-black" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div></div></div>
    <?php }?>
                     <div class="row">
                       
                        <div class="col-sm-6 col-md-6">
                           <label>Title <span class="red">*</span></label>
                           <input type="text" name="title" class="form-control">
                        </div>
                       
                        <div class="col-sm-6 col-md-6">
                           <label>URL <span class="red">*</span></label>
                           <input type="text" name="url"  class="form-control "  />
                           
                        </div>
                        
                         <div class="col-sm-6 col-md-6" style="    margin-bottom: 15px">
                           <label>Product <span class="red">*</span></label>
                            <select name="product" class="form-control select2">
                              <option value="">-Select-</option>
                              <?php if(!empty($product)){
                                 foreach ($product as $p_list) {
                                    echo'<option value="'.$p_list->p_id.'">'.$p_list->p_name.'</option>';
                                 }
                                 }
                                 ?>
                           </select>
                           
                        </div>
                        <div class="col-sm-6 col-md-6" style="    margin-bottom: 15px">
                           <label>Reward <span class="red">*</span></label>
                            <select name="reward" class="form-control select2">
                              <option value="">-Select-</option>
                              <?php if(!empty($reward)){
                                 foreach ($reward as $r_list) {
                                    echo'<option value="'.$r_list->r_id.'">'.$r_list->r_title.'</option>';
                                 }
                                 }
                                 ?>
                           </select>
                           
                        </div>
                        

                        
                       
                         <div class="col-sm-6 col-md-6">
                           <label>Target <span class="red">*</span></label>
                           <input type="text" name="target"  class="form-control "  />
                           
                        </div>
                       
                        <div class="col-sm-6 col-md-6">
                           <label> Status<span class="red">*</span></label>
                           <select name="status" class="form-control ">
                              <option value="">-Select-</option>
                              <option value="0" selected="">Active</option>
                              <option value="1">In-active</option>
                              
                           </select>
                           
                        </div>
                     </div>
                     <br>
                     <div class="save_button primary_btn default_button">
                        <button type="submit" class="btn btn-primary btn2 " ><i class="fa fa-save"></i> Save Campaign </button>
                        
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
  
  
 
</div>