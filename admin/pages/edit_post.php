<!-- /.col -->
<div class="col-md-12 mb-5">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Edit Post</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group mb-5">
                <input class="form-control" placeholder="Title:">
            </div>
            <div class="form-group mb-5">
                <input class="form-control" placeholder="Author:">
            </div>
            <div class="form-group mb-5">
                <div class="alert alert-danger alert-dismissible">
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Please Note!</h5>
                    Ensure to delete or backspace empty text-box 
                    before typing to start
                    a new document (Defalt text page)
                    inorder to get a correct output.
                </div>
                <textarea id="compose-textarea" class="form-control textarea" style="height: 300px" placeholder="Enter message here"></textarea>
            </div>

            <div class="row">
                <div class="form-group mb-5 col-md-6">
                    <label for="exampleInputFile">Input File</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <!-- select -->
                <div class="form-group mb-5 col-md-6">
                    <label>Select Category</label>
                    <select class="form-control">
                        <option></option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                    </select>
                </div>
            </div>

        </div>

        <!-- /.card-body -->
        <div class="card-footer">
            <div class="float-right">
                <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Update</button>
            </div>
            <button type="reset" class="btn btn-danger"><i class="fas fa-times"></i> Discard</button>
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->