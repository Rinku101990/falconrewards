        <!-- footer section start -->
        <footer id="footer" style="padding: 0 40px;border: none;">
           <div class="container-fuild">
              <div class="row">
                 <div class="col-sm-3 col-md-3 footer-top-spacing">
                    <a class="navbar-brand" href="<?php echo site_url('/');?>" style="width: 100%;padding: 0px;">
                       <img src="<?=base_url('admin/uploads/website/favicon/').$this->website->web_favicon_icon;?>" style="width:90px"/>
                    </a>
                    <br>
                    <h5 class="head_tag_5" style="margin-top: 55px;"><?php echo $this->variables[31]->var_parent_name;?></h5>
                    <ul class="social" style="width: 100%;margin-bottom: 30px;">
                       <?php $facebook=$this->website->web_facebook_link;if(!empty($facebook)){ ?>
                          <li><a href="<?php echo $facebook;?>"  title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                       <?php } ?>
                       
                       <?php $twitter=$this->website->web_twitter_link;if(!empty($twitter)){ ?>
                          <li><a href="<?php echo $twitter;?>"  title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                       <?php } ?>

                       <?php $linkedin=$this->website->web_linkedin_link;if(!empty($linkedin)){ ?>
                          <li><a href="<?php echo $linkedin;?>"  title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                       <?php } ?> 

                       <?php $google=$this->website->web_google_plus_link;if(!empty($google)){ ?>
                          <li><a href="<?php echo $google;?>"  title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                       <?php } ?>

                       <?php $instagram=$this->website->web_instagram_link;if(!empty($instagram)){ ?>
                          <li><a href="<?php echo $instagram;?>"  title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                       <?php } ?>

                       <?php $youtube=$this->website->web_youtube_link;if(!empty($youtube)){ ?>
                          <li><a href="<?php echo $youtube;?>"  title="Youtube" target="_blank"><i class="fa fa-youtube"></i></a></li>
                       <?php } ?>

                       <?php $pinterest=$this->website->web_pinterest_link;if(!empty($pinterest)){ ?>
                          <li><a href="<?php echo $pinterest;?>"  title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                       <?php } ?>
                    </ul>
                 </div>
                 <div class="col-sm-3 col-md-3 col-lg-2 footer-top-spacing">
                    <h5 class="head_tag_5"><?php echo $this->variables[22]->var_parent_name;?></h5>
                    <ul class="footer-links">
                       <li><a href="<?php echo site_url('about-us');?>"><?php echo $this->variables[18]->var_parent_name;?></a>
                       </li>
                       <li><a href="<?php echo site_url('');?>#Campaigns"><?php echo $this->variables[23]->var_parent_name;?></a>
                       </li>
                       <?php if(!empty($this->session->userdata('logged_in_users'))){ ?>
                            <li class="active-ticket"><a href="<?php echo site_url('');?>account/active_tickets"><?php echo $this->variables[24]->var_parent_name;?></a></li>
                       <?php }else{?>
                            <li><a href="<?=base_url('login');?>"><?php echo $this->variables[24]->var_parent_name;?></a></li>
                       <?php }?>
                       <li><a href="<?php echo site_url('');?>#products"><?php echo $this->variables[25]->var_parent_name;?></a>
                       </li>
                    </ul>
                 </div>
                 <div class="col-sm-3 col-md-3 col-lg-2 footer-top-spacing Customer-Service">
                    <h5 class="head_tag_5"><?php echo $this->variables[26]->var_parent_name;?></h5>
                    <ul class="footer-links">
                      <!--  <li><a href="<?php echo site_url('contact-us');?>">Contact Us</a>
                       </li> -->
                       <li><a href="<?php echo site_url('faq');?>"><?php echo $this->variables[27]->var_parent_name;?></a>
                       </li>
                      
                       <li><a href="<?php echo site_url('how-it-works');?>"><?php echo $this->variables[19]->var_parent_name;?></a>
                       </li>
                      <!--  <li><a href="<?php echo site_url('winners');?>">Winners</a>
                       </li> -->
                       <li><a href="<?php echo site_url('charities');?>"><?php echo $this->variables[28]->var_parent_name;?></a>
                       </li>
                        <li><a href="<?php echo site_url('privacy-policy');?>"><?php echo $this->variables[29]->var_parent_name;?></a>
                       </li>
                        <li><a href="<?php echo site_url('terms-conditions');?>"><?php echo $this->variables[30]->var_parent_name;?></a>
                       </li>
                    </ul>
                 </div>
                 <div class="col-md-4 col-lg-4 footer-top-spacing Contact-Us">
                    <div class="footer-contacts">
                       <h5 class="head_tag_5">Contact Us</h5>
                       <a class="open-font" href="javascript:void(0)">
                          <span class="footer_add"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                          <?=$this->website->web_address; ?>
                       </a>
                       <!--<a href="tel:0097150-3354856">-->
                       <!--     <span><i class="fa fa-whatsapp"></i></span>-->
                       <!--      0097150-3354856-->
                       <!--</a>-->
                       <?php if(!empty($this->website->web_support_contact)){?>
                       <a href="tel:<?php echo $this->website->web_support_contact;?>">
                            <span><i class="fa fa-phone"></i></span>
                            <?php echo $this->website->web_support_contact;?>
                       </a>
                       <?php } ?>
                       <?php if(!empty($this->website->web_support_email)){?>
                       <a href="mailto:<?php echo $this->website->web_support_email;?>">
                            <span><i class="fa fa-envelope"></i></span>
                          <?php echo $this->website->web_support_email;?>
                       </a>
                       <?php } ?>
                    </div>
                 </div>
              </div>
           </div>
        </footer>
        <footer id="footer" style="border: none;width: 95%;padding: 0 40px;">
         
         <div class="bottom" style="border: none; background: none;">
              <div class="container-fuild">
                <div class="row">
                  <div class="col-lg-6">
                    <?php if(!empty($this->variables[33]->var_parent_name)){?>
                    <p><?php echo $this->variables[33]->var_parent_name; ?></p>
                    <?php }else{ ?>
                    <p><?php echo $this->website->web_copy_right; ?></p>
                    <?php } ?>
               </div>
               <div class="col-lg-6 ">
                 
                    <?php if(!empty($this->variables[34]->var_parent_name)){?>
                    <p class="pull-right"><?php echo $this->variables[34]->var_parent_name; ?></p>
                    <?php }else{ ?>
                    <p class="pull-right">All Rights Reserved.</p>
                    <?php } ?>
              </div>
              </div>
              </div>
         
         </div>
         </footer>
         <div class="concartId">
            <div class="concart" >
                <a id="cart-indicator" href="<?=base_url('cart');?>" class="newCart-indicator">
            <span class="wrapperIndicator">
                Shopping Cart
                <div class="cart-indicator-icon">
                  <i class="fa fa-shopping-cart"></i>

                    <span class="concart-quantity " id="show_cart"><?php if(empty($this->cart->contents())){ echo'0';}else{ echo count($this->cart->contents());} ?></span>
                </div>
            </span>
        </a>

        <div>
            <div class="popover popover-bottom"></div>
        </div>

    </div>
</div>
<button onclick="topFunction()" id="customFalconBackToTop" title="Go to top"><i class="fa fa-arrow-up"></i></button>
<!-- / footer section end -->
<input type="hidden" id="site_url" name="site_url" value="<?php echo site_url();?>">
<input type="hidden" id="current_url" name="current_url" value="<?php  echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>">
<!-- global plugin scripts  -->


<script src="<?php echo site_url('assets/js/bootstrap.min.js');?>"></script>
<script src="<?php echo site_url('assets/cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js');?>"></script>

<!-- website script -->
<script src="<?php echo site_url('assets/js/custom.js');?>"></script>
<script src="<?php echo site_url('assets/js/shopping.js');?>"></script>
<script src="<?php echo site_url('assets/js/sweetalert2.min.js');?>"></script>
<script type="text/javascript">
   function showFrontendAlert(type, message) {
         if (type == 'danger') {
            type = 'error';
         }
         swal({
            position: 'top-end',
            type: type,
            title: message,
            showConfirmButton: false,
            timer: 1500
         });
   }
</script>
<script src="<?php echo site_url('assets/js/system.js');?>"></script>
<script>
    $(".incr-btn").on("click", function (e) {
       var $button = $(this);
       var oldValue = $button.parent().find('.quantity').val();
       var pid = $button.parent().find('.quantity').attr('pid');
      // alert(pid);
        var max = $button.parent().find('.quantity').attr('max');
        
       $button.parent().find('.incr-btn[data-action="decrease"]').removeClass('inactive');
       if ($button.data('action') == "increase") {
            if (parseInt(oldValue) < parseInt(max)) {
                
           var newVal = parseInt(oldValue) + 1;
            
            }else{
                 var newVal = parseInt(max);
                 $('.available'+pid).html('stock not available more than '+max);
                
            }
            
           
       } else {
           // Don't allow decrementing below 1
           if (oldValue > 1) {
               var newVal = parseFloat(oldValue) - 1;
           } else {
               newVal = 1;
               $button.addClass('inactive');
           }
       }
       $button.parent().find('.quantity').val(newVal);
       e.preventDefault();
   });
</script>
<!-- / global plugin scripts end -->
<!-- page level plugin scripts include -->
<script src="<?php echo site_url('assets/cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.min.js');?>"></script>
<!-- / page level plugin scripts include end -->
<!-- page level scripts  -->
<script>
   var falcon = $( '#falcon-slider' );
   var option_featured = {
     autoplay:true,
     loop:true,
 autoplayTimeout:1000,
    margin: 30,
    nav: false,
    dots: false,
   
    responsive: {
      0: {
        items: 1
   
      },
      768: {
        items: 3
   
      },
      991: {
        items: 3
   
      },
      1200: {
        items: 4
   
      }
    }
   };
   falcon.owlCarousel( option_featured );
   $( '#falcon-next' ).click( function () {
    falcon.trigger( 'next.owl.carousel' );
   
   } )
   $( '#falcon-prev' ).click( function () {
    falcon.trigger( 'prev.owl.carousel' );
   
   } )
</script>
<script>
   function openNav() {
    document.getElementById( "mySidenav" ).style.width = "250px";
   }
   
   function closeNav() {
    document.getElementById( "mySidenav" ).style.width = "0";
   }
   var owl = $('#falcon-slider2');
owl.owlCarousel({
    items:4,
    loop:false,
    margin:30,

    autoplay:false,
    autoplayTimeout:1500,
    autoplayHoverPause:true,
       responsive: {
      0: {
        items: 1
   
      },
      768: {
        items: 3
   
      },
      991: {
        items: 3
   
      },
      1200: {
        items: 4
   
      }
    }
});
   $( '#demo-next' ).click( function () {
    owl.trigger( 'next.owl.carousel' );
   
   } )
   $( '#demo-prev' ).click( function () {
    owl.trigger( 'prev.owl.carousel' );
   
   } )

   var owl1 = $('#demo1');
owl1.owlCarousel({
    items:4,
    loop:true,
    margin:30,

    autoplay:true,
    autoplayTimeout:1500,
    autoplayHoverPause:true,
       responsive: {
      0: {
        items: 1
   
      },
      768: {
        items: 2
   
      },
      991: {
        items: 4
   
      },
      1200: {
        items: 6
   
      }
    }
});
   $( '#demo1-next' ).click( function () {
    owl1.trigger( 'next.owl.carousel' );
   
   } )
   $( '#demo1-prev' ).click( function () {
    owl1.trigger( 'prev.owl.carousel' );
   
   } )

   var owl2 = $('#demo2');
owl2.owlCarousel({
    items:4,
    loop:true,
    margin:30,

    autoplay:true,
    autoplayTimeout:2500,
    autoplayHoverPause:true,
       responsive: {
      0: {
        items: 1
   
      },
      768: {
        items: 3
   
      },
      991: {
        items: 3
   
      },
      1200: {
        items: 4
   
      }
    }
});
   $( '#demo2-next' ).click( function () {
    owl2.trigger( 'next.owl.carousel' );
   
   } )
   $( '#demo2-prev' ).click( function () {
    owl2.trigger( 'prev.owl.carousel' );
   
   } )

</script>
<script src="<?php echo site_url('assets/js/vendor.js');?>"></script>
<script src="<?php echo site_url('assets/js/custom2.js');?>"></script>
<script type="text/javascript">
  
</script>
</body>
</html>