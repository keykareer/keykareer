<?php include('student-header.php'); 
?>
<?php
include('server/connection.php');
if (!isset($_SESSION['user_logged_in'])) {
    header('location: student-login.php');
 }
 $user_id=$_SESSION['user_id'];
?>

<head>
    <title>KeyKareer | Student Account Profile</title>
   
  </head>
  <body>
  <section class="my-5 py-5">
    <div class = "d-flex justify-content-center align-items-center vh-90">
 <br><br> <br>

  <div class="container" >
  <h1 class="h2" style="text-align:center">Student Account Profile</h1><br>
 <?php 
 $conn= new mysqli("localhost","keykareer","","keykareer")
 or die("Couldn't connect to database");
 $result = $conn->query("SELECT * FROM users where user_id=$user_id  LIMIT 1") or die("Couldn't connect to database"); 
  //pre_r($result);
// pre_r($result->fetch_assoc());
 //pre_r($result->fetch_assoc());
 ?>
 <!--1st ROW HEADING-->
  <div class="row justify-content-center" >
 
  <table class="table" style="width:70%; table-layout:fixed;">
  <form action="student-account-process.php" method="POST">
  
  <tr>
 <th style=" word-wrap:break-word;">Name</th>
 <th style=" word-wrap:break-word;">Email</th>
 <th style=" word-wrap:break-word;">Grade Level</th>

</tr>

<!--2nd ROW FETCH ALL RECORDS--> 
<?php while ($row = $result->fetch_assoc()):?>
<tr>
<td style="overflow: hidden; width: 30%; text-align: left; vertical-align: top; border-style:none; word-wrap:break-word;">
<?php echo $row['user_name'];?> </td>
<td style="overflow: hidden; width: 100px; text-align: left; vertical-align: top; border-style:none; word-wrap:break-word;">
<?php echo $row['user_email'];?> </td>
<td style="overflow: hidden; width: 100px; text-align: left; vertical-align: top; border-style:none;word-wrap:break-word;">
<?php echo $row['user_grade'];?> </td>
</tr>

<tr><th colspan="3" >Update Password</th></tr>
<tr>
  <td style="border-style:none; ">Current Password</td>
  <td style="border-style:none;" colspan="2"><input type="password" name="currentPassword" id="currentPasswordJS"class="form-control" placeholder="Current Password..."  onkeyup="check()"required/></td>
</tr>

<tr>
  <td style="border-style:none;">New Password</td>
  <td style="border-style:none;" colspan="2"><input type="password"  required name="newPassword" id="newPasswordJS" class="form-control" placeholder="New Password..." onkeyup="check()" pattern="^(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" title="Minimum of 8 characters. Should have at least one special character and one number and one UpperCase Letter."> </td>
</tr>
<tr>
  <td style="border-style:none;">Confirm Password</td>
  <td style="border-style:none; width:20px"colspan="2"><input type="password"  required name="confirmPassword" id="confirmPasswordJS"class="form-control" placeholder="Confirm Password..." onkeyup="check()"pattern="^(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" title="Minimum of 8 characters. Should have at least one special character and one number and one UpperCase Letter."> <br><span id='passwordAlert'></span></td>
</tr>


<tr>
<input type="hidden" name="user_id" value="<?php echo $row['user_id']?>">

<td colspan="3"style="overflow: hidden;  text-align: center; vertical-align: top; border-style:none;">
<button type="submit" href="student-account-process.php" class="btn btn-info" name="change"> Change Password </button>
<a href="#" class="btn btn-info"  onclick="ClearFields();"> Reset </a>
</tr>
<?php endwhile; ?>


</form>
   </table>
</div>
</div>
</section>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
  function ClearFields() {

document.getElementById("currentPasswordJS").value = "";
document.getElementById("newPasswordJS").value = "";
document.getElementById("confirmPasswordJS").value = "";
document.getElementById('passwordAlert').innerHTML = "";
}

function check() {
 if (document.getElementById('currentPasswordJS').value == "" &&
    document.getElementById('newPasswordJS').value == "" &&
    document.getElementById('confirmPasswordJS').value == "") {
      document.getElementById('passwordAlert').innerHTML = 'Fill out the blanks';
    }
    
   else if (document.getElementById('currentPasswordJS').value ==
    (document.getElementById('newPasswordJS').value || document.getElementById('confirmPasswordJS').value)){
    document.getElementById('passwordAlert').innerHTML = 'Current Password should not be the same as your New Password';
    }
    else if (document.getElementById('currentPasswordJS').value == ""&&
    document.getElementById('confirmPasswordJS').value == ""){
      document.getElementById('passwordAlert').innerHTML = 'Fill out current and confirm password';
    }
    else if (document.getElementById('currentPasswordJS').value == ""&&
    document.getElementById('newPasswordJS').value == ""){
      document.getElementById('passwordAlert').innerHTML = 'Fill out current and new password';
    }
    else if (document.getElementById('currentPasswordJS').value == ""){
      document.getElementById('passwordAlert').innerHTML = 'Fill out current password';
    }
    else if (document.getElementById('newPasswordJS').value == ""&&
    document.getElementById('confirmPasswordJS').value == ""){
      document.getElementById('passwordAlert').innerHTML = 'Fill out new and confirm password';
    }
    else if (document.getElementById('newPasswordJS').value == ""){
      document.getElementById('passwordAlert').innerHTML = 'Fill out new password';
    }
    else if (document.getElementById('confirmPasswordJS').value == ""){
      document.getElementById('passwordAlert').innerHTML = 'Fill out confirm password';
    }
  else {
    
     if (document.getElementById('newPasswordJS').value ==
    document.getElementById('confirmPasswordJS').value) {
    document.getElementById('passwordAlert').style.color = 'green';
    document.getElementById('passwordAlert').innerHTML = 'New Password and Confirm Password <b>Matched</b>';
  } else {
    document.getElementById('passwordAlert').style.color = 'red';
    document.getElementById('passwordAlert').innerHTML = 'New Password and Confirm Password <br> <b>Does Not Match </b>';
    
  }
}
}

</script>
<?php include('student-footer.php');?>
 