<?php require 'function.php' ?>
<?php require 'dbconn.php' ?>


<?php

if (isset($_POST['send']))
{
    $title = mysqli_real_escape_string($conn, html_entity_decode($_POST['title']));
    $author = mysqli_real_escape_string($conn, html_entity_decode($_POST['author']));
    $message = mysqli_real_escape_string($conn, html_entity_decode($_POST['message']));
    $cat_name = mysqli_real_escape_string($conn, html_entity_decode($_POST['message']));
    $image =  $_FILES['image'];
    

    if (!empty($title) && !empty($author) && !empty($message) && !empty($cat_name) && !empty($image))
    {
            // Insert data into DATABASE
            $sql = "INSERT INTO post(`title`, `content`, `author`,  `category_id`) VALUES ('$title', '$message', '$author',  '$cat_name' )";
            $query = mysqli_query($conn, $sql) or die("Failed to insert to database!" . mysqli_error($conn));
            $post_id = mysqli_insert_id($conn);

            // Insert data into NOTIFICATIONS
            $image_name = $_FILES['image']['name'];
            $tmp_name= $_FILES['image']['tmp_name'];

            $encode_image = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
         

            $sql = "INSERT INTO images(post_id, img_name) VALUES ('$post_id', '$encode_image')";
            mysqli_query($conn, $sql) or die("Failed to insert to database!" . mysqli_error($conn));

            if ($query) 
            {
                $_SESSION['status'] = "Success! Post Added";
                $_SESSION['status_title'] = "Success";
                $_SESSION['status_code'] = "success";
                header("location: ../?addPost");    
            }
            else 
            {
                $_SESSION['status'] = "Failed! Something went wrong";
                $_SESSION['status_title'] = "Error";
                $_SESSION['status_code'] = "error";
                header("location: ../?addPost");       
            }
    }
    else 
    {
            $_SESSION['status'] = "Failed please check empty field";
            $_SESSION['status_title'] = "Error";
            $_SESSION['status_code'] = "error";
            header("location: ../?addPost");  
    
    }

    
    
}





?>