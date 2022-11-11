<?php include('../server/connection.php');?>
<?php session_start(); ?>

<?php

if (!isset($_SESSION['admin_forgot_verified'])) {
    header('location: admin-forgot-password.php');
  }
?>
<?php
$admin_email = $_SESSION['admin_email'];
?>

<?php
if (isset($_POST['cancel'])){ //CANCEL BUTTON IF PRESSED
 
  unset($_SESSION['admin_forgot_verified']); //if unset, user cannot go to the verification page
  function function_alert($message) {
      // Display the alert box 
      echo "<script>alert('$message');  window.location='./admin-login.php';</script>";
  }
  // Function call
  
  function_alert("Reset Password request cancelled. Returning to Admin Login Page...");
}
if (isset($_POST['submit'])){
  $newPassword = md5($_POST['newPassword']);
  $confirmPassword = md5($_POST['confirmPassword']);
  if ($newPassword==$confirmPassword)  {    
    $conn->query("UPDATE admins SET admin_password='$newPassword' WHERE admin_email='$admin_email'") or die("Couldn't connect to database");
    unset($_SESSION['admin_email']);
     // Display the alert box 
     function function_alert($message) {
      echo "<script>alert('$message');  window.location='./admin-login.php';</script>";
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
    <title>KeyKareer | Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style-forgot.css">
</head>
<body><div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="admin-forgot-password-verified.php" method="POST">
                    <h2 class="text-center" >Reset Password</h2>
                    <p class="text-center"><b>Email </b><?php echo $admin_email;?></p>
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
                    <input type="password"  name="newPassword" id="newPasswordJS" class="form-control" placeholder="New Password..." pattern="^(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" title="Minimum of 8 characters. Should have at least one special character and one number and one UpperCase Letter." >
                    </div>
                    <div class="form-group">
                    Confirm Password
                    <input type="password"  name="confirmPassword" id="confirmPasswordJS"class="form-control" placeholder="Confirm Password..." pattern="^(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" title="Minimum of 8 characters. Should have at least one special character and one number and one UpperCase Letter." > 
                  </div>
                    <div class="form-group">
                    <input class="form-control button" type="submit" name="submit" value="Submit">
             </div>
                    <div class="form-group">
                    <a href="#" class="btn btn-info"  onclick="ClearFields();" style="width:150px;background-color:red;"> Clear </a>&nbsp;
                    <button type="submit" class="btn btn-info" name="cancel"style="width:150px;"> Cancel </button>
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