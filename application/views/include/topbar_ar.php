<body>
   <style type="text/css">
      .typed-search-box {
      position: absolute;
      top: 100%;
      border: 1px solid #eceff1;
      box-shadow: 0 5px 25px 0 rgba(123,123,123,0.15);
      background: #fff;
      width: 100%;
      /* height: auto; */
      transition: all 0.3s;
      -webkit-transition: all 0.3s;
      -ms-webkit-transition: all 0.3s;
      /* min-height: 200px;*/
      z-index: 999999;
      /*overflow-y: scroll;*/
      height: auto;
      overflow-x: hidden;
      }
   </style>
   <!-- header section start-->
   <header>
      <nav id="navbar" class="navbar navbar-default main-navigation">
         <div class="container-fuild">
            <div class="row">

               <div class="col-md-4">
                  <div class="select-usd" style="font-size:20px; font-weight:600;margin-top:13px;float: right !important;margin-right: -30px;">
                     <a href="javascript:void(0)" id="setLanguage" defLang="<?php if($this->website->web_lang=='en'){echo'ar';}else if($this->website->web_lang=='ar'){echo'en';}?>">
                        <img src="<?=base_url('assets/img/ae.png');?>"  style="vertical-align:text-bottom;width: 45px;"/> USD  <i class="fa fa-caret-down" aria-hidden="true"></i>
                     </a>
                  </div>
                  <div class="user-detail-log-cart-section" style="margin-top: 13px;    margin-left: 110px;">
                     <ul>
                        <?php if(!empty($this->session->userdata('logged_in_users'))){ ?>
                        <li>
                           <div class="profile-drop-down" style="margin-top: 0px !important;">
                              <div class="profile-dropdown">
                                 <a class="dropbtn" >
                                 <i class="fa fa-user"></i> <span style="color: #056839">Hi, </span>
                                 <?php $myNameLength=strlen($this->customer->usr_fname);if($myNameLength >=7){echo substr($this->customer->usr_fname,0,7).'';}else{echo substr($this->customer->usr_fname,0,7);}?>
                                 </a>
                                 <div class="dropdown-content">
                                    <a href="<?php echo site_url('account/dashboard');?>"><?php echo $this->variables[36]->var_parent_name_ar;?></a>
                                    <a href="<?php echo site_url('account/profile');?>"><?php echo $this->variables[37]->var_parent_name_ar;?></a>
                                    <a href="<?php echo site_url('account/payment');?>"><?php echo $this->variables[38]->var_parent_name_ar;?></a>
                                    <a href="<?php echo site_url('account/active_tickets');?>"><?php echo $this->variables[24]->var_parent_name_ar;?></a>
                                    <a href="<?php echo site_url('account/change_password');?>"><?php echo $this->variables[39]->var_parent_name_ar;?></a>
                                    <a href="<?php echo site_url('account/logout');?>"><?php echo $this->variables[40]->var_parent_name_ar;?></a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <?php }else{ ?>
                        <li><a href="<?=base_url('login');?>" class=" login-btn" >
                           <i class="fa fa-user"></i> <?php echo $this->variables[7]->var_parent_name_ar;?> </a>
                        </li>
                        <?php } ?>
                        <!--  <li><a class="" href="<?=base_url('cart');?>" >
                           <i class="fa fa-shopping-cart"></i> Cart (<span id="show_cart"><?php if(empty($this->cart->contents())){ echo'0';}else{ echo count($this->cart->contents());} ?></span>)</a>
                           </li> -->
                     </ul>
                  </div>
                  <!-- /.navbar-collapse -->
               </div>

               <div class="col-md-8">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header" style="float:right">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                     <a class="navbar-brand" href="<?php echo site_url('/');?>">
                     <img src="<?=base_url('admin/uploads/website/logo/').$this->website->web_company_logo;?>"/>
                     </a>
                  </div>
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo site_url('about-us');?>"><?php echo $this->variables[18]->var_parent_name_ar;?></a>
                        </li>
                        <li><a href="<?php echo site_url('how-it-works');?>"><?php echo $this->variables[19]->var_parent_name_ar;?></a>
                        </li>
                        <li><a href="<?php echo site_url('winners');?>"><?php echo $this->variables[20]->var_parent_name_ar;?></a>
                        </li>
                        <li><a href="<?php echo site_url('contact-us');?>"><?php echo $this->variables[21]->var_parent_name_ar;?></a>
                        </li>
                        <li>
                           <form class="form falcon-form" action="<?=base_url('home/search');?>" method="post">
                              <div class="input-group">
                                 <input class="form-control" type="text" name="search" placeholder="Search" autocomplete="off" aria-label="Search" style="padding-left: 20px; border-radius: 40px;" id="mysearch" onkeyup="ajaxSearch();">
                                 <div class="input-group-addon">
                                    <button class="btn btn-warning btn-sm" type="submit" style="border-radius: 20px;" id="search-btn"><i class="fa fa-search"></i></button>
                                 </div>
                              </div>
                           </form>
                           <div id="search_data" style="display: none">
                              <div id="autoSuggestionsList" ></div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>

            </div>
         </div>
      </nav>
   </header>
   <!-- /.container-fluid -->
   <!-- / header section end-->