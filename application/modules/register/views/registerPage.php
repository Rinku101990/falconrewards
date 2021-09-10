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
   .swal2-show {
   top: -20px !important;
   }
</style>
<div class="inner-common">
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-sm-8 col-sm-offset-2">
            <div class="login-section">
               <!-- Login Form -->
               <div id="formContent" class="register_page" style="">
                  <div class="head-top-heading">
                     <?php if($this->website->web_lang=='en'){?>
                        <p>Register</p>
                     <?php }else if($this->website->web_lang=='ar'){?>
                        <p>يسجل</p>
                     <?php } ?>
                  </div>
                  <div class="RegisterCustomerResponse" style="padding:8px;margin-top:-23px"></div>
                  <?php $msg=$this->session->flashdata('msg'); if($msg){  ?>
                  <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible  show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-<?php echo $msg['icon'] ?> "></i></span> <span class="alert-inner--text"><strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?></span> <button type="button" class="close text-black" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
                  <?php }?>  
                  <form method="POST" id="RegisterForm">
                     <!-- Tabs Titles -->
                     <div class="row">
                        <?php if($this->website->web_lang=='en'){?>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input type="hidden" name="ipaddress" value="<?php echo $_SERVER['REMOTE_ADDR'];?>">
                              <input name="fname" placeholder="<?php echo $this->variables[9]->var_parent_name;?>" class="fname form-control" type="text">
                              <span id="fname"></span>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input name="lname" placeholder="<?php echo $this->variables[10]->var_parent_name;?>" class="lname form-control" type="text">
                              <span id="lname"></span>
                           </div>
                        </div>
                        <?php }else if($this->website->web_lang=='ar'){?>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input type="hidden" name="ipaddress" value="<?php echo $_SERVER['REMOTE_ADDR'];?>">
                              <input name="fname" placeholder="<?php echo $this->variables[9]->var_parent_name_ar;?>" class="fname form-control" type="text">
                              <span id="fname"></span>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input name="lname" placeholder="<?php echo $this->variables[10]->var_parent_name_ar;?>" class="lname form-control" type="text">
                              <span id="lname"></span>
                           </div>
                        </div>
                        <?php } ?>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <?php if($this->website->web_lang=='en'){?>
                                 <input type="email" class="email form-control" name="email" placeholder="<?php echo $this->variables[11]->var_parent_name;?>">
                                 <span id="email"></span>
                              <?php }else if($this->website->web_lang=='ar'){?>
                                 <input type="email" class="email form-control" name="email" placeholder="<?php echo $this->variables[11]->var_parent_name_ar;?>">
                                 <span id="email"></span>
                              <?php } ?>
                           </div>
                        </div>
                        <?php if($this->website->web_lang=='en'){?>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <select class="form-control" name="phonecode">
                                 <?php foreach($country_code as $code){?>
                                 <option value="<?php echo $code->phonecode;?>"<?php if($code->phonecode=="971"){echo "selected";}else{echo "";}?>><?php echo $code->name.'( '.$code->phonecode.')';?></option>
                                 <?php } ?>
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input type="text" class="phone form-control" name="phone" placeholder="Mobile number" maxlength="10"  onkeypress="return (event.charCode !=8 &amp;&amp; event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 &amp;&amp; event.charCode <= 57)))">
                              <span id="phone"></span>
                           </div>
                        </div>
                        <?php }else if($this->website->web_lang=='ar'){?>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input type="text" class="phone form-control" name="phone" placeholder="رقم الجوال" maxlength="10"  onkeypress="return (event.charCode !=8 &amp;&amp; event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 &amp;&amp; event.charCode <= 57)))">
                              <span id="phone"></span>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <select class="form-control" name="phonecode">
                                 <?php foreach($country_code as $code){?>
                                 <option value="<?php echo $code->phonecode;?>"<?php if($code->phonecode=="971"){echo "selected";}else{echo "";}?>><?php echo $code->name.'( '.$code->phonecode.')';?></option>
                                 <?php } ?>
                              </select>
                           </div>
                        </div>
                        
                        <?php } ?>
                        <?php if($this->website->web_lang=='en'){?>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="password" class="password form-control" name="password" placeholder="<?php echo $this->variables[12]->var_parent_name;?>">
                              <span id="password"></span>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="password" class="crfpassword form-control" name="crfpassword" placeholder="<?php echo $this->variables[13]->var_parent_name;?>">
                              <span id="crfpassword"></span>
                           </div>
                        </div>
                        <?php }else if($this->website->web_lang=='ar'){?>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="password" class="password form-control" name="password" placeholder="<?php echo $this->variables[12]->var_parent_name_ar;?>">
                              <span id="password"></span>
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="form-group">
                              <input type="password" class="crfpassword form-control" name="crfpassword" placeholder="<?php echo $this->variables[13]->var_parent_name_ar;?>">
                              <span id="crfpassword"></span>
                           </div>
                        </div>
                        <?php } ?>
                        <div class="form-group">
                           <div class="col-sm-12">
                              <div class="checkbox" style="margin-left: 2px;">
                                 <?php if($this->website->web_lang=='en'){?>
                                    <label style="float:left;margin-bottom:10px">
                                        <input type="checkbox" id="protype" name="newsletter" value="1" checked="checked">
                                        <b style="font-weight: 400 !important;"><?php echo $this->variables[14]->var_parent_name;?></b>
                                    </label>
                                 <?php }else if($this->website->web_lang=='ar'){?>
                                    <label style="float: right;margin-bottom: 10px">
                                        <input type="checkbox" id="protype" name="newsletter" value="1" checked="checked">
                                        <b style="font-weight: 400 !important;margin-right: 18px;"><?php echo $this->variables[14]->var_parent_name_ar;?></b>
                                    </label>
                                 <?php }?>
                              </div>
                           </div>
                        </div>
                        <?php if($this->website->web_lang=='en'){?>
                        <div class="col-sm-3 pull-left">
                           <button type="button" class="btn btn-default login-submit SignUpCustomerBtn">Register Now</button>
                        </div>
                        <div class="col-sm-4 pull-right"> 
                           <a class="new-account-sign btn_login pull-center" href="<?php echo site_url('login');?>" style="padding: 10px;">Have an account? Login</a> 
                        </div>
                        <?php }else if($this->website->web_lang=='ar'){?>
                        <div class="col-sm-3 pull-right">
                           <button type="button" class="btn btn-default login-submit SignUpCustomerBtn">سجل الان</button>
                        </div>
                        <div class="col-sm-5 pull-left"> 
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