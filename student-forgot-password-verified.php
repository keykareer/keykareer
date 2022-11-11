<?php include('server/connection.php');?>
<?php session_start(); ?>

<?php

if (!isset($_SESSION['user_forgot_verified'])) {
    header('location: student-forgot-password.php');
}
?>
<?php
$user_email = $_SESSION['user_email'];
?>

<?php
if (isset($_POST['cancel'])){ //CANCEL BUTTON IF PRESSED
 
  unset($_SESSION['user_forgot_verified']); //if unset, user cannot go to the verification page
  function function_alert($message) {
      // Display the alert box 
      echo "<script>alert('$message');  window.location='./student-login.php';</script>";
  }
  // Function call
  
  function_alert("Reset Password request cancelled. Returning to Student Login Page...");
}
if (isset($_POST['submit'])){
  $newPassword = md5($_POST['newPassword']);
  $confirmPassword = md5($_POST['confirmPassword']);
  if ($newPassword==$confirmPassword)  {    
    $conn->query("UPDATE users SET user_password='$newPassword' WHERE user_email='$user_email'") or die("Couldn't connect to database");
    unset($_SESSION['user_email']);
     // Display the alert box 
     function function_alert($message) {
      echo "<script>alert('$message');  window.location='./student-login.php';</script>";
    }
    function_alert("Password has been reset."); //message while redirecting
  }
  else{
    $_SESSION['message'] = "New Password and Confirm Password does not match.";
    $_SESSION['msg_type'] = "danger";
  }
}
  

  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>KeyKareer | Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/forgot-verified-style.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
</head>
<body><div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="student-forgot-password-verified.php" method="POST">
                    <h4 class="text-center" style="text-align: center; left; 100px" >Reset Password</h2>
                    <p style="font size: 14px; text-align: center" class = "text-center"><b>Email </b><?php echo $user_email;?></p>
                    <?php
             if (isset($_SESSION['message'])): ?>
                <div class="alert alert-<?=$_SESSION['msg_type']?>">
                <?php
               echo $_SESSION['message'];
               unset ($_SESSION['message']);
                     ?>
                </div>
                <?php endif ?>
  
                    <div class="form-group">
                    New Password
                    <input type="password"  name="newPassword" id="newPasswordJS" class="form-control" placeholder="New Password..." pattern="^(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" title="Minimum of 8 characters. Should have at least one special character and one number and one UpperCase Letter.">
                    </div>
                    <div class="form-group">
                    Confirm Password
                    <input type="password"  name="confirmPassword" id="confirmPasswordJS"class="form-control" placeholder="Confirm Password..." pattern="^(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" title="Minimum of 8 characters. Should have at least one special character and one number and one UpperCase Letter."> 
                  </div>
                    <div class="form-group">
                    <input class="form-control button" type="submit" name="submit" value="Submit">
             </div>
                    <div class="form-group">
                    <a href="#" class="btn btn-info"  onclick="ClearFields();" style="width:48%;background-color:#FF6961;float:left;"> Clear </a>
                    <button type="submit" class="btn btn-info" name="cancel"style="width:48%;float:right;"> Cancel </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

   <script>
  function ClearFields() {


document.getElementById("newPasswordJS").value = "";
document.getElementById("confirmPasswordJS").value = "";
document.getElementById('passwordAlert').innerHTML = "";
}

</script>
</body>

</html>