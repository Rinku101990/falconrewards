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
   }
   table.table.table-striped tr th {
   font-weight: 600;
   padding: 14px 6px;
   }
   /*Profile Pic End*/
</style>
<div class="inner-common">
   <div class="container">
      <div class="col-md-12 col-sm-12">
         <?php if($this->website->web_lang=='en'){ ?>
            <h1>Payment Option</h1>
         <?php }else if($this->website->web_lang=='ar'){ ?>
            <h1>خيار الدفع</h1>
         <?php } ?>
      </div>
      <div class="row">
         <?php if($this->website->web_lang=='en'){ ?>
         <div class="col-md-9 col-sm-9 pull-right">
            <div class="personal-details">
               <div class="personal-header">
                  <div class="hed-sec" >
                     <h2>Transition List</h2>
                  </div>
                  <table class="table table-striped" style="margin-bottom:0px !important">
                     <thead style="border-top: 2px solid #ddd;">
                        <tr>
                           <th>Sr. No.</th>
                           <th>Order Id</th>
                           <th>Txt Id</th>
                           <th>Payment Id</th>
                           <th>Data & Time</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(!empty($payments)){ $i=1; foreach($payments as $paylist) {?>
                        <tr>
                           <td><?php echo $i++;?></td>
                           <td><?php echo $paylist->ord_id;?></td>
                           <td><?php echo $paylist->transaction_id;?></td>
                           <td><?php echo $paylist->payment_id;?></td>
                           <td><?php echo date('d F Y, H:i:s A',strtotime($paylist->create_time));?></td>
                        </tr>
                        <?php } }else{ ?>
                        <tr>
                           <td colspan="5">
                              <center>No Records</center>
                           </td>
                        </tr>
                        <?php }?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <?php }else if($this->website->web_lang=='ar'){ ?>
         <div class="col-md-9 col-sm-9 pull-left">
            <div class="personal-details">
               <div class="personal-header">
                  <div class="hed-sec" >
                     <h2>قائمة الانتقال</h2>
                  </div>
                  <table class="table table-striped" style="margin-bottom:0px !important">
                     <thead style="border-top: 2px solid #ddd;">
                        <tr>
                           <th>Sr. No.</th>
                           <th>Order Id</th>
                           <th>Txt Id</th>
                           <th>Payment Id</th>
                           <th>Data & Time</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(!empty($payments)){ $i=1; foreach($payments as $paylist) {?>
                        <tr>
                           <td><?php echo $i++;?></td>
                           <td><?php echo $paylist->ord_id;?></td>
                           <td><?php echo $paylist->transaction_id;?></td>
                           <td><?php echo $paylist->payment_id;?></td>
                           <td><?php echo date('d F Y, H:i:s A',strtotime($paylist->create_time));?></td>
                        </tr>
                        <?php } }else{ ?>
                        <tr>
                           <td colspan="5">
                              <center>No Records</center>
                           </td>
                        </tr>
                        <?php }?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <?php } ?>
         <?php $this->load->view('account/right_sidebar');?>
      </div>
   </div>
</div>