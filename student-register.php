
<?php
include('student-header.php');
include('server/connection.php');

if (isset($_SESSION['user_logged_in'])) {
    header('location: index.php');
 //header('location: account.php');

}
if (isset($_SESSION['admin_logged_in'])) {
    header('location: admin/admin-account.php');
  }

?>


<head>
<style>
  .w-450 {
    width: 450px;
}
</style>

</head>


<?php echo "<title>KeyKareer | Registration</title>";?>


  <!--Register-->
  <section class="my-5 py-5">
   
    <div class = "d-flex justify-content-center align-items-center vh-50">

<form class = "shadow w-450 p-3" action="student-register-process.php" method="POST">
        <h3 class = "display-5 text-center fs-2"><b>KEYKAREER REGISTRATION</b></h3><br>
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
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name..." required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email..." required>
    </div>
    <div class="mb-3">
        <label class="form-label">Grade Level</label> <br>
        <select name="gradeLevel" id="gradeLevel" required >
        <option></option>
         <option value="Grade 12">Grade 12</option>
         <option value="Others">Others</option> 
</select>
    </div>
    <div class="mb-3">  <br><br>
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter your password..." required>
    </div>
    <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="confirm-password" placeholder="Enter confirm password..." required>
    </div>
    <button style="color:white; width:135px; margin-left: 140px" type="submit" class="btn btn-primary" name="register">Register</button><br> <br>
    <div class="form-group" style="text-align:center;">
    <a id="login-url" class="btn" href="student-login.php">Do you have account? <b>LOGIN</b> </a>
             </div>
</form>
</div>
    
    
  </section>


  <?php include('student-footer.php');?>
  