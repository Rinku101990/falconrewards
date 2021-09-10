<!-- Sidebar menu-->
<?php $page=$this->uri->segment(1);?>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="side-tab-body p-0 border-0 resp-vtabs hor_1" id="sidemenu-Tab" style="display: block; width: 100%; margin: 0px;">
            <div class="first-sidemenu  ps--active-y">
                <div class="line-animations">
                    <ul class="resp-tabs-list hor_1" style="margin-top: 3px;">
                        <li class="<?php if($page=='dashboard')echo'resp-tab-active active ';?> resp-tab-item hor_1" aria-controls="hor_1_tab_item-0" role="tab"><span class="side-menu__icon"></span><img src="<?php echo site_url('assets/images/svgs/homepage.svg');?>" class="side_menu_img svg-1" alt="image"></li>
                        <li class="<?php if($page=='variables')echo'resp-tab-active active ';?> resp-tab-item hor_1" aria-controls="hor_1_tab_item-1" role="tab"><span class="side-menu__icon"></span><i class="fa fa-list fs-20 side_menu_img svg-1"></i></li>
                        <li class="<?php if($page=='products')echo'resp-tab-active active ';?> resp-tab-item hor_1" aria-controls="hor_1_tab_item-1" role="tab"><span class="side-menu__icon"></span><img src="<?php echo site_url('assets/images/svgs/shopping-cart.svg');?>" class="side_menu_img svg-1" alt="image"></li>
                        <li class="<?php if($page=='rewards')echo'resp-tab-active active';?> resp-tab-item hor_1" aria-controls="hor_1_tab_item-6" role="tab"><span class="side-menu__icon"></span><i class="fa fa-gift fs-20 side_menu_img svg-1"></i></li>
                        <li class="<?php if($page=='campaigns')echo'resp-tab-active active';?> resp-tab-item hor_1" aria-controls="hor_1_tab_item-6" role="tab"><span class="side-menu__icon"></span><i class="fa fa-building-o fs-20 side_menu_img svg-1"></i></li>
                        <li class="<?php if($page=='user')echo'resp-tab-active active ';?> resp-tab-item hor_1" aria-controls="hor_1_tab_item-2" role="tab"><span class="side-menu__icon"></span><i class="ti-user fs-20 side_menu_img svg-1"></i></li> 
                        <li class="<?php if($page=='cms')echo'resp-tab-active active ';?> resp-tab-item hor_1" aria-controls="hor_1_tab_item-3" role="tab"><span class="side-menu__icon"></span><i class="fa fa-file fs-20 side_menu_img svg-1"></i></li>                     
                        <li class="<?php if($page=='orders')echo'resp-tab-active active ';?> resp-tab-item hor_1" aria-controls="hor_1_tab_item-2" role="tab"><span class="side-menu__icon"></span><img src="<?php echo site_url('assets/images/svgs/bars-graphic.svg');?>" class="side_menu_img svg-1" alt="image"></li>                     
                        <li class="<?php if($page=='draws')echo'resp-tab-active active ';?> resp-tab-item hor_1" aria-controls="hor_1_tab_item-2" role="tab"><span class="side-menu__icon"></span><img src="<?php echo site_url('assets/images/svgs/testing.svg');?>" class="side_menu_img svg-1" alt="image"></li>                     
                        <li class="<?php if($page=='tickets')echo'resp-tab-active active';?> resp-tab-item hor_1" aria-controls="hor_1_tab_item-6" role="tab"><span class="side-menu__icon"></span><i class="fa fa-ticket fs-20 side_menu_img svg-1"></i></li>
                        <li class="<?php if($page=='winners')echo'resp-tab-active active';?> resp-tab-item hor_1" aria-controls="hor_1_tab_item-7" role="tab"><span class="side-menu__icon"></span><i class="fa fa-trophy fs-20 side_menu_img svg-1"></i></li>
                        <li class="<?php if($page=='notifications')echo'resp-tab-active active ';?> resp-tab-item hor_1" aria-controls="hor_1_tab_item-3" role="tab"><span class="side-menu__icon"></span><i class="fa fa-bell fs-20 side_menu_img svg-1"></i></li>                       
                        <li class="<?php if($page=='Settings')echo'resp-tab-active active';?> resp-tab-item hor_1" aria-controls="hor_1_tab_item-10" role="tab"><span class="side-menu__icon"></span><i class="ti-panel fs-20 side_menu_img svg-1"></i></li>
                    </ul>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 789px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 606px;"></div>
                </div>
            </div>
            <div class="second-sidemenu ps ps--active-y">
                <div class="resp-tabs-container hor_1">
                    
                    <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-0"><span class="resp-arrow"></span><span class="side-menu__icon"></span><img src="<?=base_url();?>assets/images/svgs/homepage.svg" class="side_menu_img svg-1" alt="image"></h2>
                    <div class="<?php  if($page=='dashboard')echo'resp-tab-content-active';?> resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel sidetab-menu">
                                    <div class="panel-body tabs-menu-body p-0 border-0 active">
                                        <div class="tab-content">
                                            <div class="tab-pane active " id="side1">
                                                <h5 class="mt-2 fs-15 font-weight-semibold mb-3">CRM</h5> <a class="slide-item active" href="<?=base_url('dashboard');?>">Dashboard</a>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-1"><span class="resp-arrow"></span><span class="side-menu__icon"></span><img src="<?=base_url();?>assets/images/svgs/bitcoin-logo.svg" class="side_menu_img svg-1" alt="image"></h2>
                    <div class="<?php  if($page=='variables')echo'resp-tab-content-active';?>  resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel sidetab-menu">
                                    <div class="panel-body tabs-menu-body p-0 border-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active " id="side11">
                                                <h5 class="mt-3 mb-4">Manage Category</h5> 
                                                <a href="<?=base_url('variables');?>" class="slide-item">Category Module</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-1"><span class="resp-arrow"></span><span class="side-menu__icon"></span><img src="http://ecommerce.sbcfphotography.com/admin/assets/images/svgs/bitcoin-logo.svg" class="side_menu_img svg-1" alt="image"></h2>
                    <div class="<?php  if($page=='products')echo'resp-tab-content-active';?>  resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel sidetab-menu">
                                    <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active " id="side11">
                                            <h5 class="mt-3 mb-4">Manage Products</h5>
                                            <a href="<?=base_url('products');?>" class="slide-item">Products Module</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-7"><span class="resp-arrow"></span><span class="side-menu__icon"></span><img src="<?=base_url();?>assets/images/svgs/layers.svg" class="side_menu_img svg-1" alt="image"></h2>
                    <div class="<?php  if($page=='rewards')echo'resp-tab-content-active';?> resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-7">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel sidetab-menu">
                                    <div class="panel-body tabs-menu-body p-0 border-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active " id="side41">
                                                <h5 class="mt-3 mb-4">Manage Rewards</h5> 
                                                <a href="<?=base_url('rewards');?>" class="slide-item">Rewards Module</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-6"><span class="resp-arrow"></span><span class="side-menu__icon"></span><img src="<?=base_url();?>assets/images/svgs/bars-graphic.svg" class="side_menu_img svg-1" alt="image"></h2>
                    <div class="<?php  if($page=='campaigns')echo'resp-tab-content-active';?> resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel sidetab-menu">
                                    <div class="panel-body tabs-menu-body p-0 border-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active " id="side31">
                                                <h5 class="mt-3 mb-4">Manage Campaigns</h5> 
                                                <a href="<?=base_url('campaigns');?>" class="slide-item">Campaigns Module</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-2"><span class="resp-arrow"></span><span class="side-menu__icon"></span><img src="<?=base_url();?>assets/images/svgs/testing.svg" class="side_menu_img svg-1" alt="image"></h2>
                    <div class="<?php  if($page=='user')echo'resp-tab-content-active';?> resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel sidetab-menu">
                                    <div class="panel-body tabs-menu-body p-0 border-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="side-1">
                                                <h5 class="mt-3 mb-4">Manage Customer</h5>
                                                <a href="<?=base_url('user');?>" class="slide-item">Customers Module</a>
                                                <a href="<?=base_url('user/mail');?>" class="slide-item">Customers Mail</a>
                                                 <a href="<?=base_url('user/custom');?>" class="slide-item">Custome Mail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-3"><span class="resp-arrow"></span><span class="side-menu__icon"></span><img src="<?=base_url();?>assets/images/svgs/shopping-cart.svg" class="side_menu_img svg-1" alt="image"></h2>
                    <div class="<?php  if($page=='cms')echo'resp-tab-content-active';?> resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel sidetab-menu">
                                    <div class="panel-body tabs-menu-body p-0 border-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active " id="side-11">
                                                <h5 class="mt-3 mb-4">CMS</h5>
                                                <a href="<?=base_url('cms/banners');?>" class="slide-item">Web Banners </a>
                                                <a href="<?=base_url('cms/mbanners');?>" class="slide-item">Mobile Banners</a>
                                                <a href="<?=base_url('cms/product');?>" class="slide-item">Coming Soon Products </a>
                                                <a href="<?=base_url('cms/content-page');?>" class="slide-item">Content Pages</a>
                                                <a href="<?=base_url('cms/navigations');?>" class="slide-item">Navigations</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-2"><span class="resp-arrow"></span><span class="side-menu__icon"></span><img src="<?=base_url();?>assets/images/svgs/testing.svg" class="side_menu_img svg-1" alt="image"></h2>
                    <div class="<?php  if($page=='orders')echo'resp-tab-content-active';?> resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel sidetab-menu">
                                    <div class="panel-body tabs-menu-body p-0 border-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="side-1">
                                                <h5 class="mt-3 mb-4">Manage Orders</h5>
                                                <a href="<?=base_url('orders');?>" class="slide-item">Orders Module</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-2"><span class="resp-arrow"></span><span class="side-menu__icon"></span><img src="<?=base_url();?>assets/images/svgs/testing.svg" class="side_menu_img svg-1" alt="image"></h2>
                    <div class="<?php  if($page=='draws')echo'resp-tab-content-active';?> resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel sidetab-menu">
                                    <div class="panel-body tabs-menu-body p-0 border-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="side-1">
                                                <h5 class="mt-3 mb-4">Manage Draws</h5>
                                                <a href="<?=base_url('draws');?>" class="slide-item">Draw Module</a>
                                                <a href="<?=base_url('winners');?>" class="slide-item">Winners Module</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-7"><span class="resp-arrow"></span><span class="side-menu__icon"></span><img src="<?=base_url();?>assets/images/svgs/layers.svg" class="side_menu_img svg-1" alt="image"></h2>
                    <div class="<?php  if($page=='tickets')echo'resp-tab-content-active';?> resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-7">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel sidetab-menu">
                                    <div class="panel-body tabs-menu-body p-0 border-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active " id="side41">
                                                <h5 class="mt-3 mb-4">Manage Tickets</h5> 
                                                <a href="<?php echo base_url('tickets');?>" class="slide-item">All Tickets</a>
                                                <a href="<?php echo base_url('tickets/bycategory');?>" class="slide-item">Ticket By Category</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-7"><span class="resp-arrow"></span><span class="side-menu__icon"></span><img src="<?=base_url();?>assets/images/svgs/layers.svg" class="side_menu_img svg-1" alt="image"></h2>
                    <div class="<?php  if($page=='winners')echo'resp-tab-content-active';?> resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-7">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel sidetab-menu">
                                    <div class="panel-body tabs-menu-body p-0 border-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active " id="side41">
                                                <h5 class="mt-3 mb-4">Manage Winners</h5> 
                                                <a href="<?php echo base_url('/');?>" class="slide-item">Winners Module</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-7"><span class="resp-arrow"></span><span class="side-menu__icon"></span><img src="<?=base_url();?>assets/images/svgs/layers.svg" class="side_menu_img svg-1" alt="image"></h2>
                    <div class="<?php  if($page=='notifications')echo'resp-tab-content-active';?> resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-7">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel sidetab-menu">
                                    <div class="panel-body tabs-menu-body p-0 border-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active " id="side41">
                                                <h5 class="mt-3 mb-4">Push Notification</h5> 
                                                <a href="<?php echo base_url('notifications');?>" class="slide-item">Notification(IOS)</a>
                                                <a href="<?php echo base_url('notifications/android');?>" class="slide-item">Notification(Android)</a>
                                                <a href="<?php echo base_url('notifications/email');?>" class="slide-item">Notification(Email)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-10"><span class="resp-arrow"></span><span class="side-menu__icon"></span><i class="ti-panel fs-20 side_menu_img svg-1"></i></h2>
                    <div class="<?php  if($page=='settings')echo'resp-tab-content-active ';?>  resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-10">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel sidetab-menu">
                                    <div class="panel-body tabs-menu-body p-0 border-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active " id="side62">
                                                <h5 class="mt-3 mb-4">Management Settings</h5>
                                                <a href="<?=base_url('settings/website');?>" class="slide-item">Manage General </a>    
                                                
                                                <a href="<?=base_url('settings/tax');?>" class="slide-item">Manage Tax </a>                                                
                                               <!--  <a href="<?=base_url('settings/templates');?>" class="slide-item">Manage Email Templates </a> -->                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 789px; right: -2px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 48px;"></div>
                </div>
            </div>
        </div>
    </aside>
    <!-- Sidemenu closed -->