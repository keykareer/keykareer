<?php
session_start();
include('server/connection.php');
if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $stmt = $conn->prepare("SELECT user_id, user_name, user_email, user_grade,user_password FROM users WHERE user_email=? and user_password=? LIMIT 1");
  
    $stmt->bind_param('ss', $email, $password);
  
    if ($stmt->execute()) {
      $stmt->bind_result($user_id, $user_name, $user_email,$user_grade, $user_password);
      $stmt->store_result();
  
      if ($stmt->num_rows() == 1) {
        $stmt->fetch();
  
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $user_name;
        $_SESSION['user_grade'] =  $user_grade;
        $_SESSION['user_email'] =  $user_email;
        $_SESSION['user_logged_in'] = true;
  
        header('location: index.php');
       // header('location: student-account.php?message=logged in successfully');
       
      } else {
        $_SESSION['message'] = "Email or Password incorrect";
          $_SESSION['msg_type'] = "danger";
        header('location: student-login.php');
      }
    } else {
      //error
      header('location: student-login.php?error=something went wrong');
    }
  
}
?>