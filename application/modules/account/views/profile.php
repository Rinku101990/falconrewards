<style>
   /*Profile Pic Start*/
   .picture{
   width: 106px;
   height: 106px;
   background-color: #999999;
   border: 4px solid #CCCCCC;
   color: #FFFFFF;
   border-radius: 50%;
   margin: 0px auto;
   overflow: hidden;
   transition: all 0.2s;
   -webkit-transition: all 0.2s;
   }
   .picture:hover{
   border-color: #2ca8ff;
   }
   .picture input[type="file"] {
   cursor: pointer;
   display: block;
   height: 100%;
   left: 0;
   opacity: 0 !important;
   position: absolute;
   top: 0;
   width: 100%;
   }
   .picture-src{
   width: 100%;
   }
   /*Profile Pic End*/
</style>
<div class="inner-common">
   <div class="container">
      <div class="col-md-12 col-sm-12 ">
         <?php if($this->websiteLang=='en'){ ?>
            <h1>Personal Details</h1>
         <?php }else if($this->websiteLang=='ar'){ ?>
            <h1>تفاصيل شخصية</h1>
         <?php } ?>
         
      </div>
      <div class="row">
         <?php if($this->websiteLang=='en'){ ?>
         <div class="col-md-9 col-sm-9">
            <div class="personal-details">
               <div class="personal-header">
                  <div class="hed-sec">
                     <h2><?php echo $this->customer->usr_fname.' '.$this->customer->usr_lname;?></h2>
                     <p><?php echo $this->customer->usr_email;?></p>
                  </div>
                  <div class="hed-img picture">
                     <?php if(!empty($this->customer->usr_profile_photo)){?>
                     <img src="<?php echo site_url('uploads/users/profile/'.$this->customer->usr_profile_photo);?>" style="width:98px;height:98px">
                     <input type="hidden" name="prev_img" value="<?php echo $this->customer->usr_profile_photo;?>">
                     <?php }else{ ?>
                     <img src="<?php echo site_url('uploads/users/profile/avatar.png');?>">
                     <input type="hidden" name="prev_img" value="<?php echo $this->customer->usr_profile_photo;?>">
                     <?php } ?>
                     <form action="<?php echo site_url('account/change_profile_picture');?>" method="post" enctype="multipart/form-data">
                        <input type="file" name="image_file" accept="image/*" onchange="this.form.submit()">
                     </form>
                  </div>
               </div>
               <div class="clearfix"></div>
               <h3>Personal Details</h3>
               <?php $msg=$this->session->flashdata('msg'); if($msg){  ?>
               <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible admin-msg" data-dismiss="alert" aria-hidden="true">
                  <strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?>
               </div>
               <?php } ?>
               <form action="<?php echo site_url('account/update/'.$this->customer->usr_id);?>" method="post">
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label for="exampleInputEmail1">First Name</label>
                           <input type="text" class="form-control" id="f_name" name="f_name" placeholder="First Name" value="<?php echo $this->customer->usr_fname;?>">
                           <span class="help-block"></span>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Last Name</label>
                           <input type="hidden" name="id" value="17">
                           <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Last name" value="<?php echo $this->customer->usr_lname;?>">
                           <span class="help-block"></span>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Gender</label>
                           <select class="form-control" placeholder="Select Gender" name="gender">
                              <option value="">Please Select</option>
                              <option value="1" <?php if($this->customer->usr_gender=='1'){echo "selected";}?>>Male</option>
                              <option value="0" <?php if($this->customer->usr_gender=='0'){echo "selected";}?>>Female</option>
                           </select>
                           <span class="help-block"></span>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Country of Residence</label>
                           <select class="residence form-control" placeholder="Select Residence" name="residence">
                              <option value="">Please Select</option>
                              <?php if(!empty($country)){foreach($country as $cnty){?>
                              <option value="<?php echo $cnty->id;?>" <?php if($this->customer->usr_location==$cnty->id){echo "selected";}?>><?php echo $cnty->name;?></option>
                              <?php } } ?>
                           </select>
                           <span class="help-block"></span>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Nationality</label>
                           <select class="nationality form-control" placeholder="Select nationality" name="nationality">
                              <option value="">Please Select</option>
                              <?php if(!empty($country)){foreach($country as $cnty){?>
                              <option value="<?php echo $cnty->id;?>" <?php if($this->customer->usr_nationality==$cnty->id){echo "selected";}?>><?php echo $cnty->name;?></option>
                              <?php } } ?>
                           </select>
                           <span class="help-block"></span>
                        </div>
                     </div>
                  </div>
                  <h3>Contact</h3>
                  <div class="row">
                     <div class="col-sm-3">
                        <select class="form-control" name="phonecode" id="phonecode">
                           <option value="">Select</option>
                           <?php if(!empty($country)){foreach($country as $cnty){?>
                           <option value="<?php echo $cnty->id;?>" <?php if($this->customer->usr_area_phone==$cnty->phonecode){echo "selected";}?>><?php echo $cnty->name;?> (<?php echo $cnty->phonecode;?>)</option>
                           <?php } } ?>
                        </select>
                        <span class="help-block"></span>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number" value="<?php echo $this->customer->usr_mobile;?>" maxlength="10" onkeypress="return (event.charCode !=8 &amp;&amp; event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 &amp;&amp; event.charCode <= 57)))">
                           <input type="hidden" name="old_mobile" value="<?php echo $this->customer->usr_mobile;?>">
                           <span class="help-block"></span>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-sm-12">
                           <div class="checkbox">
                              <label>
                              <input type="checkbox" name="newsletter" value="1" <?php if($this->customer->usr_newsletter=='1'){echo "checked";}?>> I want to receive email newsletters about falcon rewards and advertisement
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <button type="submit" class="btn btn-default login-submit sign-submit change-save">Save Changes</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <?php }else if($this->websiteLang=='ar'){ ?>
         <div class="col-md-9 col-sm-9">
            <div class="personal-details">
               <div class="personal-header">
                  <div class="hed-sec pull-right">
                     <h2><?php echo $this->customer->usr_fname.' '.$this->customer->usr_lname;?></h2>
                     <p><?php echo $this->customer->usr_email;?></p>
                  </div>
                  <div class="hed-img picture pull-left">
                     <?php if(!empty($this->customer->usr_profile_photo)){?>
                     <img src="<?php echo site_url('uploads/users/profile/'.$this->customer->usr_profile_photo);?>" style="width:98px;height:98px">
                     <input type="hidden" name="prev_img" value="<?php echo $this->customer->usr_profile_photo;?>">
                     <?php }else{ ?>
                     <img src="<?php echo site_url('uploads/users/profile/avatar.png');?>">
                     <input type="hidden" name="prev_img" value="<?php echo $this->customer->usr_profile_photo;?>">
                     <?php } ?>
                     <form action="<?php echo site_url('account/change_profile_picture');?>" method="post" enctype="multipart/form-data">
                        <input type="file" name="image_file" accept="image/*" onchange="this.form.submit()">
                     </form>
                  </div>
               </div>
               <div class="clearfix"></div>
               <h3>التفاصيل الشخصية</h3>
               <?php $msg=$this->session->flashdata('msg'); if($msg){  ?>
               <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible admin-msg" data-dismiss="alert" aria-hidden="true">
                  <strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?>
               </div>
               <?php } ?>
               <form action="<?php echo site_url('account/update/'.$this->customer->usr_id);?>" method="post">
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label for="exampleInputEmail1"><?php echo $this->variables[9]->var_parent_name_ar;?></label>
                           <input type="text" class="form-control" id="f_name" name="f_name" placeholder="<?php echo $this->variables[9]->var_parent_name_ar;?>" value="<?php echo $this->customer->usr_fname;?>">
                           <span class="help-block"></span>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label for="exampleInputEmail1"><?php echo $this->variables[10]->var_parent_name_ar;?></label>
                           <input type="hidden" name="id" value="17">
                           <input type="text" class="form-control" id="l_name" name="l_name" placeholder="<?php echo $this->variables[10]->var_parent_name_ar;?>" value="<?php echo $this->customer->usr_lname;?>">
                           <span class="help-block"></span>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label for="exampleInputEmail1">الجنس</label>
                           <select class="form-control" placeholder="Select Gender" name="gender">
                              <option value="">اختيار</option>
                              <option value="1" <?php if($this->customer->usr_gender=='1'){echo "selected";}?>>Male</option>
                              <option value="0" <?php if($this->customer->usr_gender=='0'){echo "selected";}?>>Female</option>
                           </select>
                           <span class="help-block"></span>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <label for="exampleInputEmail1">بلد الإقامة</label>
                           <select class="residence form-control" placeholder="Select Residence" name="residence">
                              <option value="">اختيار</option>
                              <?php if(!empty($country)){foreach($country as $cnty){?>
                              <option value="<?php echo $cnty->id;?>" <?php if($this->customer->usr_location==$cnty->id){echo "selected";}?>><?php echo $cnty->name;?></option>
                              <?php } } ?>
                           </select>
                           <span class="help-block"></span>
                        </div>
                     </div>
                     <div class="col-sm-6 pull-right">
                        <div class="form-group">
                           <label for="exampleInputEmail1"> الجنسية</label>
                           <select class="nationality form-control" placeholder="Select nationality" name="nationality">
                              <option value="">اختيار</option>
                              <?php if(!empty($country)){foreach($country as $cnty){?>
                              <option value="<?php echo $cnty->id;?>" <?php if($this->customer->usr_nationality==$cnty->id){echo "selected";}?>><?php echo $cnty->name;?></option>
                              <?php } } ?>
                           </select>
                           <span class="help-block"></span>
                        </div>
                     </div>
                  </div>
                  <h3>التواصل</h3>
                  <div class="row">
                     <div class="col-sm-6">
                        <select class="form-control" name="phonecode" id="phonecode">
                           <option value="">اختيار</option>
                           <?php if(!empty($country)){foreach($country as $cnty){?>
                           <option value="<?php echo $cnty->id;?>" <?php if($this->customer->usr_area_phone==$cnty->phonecode){echo "selected";}?>><?php echo $cnty->name;?> (<?php echo $cnty->phonecode;?>)</option>
                           <?php } } ?>
                        </select>
                        <span class="help-block"></span>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number" value="<?php echo $this->customer->usr_mobile;?>" maxlength="10" onkeypress="return (event.charCode !=8 &amp;&amp; event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 &amp;&amp; event.charCode <= 57)))">
                           <input type="hidden" name="old_mobile" value="<?php echo $this->customer->usr_mobile;?>">
                           <span class="help-block"></span>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-sm-12">
                           <div class="checkbox">
                              <label>
                                 <input type="checkbox" name="newsletter" value="1" <?php if($this->customer->usr_newsletter=='1'){echo "checked";}?>><b style="margin-right:18px;font-weight:400"> أرغب في تلقي رسائل إخبارية عبر البريد الالكتروني حول مكافآت وإعلانات فالكون
                           </b>
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-4 pull-right">
                        <button type="submit" class="btn btn-default login-submit sign-submit change-save">احفظ التغييرات</button>
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