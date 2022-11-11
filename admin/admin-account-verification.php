

<?php include('../server/connection.php');?>
<?php session_start(); ?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';


//cannot open if not logged in and did not change password request
if (!isset($_SESSION['admin_logged_in'])) {
  header('location: admin-login.php');
}
if (!isset($_SESSION['admin_verification'])) {
  header('location: admin-account.php');
}
  
?>

<?php //VERIFY BUTTON IF PRESSED
if (isset($_POST['verify'])){
$otp = $_POST['otp']; //the otp entered by the user
$nowtimestamp =  $_SERVER["REQUEST_TIME"];  // record the current time stamp 
if(($nowtimestamp - $_SESSION['time']) > 300)  // 300 refers to 300 seconds or 5 minutes
{
    $_SESSION['message'] = "OTP expired. Pls. try again.";
    $_SESSION['msg_type'] = "danger";
 
}
else{
    if ($otp == $_SESSION['session_otp']) 
    {
        unset($_SESSION['session_otp']);
        unset($_SESSION['admin_verification']);

        
        $admin_password =  $_SESSION['newPassword'] ;
        $admin_id = $_SESSION['admin_id'];
      
        $conn->query("UPDATE admins SET admin_password='$admin_password' WHERE admin_id=$admin_id") or die("Couldn't connect to database");
      
      
        unset($_SESSION['newPassword']);
        unset($_SESSION['admin_id']);

      // Display the alert box 
        function function_alert($message) {
            echo "<script>alert('$message');  window.location='./admin-account.php';</script>";
        }
        function_alert("OTP verified. Password has been reset."); //message while redirecting
        
    } 
  
    else { //if not expired but wrong otp
        $_SESSION['message'] = "Please Try Again";
        $_SESSION['msg_type'] = "danger";
        
    }

}
}
if (isset($_POST['cancel'])){ //CANCEL BUTTON IF PRESSED
    unset($_SESSION['session_otp']);
    unset($_SESSION['admin_verification']); //if unset, user cannot go to the verification page
    function function_alert($message) {
        // Display the alert box 
        echo "<script>alert('$message');  window.location='./admin-account.php';</script>";
    }
    // Function call
    
    function_alert("Reset Password request cancelled. Returning to Account Page...");
}
?>
<?php //RESEND BUTTON IF PRESSED

if(isset($_POST['resend'])){

  unset($_SESSION['session_otp']);
  unset($_SESSION['time']);

  $otp = rand(100000,999999);
  $_SESSION['session_otp'] = $otp;  // stores the otp into a session variable
  $timestamp =  $_SERVER["REQUEST_TIME"];  // generate the timestamp when otp is forwarded to user email/mobile.
  $_SESSION['time'] = $timestamp;          // save the timestamp in session variable for further use.

  $admin_email = $_SESSION['admin_email']; //the session admin email will be a variable

  $_SESSION['message'] = "OTP code sent to email.<br>Check your Spam Messages too.";
  $_SESSION['msg_type'] = "info";
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
        
  }
  

?>


<!doctype html>
<html lang="en">

  <head>
  
    <!-- Required meta tags -->
   <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" type="text/css" href="../css/otp-verification-style.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <!--<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 5.5rem;
        }
      }
    </style>-->

    
    <!-- Custom styles for this template -->
  </head>
  <body>
    <!---
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-1 me-0 px-3" href="#" style="text-align:center;">KeyKareer</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation" >
 <span class="navbar-toggler-icon"></span>
  </button>
  </header>
  -->




  <div class="d-flex justify-content-center align-items-center container">
        <div class="card py-6 px-3">
        <form action="admin-account-verification.php" method="POST" >
        <h3 class="m-0" style="text-align: center">Verify OTP</h3><br><span class="mobile-text">Enter the code below: </span>
        <?php
             if (isset($_SESSION['message'])): ?>
                <div class="alert alert-<?=$_SESSION['msg_type']?>">
            
                <?php
               echo $_SESSION['message'];
     
               unset ($_SESSION['message']);
                     ?>
                     </div>
                     <?php endif ?>
            <div class="d-flex flex-row mt-5">
              <input type="text" name = "otp" id = "otp " style="margin-left: 10px; margin-top: -45px" class="form-control" autofocus="">
        </div>

              <hr class="mt-4">
              <button type="submit" class='btn btn-primary btn-block mt-2 mb-2 customBtn' id="verify_btn" name ="verify">Verify</button>  
              <button type="submit" class='btn btn-primary btn mt-2 mb-2 customBtn' id="cancel_btn" name ="cancel">Cancel</button>
              <div class="text-center mt-5"><span class="d-block mobile-text"><br><br><br><br>Don't receive the code?</div>
              <button type="submit" class='btn btn-primary btn mt-2 mb-2 customBtn' id="resend_btn" name ="resend">Resend<div class="countdown" style="float:right;"> </div></button> 
    </form>
        </div>
    </div>


            <br>
            <?php
             if (isset($_SESSION['message'])): ?>
                <div class="alert alert-<?=$_SESSION['msg_type']?>">
            
                <?php
               echo $_SESSION['message'];
     
               unset ($_SESSION['message']);
            
                     ?>
                </div>
                <?php endif ?>
  
  
           
            </form>
          </div>
        
        </div>
      </div>
  </div>
</div>
<?php
if(isset($_POST['resend'])){

echo"<script>
  // Disable the button on initial page load
  var resend = document.getElementById('resend_btn');
   resend.disabled = true;
 
   const countdown = document.querySelector('.countdown');// the text of seconds
   var timeLeft = 300; //time
 
   var resendTimer = setInterval(function timeCount(){
     timeLeft -=1;
     countdown.innerHTML= timeLeft +' s';
 
     if (timeLeft <=0) {
       clearInterval(resendTimer);
       resend.disabled = false;
       countdown.innerHTML= '';
     };
   },1000);
 </script>";
}
?>
</body>


</html>
