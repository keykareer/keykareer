<?php

session_start();
include('../server/connection.php');
if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $stmt = $conn->prepare("SELECT admin_id, admin_name, admin_email, admin_password FROM admins WHERE admin_email=? and admin_password=? LIMIT 1");
  
    $stmt->bind_param('ss', $email, $password);
  
    if ($stmt->execute()) {
      $stmt->bind_result($admin_id, $admin_name, $admin_email, $admin_password);
      $stmt->store_result();
  
      if ($stmt->num_rows() == 1) {
        $stmt->fetch();
  
        $_SESSION['admin_id'] = $admin_id;
        $_SESSION['admin_name'] = $admin_name;
        $_SESSION['admin_email'] =  $admin_email;
        $_SESSION['admin_logged_in'] = true;
  
        header('location: admin-account.php');
      } else {
        $_SESSION['message'] = "Email or Password incorrect";
          $_SESSION['msg_type'] = "danger";
        header('location: admin-login.php');
      }
    } else {
      //error
      header('location: admin-login.php?error=something went wrong');
    }
  }

?>