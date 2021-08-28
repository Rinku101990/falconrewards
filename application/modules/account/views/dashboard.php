<div class="inner-common">
   <div class="container">
      <h1> Hi, <?php echo $this->customer->usr_fname.' '.$this->customer->usr_lname;?></h1>
      <div class="row">
         <?php if($this->website->web_lang=='en'){ ?>
         <div class="col-md-9 pull-right">
            <div class="level-member">
                <div class="img-member">
                    <?php if(!empty($this->customer->usr_profile_photo)){?>
                        <img src="<?php echo site_url('uploads/users/profile/'.$this->customer->usr_profile_photo);?>" style="width:65px;height:65px">
                     <?php }else{ ?>
                        <img src="<?php echo site_url('uploads/users/profile/avatar.png');?>" style="width:65px;height:65px">
                     <?php } ?>
                </div>
               <div class="text-member">
                  <h3>Welcome Back</h3>
                  <p>Registered Date & Time : <?php echo date('F m,Y H:i:s A', strtotime($this->customer->usr_created));?></p>
               </div>
            </div>
         </div>
         <?php }else if($this->website->web_lang=='ar'){ ?>
         <div class="col-md-9 pull-left">
            <div class="level-member">
                <div class="img-member">
                    <?php if(!empty($this->customer->usr_profile_photo)){?>
                        <img src="<?php echo site_url('uploads/users/profile/'.$this->customer->usr_profile_photo);?>" style="width:65px;height:65px">
                     <?php }else{ ?>
                        <img src="<?php echo site_url('uploads/users/profile/avatar.png');?>" style="width:65px;height:65px">
                     <?php } ?>
                </div>
               <div class="text-member">
                  <h3>مرحبا بعودتك</h3>
                  <p>Registered Date & Time : <?php echo date('F m,Y H:i:s A', strtotime($this->customer->usr_created));?></p>
               </div>
            </div>
         </div>
         <?php } ?>
         <?php $this->load->view('account/right_sidebar');?>
      </div>
   </div>
</div>