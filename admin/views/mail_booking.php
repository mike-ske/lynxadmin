
<?php 
require '../inc/dbconn.php';


use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



if (isset($_SESSION['bk_id']))
{
   $id = $_SESSION['bk_id'];
}
else {
    echo "<h6 class='text-center m-5'>No Booking ID found</h6>";
}

// get form input form contacts fields



// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

// Load Composer's autoloader

require '../../vendor/autoload.php';


if (isset($_POST['send']))
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $file = $_FILES['file'];
    $message = strip_tags(htmlspecialchars_decode(htmlentities(trim($message))));


    if (!empty($email) && !empty($subject) && !empty($message) )
    {
        // Insert data into NOTIFICATIONS
        $file_name = $_FILES['file']['name'];
        $file_tmp_name = $_FILES['file']['tmp_name'];


        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer();

        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = "lynxdna1@gmail.com";                     // SMTP username
        $mail->Password   = "#lynx@2017#";                          // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('lynxdna1@gmail.com', 'Lynx Support Service');
        $mail->addAddress($email, $subject);     // Add a recipient
        $mail->addAddress($email);               // Name is optional
        $mail->addCC('info@lynxlaboratories.com.ng');
        $mail->addBCC('info@lynxlaboratories.com.ng');

         // Attachments         // Add attachments
        $mail->addAttachment($file_tmp_name, $file_name);    // Optional name
        
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
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

                            <b><strong>Reply to $email </strong></b> <br><br>
                            <p style='line-height: 20px;'> Dear <b>$email</b> We have recieved your request and we are Happy to respond to your request shortly.<br><br></p>
                            
                            <p>
                            </div>
                            <div class='body' style='
                                margin: 20px;
                                max-width: 100%;
                                height: auto;
                            '>
                            <h3 style='font-size:14px;font-weight:600'>From - $email</h3>
                            <h6 style='font-size:13px'>$subject</h6>
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
                                                        <a href='https://web.facebook.com/LYNXDNA/?_rdc=1&_rdr' class='ic_1'><i class='bx bxl-facebook-circle' ></i></a>
                                                        <a href='https://twitter.com/DnaLynx?s=09' class='ic_1'><i class='bx bxl-twitter' ></i></a>
                                                        <a href='https://instagram.com/lynxdna?utm_medium=copy_link' class='ic_1'><i class='bx bxl-instagram' ></i></a>
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
                    
                    <br><br><hr><br><strong>Thank you for Trusting in us.</strong>
                    ";
        $mail->send();

        if ($mail->send()) {
            echo  "<script>alert('Message has been sent! Check your email for confirmation. Thank you for contacting us')</script>";

            $_SESSION['status'] = "Thank you mail sent";
            $_SESSION['status_title'] = "Success";
            $_SESSION['status_code'] = "success";
            header("location:  ./../?readContact=$id");
            return true;  

        }
        else 
        {
            $_SESSION['status'] = "Failed! Message could not be sent. Something went wrong";
            $_SESSION['status_title'] = "Error";
            $_SESSION['status_code'] = "error";
            
            // echo  "<script>alert('Message could not be sent. Check your internet connection')</script>";
            header("location:  ./../?readContact=$id");  
            return false; 
        }
        // ========== END OF PHP MAILER TO SEND EMAILS =================

    }
    else {
            $_SESSION['status'] = "Failed please check empty field";
            $_SESSION['status_title'] = "Error";
            $_SESSION['status_code'] = "error";
            header("location: ./../?readContact=$id");  
            // header("location: ./../?readAgency=$id");  
            return false; 
    }

    
    
}




?>
