<?php
session_start();
include('server/connection.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gradeLevel = $_POST['gradeLevel'];
    $password = md5($_POST['password']);
    $confirmPassword = md5($_POST['confirm-password']);
    if ($gradeLevel == "Others"){
      $_SESSION['message'] = "Sorry! Grade 12 students only.";
      $_SESSION['msg_type'] = "danger";
      header('location: student-register.php');
    }
    else{
    //if password dont match
    if ($password !== $confirmPassword) {
        $_SESSION['message'] = "Passwords don't match.";
        $_SESSION['msg_type'] = "danger";
        header('location: student-register.php');

    }
   
  
    //if there is no error
    else {
      //check whether there is a user with this email
      $stmt1 = $conn->prepare("SELECT count(*) from users where user_email=?");
      $stmt1->bind_param('s', $email);
  
      $stmt1->execute();
      $stmt1->bind_result($num_rows);
      $stmt1->store_result();
      $stmt1->fetch();
  
      //if there is a user already registered with this email
      if ($num_rows != 0) {
        $_SESSION['message'] = "User with this email already exists.";
        $_SESSION['msg_type'] = "danger";
        header('location: student-register.php');
        
  
      }
      //if no user registered with this email
      else { //start of else 
       
        header('location:student-register-verification.php'); //redirect to otp verification page

        //email sending
         $otp = rand(100000,999999);
          $_SESSION['session_otp'] = $otp;  // stores the otp into a session variable
          $timestamp =  $_SERVER["REQUEST_TIME"];  // generate the timestamp when otp is forwarded to user email/mobile.
          $_SESSION['time'] = $timestamp;          // save the timestamp in session varibale for further use.
         $_SESSION['user_register_verification']=true;

          
          
          $_SESSION['user_email'] = $email; //for resend use
          $_SESSION['user_name'] = $name;
          $_SESSION['user_grade'] = $gradeLevel;
          $_SESSION['user_password'] = $password;
          //Load composer's autoloader

          $mail = new PHPMailer(true);                            
 
     //Server settings
     $mail->isSMTP();                                     
     $mail->Host = 'smtp.gmail.com';                      
     $mail->SMTPAuth = true;                             
     $mail->Username = 'keykareer@gmail.com';     
     $mail->Password = 'uyunzjqpecuzlsvy';             
     $mail->SMTPOptions = array(
         'ssl' => array(
         'verify_peer' => false,
         'verify_peer_name' => false,
         'allow_self_signed' => true
         )
     );                         
     $mail->SMTPSecure = 'ssl';                           
     $mail->Port = 465;                                   

     //Send Email
     $mail->From='keykareer@gmail.com';
     $mail->FromName='KeyKareer Admin';
     
     //Recipients
     $mail->addAddress($email);              
    
     
     //Content
     $mail->isHTML(true);       
     $mail->Subject = "Register Account";                           
    // $mail->Subject = $subject;
    $mail->Body = "<h4>[THIS IS AN AUTOMATED MESSAGE - PLEASE DO NOT REPLY DIRECTLY TO THIS EMAIL]</h4> 
    
    <h1>KEYKAREER</h1>
    <h3>
    Hello ".$email.", 
    <br>
    We received a request to register for a KeyKareer account. <br>If you made this request, please enter the OTP code. <br> Your OTP is ".$otp. "</h3>
 
    <i> Do not share your OTP code to anyone.
    <br> <br>
   If this request was not initiated by you, you can safely ignore this email.</i>";
     $mail->send();
        
      }// end of else
    }
    //if user has already registered take to acc page
  }
}
?>