<div class="app-content">
   <div class="section">
      <!--  Page-header opened -->
      <div class="page-header">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url('dashboard');?>"><i class="fe fe-home mr-1"></i> Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Manage Product</li>
         </ol>
         <div class="mt-3 mt-lg-0">
            <div class="d-flex align-items-center flex-wrap text-nowrap"> 
               <button type="button" onclick="history.go(-1)" class="btn btn-secondary btn-icon-text mr-2 mb-2 mb-md-0"> <i class="fa fa-arrow-left"></i> Go Back  </button>
               <a href="<?=base_url('products/add');?>">
               <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0"> <i class="fe fe-plus "></i> Add Product </button>
               </a>
            </div>
         </div>
      </div>
      <!--  Page-header closed -->
      <!-- row opened -->
      <div class="row">
         <div class="col-md-12 col-lg-12">
            <div class="card">
               <div class="card-header">
                  <div class="card-title">Product list</div>
                  <div class="card-options"> <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a> <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>  </div>
               </div>
               <div class="card-body">
                    <?php $msg=$this->session->flashdata('msg');if($msg){  ?>
                        <div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible fade show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-<?php echo $msg['icon'] ?> "></i></span> <span class="alert-inner--text"><strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?></span> <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
                    <?php }?>
                  <div class="table-responsive product-datatable">
                     <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                           <div class="col-sm-12">
                              <table id="example" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="example_info">
                                 <thead>
                                    <tr role="row">
                                       <th class="w-15p sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Product name: activate to sort column descending" >Sr. No.</th>
                                         <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending">Img</th>
                                       <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending">Product Name</th>
                                       <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >AED</th>
                                       <!--<th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >INR</th>-->
                                       <!--<th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >USD</th>-->
                                       <!--<th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >KWD</th>-->
                                       <!--<th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >BHD</th>-->
                                       <!--<th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >OMR</th>-->
                                       <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >Qty</th>
                                       <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >Pur. Qty</th>
                                        <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >Sold</th>
                                         <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >Sold+</th>
                                        <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >Order</th>

                                       <!--<th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" >Category</th>-->
                                       <th class="wd-15p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" > Status</th>
                                      
                                       <th class="wd-10p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" >Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php if(!empty($product)){
                                       $i=1;  foreach($product AS $list){?>
                                    <tr role="row" >
                                       <td class="sorting_1" align="center"><?=$i;$i++;?>.</td>
                                       <td> <img src="<?=base_url('uploads/product/').$list->p_picture;?>" style="width:70px; height: 50px"></td>
                                       <td > <?=$list->p_name;?></td>
                                       <td > <?=$list->p_aed;?></td>
                                       <!--<td > <?=$list->p_inr;?></td>-->
                                       <!--<td > <?=$list->p_usd;?></td>-->
                                       <!--<td > <?=$list->p_kwd;?></td>-->
                                       <!--<td > <?=$list->p_bhd;?></td>-->
                                       <!--<td > <?=$list->p_omr;?></td>-->
                                       <td><span class="badge badge-success-light badge-md"><?=$list->p_qty;?></span></td>
                                        <td><span class="badge badge-success-light badge-md"><?=sold($list->p_id);?></span></td>
                                         <td><span class="badge badge-primary-light badge-md"><?=round(sold($list->p_id)*100/$list->p_qty);?>%</span></td>
                                          <td><span class="badge badge-primary-light badge-md"><?=$list->p_sold_plus;?>%</span></td>
                                         <td><span class="badge badge-success-light badge-md"><?=order($list->p_id);?></span></td>
                                        <!--<td > <?=category($list->p_category);?></td>-->
                                     <td align="center">
                                       <a href="javascript:void(0);"onclick="javascript:showMyModalSetTitle('Change Status','products/product_status/',<?=$list->p_id;?>,<?php if($list->p_status=='0'){echo'1';}else{echo'0';}?>)">
                                          <span class="badge badge-<?php if($list->p_status=='1'){echo'danger';}else{echo'success';}?>-light badge-md"> <?php if($list->p_status=='1'){echo'In-Active';}else{echo'Active';}?></span></a>
                                       </td>
                                   
                                       <td align="center"> 
                                          <a href="<?=base_url('products/product-edit/').encode($list->p_id);?>" class="btn btn-info btn-sm mb-2 mb-xl-0 text-white" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                        
                                          <a href="javascript:void(0);" onclick="javascript:showMyModalSetTitle('Delete','products/product_delete/',<?=$list->p_id;?>,'')" class="btn btn-danger btn-sm mb-2 mb-xl-0 text-white" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
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
