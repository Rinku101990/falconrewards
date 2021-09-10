<!-- banner section start-->
<div class="inner-banner winner">
   <img src="<?php echo site_url('assets/img/contact_banner.jpg');?>"/>
</div>
<!-- / banner section end -->
<!-- winner-section start-->
<div class="inner-common">
   <div class="container">
      <?php if($this->website->web_lang=='en'){?>
         <h1><?php echo $this->variables[21]->var_parent_name;?></h1>
      <?php }else if($this->website->web_lang=='ar'){?>
         <h1><?php echo $this->variables[21]->var_parent_name_ar;?></h1>
      <?php } ?>
      <div class="row">
         <div class="col-sm-6">
            <div class="padleft45">
               <p>We’d love to hear from you. Reach out to us anytime, we'll happily answer your questions
               </p>
               <?php if(!empty($this->website->web_address)){?>
               <div class="contact_blocks contact_address">
                  <h3>Address</h3>
                  <p><?=$this->website->web_address; ?></p>
               </div>
               <?php } ?>
               <?php if(!empty($this->website->web_support_contact)){?>
               <div class="contact_blocks contact_phone">
                  <h3>Phone</h3>
                  <a href="tel:<?php echo $this->website->web_support_contact;?>">
                     <?php echo $this->website->web_support_contact;?>
                  </a>
               </div>
               <?php } ?>
               
               <?php if(!empty($this->website->web_support_email)){?>
               <div class="contact_blocks contact_email">
                  <h3>Email</h3>
                  <a href="mailto:<?php echo $this->website->web_support_email;?>">
                     <?php echo $this->website->web_support_email;?>
                  </a>
               </div>
               <?php } ?>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.4391729588256!2d55.294200464540296!3d25.25580783551901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f433c8780d215%3A0x7b61b870e9fdfa01!2sCommercial%20Bank%20of%20Dubai!5e0!3m2!1sen!2sin!4v1592444792136!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- winner-section end-->
