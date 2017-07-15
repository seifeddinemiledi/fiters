<!-- Breadcrumb -->
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Place</li>
                <li class="breadcrumb-item ">Details</li>
                <li class="breadcrumb-item active"><?php  echo $data['id']  ?></li>
            </ol>
<div class="container-fluid">
<div class="animated fadeIn">
<div class="row" >
                        <div class="col-sm-6 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                 Name
                                </div>
                                <div class="card-block">
                                <?php echo $data['name'] ?>
                              
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                Adress
                                </div>
                                <div class="card-block">
                                <?php echo $data['address'] ?>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    Start_Time
                                </div>
                                <div class="card-block">
                                <?php echo $data['start_time'] ?>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    

                        <!--/.col-->
                        <div class="col-sm-6 col-md-3">
                            <div class="card">
                                <div class="card-header">
                                   end_time
                                </div>
                                <div class="card-block">
                                <?php echo $data['end_time'] ?>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                         </div>
                        </div>
                        <!--/.col-->
                    </div>
                   
                        <!--/.col

                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-block p-0 clearfix">
                                    <i class="fa fa-moon-o bg-success p-2 px-3 font-2xl mr-1 float-left"></i>
                                    <div class="h5 mb-0 pt-1 text-center">$1.999,50</div>
                                    <div class="text-muted text-uppercase font-weight-bold font-xs text-center">Income</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-block p-0 clearfix">
                                    <i class="fa fa-bell bg-info p-2 px-3 font-2xl mr-1 float-left"></i>
                                    <div class="h5 mb-0 pt-1 text-center">$19.999,50</div>
                                    <div class="text-muted text-uppercase font-weight-bold font-xs text-center">Account</div>
                                </div>
                            </div>
                        </div>
                        /.col-->
                    </div>
</div>
</div>