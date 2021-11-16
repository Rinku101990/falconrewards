<!DOCTYPE html>
<html <?php if($this->websiteLang=='en'){echo "dir='ltr' lang='en'";}else if($this->websiteLang=='ar'){echo "dir='rtl' lang='ar'";}?>>
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="<?php echo $this->website->web_meta_keyword; ?>">
      <meta name="description" content="<?php echo $this->website->web_meta_description; ?>">
      <meta name="author" content="<?php echo $this->website->web_meta_title; ?>">
      <meta name="author" content="Rinku Vishwakarma, Manish Kumar">
      <title><?php echo $this->website->web_meta_title; ?></title>
      <!-- global level styles -->
      <link name="favicon" type="image/x-icon" href="<?=base_url('admin/uploads/website/favicon/').$this->website->web_favicon_icon;?>" rel="shortcut icon" />
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
      <!-- Bootstrap -->
      <link href="<?php echo site_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
      <link href="<?php echo site_url('assets/css/font-awesome.min.css');?>" rel="stylesheet">
      <link type="text/css" href="<?php echo site_url('assets/css/sweetalert2.min.css');?>" rel="stylesheet">
      <!-- bootstrap select plugin  https://silviomoreto.github.io/bootstrap-select/-->    
      <link href="<?php echo site_url('assets/cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css');?>" rel="stylesheet">
      <script src="<?php echo site_url('assets/loadlanguage/all.js');?>"></script>
      <!-- / global level styles end -->
      <!-- page level plugin styles -->
      <link href="<?php echo site_url('assets/cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css');?>" rel="stylesheet">
      <!-- / page level plugin styles end -->
      <!-- Website theme style sheet -->
      <link href="<?php echo site_url('assets/css/style.css');?>" rel="stylesheet">
      <link href="<?php echo site_url('assets/css/circle.css');?>" rel="stylesheet">
      <link href="<?php echo site_url('assets/css/custom.css');?>" rel="stylesheet">
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="<?php echo site_url('assets/code.jquery.com/jquery-1.11.3.min.js');?>"></script>
      <script src="<?php echo site_url('assets/code.jquery.com/jquery-migrate-1.2.1.min.js');?>"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168117562-1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-168117562-1');
      </script>
      <style>
         @media only screen and (max-width: 600px) {
            .footer_add{
            margin-top: 19px;
            }
            .footer-top-spacing {
            margin-top: 51px;
            padding-top: 31px;
            }
            .side-menu-div {
            display: none;
            }
            .Customer-Service{
            margin-top: 152px;   
            }
            .Contact-Us{
            margin-top: 147px;   
            }
         }
         html:lang(ar) .main-navigation li {
             float: right;
         }
         html:lang(ar) .main-navigation li.search-item {
             float: left;
         }
         html:lang(ar) footer ul.social li{
            float: right !important;
            margin-right: -10px;
            padding: 0px 8px;
         }
         html:lang(ar) .footer-contacts a span{
            float: right !important;
            margin-right: 0px;
            margin-left: 5px;
         }
         html:lang(ar) .section-d h2{
            float:right !important;
         }
         html:lang(ar) .section-d span{
            float:left !important;
         }
         html:lang(ar) .payment-box p{
            text-align: right !important;
            float: right !important;
         }
      </style>
      <!-- Facebook Pixel Code -->
      <script>
         !function(f,b,e,v,n,t,s)
         {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
         n.callMethod.apply(n,arguments):n.queue.push(arguments)};
         if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
         n.queue=[];t=b.createElement(e);t.async=!0;
         t.src=v;s=b.getElementsByTagName(e)[0];
         s.parentNode.insertBefore(t,s)}(window, document,'script',
         'https://connect.facebook.net/en_US/fbevents.js');
         fbq('init', '842181126342301');
         fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=842181126342301&ev=PageView&noscript=1"
         /></noscript>
      <!-- End Facebook Pixel Code -->
      <!-- Global site tag (gtag.js) - Google Ads: 600747949 -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=AW-600747949"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'AW-600747949');
      </script>
      <!-- Facebook Pixel Code -->
      <script>
         !function(f,b,e,v,n,t,s)
         {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
         n.callMethod.apply(n,arguments):n.queue.push(arguments)};
         if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
         n.queue=[];t=b.createElement(e);t.async=!0;
         t.src=v;s=b.getElementsByTagName(e)[0];
         s.parentNode.insertBefore(t,s)}(window, document,'script',
         'https://connect.facebook.net/en_US/fbevents.js');
         fbq('init', '3496135350447413');
         fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=3496135350447413&ev=PageView&noscript=1"
         /></noscript>
      <!-- End Facebook Pixel Code -->
   </head>