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
                                       <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending">Order No</th>
                                       <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >Ticket No</th>
                                        <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >Created</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php if(!empty($tickets)){
                                       $i=1;  foreach($tickets AS $tktlist){?>
                                    <tr role="row" >
                                       <td class="sorting_1" align="center"><?=$i;$i++;?>.</td>
                                       <td > <?=$tktlist->ord_reference_no;?></td>
                                        <td> <?php echo $tktlist->ticket_no;?></td>
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
