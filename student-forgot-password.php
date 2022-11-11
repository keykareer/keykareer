<?php include('student-header.php');
include('server/connection.php');
?>

<head>
  
    <title>KeyKareer | Student Forgot Password</title>
   
</head>
<body>
   
<section class="my-5 py-5">
    <div class = "d-flex justify-content-center align-items-center vh-90">

<form class = "shadow w-450 p-3" style="border-radius: 10px" action="student-forgot-password-process.php" method="POST">
        <h3 class = "display-5 text-center fs-2"><b>FORGOT PASSWORD</b></h3><br>
        <h5 class="text-center">Having trouble signing in?</h5> <h6 class="text-center"><b>Student</b></h6><br>
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
    

          <div class="form-group">
          <button type="submit" name="submit_btn" class="btn btn-primary" style="color:white; width:135px; margin-left:90px"> Submit </button>
        </div>

</form>
</div>
  </section>
    
</body>
<br><br><br><br><br><br><br>
</html>  <?php include('student-footer.php');?>