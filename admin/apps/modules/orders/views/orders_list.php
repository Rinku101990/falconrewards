


<div class="app-content">
    <div class="section">
        <!--  Page-header opened -->
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url('dashboard');?>"><i class="fe fe-home mr-1"></i> Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Orders</li>
            </ol>
            <div class="mt-3 mt-lg-0">
                <div class="d-flex align-items-center flex-wrap text-nowrap">
                    <button type="button" onclick="history.go(-1)" class="btn btn-secondary btn-icon-text mr-2 mb-2 mb-md-0"> <i class="fa fa-arrow-left"></i> Go Back </button>
                </div>
            </div>

        </div>
        <!--  Page-header closed -->
        <!-- row opened -->
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Orders List</div>
                        <div class="card-options"> <a href="javascript:void(0)" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a> <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a> </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive product-datatable">
                            <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div ><center>
                                        <input type="radio" name="type" id="type" value="1" <?php if(!empty($_REQUEST['status'])) echo "checked";?>>&nbsp;&nbsp;<label>Status</label>
                                        <input type="radio" name="type"  id="type" value="2" <?php if(!empty($_REQUEST['from'])) echo "checked";?>>&nbsp;&nbsp;<label>Date Detween</label></center>
                                        <br>
                                    </div>
                                    <div id="status" style="display: <?php if(!empty($_REQUEST['status'])) echo "block"; else echo'none';?>">
                                        <form action="" method="post">
                                            <div class="row">
                                  
                                     <div class="col-sm-12" align="center">
                                        <select name="status" class="form-control"  required="" style="width: 180px;display: inline-block;">
                                            <option value="">Select Status</option>
                                            <option value="Waiting" <?php if(@$_REQUEST['status']=='Waiting')echo'selected';?>>Waiting</option>
                                            <option value="InProcess" <?php if(@$_REQUEST['status']=='InProcess')echo'selected';?>>InProcess</option>
                                        </select>
                                         <input type="submit" value="Search" class="btn btn-secondary btn-icon-text mr-2 mb-2 mb-md-0" style="margin-left:20px; width: 100px;display: inline-block;"/>
                                             </div>
                                        </div>
                                        
                                            
                                                                                     </form>
                                    </div>
                                     <div id="date" style="display: <?php if(!empty($_REQUEST['from'])) echo "block"; else echo'none';?>">
                                        <center>
                                             <form action="" method="post">
                                        <label style="display: inline-block; width:50px;">From </label>
                                         

    <input type="text" name="from" class="form-control input-group date valid"  required="" id="sp_start_date" autocomplete="off" placeholder="From Date " value="<?=@$_REQUEST['from'];?>" style="width: 150px; display: inline-block; padding-left: 27px;" aria-invalid="false">
          <label  style="display: inline-block;width:50px;">To </label>

    <input type="text" name="to" class="form-control input-group date valid" id="sp_start_date" autocomplete="off" placeholder="To Date " value="<?=@$_REQUEST['to'];?>"  required=""style="width: 150px;display: inline-block; padding-left: 27px;" aria-invalid="false">
     <input type="submit" value="Search" class="btn btn-secondary btn-icon-text mr-2 mb-2 mb-md-0" style="margin-left:20px; width: 100px;display: inline-block;"/>
                                        </center>
                                    </form>
                                     </div>
                                        <br/>&nbsp;
                                      
                                        
                                        <table id="example" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="example_info">
                                            <thead>
                                                <tr role="row">
                                                     <th class="w-15p sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Product name: activate to sort column descending" >Sr. No.</th>
                                                    <th class="w-15p sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Product name: activate to sort column descending" style="width: 70px !important;">Order ID</th>
                                                    <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending">Customer Name</th>
                                                    <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending">Email</th>
                                                    <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending">Mobile No.</th>
                                                     <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending">Product X Reward X Qty</th>
                                                    <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 45px !important;">Price</th>
                                                    <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 60px !important;">Payment</th>
                                                    <!--<th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 60px !important;">Payment Status</th>-->
                                                    <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 50px !important;">Status</th>
                                                    <th class="wd-20p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 130px;">Created</th>
                                                    <th class="wd-10p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 60px !important;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(!empty($ordlist)){  $i=1; foreach($ordlist as $order){ ?>
                                                    <tr role="row">
                                                         <td class="sorting_1" align="center"><?=$i;$i++;?>.</td>
                                                        <td class="sorting_1" align="left">#<a href="<?php echo site_url('orders/invoice/'.$order->ord_id);?>" ><?php echo $order->ord_reference_no;?></a></td>
                                                        
                                                        <td>
                                                            <a href="<?php echo site_url('user/profile/'.$order->cust_id);?>" target="_blank"><?php echo $order->usr_fname.' '.$order->usr_lname;?></a>
                                                        </td>
                                                          <td>
                                                            <?php echo $order->usr_email;?>
                                                        </td>
                                                         <td>
                                                            <?php echo $order->usr_mobile;?>
                                                        </td>
                                                         <td>
                                <?php if(product($order->ord_id)==TRUE){
                                    foreach(product($order->ord_id) as $pd_val){
                                        echo $pd_val->pro_name.' X '. reward_name($pd_val->pro_id).' X '. $pd_val->pro_qty.', ';
                                    }}
                                                            ?>
                                                        </td>

                                                        <td>AED <?php echo $order->ord_total_amounts;?></td>
                                                        
                                                        <td align="center">
                                                            <?php if($order->ord_txt_id!=null){ ?>
                                                                    <span class="badge badge-success-light badge-md">Online Payment</span>
                                                            <?php }else{ ?>
                                                                <span class="badge badge-warning-light badge-md">Pending</span>
                                                            <?php } ?>                                                            
                                                        </td>
                                                        <!--<td align="center">-->
                                                            
                                                        <!--   <?php if($order->transaction_status=='1'){ ?>-->
                                                        <!--     <span class="badge badge-warning-light badge-md">Unpaid</span>-->
                                                        <!--    <?php }elseif($order->transaction_status=='2'){?>-->
                                                        <!--         <span class="badge badge-success-light badge-md">Paid</span>-->
                                                        <!--    <?php }elseif($order->transaction_status=='3'){ ?>   -->
                                                        <!--    <span class="badge badge-danger-light badge-md">Failure</span>-->
                                                        <!--    <?php }else{?>-->
                                                        <!--    <span class="badge badge-warning-light badge-md">Unpaid</span>-->
                                                        <!--     <?php }?>-->
                                                            
                                                        <!--</td>-->

                                                        <td align="center">
                                                            <?php if($order->order_status=='Delivered'){ ?>
                                                                <span class="badge badge-primary-light badge-md">Delivered</span>
                                                            <?php }else if($order->order_status=='Dispatched'){ ?>
                                                                <span class="badge badge-info-light badge-md">Dispatched</span>
                                                            <?php }else if($order->order_status=='InProcess'){ ?>
                                                                <span class="badge badge-success-light badge-md">InProcess</span>
                                                            <?php }else{ ?>
                                                                <span class="badge badge-warning-light badge-md">Waiting</span>
                                                            <?php } ?>
                                                        </td>
                                                        
                                                        <td align="center"><?php echo date('j M Y G:i A',strtotime($order->ord_created));?></td>
                                                        
                                                        <td align="center">
                                                            <a href="<?php echo site_url('orders/invoice/'.$order->ord_id);?>" class="btn btn-info btn-sm mb-2 mb-xl-0 text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-eye"></i></a>
                                                            <!-- <a href="<?php echo site_url('orders/remove/'.$order->ord_id);?>" class="btn btn-danger btn-sm mb-2 mb-xl-0 text-white" data-toggle="tooltip" data-original-title="Remove"><i class="fa fa-trash-o"></i></a> -->
                                                        </td>

                                                    </tr>
                                                <?php } }else{ ?>
                                                    <tr role="row">
                                                        <td class="sorting_1" align="center"  colspan="7">no order found!</td>
                                                    </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>
                                       
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- table-wrapper -->
                </div>
                <!-- section-wrapper -->
            </div>
        </div>
        <!-- row closed -->
    </div>
</div>

<input type="hidden" id="site_url" name="site_url" value="<?php echo site_url();?>">
<input type="hidden" id="current_url" name="current_url" value="<?php  echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>">
<!-- Footer opened -->
    <footer class="footer-main">
        <div class="container">
            <div class="  mt-2 mb-2 text-center"> <?php echo $this->website->web_copy_right; ?> </div>
        </div>
    </footer>
<!-- Footer closed -->

<!-- Back-to-top --><a href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
<!-- Jquery-scripts -->

    <script src="<?=base_url();?>assets/js/vendors/jquery-3.2.1.min.js"></script>
 <script src="<?=base_url();?>assets/js/nextprev.js"></script>
    
 
    <script src="<?=base_url();?>assets/plugins/moment/moment.min.js"></script>
   
    <script src="<?=base_url();?>assets/js/vendors/bootstrap.bundle.min.js"></script>
 
    <script src="<?=base_url();?>assets/js/vendors/jquery.sparkline.min.js"></script>
    
    <script src="<?=base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
  
    <script src="<?=base_url();?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
   
    <script src="<?=base_url();?>assets/js/vendors/circle-progress.min.js"></script>
   
    <script src="<?=base_url();?>assets/plugins/rating/jquery.rating-stars.js"></script>
   
    <script src="<?=base_url();?>assets/plugins/clipboard/clipboard.min.js"></script>
  
    <script src="<?=base_url();?>assets/plugins/clipboard/clipboard.js"></script>

    <script src="<?=base_url();?>assets/plugins/prism/prism.js"></script>
  
    <script src="<?=base_url();?>assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>
  
    <script src="<?=base_url();?>assets/plugins/jquery-nice-select/js/jquery.nice-select.js"></script>
   
    <script src="<?=base_url();?>assets/plugins/jquery-nice-select/js/nice-select.js"></script>
  
    <script src="<?=base_url();?>assets/plugins/p-scroll/p-scroll.js"></script>
   
    <script src="<?=base_url();?>assets/plugins/p-scroll/p-scroll-leftmenu.js"></script>
  
    <script src="<?=base_url();?>assets/plugins/sidemenu/sidemenu.js"></script>
	
  
    <script src="<?=base_url();?>assets/plugins/sidemenu-responsive-tabs/js/sidemenu-responsive-tabs.js"></script>

   
    <script src="<?=base_url();?>assets/plugins/jqvmap/jquery.vmap.js"></script>
   
    <script src="<?=base_url();?>assets/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
   
    <script src="<?=base_url();?>assets/plugins/jqvmap/jquery.vmap.sampledata.js"></script>

    <script src="<?=base_url();?>assets/js/apexcharts.js"></script>
   
    <script src="<?=base_url();?>assets/plugins/chart/chart.min.js"></script>

    <script src="<?=base_url();?>assets/js/index.js"></script>

    <script src="<?=base_url();?>assets/js/index-map.js"></script>
    
    <script src="<?=base_url();?>assets/js/left-menu.js"></script>
 
    <script src="<?=base_url();?>assets/switcher/js/switcher.js"></script>
 
    <script src="<?=base_url();?>assets/plugins/sidebar/sidebar.js"></script>
    
    <script src="<?=base_url();?>assets/js/custom.js"></script>
	<script src="<?=base_url();?>assets/plugins/summernote/summernote-bs4.js"></script><script src="<?=base_url();?>assets/plugins/summernote/summernote.js"></script>
	 <script src="<?=base_url();?>assets/js/custom_query.js"></script>
        <script src="<?=base_url();?>assets/js/product.js"></script>
       


     <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">-->
  <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
   <link href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.bootstrap4.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>
 <script src="<?=base_url();?>assets/plugins/date-picker/bootstrap-datepicker.min.js"></script>
        
    

<script>
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'excel' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>
  <script type='text/javascript'>
$(function(){
$('.input-group.date').datepicker({
    calendarWeeks: true,
    todayHighlight: true,
    autoclose: true
});  
});


 $(document).ready(function(){
$( 'input[name="type"]').on( "click", function() {
let typid=$('input[name="type"]:checked').val();
//alert(typid);
if(typid=='1'){
    $('#status').show();
    $('#date').hide();
}else if(typid=='2'){
    $('#status').hide();
    $('#date').show();
}
 });
    });
</script>
    


</body>

</html>
