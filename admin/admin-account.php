
<?php include('admin-header.php'); ?>

<?php
if (!isset($_SESSION['admin_logged_in'])) {
  header('location: admin-login.php');
}
?>

<head>
    <title>KeyKareer | Admin Account</title>
  </head>

  <body>

  <div class="container-fluid">
  <div class="row" style="min-height: 1000px">
 
    
    <?php include('admin-navigation.php'); ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Admin Account</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">  
          </div>
        </div>
      </div>

      <div class="container" >
 
 <?php 
 $conn= new mysqli("localhost","keykareer","","keykareer")
 or die("Couldn't connect to database");
 $result = $conn->query("SELECT * FROM admins") or die("Couldn't connect to database"); 
  
 ?>
 <!--1st ROW HEADING-->
  <div class="row justify-content-left" style="overflow-x:auto;">
 
  <table class="table" style="width:70%; table-layout:fixed;">
  <form action="admin-account-process.php" method="POST">
  
  <tr>
 <th>Name</th>
 <th style="width:50%; word-wrap:break-word;">Email</th>
</tr>

<!--2nd ROW FETCH ALL RECORDS--> 
<?php while ($row = $result->fetch_assoc()):?>
<tr>
<td style="overflow: hidden; width: 30%; text-align: left; vertical-align: top; border-style:none;">
<?php echo $row['admin_name'];?> </td>
<td style="overflow: hidden; width: 100px; text-align: left; vertical-align: top; border-style:none;">
<?php echo $row['admin_email'];?> </td>
</tr>

<tr><th colspan="2" >Update Password</th></tr>
<tr>
  <td style="border-style:none;">Current Password</td>
  <td style="border-style:none;"><input type="password" name="currentPassword" id="currentPasswordJS"class="form-control" placeholder="Current Password..."  onkeyup="check()"required/></td>
</tr>

<tr>
  <td style="border-style:none;">New Password</td>
  <td style="border-style:none;"><input type="password"  required name="newPassword" id="newPasswordJS" class="form-control" placeholder="New Password..." onkeyup="check()"  pattern="^(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" title="Minimum of 8 characters. Should have at least one special character and one number and one UpperCase Letter."> </td>
</tr>
<tr>
  <td style="border-style:none;">Confirm Password</td>
  <td style="border-style:none; width:20px"><input type="password"  required name="confirmPassword" id="confirmPasswordJS"class="form-control" placeholder="Confirm Password..." onkeyup="check()"  pattern="^(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$" title="Minimum of 8 characters. Should have at least one special character and one number and one UpperCase Letter."> <br><span id='passwordAlert'></span></td>
</tr>

<!--<tr>
  <td colspan="2"style="overflow: hidden;  text-align: right; vertical-align: top; ">
 <a href="admin-account.php?edit= <?php //echo $row['id']; ?>"
 class="btn btn-info"> Change Password </a>
 <a href="admin-account-process.php?delete= <?php //echo $row['id']; ?>"
 class="btn btn-danger"> Delete </a></td></tr>
-->
<tr>
<input type="hidden" name="admin_id" value="<?php echo $row['admin_id']?>">

<td colspan="2"style="overflow: hidden;  text-align: right; vertical-align: top; border-style:none;">
<button type="submit" href="admin-account-process.php" class="btn btn-info" name="change"> Change Password </button>
<a href="#" class="btn btn-info"  onclick="ClearFields();"> Reset </a>
</tr>
<?php endwhile; ?>


</form>
   </table>
</div>

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
    </body>
</html>