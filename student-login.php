<?php
include('student-header.php');

include('server/connection.php');

?>
<?php

if (isset($_SESSION['user_logged_in'])) {
   header('location: index.php');
 // header('location: student-account.php');

}
if (isset($_SESSION['admin_logged_in'])) {
  header('location: admin/admin-account.php');
}
?>

<?php echo "<title>KeyKareer | User Login</title>";?>
<head>
  <style>
    .w-450 {
    width: 350px;
}
  </style>
</head>


  <!--Login-->
 
<section class="my-5 py-5">
    <div class = "d-flex justify-content-center align-items-center vh-90">

<form class = "shadow w-450 p-3" style="border-radius:10px; width:350px" action="student-login-process.php" method="POST">
        <h3 class = "display-5 text-center fs-2"><b>STUDENT LOGIN</b></h3><br>
        <?php
             if (isset($_SESSION['message'])): ?>
                <div class="alert alert-<?=$_SESSION['msg_type']?>">
                <?php
               echo $_SESSION['message'];
               unset ($_SESSION['message']);
                     ?>
                </div>
                <?php endif ?>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email..." required>
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter your password..." required>
    </div>
    <div class="form-group" style="text-align:center;">
          <a class="btn" href="student-forgot-password.php"><b>FORGOT PASSWORD</b></a> </div>
          <div class="form-group">
          <button type="submit" name="login_btn" class="btn btn-primary" style="color:white; width:135px; margin-left: 90px"> Log In </button>
        </div>
    <div class="form-group" style="text-align:center;">
          <a class="btn" href="student-register.php">Don't have account? <b>REGISTER</b></a>
      <br>
          <a class="btn" href="/admin/admin-login.php">Are you an admin? <b>ADMIN LOGIN</b></a>
        </div>
</form>
</div>
  </section>


<br> 
  <?php include('student-footer.php');?>