<?php 

include('admin-header2.php');

?>

<?php



if (isset($_SESSION['admin_logged_in'])) {
  header('location: admin-account.php');
  
}
if (isset($_SESSION['user_logged_in'])) {
  header('location: ../student-account.php');
  
}

?>

  <head>
    <title>KeyKareer | Admin Login</title>
    <style>
      .w-450 {
    width: 370px;
}
    </style>
  </head>


  <body>

<section class="my-5 py-5">
    <div class = "d-flex justify-content-center align-items-center vh-90">

<form class = "shadow w-450 p-3" style="border-radius: 10px; width:350px" action="admin-login-process.php" method="POST">
        <h3 class = "display-5 text-center fs-2"><b>ADMIN LOGIN</b></h3><br>
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
    <a class="btn" href="admin-forgot-password.php"><b>FORGOT PASSWORD</b></a> </div>
          <div class="form-group">
          <button type="submit" name="login_btn" class="btn btn-primary" style="color:white; width:135px; margin-left:90px"> Log In </button>
        </div>
    <div class="form-group" style="text-align:center;">
    <a class="btn" href="../index.php">Go back to homepage? <b>HOME </b></a>
      <br>
      <a class="btn" href="../student-login.php">Are you a student? <b>STUDENT LOGIN</b></a>
        </div>
</form>
</div>
  </section>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <?php include('admin-footer2.php');?>

