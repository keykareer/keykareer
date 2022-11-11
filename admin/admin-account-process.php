<?php
session_start();
include('../server/connection.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';




if (isset($_POST['change'])){
    $currentPassword = md5($_POST['currentPassword']);
    $newPassword = md5($_POST['newPassword']);
    $confirmPassword = md5($_POST['confirmPassword']);
    $admin_id = $_POST['admin_id'];

    $result = $conn->query("SELECT * FROM admins WHERE admin_id=$admin_id") or die("Couldn't connect to database");

    if ($result){
        $row = $result->fetch_array();
        $admin_password = $row['admin_password'];
        $admin_email = $row['admin_email']; //for send of email
        if ($admin_password==$currentPassword) {
            if ($currentPassword==$newPassword){
                header("location: admin-account.php?error=Current password should be different with your new password;");
            }
            else{
            if ($newPassword==$confirmPassword)  {      

            header("location: admin-account-verification.php");
             $otp = rand(100000,999999);
             $_SESSION['session_otp'] = $otp;  // stores the otp into a session variable
             $timestamp =  $_SERVER["REQUEST_TIME"];  // generate the timestamp when otp is forwarded to user email/mobile.
             $_SESSION['time'] = $timestamp;          // save the timestamp in session varibale for further use.
            $_SESSION['admin_verification']=true;

             $_SESSION['newPassword'] = $newPassword;
             $_SESSION['admin_id'] = $admin_id;
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

        } //if new and confirm
        else{
            
            header("location: admin-account.php");
        }
    }//end of else of current and new
    } //if admin and current
    else //else of admin and current
    {
        
        header("location: admin-account.php?error=Current password entered does not match Admin password Please try again;");
    } 
   
    } //if result

} //first if
