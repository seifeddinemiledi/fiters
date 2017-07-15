<!-- Breadcrumb -->
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item ">Détails</li>
                <li class="breadcrumb-item active"><?php  echo $data['id']  ?></li>
            </ol>
<div class="container-fluid">
<div class="animated fadeIn">
<div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Nom / Prénom
                                </div>
                                <div class="card-block">
                                <?php echo $data['firstname'] ?>
                                <?php echo $data['lastname'] ?>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                   Téléphone
                                </div>
                                <div class="card-block">
                                (<?php echo $data['phonePrefixNumber'] ?>) <?php echo $data['phoneNumber'] ?>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Email
                                </div>
                                <div class="card-block">
                                <?php echo $data['email'] ?>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
<div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Date de naissance
                                </div>
                                <div class="card-block">
                                <?php echo $data['birthDate'] ?>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                   Gender
                                </div>
                                <div class="card-block">
                                <?php echo $data['gender'] ?>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    Weight / Height
                                </div>
                                <div class="card-block">
                                <?php echo $data['weight'] ?>
                                <?php echo $data['height'] ?>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-block p-0 clearfix">
                                    <i class="fa fa-laptop bg-primary p-2 px-3 font-2xl mr-1 float-left"></i>
                                    <div class="h5 mb-0 pt-1 text-center"><?php echo count($cnxs) ?></div>
                                    <div class="text-muted text-uppercase font-weight-bold font-xs text-center">Connexions</div>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->

                        <div class="col-sm-6 col-lg-3">
                            <div class="card">
                                <div class="card-block p-0 clearfix">
                                    <i class="fa fa-moon-o bg-danger p-2 px-3 font-2xl mr-1 float-left"></i>
                                    <div class="h5 mb-0 pt-1 text-center"><?php echo count($books); ?></div>
                                    <div class="text-muted text-uppercase font-weight-bold font-xs text-center">Réservations</div>
                                </div>
                            </div>
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