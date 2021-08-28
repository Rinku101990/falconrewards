<div class="inner-common">
   <div class="container">
      <?php if($this->website->web_lang=='en'){ ?>
         <h1>Change Password</h1>
      <?php }else if($this->website->web_lang=='ar'){ ?>
         <h1>تغيير كلمة السر</h1>
      <?php } ?>
      <div class="row">
         <?php if($this->website->web_lang=='en'){ ?>
         <div class="col-md-9 pull-right">
            <div class="personal-details">
               <div class="clearfix"></div>
               <h3>Change Password</h3>
               <span id="PasswordResponse"></span>
               <form id="PasswordForm" method="POST" >
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label for="old_password">Current password</label>
                           <input type="password" name="old_password" class="old_password form-control" placeholder="Enter old password">
                           <span class="help-block"></span>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label for="new_password">New Password</label>
                           <input type="password" name="new_password" class="new_password form-control" placeholder="Enter new password">
                           <span class="help-block"></span>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label for="password2">Confirm Password</label>
                           <input type="password" name="password2" class="password2 form-control" placeholder="Confirm new password">
                           <span id="password2"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-3">
                        <button type="button" class="btn btn-default login-submit sign-submit change-save Change_Password">Change password</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <?php }else if($this->website->web_lang=='ar'){ ?>
         <div class="col-md-9 pull-left">
            <div class="personal-details">
               <div class="clearfix"></div>
               <h3>تغيير كلمة السر</h3>
               <span id="PasswordResponse"></span>
               <form id="PasswordForm" method="POST" >
                  <div class="row">
                     <div class="col-sm-6 pull-right">
                        <div class="form-group">
                           <label for="old_password">كلمة المرور الحالي</label>
                           <input type="password" name="old_password" class="old_password form-control" placeholder="أدخل كلمة المرور القديمة">
                           <span class="help-block"></span>
                        </div>
                     </div>
                     <div class="col-sm-6 pull-left">
                        <div class="form-group">
                           <label for="new_password">كلمة المرور الجديدة</label>
                           <input type="password" name="new_password" class="new_password form-control" placeholder="أدخل كلمة مرور جديدة">
                           <span class="help-block"></span>
                        </div>
                     </div>
                     <div class="col-sm-6 pull-right">
                        <div class="form-group">
                           <label for="password2">تأكيد كلمة المرور</label>
                           <input type="password" name="password2" class="password2 form-control" placeholder="تأكيد كلمة المرور الجديدة">
                           <span id="password2"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-3 pull-right">
                        <button type="button" class="btn btn-default login-submit sign-submit change-save Change_Password">تغيير كلمة السر</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <?php } ?>
         <?php $this->load->view('account/right_sidebar');?>
      </div>
   </div>
</div>