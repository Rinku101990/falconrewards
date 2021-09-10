<div class="app-content">
   <div class="section">
      <!--  Page-header opened -->
      <div class="page-header">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url('dashboard');?>"><i class="fe fe-home mr-1"></i> Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Customers Mail</li>
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
                  <div class="card-title">Customers Mail List</div>
                  <div class="card-options"> <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a> <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>  </div>
               </div>
               <div class="card-body"> 
                  <?php $msg=$this->session->flashdata('msg');  
                     if($msg){  ?>
                  <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible fade show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-<?php echo $msg['icon'] ?> "></i></span> <span class="alert-inner--text"><strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?></span> <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
                  <?php }?>
                  <form action="" method="post">
                  <div class="table-responsive product-datatable">
                     <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                           <div class="col-sm-12">
                              <table id="example" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="example_info">
                                 <thead>
                                    <tr role="row">
                                       
                                        <th class="wd-20p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending"><input type="checkbox" name="all" class="all_checked"  id="chkParent"></th>
                                         <th class="w-15p sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Product name: activate to sort column descending" >Sr.No.</th>
                                        <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending">Name</th>
                                        <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >Email Address</th>
                                        <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >Phone</th>
                                        
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php if(!empty($customers)){
                                       $i=1;  foreach($customers AS $cstlist){?>
                                    <tr role="row" >
                                      
                                       <td><input type="checkbox" name="user[]" class="checkbox_checked" value="<?=$cstlist->usr_email;?>" >
                                       </td>
                                        <td class="sorting_1" >#<?=$i;$i++;?></td>
                                       <td > 
                                          <a href="<?php echo site_url('user/profile/'.$cstlist->usr_id);?>" class="text-primary"><?php echo $cstlist->usr_fname;?> <?php echo $cstlist->usr_lname;?></a> 
                                       </td>
                                       <td>
                                          <?=$cstlist->usr_email;?>
                                       </td>
                                       <td> <?=$cstlist->usr_mobile;?></td>
                                      
                                    </tr>
                                    <?php }}?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12"><br/>
                   <input type="text"  name="subject" class="form-control " placeholder="Subject"  required="" /><br/>
                                                <div class="card-footer1">
                                                    <button type="submit" class="btn btn-primary btn2"><i class="fa fa-save"></i> Sent</button>
                                                   
                                                </div>
                                            </div>
              </form>
               </div>
               <!-- table-wrapper -->
            </div>
            <!-- section-wrapper -->
         </div>
      </div>
      <!-- row closed -->
   </div>
</div>
<script type="text/javascript">
 
   $(document).ready(function() {
  var $selectAll = $('#chkParent'); // main checkbox inside table thead
  var $table = $('.table'); // table selector 
  var $tdCheckbox = $table.find('tbody input:checkbox'); // checboxes inside table body
  var tdCheckboxChecked = 0; // checked checboxes

  // Select or deselect all checkboxes depending on main checkbox change
  $selectAll.on('click', function () {
    $tdCheckbox.prop('checked', this.checked);
  });

  // Toggle main checkbox state to checked when all checkboxes inside tbody tag is checked
  $tdCheckbox.on('change', function(e){
    tdCheckboxChecked = $table.find('tbody input:checkbox:checked').length; // Get count of checkboxes that is checked
    // if all checkboxes are checked, then set property of main checkbox to "true", else set to "false"
    $selectAll.prop('checked', (tdCheckboxChecked === $tdCheckbox.length));
  })
});
</script>