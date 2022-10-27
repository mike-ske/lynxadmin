<!-- /.col -->
<div class="col-md-12 mb-5">
    <div class="card card-primary card-outline">
        <div class="card-header row">
            <h3 class="card-title col-md-6 col-sm-6">Add Post</h3>
            <div class="tex-right float-rihgt col-md-6 col-sm-6" style="align-items: center;display: flex;justify-content: flex-end;">
                <a href="#" data-toggle="modal" data-target="#modal-lg-video" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-upload fa-sm text-white-50"></i> Upload Videos
                </a>
            </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="inc/manage_post" method="post" enctype="multipart/form-data">
                <div class="form-group mb-5">
                    <input class="form-control" name="title" placeholder="Title:">
                </div>
                <div class="form-group mb-5">
                    <input class="form-control" name="author" placeholder="Author:">
                </div>
                <div class="form-group mb-5">
                    <div class="alert alert-danger alert-dismissible">
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Please Note!</h5>
                        Ensure to delete or backspace empty text-box before typing to start a new document (Defalt text page)
                        inorder to get a correct output.
                    </div>
                    <textarea id="textarea" name="message" class="form-control textarea" style="height: 300px" placeholder="Enter message here"></textarea>
                </div>

                <div class="row">
                    <div class="form-group mb-5 col-md-6">
                        <label for="exampleInputFile">Input File</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="photo">
                                <label id="profile" class="custom-file-label" for="exampleInputFile">Choose file</label>
                                 
                            </div>
                        </div>
                    </div>
                    <!-- select -->
                    <div class="form-group mb-5 col-md-6">
                        <label>Select Category</label>
                        <select name="cat_name" class="form-control">
                            <option></option>
                            <?php 

                                $row = getCategory($conn);
                               
                                foreach ($row as $value)
                                {
                                  
                            ?>
                            <option value="<?php echo $value['id']?>" ><?php echo  $value['cat_name']?></option>

                            <?php };?>
                        </select>
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer row w-100">
                        <div class="float-left col-md-6">
                            <button type="submit" name="send" class="btn btn-primary"><i class="far fa-send"></i> Add Post</button>
                        </div>
                        <div class="text-right col-md-6">
                            <button type="reset" class="btn btn-danger"><i class="fas fa-times"></i> Discard</button>
                        </div>
                    </div>
                    <!-- /.card-footer -->
                </div>

            </form>
        </div>


    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
