<div class="app-content">
    <div class="section">
        <!--  Page-header opened -->
        <div class="page-header">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url('dashboard');?>"><i class="fe fe-home mr-1"></i> Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage Order Invoice</li>
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
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">#<?php echo $ordInfo->ord_reference_no;?></h3>
                        <div class="card-options"> <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a> <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a> <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a> </div>
                    </div>
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8"><br>
                                <center><img src="<?php echo site_url('uploads/website/logo/'.$this->website->web_company_logo);?>"></center><br>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>

                        <hr>
                        
                        <div class="row ">
                            <div class="col-lg-12">
                                <p class="h3"><?php echo $this->website->web_company_name;?></p>
                                <address class="fs-15">
                                    <?php echo $this->website->web_address;?><br>
                                    <?php echo $this->website->web_support_email;?><br>
                                    <?php echo $this->website->web_support_contact;?>
                                </address> 
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3">
                                <span class="font-weight-semibold">Order ID : </span><b>#<?php echo $ordInfo->ord_reference_no;?></b>
                            </div>
                            <div class="col-lg-3">
                                <span class="font-weight-semibold">Payment Mode : </span>
                                <?php if($ordInfo->ord_txt_id!=null){ ?>
                                        <span class="btn btn-success btn-sm">Online Payment</span>
                                <?php }else{ ?>
                                    <span class="btn btn-primary btn-sm">Pending</span>
                                <?php } ?> 
                            </div>
                            <div class="col-lg-3">
                                <span class="font-weight-semibold">Status : </span>
                                <?php if($ordInfo->order_status=='InProcess'){ ?>
                                    <span class="btn btn-primary btn-sm">In process</span>
                                <?php }else if($ordInfo->order_status=='Dispatched'){ ?>
                                    <span class="btn btn-success btn-sm">Dispatched</span>
                                <?php }else if($ordInfo->order_status=="Delivered"){ ?>
                                    <span class="btn btn-info btn-sm">Delivered</span>
                                <?php }else{ ?>
                                    <span class="btn btn-warning btn-sm">Waiting</span>
                                <?php } ?>
                            </div>
                            <div class="col-lg-3">
                                <span class="font-weight-semibold">Date : </span> <?php echo date('j M Y, G:i:s A',strtotime($ordInfo->ord_created));?>
                            </div>                            
                        </div>
                        <hr>

                        <div class="table-responsive push">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th class="text-center ">S.No.</th>
                                        <th>Product X Reward</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-right">Price</th>
                                        <th class="text-right">Amount</th>
                                    </tr>
                                    <?php foreach($ordPro as $ordKeys=>$ordValue){ ?>
                                    <tr>
                                        <td class="text-right"><?php echo $ordKeys+1;?></td>
                                        <td>
                                            <p class="font-w600 mb-1"><?php echo $ordValue->pro_name;?> <b>X</b> <?php echo reward_name($ordValue->pro_id);?></p>
                                        </td>
                                        <td class="text-right"><?php echo $ordValue->pro_qty;?></td>
                                        <td class="text-right">AED <?php echo number_format($ordValue->pro_price,2);?></td>
                                        <td class="text-right">AED <?php echo number_format($ordValue->pro_price*$ordValue->pro_qty,2);?></td>
                                    </tr>
                                    <?php } if(!empty($ordInfo->tax)){ ?>
                                    <tr>
                                        <td colspan="4" class="font-w600 text-right">VAT</td>
                                        <td class="text-right">AED <?php echo $ordInfo->tax;?></td>
                                    </tr>
                                    <?php }?>
                                    <tr>
                                        <td colspan="4" class="font-w600 text-right">Payable Amount</td>
                                        <td class="text-right">AED <?php echo $ordInfo->ord_total_amounts;?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-right">

                                            <?php if($ordInfo->order_status!="Waiting"){ ?>
                                                <a href="<?php echo site_url('orders/update/'.$ordInfo->ord_id.'/'.encode("Waiting"));?>" class="btn btn-primary btn-sm"><i class="icon icon-cup"></i> Waiting</a>
                                            <?php } ?>
                                            
                                            <?php if($ordInfo->order_status!="InProcess"){ ?>
                                                <a href="<?php echo site_url('orders/update/'.$ordInfo->ord_id.'/'.encode("InProcess"));?>" class="btn btn-success btn-sm"><i class="icon icon-hourglass"></i> InProcess</a>
                                            <?php } ?>
                                            
                                            <?php if($ordInfo->order_status!="Dispatched"){ ?>
                                                <a href="<?php echo site_url('orders/update/'.$ordInfo->ord_id.'/'.encode("Dispatched"));?>" class="btn btn-info btn-sm"><i class="icon icon-plane"></i> Dispatched</a>
                                            <?php } ?>
                                            
                                            
                                            <?php if($ordInfo->order_status!="Delivered"){ ?>
                                                <a href="<?php echo site_url('orders/update/'.$ordInfo->ord_id.'/'.encode("Delivered"));?>" class="btn btn-warning btn-sm"><i class="icon icon-like"></i> Delivered</a>
                                            <?php } ?>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>
</div>