<div class="inner-common">
   <div class="container">
      <div class="row">
         <?php if($this->websiteLang=='en'){ ?>
         <div class="messages-div">
            <?php $msg=$this->session->flashdata('msg'); if($msg){  ?>
            <div class="danger message">
               <h2>Payment Failure or unpaid</h2>
               <p><?php echo $msg['message']; ?>. Thank you for helping us create a greener environment.</p>
               <a class="btn back-home-btn" href="<?=base_url();?>" style="color:#111">Continue Shopping</a>
            </div>
            <?php }else{ ?>
            <div class="success message">
               <h2>Order Success</h2>
               <p>Your payment was successful. Thank you for helping us create a greener environment.</p>
               <a class="btn back-home-btn" href="<?=base_url();?>" style="color:#111">Continue Shopping</a>
            </div>
            <?php } ?>
         </div>
         <?php }else if($this->websiteLang=='ar'){ ?>
         <div class="messages-div">
            <?php $msg=$this->session->flashdata('msg'); if($msg){  ?>
            <div class="danger message">
               <h2>فشل الدفع أو عدم الدفع</h2>
               <p><?php echo $msg['message']; ?>. شكرا لمساعدتنا في خلق بيئة أكثر اخضرارا.</p>
               <a class="btn back-home-btn" href="<?=base_url();?>" style="color:#111">مواصلة التسوق</a>
            </div>
            <?php }else{ ?>
            <div class="success message">
               <h2>نجاح الطلب</h2>
               <p>تم الدفع الخاص بك بنجاح. شكرا لمساعدتنا في خلق بيئة أكثر اخضرارا.</p>
               <a class="btn back-home-btn" href="<?=base_url();?>" style="color:#111">مواصلة التسوق</a>
            </div>
            <?php } ?>
         </div>
         <?php } ?>
      </div>
   </div>
</div>