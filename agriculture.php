<?php echo "<title>KeyKareer | Agriculture</title>";
include('student-header.php');?>
<?php
if (!isset($_SESSION['user_logged_in'])) {
  header('location: student-login.php');
}
$user_id=$_SESSION['user_id'];
?>
 <!-- Page Preloder -->
 <div id="preloder">
        <div class="loader"></div>
    </div>

  <!-- Normal Breadcrumb Begin -->
<br><br><br>

<div class="container">

        <div class="row">

                <div class="col-12 text-center">
                 
                <p style="font-size:40px;"> Schools that offer <b>Agriculture </b>related programs 
                
                <br> <br><h4 align="center">Currently no school offers Agriculture in the City of Manila</h4></p>

                       
                             
                     
                    </div>
                </div>
</div>
</div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>







<?php include('student-footer.php'); ?>