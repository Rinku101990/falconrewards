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
                        <p>Forgot Password</p>
                     <?php }else if($this->website->web_lang=='ar'){?>
                        <p>هل نسيت كلمة السر</p>
                     <?php } ?>
                  </div>
                  <div id="ForgotResponse" style="padding:8px;margin-top:-23px"></div>
                  <?php $msg=$this->session->flashdata('msg');  if($msg){  ?>
                  <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible  show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-<?php echo $msg['icon'] ?> "></i></span> <span class="alert-inner--text"><strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?></span> <button type="button" class="close text-black" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
                  <?php }?>  
                  <form method="POST" id="ForgotForm">
                     <!-- Tabs Titles -->
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <?php if($this->website->web_lang=='en'){?>
                              <input type="email" class="cust_email form-control forgotEmailButton" name="email" placeholder="<?php echo $this->variables[1]->var_parent_name;?>" autocomplete="off">
                              <span id="cust_email"></span>
                              <?php }else if($this->website->web_lang=='ar'){?>
                                 <input type="email" class="cust_email form-control forgotEmailButton" name="email" placeholder="<?php echo $this->variables[1]->var_parent_name_ar;?>" autocomplete="off">
                                 <span id="cust_email"></span>
                              <?php } ?>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <?php if($this->website->web_lang=='en'){?>
                        <div class="col-sm-1 pull-left">
                           <button type="button" class="btn btn-default login-submit Forgot_btn">Send</button>
                        </div>
                        <div class="col-sm-5 pull-right"> 
                           <a class="new-account-sign btn_login pull-center" href="<?php echo site_url('login');?>" style="padding: 10px;">Have an account? Login</a> 
                        </div>
                        <?php }else if($this->website->web_lang=='ar'){?>
                        <div class="col-sm-1 pull-right">
                           <button type="button" class="btn btn-default login-submit Accont_btn">يرسل</button>
                        </div>
                        <div class="col-sm-6 pull-left"> 
                           <a class="new-account-sign btn_login pull-center" href="<?php echo site_url('login');?>" style="padding: 10px;">هل لديك حساب؟ تسجيل الدخول</a> 
                        </div>
                        <?php } ?>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>