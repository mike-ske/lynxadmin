<?php 

require 'dbconn.php';
session_start();

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// get form input form contacts fields



// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

// Load Composer's autoloader

require '../vendor/autoload.php';




if (isset($_POST['send']))
{
    $name = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $company = mysqli_real_escape_string($conn, $_POST['company']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    $message = strip_tags(htmlspecialchars_decode(htmlentities(trim($message))));

    if (!empty($name) && !empty($email) && !empty($message) && !empty($company) && !empty($phone))
    {

         // Instantiation and passing `true` enables exceptions
         $mail = new PHPMailer();

         //Server settings
        //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
         $mail->isSMTP();                                            // Send using SMTP
         $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
         $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
         $mail->Username   = "thinksoftcreative@gmail.com";                     // SMTP username
         $mail->Password   = "thinksoft2021";                               // SMTP password
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
         $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
 
         //Recipients
         $mail->setFrom('info@lynxlaboratories.com.ng', 'Lynx Support Service');
         $mail->addAddress($email, $phone);     // Add a recipient
         $mail->addAddress($email);               // Name is optional
         $mail->addCC('info@lynxlaboratories.com.ng');
         $mail->addBCC('info@lynxlaboratories.com.ng');
 
         // Content
         $mail->isHTML(true);                                  // Set email format to HTML
         $mail->Subject = 'AGENCY Information';
         $mail->Body    = "
                     <div class='container' style='
                         font-family: 'roboto';
                         margin: auto;
                         display:inline-block;
                         width: 100%;
                         height: 100%;
                         background: #f1f1f1;
                         color:#333;
                         '>
                         <div class='sub_contaner' style='
                             margin: auto;
                             max-width: 100%;
                             height: auto !important;
                             margin: auto;
                             position: absolute;
                             left: 50%;
                             transform: translate(-50%, -50%);
                             top: 50%;
                             border-radius: 10px;
                             height: 600px;
                             background: #f9f6f6;
                         '>
                             <div class='head' style='
                                 margin: 20px;
                                 max-width: 100%;
                                 height: auto;
                                 line-height: 15px;
                                 font-size: 14px;
                             '>
 
                             <b><strong>Reply to $name </strong></b> <br><br>
                             <p style='line-height: 20px;'> Dear <b>$name</b> We have recieved your request and we are Happy to respond to your request shortly.<br><br></p>
                             
                             <p>
                             </div>
                             <div class='body' style='
                                 margin: 20px;
                                 max-width: 100%;
                                 height: auto;
                             '>
                             <h3 style='font-size:14px;font-weight:600'>From - $company</h3>
                             <h6 style='font-size:13px'>$phone</h6>
                             <h6 style='font-size:13px'>$email</h6>
                             <p style='font-size:12px'>
                                     $message
                             </p>
                             </div>
                             <div class='foot' style='
                                 border-top: 1px solid #ccc;
                                 margin: 20px;
                                 max-width: 100%;
                                 height: auto;
                                 background: #eee;
                             '>
 
                                     <div class='sec_ft'>
 
                                         <div class='ft_logo'>
                                             <a href='./'>
                                                 <img src='img/logo.png' >
                                             </a>
                                         </div>
 
                                         <div style='
                                             text-align: center;
                                             font-size: 9px;
                                             line-height: 15px;
                                         '>
                                             <h3 class='in_text'>
                                                 9b , James Oluleye Street, off Adeniyi Jones Avenue, 
                                                 Harmony Enclave Estate, Koko bus stop, Ikeja, Lagos
                                             </h3>
 
                                             <ul class='ft__01' style='list-style: none;'>
                                                 <li class='ft__list'>
                                                     <i class='icofont-phone-circle'></i>+2349010001990, +2349010001992
                                                 </li> 
                                                 <li class='ft__list'>
                                                     <i class='icofont-send-mail'></i>info@lynxlaboratories.com.ng
                                                 </li> 
                                             
                                                 <li class='ft__list'>
                                                     <div class='ftIcons'>
                                                         <a href='#' class='ic_1'><i class='bx bxl-facebook-circle' ></i></a>
                                                         <a href='#' class='ic_1'><i class='bx bxl-twitter' ></i></a>
                                                         <a href='#' class='ic_1'><i class='bx bxl-instagram' ></i></a>
                                                         <p class='ic_txt'>lynxdna</p>
                                                     </div>
                                                 </li> 
                                             </ul>
                                             <p>
                                                 lynxlaboratories accepts no liability for the content of this email or for the consequences of 
                                                 any actions taken on the basis of the information provided, unless that information is subsequently confirmed
                                                 in writing. If you are not the intended recipient you are notified that disclosing, copying, distributing
                                                 or taking any action in reliance on the contents of this information is strictly prohibited.
                                             </p>
                                             <small>© Copyright © Lynx Laboratories <?php echo date('Y')?>. All rights reserved. <a href='http//www.lynxsite.herokuapp.com' class='cct'>Collection Centre</a></small>
                                         </div>
                                     </div>
 
                             </div>
                         </div>
                     </div>
                     
                     <br><br><hr><br><br><strong>Thank you for Trusting in us.</strong>
                     ";
         $mail->send();
 
         if ($mail->send()) 
         {
             
               // Insert data into DATABASE
               $sql = "INSERT INTO agency(name, email, company, phone, message) VALUES ('$name', '$email',  '$company', '$phone', '$message')";
               $query = mysqli_query($conn, $sql) or die("Failed to insert to database!" . mysqli_error($conn));
               $book_id = mysqli_insert_id($conn);
               
               // Insert data into NOTIFICATIONS
       
               $sql = "INSERT INTO notifications(types, entity_id, viewed) VALUES ('booking', '$book_id',  1)";
               mysqli_query($conn, $sql) or die("Failed to insert to database!" . mysqli_error($conn));
               
               if ($query) 
               {
                   $_SESSION['status'] = "Thank you for Joining. You'll get feedback from our customer service";
                   $_SESSION['status_title'] = "Success";
                   $_SESSION['status_code'] = "success";
                   header("location: ../bookings.php");    
               }
               else 
               {
                   $_SESSION['status'] = "Failed! Something went wrong";
                   $_SESSION['status_title'] = "Error";
                   $_SESSION['status_code'] = "error";
                   header("location: ../bookings.php");       
               }
        }

    }
    else 
    {
            $_SESSION['status'] = "Failed please check empty field";
            $_SESSION['status_title'] = "Error";
            $_SESSION['status_code'] = "error";
            header("location: ../bookings.php");  
    
    }

    
    
}




?>