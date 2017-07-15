
<!-- Breadcrumb -->
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Coache</li>
                <li class="breadcrumb-item active">Create</li>
            </ol>



<div class="container-fluid">
<div class="animated fadeIn">
<div class="card">
                                <div class="card-header">
                                    <strong>New Coache </strong>
                                </div>
                                <div class="card-block">
                                    <form  method="post" enctype="multipart/form-data" class="form-horizontal ">
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="text-input">Firstname</label>
                                            <div class="col-md-9">
                                                <input type="text"  name="firstname" required class="form-control" placeholder="">
                                                <span class="help-block">Nom</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="text-input">Lastname</label>
                                            <div class="col-md-9">
                                                <input type="text"  name="lastname" required class="form-control" placeholder="">
                                                <span class="help-block">Prénom</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="email-input">Email</label>
                                            <div class="col-md-9">
                                                <input type="email"  name="email" required class="form-control" placeholder="Enter Email">
                                                <span class="help-block">email</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="disabled-input">PhoneNumber</label>
                                            <div class="col-md-9">
                                                <input type="text"  name="phoneNumber" class="form-control" required >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label">Gender</label>
                                            <div class="col-md-9">
                                                <div class="radio">
                                                    <label for="radio1">
                                                        <input type="radio" required id="radio1" name="gender" value="0">Homme
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2">
                                                        <input type="radio" required id="radio2" name="gender" value="1">Femme
                                                    </label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 form-control-label" for="pass">Password</label>
                                            <div class="col-md-9">
                                                <input type="text" id="pass"  name="password" class="form-control" required >
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