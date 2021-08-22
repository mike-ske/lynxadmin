
<?php

$id = $_GET['editPost'];

if (isset($id) )
{
    $row = getAllPostById($conn, $id);

    foreach ($row as $value) 
    {
       $value;
    }
}


if (isset($_POST['send'])) {
    $title = mysqli_real_escape_string($conn, html_entity_decode($_POST['title']));
    $author = mysqli_real_escape_string($conn, html_entity_decode($_POST['author']));
    $message = mysqli_real_escape_string($conn, html_entity_decode($_POST['message']));
    $cat_name = mysqli_real_escape_string($conn, html_entity_decode($_POST['cat_name']));
    $image =  $_FILES['image'];


    if (!empty($title) && !empty($author) && !empty($message) && !empty($cat_name) && !empty($image)) {
        // Insert data into DATABASE
        $sql = "UPDATE post SET  `title`='$title', `content`='$message', `author`='$author',  `category_id`='$cat_name' WHERE id = '$id' ";
        $query = mysqli_query($conn, $sql) or die("Failed to insert to database!" . mysqli_error($conn));
        $post_id = mysqli_insert_id($conn);

        // Insert data into NOTIFICATIONS
        $image_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];

        $encode_image = base64_encode(file_get_contents($_FILES['image']['tmp_name']));


        $sql_1 = "UPDATE images SET `img_name`='$encode_image' WHERE `post_id` = '$post_id' ";
        mysqli_query($conn, $sql_1) or die("Failed to insert to database!" . mysqli_error($conn));

        if ($query) {
            $_SESSION['status'] = "Success! Post Updated";
            $_SESSION['status_title'] = "Success";
            $_SESSION['status_code'] = "success";
            // header("location: ../?addPost");
        } else {
            $_SESSION['status'] = "Failed! Something went wrong";
            $_SESSION['status_title'] = "Error";
            $_SESSION['status_code'] = "error";
            // header("location: ../?addPost");
        }
    } else {
        $_SESSION['status'] = "Failed please check empty field";
        $_SESSION['status_title'] = "Error";
        $_SESSION['status_code'] = "error";
        // header("location: ../?addPost");
    }
}

?>

<!-- /.col -->
<div class="col-md-12 mb-5">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Edit Post</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group mb-5">
                    <input class="form-control" name="title"  value="<?php echo $value['title'] ?>" placeholder="Title:">
                </div>
                <div class="form-group mb-5">
                    <input class="form-control" name="author"  value="<?php echo $value['author'] ?>" placeholder="Author:">
                </div>
                <div class="form-group mb-5">
                    <div class="alert alert-danger alert-dismissible" style="font-size: 12px;">
                        <h5><i class="icon fas fa-exclamation-triangle"></i> Please Note!</h5>
                        Ensure to delete or backspace empty text-box
                        before typing to start
                        a new document (Defalt text page)
                        inorder to get a correct output.
                    </div>
                    <textarea id="textarea"  name="message" value="<?php echo $value['content'] ?>" class="form-control textarea" style="height: 100rem" placeholder="Enter message here"></textarea>
                </div>

                <div class="row">
                    <div class="form-group mb-5 col-md-6">
                        <label for="exampleInputFile">Input File</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <!-- select -->
                    <div class="form-group mb-5 col-md-6">
                        <label>Select Category</label>
                        <select name="cat_name" class="form-control">
                            <option></option>
                            <?php 

                                $row = getAllCategory($conn);
                                foreach ($row as $value)
                                {
                                  
                            ?>
                            <option value="<?php echo  $value['id']?>" ><?php echo  $value['cat_name']?></option>

                            <?php };?>
                        </select>
                    </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer row w-100">
                    <div class="float-left col-md-6">
                        <button type="submit" name="send" class="btn btn-primary"><i class="far fa-send"></i> Update Post</button>
                    </div>
                    <div class="text-right col-md-6">
                        <button type="reset" class="btn btn-danger"><i class="fas fa-times"></i> Discard</button>
                    </div>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
        
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->