<div class="app-content">
   <div class="section">
      <!--  Page-header opened -->
      <div class="page-header">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url('dashboard');?>"><i class="fe fe-home mr-1"></i> Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Tickets</li>
         </ol>
         <div class="mt-3 mt-lg-0">
            <div class="d-flex align-items-center flex-wrap text-nowrap"> 
               <button type="button" onclick="history.go(-1)" class="btn btn-secondary btn-icon-text mr-2 mb-2 mb-md-0"> <i class="fa fa-arrow-left"></i> Go Back  </button>
            </div>
         </div>
      </div>
      <!--  Page-header closed -->
      <!-- row opened -->
      <div class="row">
         <div class="col-md-12 col-lg-12">
            <div class="card">
               <div class="card-header">
                  <div class="card-title">Tickets list</div>
                  <div class="card-options"> <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a> <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>  </div>
               </div>
               <div class="card-body">
                  <div class="table-responsive product-datatable">
                     <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                           <div class="col-sm-12">
                               <?php //print("<pre>".print_r($tickets,true)."</pre>");?>
                              <table id="example" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="example_info">
                                 <thead>
                                    <tr role="row">
                                       <th class="w-15p sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Product name: activate to sort column descending" >Sr. No.</th>
                                       <!--<th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending">Order No</th>-->
                                        <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending">Name</th>
                                       <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >Ticket No</th>
                                       
                                          <!--<th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending">Product</th>-->
                                        <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >Date of purchase</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php if(!empty($tickets)){
                                       $i=1;  foreach($tickets AS $tktlist){?>
                                    <tr role="row" >
                                       <td class="sorting_1" align="center"><?=$i;$i++;?>.</td>
                                       <!--<td > <?=$tktlist->ord_reference_no;?></td>-->
                                        <td > <?=$tktlist->usr_fname.' '.$tktlist->usr_lname;?></td>
                                        <td> <?php echo $tktlist->ticket_no;?></td>
                                        
                                         <!--<td> <?php echo $tktlist->price;?></td>-->
                                       <td > <?=date('d M, Y h:i:s',strtotime($tktlist->created));?></td>
                                    </tr>
                                    <?php }}?>
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
        <script src="<?=base_url();?>assets/plugins/date-picker/bootstrap-datepicker.min.js"></script>
        
    



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

<script>
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'excel', 'pdf' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>
    


</body>

</html>
