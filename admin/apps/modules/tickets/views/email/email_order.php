<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Invoice Templates</title>
    <style>
    /* -------------------------------------
        INLINED WITH htmlemail.io/inline
    ------------------------------------- */
    /* -------------------------------------
        RESPONSIVE AND MOBILE FRIENDLY STYLES
    ------------------------------------- */
    @media only screen and (max-width: 620px) {
      table[class=body] h1 {
        font-size: 28px !important;
        margin-bottom: 10px !important;
      }
      table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
        font-size: 16px !important;
      }
      table[class=body] .wrapper,
            table[class=body] .article {
        padding: 10px !important;
      }
      table[class=body] .content {
        padding: 0 !important;
      }
      table[class=body] .container {
        padding: 0 !important;
        width: 100% !important;
      }
      table[class=body] .main {
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
      }
      table[class=body] .btn table {
        width: 100% !important;
      }
      table[class=body] .btn a {
        width: 100% !important;
      }
      table[class=body] .img-responsive {
        height: auto !important;
        max-width: 100% !important;
        width: auto !important;
      }
    }

    /* -------------------------------------
        PRESERVE THESE STYLES IN THE HEAD
    ------------------------------------- */
    @media all {
      .ExternalClass {
        width: 100%;
      }
      .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
        line-height: 100%;
      }
      .apple-link a {
        color: inherit !important;
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important;
      }
      
      .btn-primary a:hover {
        background-color: #34495e !important;
        border-color: #34495e !important;
      }
    }
</style>
  </head>
  <body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
    <table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;">
      <tr>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
        <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;">
          <div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">

            <!-- START CENTERED WHITE CONTAINER -->
            
			
            <table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">
                 
                        <!--For Ticket-->
                        <?php if(!empty($ticketsbycategory)){ ?>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;font-size:17px;color:#6370c9"> <b>Donate (Win AED 2,500 Cash)</b>:</p>
                        <table cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">
                            <tbody>
                                <div class="row">
                                    <?php foreach($ticketsbycategory as $tkts){?>
                                    <div class="col-sm-6">
                                        <div class="ticket-box" style="border: 1px solid#e6e6e6;padding: 20px 15px;border-radius: 6px;margin-bottom: 30px;box-shadow: 0px 1px 3px 0px rgba(65, 65, 65, 0.1);">
                                            <div class="logo" style="float:left">
                                               <img src="<?php echo site_url('uploads/website/logo/').$this->website->web_company_logo;?>" style="width:30%;">
                                            </div>
                                            <div class="ticket-no" style="float:right;margin-top:-35px">
                                               <button style="background-color:#056839;border: none;padding: 6px 15px;line-height: 19px;margin-bottom: 6px;color:#fff;font-family: 'Barlow Semi Condensed', sans-serif;font-size: 14px;font-weight: 500;"><?php echo $tkts->ticket_no;?></button><br>
                                               <span style="font-weight: 400;font-family: 'Barlow Semi Condensed', sans-serif;font-size: 12px;color:#353333;margin-bottom: 10px;line-height: 23px;">Ticket number</span>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="cash-div" style="    margin-top: 35px;border-bottom: 1px solid#e6e6e6; padding-bottom: 10px;margin-bottom: 10px;">
                                               <span style="font-size: 14px;font-weight: 600;margin-bottom: 5px;color:#bf1e2e;font-family: 'Barlow Semi Condensed', sans-serif;"><?php echo $tkts->price;?></span>
                                            </div>
                                            <div class="date-div" style="display:inline-block; width:68%">
                                               <h3 style="font-size: 15px;margin-bottom: 2px;font-weight: 400;font-family: 'Barlow Semi Condensed', sans-serif;margin-top: 4px;">Purchased on</h3>
                                               <span style="font-size: 15px;font-weight: 500;margin-bottom: 0px;color:#000;font-family: 'Barlow Semi Condensed', sans-serif;"><?php echo date('d F Y h:i:s', strtotime($tkts->created));?></span>
                                            </div>
                                            <div class="date-div"  style="display:inline-block; width:30%">
                                               <h3 style="font-size: 15px;margin-bottom: 2px;font-weight: 400;font-family: 'Barlow Semi Condensed', sans-serif;margin-top: 4px;">&nbsp;</h3>
                                               <span style="font-size: 15px;font-weight: 500;margin-bottom: 0px;color:#000;font-family: 'Barlow Semi Condensed', sans-serif;"><?php echo $tkts->usr_fname.' '.$tkts->usr_lname;?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </tbody>
                        </table>
                        <?php } ?>
                        <!--End Of the Ticket-->
                        
                            </td>
                    </tr>

                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>

           

          <!-- END CENTERED WHITE CONTAINER -->
          </div>
        </td>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
