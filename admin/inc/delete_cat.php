<?php require 'function.php' ?>
<?php require 'dbconn.php' ?>


<?php

if (isset($_GET['id']))
{
    $post_id = mysqli_real_escape_string($conn, $_GET['id']);
    
    
    // Insert data into DATABASE
    $sql = "DELETE FROM category WHERE id = '$post_id' ";
    $query = mysqli_query($conn, $sql) or die("Failed to DELETE CATEGORY IN database!" . mysqli_error($conn));

    if ($query) 
    {
        $_SESSION['status'] = "Success! Category Deleted";
        $_SESSION['status_title'] = "Success";
        $_SESSION['status_code'] = "success";
        header("location: ../?category");    
    }
    else 
    {
        $_SESSION['status'] = "Failed! Something went wrong";
        $_SESSION['status_title'] = "Error";
        $_SESSION['status_code'] = "error";
        header("location: ../?category");       
    }

    
    
}





?>