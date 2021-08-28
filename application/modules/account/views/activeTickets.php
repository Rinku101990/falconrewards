<div class="inner-common">
   <div class="container">
      <?php if($this->website->web_lang=='en'){ ?>
         <h1>Active Tickets</h1>
      <?php }else if($this->website->web_lang=='ar'){ ?>
         <h1>تذاكر نشطة</h1>
      <?php } ?>
      <div class="row">
         <?php if($this->website->web_lang=='en'){ ?>
         <div class="col-md-9 pull-right">
            <div class="personal-details">
               <div class="clearfix"></div>
               <h3>Active Tickets</h3>
               <div class="row">
                  <?php if(!empty($tickets)){ foreach($tickets as $tcktlist){ ?>
                  <div class="col-sm-6">
                     <div class="ticket-box" style="border: 1px solid#e6e6e6;padding: 20px 15px;border-radius: 6px;margin-bottom: 30px;box-shadow: 0px 1px 3px 0px rgba(65, 65, 65, 0.1);">
                        <div class="logo" style="float:left">
                           <img src="<?=base_url('admin/uploads/website/logo/').$this->website->web_company_logo;?>" style="max-width: 180px;">
                        </div>
                        <div class="ticket-no" style="float:right">
                           <button style="background-color:#056839;border: none;padding: 6px 15px;line-height: 19px;margin-bottom: 6px;color:#fff;font-family: 'Barlow Semi Condensed', sans-serif;font-size: 16px;font-weight: 500;"><?php echo $tcktlist->ticket_no;?></button><br>
                           <span style="font-weight: 400;font-family: 'Barlow Semi Condensed', sans-serif;font-size: 17px;color:#353333;margin-bottom: 10px;line-height: 23px;">Ticket number</span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="cash-div" style="border-bottom: 1px solid#e6e6e6; padding-bottom: 10px;margin-bottom: 10px;">
                           <span style="font-size: 16px;font-weight: 500;margin-bottom: 5px;color:#bf1e2e;font-family: 'Barlow Semi Condensed', sans-serif;"><?php echo $tcktlist->price;?></span>
                        </div>
                        <div class="date-div">
                           <h3 style="font-size: 16px;margin-bottom: 2px;font-weight: 400;font-family: 'Barlow Semi Condensed', sans-serif;margin-top: 4px;">Purchased on</h3>
                           <span style="font-size: 16px;font-weight: 500;margin-bottom: 0px;color:#000;font-family: 'Barlow Semi Condensed', sans-serif;"><?php echo date("d F Y", strtotime($tcktlist->created));?></span>
                        </div>
                     </div>
                  </div>
                  <?php } }else{ ?>
                  <center>
                     <p>no tickets found!</p>
                  </center>
                  <?php } ?>
               </div>
            </div>
         </div>
         <?php }else if($this->website->web_lang=='ar'){ ?>
         <div class="col-md-9 pull-left">
            <div class="personal-details">
               <div class="clearfix"></div>
               <h3>تذاكر نشطة</h3>
               <div class="row">
                  <?php if(!empty($tickets)){ foreach($tickets as $tcktlist){ ?>
                  <div class="col-sm-6">
                     <div class="ticket-box" style="border: 1px solid#e6e6e6;padding: 20px 15px;border-radius: 6px;margin-bottom: 30px;box-shadow: 0px 1px 3px 0px rgba(65, 65, 65, 0.1);">
                        <div class="logo" style="float:left">
                           <img src="<?=base_url('admin/uploads/website/logo/').$this->website->web_company_logo;?>" style="max-width: 180px;">
                        </div>
                        <div class="ticket-no" style="float:right">
                           <button style="background-color:#056839;border: none;padding: 6px 15px;line-height: 19px;margin-bottom: 6px;color:#fff;font-family: 'Barlow Semi Condensed', sans-serif;font-size: 16px;font-weight: 500;"><?php echo $tcktlist->ticket_no;?></button><br>
                           <span style="font-weight: 400;font-family: 'Barlow Semi Condensed', sans-serif;font-size: 17px;color:#353333;margin-bottom: 10px;line-height: 23px;">Ticket number</span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="cash-div" style="border-bottom: 1px solid#e6e6e6; padding-bottom: 10px;margin-bottom: 10px;">
                           <span style="font-size: 16px;font-weight: 500;margin-bottom: 5px;color:#bf1e2e;font-family: 'Barlow Semi Condensed', sans-serif;"><?php echo $tcktlist->price;?></span>
                        </div>
                        <div class="date-div">
                           <h3 style="font-size: 16px;margin-bottom: 2px;font-weight: 400;font-family: 'Barlow Semi Condensed', sans-serif;margin-top: 4px;">Purchased on</h3>
                           <span style="font-size: 16px;font-weight: 500;margin-bottom: 0px;color:#000;font-family: 'Barlow Semi Condensed', sans-serif;"><?php echo date("d F Y", strtotime($tcktlist->created));?></span>
                        </div>
                     </div>
                  </div>
                  <?php } }else{ ?>
                  <center>
                     <p>لا توجد تذاكر!</p>
                  </center>
                  <?php } ?>
               </div>
            </div>
         </div>
         <?php } ?>
         <?php $this->load->view('account/right_sidebar');?>
      </div>
   </div>
</div>