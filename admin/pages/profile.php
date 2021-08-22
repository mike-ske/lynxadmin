<?php

$row = getAdminAccount($conn);

?>

<div class="card card-primary card-outline col-md-8 m-auto mb-5">
    <div class="card-body box-profile">
        <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" 
                    src="../packed/dist/img/avatar5.png" 
                    style="border: 3px solid #adb5bd;
                            margin: 0 auto;
                            padding: 3px;
                            width: 122px;
                            border-radius:50%" 
                            
                    alt="User profile picture">
        </div>

        <h3 class="profile-username text-center">Monatech</h3>

        <p class="text-muted text-center">Admin</p>

        <div class="tab-pane active" id="settings">
            <form class="form-horizontal" action="inc/manage_profile" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label"><?php echo $row['admin_name']?></label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="<?php echo $row['admin_name']?>" id="inputName" placeholder="Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" value="<?php echo $row['email']?>" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputEmail" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="aggree"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-md-4">
                        <button type="submit" name="update" class="btn btn-primary">Update Account</button>
                    </div>
                    <div class="col-md-6 float-right text-right">
                        <button type="reset" class="btn btn-danger">Clear</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- /.card-body -->
</div>