
<div class="inner-common">
   <div class="container">
      <div class="row">
         <div class="messages-div">
            <div class="danger message">
               <?php if($this->website->web_lang=='en'){ ?>
               <h2>Canceld order</h2>
               <p>We are sorry! Your last transaction was cancelled.</p>
               <a class="btn back-home-btn" href="<?=base_url();?>">Continue Shopping</a>
               <?php }else if($this->website->web_lang=='ar'){ ?>
               <h2>الغاء الطلب</h2>
               <p>نحن اسفون! تم إلغاء معاملتك الأخيرة.</p>
               <a class="btn back-home-btn" href="<?=base_url();?>">مواصلة التسوق</a>
               <?php } ?>
            </div>
         </div>
      </div>
   </div>
</div>