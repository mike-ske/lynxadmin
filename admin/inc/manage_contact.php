<?php 

require 'dbconn.php';
// get form input form contacts fields

$name = (isset($_POST['fullname'])) ? $_POST['fullname'] : 'no form data';
$email = (isset($_POST['email'])) ? $_POST['email'] : 'no form data';
$message = (isset($_POST['message'])) ? $_POST['message'] : 'no form data';

echo $name;
echo $email;
echo $message;
// if (isset($_POST))
// {
//     $name = mysqli_real_escape_string($conn, $_POST['fullname']);
//     $email = mysqli_real_escape_string($conn, $_POST['email']);
//     $message = mysqli_real_escape_string($conn, $_POST['message']);
   

//     if (!empty($name) && !empty($email) && !empty($message) )
//     {
//         // Insert data into DATABASE
//         $sql = "INSERT INTO bookings(full_name, email, message) VALUES ('$name', '$email', '$message',)";
//         $query = mysqli_query($conn, $sql);
//         if ($query) 
//         {
//             echo "Success! Thank you for contacting lynxlaboratories";
//         }
//         else 
//         {
//             echo "Error! Something went wrong";    
//         }

//     }
    
// }




?>