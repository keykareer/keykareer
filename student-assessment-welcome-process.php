<?php session_start(); ?>
<?php include('server/connection.php');?>
<?php
include('server/connection.php');
if (!isset($_SESSION['user_logged_in'])) {
    header('location: student-login.php');
 }
 $user_id=$_SESSION['user_id'];
?>
<?php 
if (isset($_POST['take'])){
  
    $_SESSION['test1-verification']=true;
    header("location:test1.php");
  
}
else if (isset($_POST['retake'])){
  $conn->query("UPDATE users SET scoreA='0',scoreB='0',scoreC='0',scoreD='0',scoreE='0',scoreF='',scoreG='0',scoreH='0',scoreI='',scoreJ='0',scoreK='0',scoreL='0',scoreM='0',scoreN='0',scoreO='0',scoreAS='0',scoreBS='0',scoreCS='0',scoreDS='0',scoreES='0',scoreFS='0',scoreGS='0',scoreHS='0',scoreIS='0',scoreJS='0',scoreKS='0',scoreLS='0',scoreMS='0',scoreNS='0',scoreOS='0',scorePS='0',scoreQS='0',scoreRS='0',scoreSS='0',scoreTS='0',topOne='',topTwo='',topThree='',theSubjectLikes='',examTaken='No' WHERE user_id=$user_id") or die("Couldn't connect to database");

  $_SESSION['test1-verification']=true;
  header("location:test1.php");

  
}


?>