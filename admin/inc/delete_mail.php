<?php require 'function.php' ?>
<?php require 'dbconn.php' ?>


<?php

if (isset($_GET['id']))
{
    $post_id = mysqli_real_escape_string($conn, $_GET['id']);
    
    
    // Insert data into DATABASE
    $sql = "DELETE FROM mails WHERE id = '$post_id' ";
    $query = mysqli_query($conn, $sql) or die("Failed to DELETE MAIL IN database!" . mysqli_error($conn));

    if ($query) 
    {
        $_SESSION['status'] = "Success! Mail Deleted";
        $_SESSION['status_title'] = "Success";
        $_SESSION['status_code'] = "success";
        header("location: ../?inbox");    
    }
    else 
    {
        $_SESSION['status'] = "Failed! Something went wrong";
        $_SESSION['status_title'] = "Error";
        $_SESSION['status_code'] = "error";
        header("location: ../?inbox");       
    }

    
    
}





?>