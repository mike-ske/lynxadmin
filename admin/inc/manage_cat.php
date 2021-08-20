<?php require 'function.php' ?>
<?php require 'dbconn.php' ?>


<?php

if (isset($_POST['send']))
{
    $cat_name = mysqli_real_escape_string($conn, $_POST['cat_name']);
    
    
    if (!empty($cat_name) )
    {
            // Insert data into DATABASE
            $sql = "INSERT INTO category(`cat_name`) VALUES ('$cat_name')";
            $query = mysqli_query($conn, $sql) or die("Failed to insert to database!" . mysqli_error($conn));
            $post_id = mysqli_insert_id($conn);

            if ($query) 
            {
                $_SESSION['status'] = "Success! Category Added";
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
    else 
    {
            $_SESSION['status'] = "Failed please check empty field";
            $_SESSION['status_title'] = "Error";
            $_SESSION['status_code'] = "error";
            header("location: ../?category");  
    
    }

    
    
}





?>