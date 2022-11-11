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
    <title>KeyKareer | Student Assessment Results</title>
   
  </head>
  <body>
  <section class="my-5 py-5">
    <div class = "d-flex justify-content-center align-items-center vh-90">
 <br><br> <br>

  <div class="container" >
  <h1 class="h2" style="text-align:center">Student Assessment Results</h1><br>
  <div class="row justify-content-center" >
 
  <table class="table" style="width:70%; table-layout:fixed;">

  <tr>
 <th style=" word-wrap:break-word;">Top Three (3) Occupational Groups</th>
 <th style=" word-wrap:break-word;">Subject Areas (Likes) </th>
</tr>
<tr>
<td>
<?php
     $result = $conn->query("SELECT * FROM users WHERE user_id=$user_id") or die("Couldn't connect to database");
     if ($result){
       $row = $result->fetch_array();
        $topOne = $row['topOne'];
        $topTwo = $row['topTwo'];  
        $topThree = $row['topThree'];    
}
    echo "<b>Top 1: </b><br>". $topOne;
    echo "<br><br>";
    echo "<b>Top 2: </b><br>".$topTwo;
    echo "<br><br>";
    echo "<b>Top 3: </b><br>".$topThree;
    echo "<br>";
    ?>
</td>
<td>
<?php
     $result = $conn->query("SELECT * FROM users WHERE user_id=$user_id") or die("Couldn't connect to database");
     if ($result){
       $row = $result->fetch_array();
    $subjectArea = $row['theSubjectLikes'];  }
    echo $subjectArea;
    ?>
</td>
</tr>
<tr>
  <td> 
    <?php
    $result = $conn->query("SELECT * FROM users WHERE user_id=$user_id") or die("Couldn't connect to database");
    if ($result){
      $row = $result->fetch_array();
   $examTaken = $row['examTaken'];  }
   if ($examTaken=="Yes"):
    ?>
  <p style="text-align:left;font-size:16px;"> Click the button to check the schools that offer programs related to your Top One (1) Occupational Group
</p>
<?php else: ?>
  <p></p>
  <?php endif;?>
<?php
    
    $result = $conn->query("SELECT * FROM users WHERE user_id=$user_id") or die("Couldn't connect to database");
    if ($result){
        $row = $result->fetch_array();
        $topOne = $row['topOne'];  
    }

    if ($topOne=="Social Science"){
        echo "
         <button class=\"btn btn-info\" onclick=\"window.open('social-science.php')\"> Check Schools</button> 
       ";
    }
    else if ($topOne=="Clerical Services"){
        echo "
         <button class=\"btn btn-info\" onclick=\"window.open('educational-services.php')\"> Check Schools</button> 
       ";
    }
    else if ($topOne=="Health Services"){
        echo "
         <button class=\"btn btn-info\" onclick=\"window.open('health-services.php')\"> Check Schools</button> 
       ";
    }
    else if ($topOne=="Agriculture"){
        echo "
         <button class=\"btn btn-info\" onclick=\"window.open('agriculture.php')\"> Check Schools</button> 
       ";
    }
    else if ($topOne=="Customer Service"){
        echo "
         <button class=\"btn btn-info\" onclick=\"window.open('customer-services.php')\"> Check Schools</button> 
       ";
    }
    else  if ($topOne=="Fine Arts"){
        echo "
         <button class=\"btn btn-info\" onclick=\"window.open('fine-arts.php')\"> Check Schools</button> 
       ";
    }
    else if ($topOne=="Mathematics and Science"){
        echo "
         <button class=\"btn btn-info\" onclick=\"window.open('maths-science.php')\"> Check Schools</button> 
       ";
    }
    else  if ($topOne=="Building Trades"){
        echo "
         <button class=\"btn btn-info\" onclick=\"window.open('building-trades.php')\"> Check Schools</button> 
       ";
    }
    else  if ($topOne=="Educational Services"){
        echo "
         <button class=\"btn btn-info\" onclick=\"window.open('educational-services.php')\"> Check Schools</button> 
       ";
    }
    else  if ($topOne=="Legal Services"){
        echo "
         <button class=\"btn btn-info\" onclick=\"window.open('legal-services.php')\"> Check Schools</button> 
       ";
    }
    else  if ($topOne=="Transport"){
        echo "
         <button class=\"btn btn-info\" onclick=\"window.open('transport.php')\"> Check Schools</button> 
       ";
    }
    else  if ($topOne=="Sales"){
        echo "
         <button class=\"btn btn-info\" onclick=\"window.open('sales.php')\"> Check Schools</button> 
       ";
    }
    else  if ($topOne=="Management"){
        echo "
         <button class=\"btn btn-info\" onclick=\"window.open('management.php')\"> Check Schools</button> 
       ";
    }
    else   if ($topOne=="Craft Work"){
        echo "
         <button class=\"btn btn-info\" onclick=\"window.open('craftwork.php')\"> Check Schools</button> 
       ";
    }
    else   if ($topOne=="Machine Operation"){
        echo "
         <button class=\"btn btn-info\" onclick=\"window.open('machine-operator.php')\"> Check Schools</button> 
       ";
    }
    ?>

    
  </td>
</tr>
 </table>
</div>
</div>
</section>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php include('student-footer.php');?>
 