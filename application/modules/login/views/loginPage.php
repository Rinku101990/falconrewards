<style type="text/css">
   .myaccount .btn.active {
   background: #fff;
   }
   a.register.btn {
   border-radius: 4px 4px 0 4px;
   }
   a.login.btn {
   border-radius: 4px 4px 4px 0;
   }
   .myaccount .btn {
   color: #4a4a4a;
   background: #f7f7f7;
   width: 100%;
   box-shadow: none;
   font-size: 18px;
   font-weight: 600;
   padding: 16px 0;
   }
   .login_page {
   border-radius: 0px 0px 10px 10px !important;
   }
   .register_page {
   border-radius: 0px 0px 10px 10px !important;
   }
</style>
<div class="inner-common">
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-sm-6 col-sm-offset-3">
            <div class="login-section">
               <!-- Login Form -->
               <div id="formContent" class="login_page">
                  <div class="head-top-heading">
                     <?php if($this->website->web_lang=='en'){?>
                        <p><?php echo $this->variables[0]->var_parent_name;?></p>
                     <?php }else if($this->website->web_lang=='ar'){?>
                        <p><?php echo $this->variables[0]->var_parent_name_ar;?></p>
                     <?php } ?>
                  </div>
                  <div class="loginResponse" style="padding:8px;margin-top:-23px"></div>
                  <?php $msg=$this->session->flashdata('msg'); if($msg){  ?>
                     <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible  show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-<?php echo $msg['icon'] ?> "></i></span> <span class="alert-inner--text"><strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?></span> <button type="button" class="close text-black" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
                  <?php }?>  
                  <form method="POST" id="SigninForm">
                     <!-- Tabs Titles -->
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                               <?php if($this->website->web_lang=='en'){?>
                                    <input type="email" class="cust_email form-control" name="email" placeholder="<?php echo $this->variables[1]->var_parent_name;?>" value="">
                               <?php }else if($this->website->web_lang=='ar'){?>
                                    <input type="email" class="cust_email form-control" name="email" placeholder="<?php echo $this->variables[1]->var_parent_name_ar;?>" value="">
                               <?php } ?>
                              <span id="cust_email"></span>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                               <?php if($this->website->web_lang=='en'){?>
                               <input type="password" class="cust_password form-control" name="password" placeholder="<?php echo $this->variables[12]->var_parent_name;?>">
                               <?php }else if($this->website->web_lang=='ar'){?>
                               <input type="password" class="cust_password form-control" name="password" placeholder="<?php echo $this->variables[12]->var_parent_name_ar;?>">
                               <?php } ?>
                              <span id="cust_password"></span>
                           </div>
                        </div>
                     </div>

                     <div class="row">
                        <?php if($this->website->web_lang=='en'){?>
                        <div class="col-sm-6 pull-left">
                           <div class="checkbox" style="margin-top: 0">
                              <label>
                                  <input type="checkbox" > 
                                  <b style="font-weight: 400 !important"><?php echo $this->variables[2]->var_parent_name;?></b>
                                </label>
                           </div>
                        </div>
                        <div class="col-sm-6 pull-right">
                           <a href="<?=base_url('login/forgot');?>" style="font-size: initial !important;float: right"><?php echo $this->variables[3]->var_parent_name;?></a>
                        </div>
                        <?php }else if($this->website->web_lang=='ar'){?>
                            <div class="col-sm-6 pull-right">
                                <div class="checkbox" style="margin-top: 0;float: right;">
                                    <label>
                                        <input type="checkbox" > 
                                        <b style="font-weight: 400 !important;margin-right: 18px;"><?php echo $this->variables[2]->var_parent_name_ar;?></b>
                                    </label>
                                </div>
                            </div>
                           <div class="col-sm-6 pull-left">
                              <a href="<?=base_url('login/forgot');?>" style="font-size: initial !important;float: left;"><?php echo $this->variables[3]->var_parent_name_ar;?></a>
                           </div>
                        <?php } ?>
                     </div>
                     <div class="row">
                        <?php if($this->website->web_lang=='en'){?>
                        <div class="col-sm-6 pull-left">
                           <button type="button" class="btn btn-default login-submit SignIn_btn" style="float:left"><?php echo $this->variables[4]->var_parent_name;?></button>
                        </div>
                        <div class="col-sm-6 pull-right"> 
                           <a class="new-account-sign btn_login pull-center" href="<?php echo site_url('register');?>" style="padding: 10px;"><?php echo $this->variables[5]->var_parent_name;?></a> 
                        </div>
                        <?php }else if($this->website->web_lang=='ar'){?>
                           <div class="col-sm-6 pull-right">
                              <button type="button" class="btn btn-default login-submit SignIn_btn" style="float:right;"><?php echo $this->variables[4]->var_parent_name_ar;?></button>
                           </div>
                           <div class="col-sm-6 pull-left"> 
                              <a class="new-account-sign btn_login pull-center" href="<?php echo site_url('register');?>" style="padding: 10px;float:left"><?php echo $this->variables[5]->var_parent_name_ar;?></a> 
                           </div>
                        <?php } ?>
                     </div>
                  </form>
                  <div class="row">
                     <div class="col-sm-12"> 
                        <?php if($this->website->web_lang=='en'){?>
                           <a class="new-account-sign btn_login  pull-left" href="<?php echo site_url('login/account-verified');?>" style="padding: 10px;"><?php echo $this->variables[6]->var_parent_name;?></a> 
                        <?php }else if($this->website->web_lang=='ar'){?>
                           <a class="new-account-sign btn_login  pull-right" href="<?php echo site_url('login/account-verified');?>" style="padding: 10px;"><?php echo $this->variables[6]->var_parent_name_ar;?></a> 
                        <?php } ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>