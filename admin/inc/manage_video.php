<?php require 'function.php' ?>
<?php require 'dbconn.php' ?>


<?php
// session_start();

if (isset($_POST['send']))
{
    $video_url = mysqli_real_escape_string($conn, $_POST['video_url']);
  
    if (!empty($video_url) && !filter_var($video_url, FILTER_VALIDATE_URL))
    {
        $_SESSION['status'] = "Failed! Invalid URL";
        $_SESSION['status_title'] = "Error";
        $_SESSION['status_code'] = "error";
        header("location: ../?addPost");   
    }
    elseif (!empty($video_url) && filter_var($video_url, FILTER_VALIDATE_URL))
    {
            // Insert data into DATABASE
            $sql = "INSERT INTO video(`video_url`) VALUES ('$video_url')";
            $query = mysqli_query($conn, $sql) or die("Failed to insert to database!" . mysqli_error($conn));
            
            if ($query) 
            {
                $_SESSION['status'] = "Success! Video Added";
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