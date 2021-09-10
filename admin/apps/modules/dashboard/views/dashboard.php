<!-- App-content opened -->
<div class="app-content">
    <div class="section">
        <!-- Page-header opened -->
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title mb-0">Welcome Back,</h4>
                <small class="text-muted mt-0 fs-14"><?php echo $this->website->web_company_name; ?></small> 
            </div>
            <div class="page-rightheader">
                <div class="ml-3 ml-auto d-flex">
                    <div class="mt-3 mt-md-0 border-right">
                    </div>
                    <div class="mt-3 mt-md-0">
                        <div class="border-right pl-0 pl-md-4 pr-4 mt-1 d-xl-block">
                            <p class="text-muted mb-1">Last Login Date & Time</p>
                            <div class="wideget-user-rating">
                                <?php echo date('d F, Y H:i:s A',strtotime($admin->mst_lastLogin));?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header closed -->

        <!-- row opened -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="">
                                <p class="mb-2 h6">Total Products</p>
                                <h2 class="mb-1 "><?=get_total_product();?></h2>
                                <p class="mb-0 text-muted"><span class="text-success">(+0.0%)<i class="fe fe-arrow-up text-success"></i></span>Increase</p>
                            </div>
                            <div class=" my-auto ml-auto">
                                <div class="chart-wrapper text-center">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="areaChart1" class="areaChart2 chartjs-render-monitor chart-dropshadow-primary overflow-hidden mx-auto" width="80" height="80" style="display: block; width: 80px; height: 80px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="">
                                <p class="mb-2 h6">Total Order</p>
                                <h2 class="mb-1 "><?=get_total_order();?></h2>
                                <p class="mb-0 text-muted"><span class="text-danger">(+0.0%)</span><i class="fe fe-arrow-down text-danger"></i>Decrease</p>
                            </div>
                            <div class=" my-auto ml-auto">
                                <div class="chart-wrapper">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="areaChart2" class="areaChart2 chartjs-render-monitor chart-dropshadow-secondary overflow-hidden" width="80" height="80" style="display: block; width: 80px; height: 80px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="">
                                <p class="mb-2 h6">Total Tickets</p>
                                <h2 class="mb-1 "><?=get_total_ticket();?></h2>
                                <p class="mb-0 text-muted"><span class="text-success">(+0.0%)<i class="fe fe-arrow-up text-success"></i></span>Increase</p>
                            </div>
                            <div class="my-auto ml-auto">
                                <div class="chart-wrapper">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="areaChart3" class="areaChart3 chartjs-render-monitor chart-dropshadow-info overflow-hidden" width="80" height="80" style="display: block; width: 80px; height: 80px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="">
                                <p class="mb-2 h6">Total Users</p>
                                <h2 class="mb-1 "><?=get_total_user();?></h2>
                                <p class="mb-0 text-muted"><span class="text-danger">(+0.0%)</span><i class="fe fe-arrow-down text-danger"></i>Decrease</p>
                            </div>
                            <div class="my-auto ml-auto">
                                <div class="chart-wrapper">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="areaChart4" class="areaChart4 chartjs-render-monitor chart-dropshadow-success overflow-hidden" width="80" height="80" style="display: block; width: 80px; height: 80px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>
</div>
<!-- App-content closed -->