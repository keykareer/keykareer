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
    <title>KeyKareer || Assessment Orientation </title>
   
  </head>

  <body>
    <!-- Normal Breadcrumb Begin -->
   <center> <section class="normal-breadcrumb set-bg" data-setbg="img/stuu.jpg" style="width:100%;">

</section></center>

<!-- Normal Breadcrumb End -->
  <section class="my-5 py-5">
    <div class = "d-flex justify-content-center align-items-center vh-90">
 <br><br> <br>

  <div class="container" >
  <h1 class="h2" >WELCOME TO KEYKAREER ASSESSMENT</h1>
<table style="margin-right:100px;">
    <tr>
        <td>
<p style="font-size:20px;">
KeyKareer Assessment contains a series of questions that helps you
determine which college program to take based on your answers. <br><br>
Results will show the top three occupational groups and the list of subject area you like.<br><br>
KeyKareer recommends colleges and universities based on the result. Of course, you will make the final decision in the end but the KeyKareer will help narrow down possible choices based on your interest. <br> <br>


It is an intensity-based assessment which are to be answered by:
<br>
1 - Dislike a great deal <br>
2 - Dislike a little <br>
3 - Unsure or undecided <br>
4 - Like a little <br>
5 - Like very much <br><br>

Once you start, please do not exit and make sure to finish the assessment. <br> <br>

Before you proceed to the next page, make sure that you have answered all the questions.<br>
<br>
Please answer the questions truthfully to ensure accuracy of the results.<br>









<br>



</p>
</td>
</tr>
<tr>
    <td><form method="POST" action="student-assessment-welcome-process.php">
        <?php
$result = $conn->query("SELECT * FROM users WHERE user_id=$user_id") or die("Couldn't connect to database");
if ($result){
    $row = $result->fetch_array();
    $examTaken = $row['examTaken'];  
}
 if ($examTaken=="No"){
     echo"<button class=\"btn btn-info\" type=\"submit\" name=\"take\">Take the Assessment</button>";}
else if ($examTaken=="Yes"){
 echo" <p style=\"color:red;font-size:16px;\">NOTE: If you retake the assessment, all of your data on the assessment will be deleted or reset.</p> ";
 echo"<button class=\"btn btn-info\"type=\"submit\" name=\"retake\" >Retake the Assessment</button>";
}

?>
</form>
</td>
</tr>
</table>

<br><br><br><br>
</div>
</section>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php include('student-footer.php');?>