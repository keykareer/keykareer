<?php
session_start();

  if (isset($_SESSION['user_logged_in'])) {
    unset($_SESSION['user_logged_in']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_name']);
    unset($_SESSION['user_id']);
    unset($_SESSION['user_grade']);
    header('location: student-login.php');
    exit;
  }
  


?>