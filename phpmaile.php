<?php


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require 'libraries/PHPMailer.php';
require 'libraries/SMTP.php';
require 'libraries/Exception.php';



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();



  //Server settings
                
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'younessradid99@gmail.com';                     //SMTP username
  $mail->Password   = '0697021246';                               //SMTP password
  $mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
  $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  $mail->Subject="testing";
  
  $mail->setFrom('younessradid99@gmail.com');
  $mail->isHTML(true);

  $mail->Body="<h1> Creatix Center</h1> <br><br><h2>Verification Code : ". $codeVerification ."</h2></div>" ;



  $mail->addAddress($emaildirection);
  $mail->Send();
 $mail->smtpClose();
