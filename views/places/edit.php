
<!-- Breadcrumb -->
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Coache</li>
                <li class="breadcrumb-item ">Edit</li>
                <li class="breadcrumb-item active"><?php  echo $data['id']  ?></li>
            </ol>



<div class="container-fluid">
<div class="animated fadeIn">
<div class="card">
                                <div class="card-header">
                                    <strong>New </strong>Coache
                                </div>
                                <div class="card-block">
                                    <form  method="post" enctype="multipart/form-data" class="form-horizontal ">
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="text-input">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" value="<?php echo $data['name'] ?>"   name="name" required class="form-control" placeholder="">
                                                <span class="help-block">Nom</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="text-input">address</label>
                                            <div class="col-md-9">
                                                <input type="text" value="<?php echo $data['address'] ?>"  name="address" required class="form-control" placeholder="">
                                                <span class="help-block">adderess</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="time">Start_time</label>
                                            <div class="col-md-9">
                                                <input type="time" value="<?php echo $data['start_time'] ?>"  name="start_time" required class="form-control" placeholder="">
                                                <span class="help-block">email</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="disabled-input">End_Time</label>
                                            <div class="col-md-9">
                                                <input type="time" value="<?php echo $data['end_time'] ?>" name="end_time" class="form-control" required >
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group row">
                                            <button type="submit" name="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
                                           <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
                                
                                        </div>
                                    </form>
                                </div>
                            </div>

</div>
</div>