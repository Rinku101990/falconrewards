<link rel="stylesheet" href="<?php echo site_url('assets/css/dashboard.css');?>">
<link rel="stylesheet" href="<?php echo site_url('assets/css/dbresponsive.css');?>">
<div id="wt-sidebarwrapper" class="wt-sidebarwrapper">
   <div id="wt-btnmenutoggle" class="wt-btnmenutoggle">
      <span class="menu-icon">
      <em></em>
      <em></em>
      <em></em>
      </span>
   </div>
   <div id="wt-verticalscrollbar" class="wt-verticalscrollbar">
      <div class="wt-companysdetails wt-usersidebar">
         <figure class="wt-companysimg">
            <img src="<?php echo site_url('assets/');?>images/user-img.jpg" alt="img description">
         </figure>
         <div class="wt-companysinfo" style="padding:0px;">
            <figure><img src="<?php echo site_url('assets/');?>images/user-img.jpg" alt="img description"></figure>
            <div class="wt-title">
               <h2><a href="javascript:void(0);"> <?php $myNameLength=strlen($this->customer->usr_fname);if($myNameLength >=7){echo substr($this->customer->usr_fname,0,7).'';}else{echo substr($this->customer->usr_fname,0,7);}?></a></h2>
               <span><?php $myUserNameLength=strlen($this->customer->usr_username);if($myUserNameLength >=10){echo substr($this->customer->usr_username,0,10).'';}else{echo substr($this->customer->usr_username,0,10);}?></span>
            </div>
            <!--<div class="wt-btnarea"><a href="#" class="wt-btn">Post a Job</a></div>-->
         </div>
      </div>
      <nav id="wt-navdashboard" class="wt-navdashboard">
         <ul>
            <li class="wt-active">
               <a href="<?php echo site_url('account/dashboard');?>">
               <i class="ti-dashboard"></i>
               <span>Dashboard</span>
               </a>
            </li>
            <li class="">
               <a href="">
               <i class="ti-briefcase"></i>
               <span>My Profile</span>
               </a>
            </li>
            <li class="">
               <a href="">
               <i class="fa fa-envelope"></i>
               <span>Inbox</span>   <span class="pull-right wt-btn" style="height: 40px;float: right; margin-right: 27px; width: 35px; padding: 0 8px;line-height: 38px;    margin-top: 4px;">22</span>
               </a>
            </li>
            <li class="">
               <a href="">
               <i class="fa fa-car"></i>
               <span>My Services</span>   <span class="pull-right wt-btn" style="height: 40px;float: right; margin-right: 27px; width: 35px; padding: 0 14px;line-height: 38px;    margin-top: 4px;">3</span>
               </a>
            </li>
            <li class="">
               <a href="">
               <i class="fa fa-wrench"></i>
               <span>Repair Posts</span>
               </a>
            </li>
            <li class="">
               <a href="">
               <i class="fa fa-bell-o"></i>
               <span>Bids</span>
               </a>
            </li>
            <li class="">
               <a href="<?php echo site_url('account/wrenches');?>">
               <i class="fa fa-gift"></i>
               <span>Purchase Wrenches</span> 
               </a>
            </li>
            <li class="">
               <a href="">
               <i class="fa fa-money"></i>
               <span>Transactions</span>
               </a>
            </li>
            <li>
               <a href="#">
               <i class="fa fa-key"></i>
               <span>Change Password</span>
               </a>
            </li>
            <li>
               <a href="<?php echo site_url('account/logout');?>">
               <i class="ti-shift-right"></i>
               <span>Sign Out</span>
               </a>
            </li>
         </ul>
      </nav>
   </div>
</div>