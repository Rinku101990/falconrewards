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
         <li class="breadcrumb-item active" aria-current="page">Ticket By Category</li>
      </ol>
      <div class="mt-3 mt-lg-0">
         <div class="d-flex align-items-center flex-wrap text-nowrap"> 
            <button type="button" onclick="history.go(-1)" class="btn btn-secondary btn-icon-text mr-2 mb-2 mb-md-0"> <i class="fa fa-arrow-left"></i> Go Back  </button>
            <!--<a href="<?=base_url('rewards');?>">-->
            <!--    <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0"> <i class="fe fe-list "></i> Ticket By Category </button>-->
            <!--</a>   -->
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
                   <h3 class="card-title"><span>Ticket By Category</span></h3>
                </div>
                <div class="card-body">
                    <div class="account_login_form">
                        <form id="TicketForm" action="<?=base_url('tickets/ticketbycategory');?>" method="post">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                   <label class="form-label">Category <span class="red">*</span></label>
                                   <select name="r_category" class="form-control p_category select2" required="">
                                        <option value="">-Select-</option>
                                        <?php if($category==true){
                                            foreach($category as $cate_val){?>
                                        <option value="<?=$cate_val->r_price;?>"><?=$cate_val->r_price;?></option>
                                        <?php }}?>
                                   </select>
                                   <span id="Category"></span>
                                </div>
                                <div class="col-sm-7 col-md-7">
                                   <div class="form-group ">
                                        <label class="form-label">Your skills</label> 
                                        <div class="selectgroup selectgroup-pills">
                                            <label class="custom-control custom-radio"> 
                                                <input type="radio" class="custom-control-input" name="donate" value="1" checked=""> 
                                                <span class="custom-control-label">Do not donate</span> 
                                            </label>&nbsp;&nbsp;
                                            <label class="custom-control custom-radio"> 
                                                <input type="radio" class="custom-control-input" name="donate" value="0"> 
                                                <span class="custom-control-label">Donate</span> 
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-7 col-md-7" style="margin-top: -2%;">
                                    <label class="form-label">Date between</label> 
                                    <label style="display: inline-block; width:50px;">From </label>
                                    <input type="text" name="from" class="form-control input-group date valid"  required="" id="sp_start_date" autocomplete="off" placeholder="From Date " value="<?=@$_REQUEST['from'];?>" style="width: 150px; display: inline-block; padding-left: 27px;" aria-invalid="false" required>
                                    <label  style="display: inline-block;width:50px;">To </label>
                                    <input type="text" name="to" class="form-control input-group date valid" id="sp_start_date" autocomplete="off" placeholder="To Date " value="<?=@$_REQUEST['to'];?>"  required=""style="width: 150px;display: inline-block; padding-left: 27px;" aria-invalid="false" required>
                                </div>
                                
                            </div>
                            <div class="save_button primary_btn default_button">
                                <button type="submit" class="btn btn-primary btn2 " ><i class="fa fa-filter"></i> Get Ticket </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>