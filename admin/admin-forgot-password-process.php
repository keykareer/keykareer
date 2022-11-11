<?php
session_start();
include('../server/connection.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

?>

<?php

if(isset($_POST['submit_btn'])){
    $email = $_POST['email'];

    $result = $conn->query("SELECT * FROM admins ") or die("Couldn't connect to database"); //select all for checking
    if ($result){
        $row = $result->fetch_array();
        $admin_email = $row['admin_email'];
        

        if ($admin_email==$email) { //check if email entered is in database
           

            

           //email sending
            $otp = rand(100000,999999);
             $_SESSION['session_otp'] = $otp;  // stores the otp into a session variable
             $timestamp =  $_SERVER["REQUEST_TIME"];  // generate the timestamp when otp is forwarded to user email/mobile.
             $_SESSION['time'] = $timestamp;          // save the timestamp in session varibale for further use.
            $_SESSION['admin_forgot_verification']=true;

             
             
             $_SESSION['admin_email'] = $admin_email; //for resend use
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
        $mail->addAddress($admin_email);              
       
        
        //Content
        $mail->isHTML(true);       
        $mail->Subject = "Reset Password";                           
       // $mail->Subject = $subject;
       $mail->Body = "<h4>[THIS IS AN AUTOMATED MESSAGE - PLEASE DO NOT REPLY DIRECTLY TO THIS EMAIL]</h4> 
       
       <h1>KEYKAREER</h1>
       <h3>
       Hello ".$admin_email.", 
       <br>
       We received a request to reset your password. <br>If you made this request, please enter the OTP code. <br> Your OTP is ".$otp. "</h3>
    
       <i> Do not share your OTP code to anyone.
       <br> <br>
      If this request was not initiated by you, you can safely ignore this email.</i>";
        $mail->send();
        header('location:admin-forgot-password-verification.php'); //redirect to otp verification page
        
    }
        else{
            $_SESSION['message'] = "<center>This email does not exist.</center>";
            $_SESSION['msg_type'] = "danger";
            header('location:admin-forgot-password.php');
        }
    }



  
}
?>