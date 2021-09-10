<div class="app-content">
   <div class="section">
      <!--  Page-header opened -->
      <div class="page-header">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url('dashboard');?>"><i class="fe fe-home mr-1"></i> Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Customers</li>
         </ol>
         <div class="mt-3 mt-lg-0">
            <div class="d-flex align-items-center flex-wrap text-nowrap"> 
               <button type="button" onclick="history.go(-1)" class="btn btn-secondary btn-icon-text mr-2 mb-2 mb-md-0"> <i class="fa fa-arrow-left"></i> Go Back  </button>
            </div>
         </div>
      </div>
      <!--  Page-header closed -->
      <!-- row opened -->
      <div class="row" id="user-profile">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-body">
                  <div class="wideget-user">
                     <div class="row">
                        <div class="col-lg-12 col-xl-6 col-md-12">
                           <div class="wideget-user-desc d-flex">
                              <div class="wideget-user-img"> <img class="" src="<?php echo site_url('assets/images/users/noprofile.jpg');?>" alt="img"> </div>
                              <div class="user-wrap mt-lg-0">
                                 <h4><?php echo $profile->usr_fname.' '.$profile->usr_lname;?></h4>
                                 <h6 class="text-muted mb-3 font-weight-normal"><i class="fa fa-empire"></i> Member Since: <?php echo $membership = date('j M Y G:i A', strtotime($profile->usr_created));?></h6>
                                 <h6 class="text-muted mb-3 font-weight-normal"><i class="fa fa-envelope"></i> Email: <?php echo $profile->usr_email;?></h6> 
                                 <h6 class="text-muted mb-3 font-weight-normal"><i class="fa fa-check-circle-o"></i> Status: <?php if($profile->usr_status==0){echo "<span class='badge badge-pill badge-primary mr-1 mb-1 mt-1'>Active</span>";}else if($profile->usr_status==1){echo "<span class='badge badge-pill badge-warning mr-1 mb-1 mt-1'>Inactive</span>";}else{echo "<span class='badge badge-pill badge-danger mr-1 mb-1 mt-1'>Blocked</span>";};?></h6> 
                                 <?php if($profile->usr_status==0){ ?>
                                    <a href="<?php echo site_url('user/custUpdate/'.encode($profile->usr_id).'/'.encode(1));?>" class="btn btn-warning mt-1 mb-1 btn-sm text-white"><i class="fa fa-circle"></i> Inactive</a>
                                    <a href="<?php echo site_url('user/custUpdate/'.encode($profile->usr_id).'/'.encode(2));?>" class="btn btn-danger mt-1 mb-1 btn-sm text-white"><i class="fa fa-circle"></i> Blocked</a>
                                 <?php }else if($profile->usr_status==1){ ?>
                                    <a href="<?php echo site_url('user/custUpdate/'.encode($profile->usr_id).'/'.encode(0));?>" class="btn btn-primary mt-1 mb-1 btn-sm text-white"><i class="fa fa-circle"></i> Active</a>
                                    <a href="<?php echo site_url('user/custUpdate/'.encode($profile->usr_id).'/'.encode(2));?>" class="btn btn-danger mt-1 mb-1 btn-sm text-white"><i class="fa fa-circle"></i> Blocked</a>
                                 <?php }else{ ?>
                                    <a href="<?php echo site_url('user/custUpdate/'.encode($profile->usr_id).'/'.encode(0));?>" class="btn btn-primary mt-1 mb-1 btn-sm text-white"><i class="fa fa-circle"></i> Active</a>
                                    <a href="<?php echo site_url('user/custUpdate/'.encode($profile->usr_id).'/'.encode(1));?>" class="btn btn-warning mt-1 mb-1 btn-sm text-white"><i class="fa fa-circle"></i> Inactive</a>
                                 <?php } ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card">
               <div class="card-body">
                  <div class="border-0">
                     <div class="tab-content">
                        <div class="tab-pane active show" id="tab-51">
                           <div id="profile-log-switch">
                              <div class="table-responsive mb-5">
                                 <table class="table row table-borderless w-100 m-0 border">
                                    <tbody class="col-lg-6 p-0">
                                       <tr>
                                          <td><strong>Full Name :</strong> <?php echo $profile->usr_fname.' '.$profile->usr_lname;?></td>
                                       </tr>
                                       <tr>
                                          <td><strong>Gender :</strong> <?php if($profile->usr_gender=='1'){echo 'Female';}else{echo "Male";}?></td>
                                       </tr>
                                       <tr>
                                          <td><strong>Email :</strong> <?php echo $profile->usr_email;?></td>
                                       </tr>
                                       <tr>
                                          <td><strong>Phone :</strong> +<?=$profile->usr_phone_code;?>-<?php echo $profile->usr_mobile;?></td>
                                       </tr>
                                    </tbody>
                                    <tbody class="col-lg-6 p-0">
                                       <tr>
                                          <td><strong>Location :</strong> <?php if($profile->usr_location!=''){echo country($profile->usr_location);}else{echo "NA";}?></td>
                                       </tr>
                                       <tr>
                                          <td><strong>Nationality :</strong> <?php if($profile->usr_nationality!=''){echo country($profile->usr_nationality);}else{echo "NA";}?></td>
                                       </tr>
                                       
                                      
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- col end --> 
      </div>
      <!-- row closed -->
   </div>
</div>