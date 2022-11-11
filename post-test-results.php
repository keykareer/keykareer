
<?php session_start(); ?>
<?php
if (!isset($_SESSION['user_logged_in'])) {
  header('location: student-login.php');
}
$user_id=$_SESSION['user_id'];
?>

<?php
if (!isset($_SESSION['post-test-verification'])): header('location: test5.php');
?>
<?php else: ?>

<?php
$conn= new mysqli("localhost","keykareer","","keykareer")
or die("Couldn't connect to database");?>
<?php echo "<title>KeyKareer | Result</title>";?>
<head>
  
  <meta charset="UTF-8">
  <meta name="description" content="Anime Template">
  <meta name="keywords" content="Anime, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
  rel="stylesheet">

  <!-- Css Styles -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="css/plyr.css" type="text/css">
  <link rel="stylesheet" href="css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">

<style>
#lolskii{
    margin:auto;
    width: 50%;
    background-color: #80C0D3;
    
}

#lolski{
    margin:auto;
    width: 50%;
    background-color: #80C0D3;
  

}

.mymargg {
  margin-right: 100px;
  margin-left: 100px;
}

.mymargin {
  margin-right: 100px;
  margin-left: 100px;
}



</style>

</head>
<body>
<section style="background-color:#80C0D3;"><!-- backgroundcolor of whole page -->
    <!-- Occupational Groups -->
    <br><br><h3 align="center" >KEYKAREER ASSESSMENT RESULTS</h3> <br>
  <div style="text-align:center;" id="lolskii">
 <br>
  <h4 align="center" >Based on your interest, these are the Top Three (3) Occupational Groups that we recommend you to pursue to fulfill your passion </h4>
  <?php 

  $result = $conn->query("SELECT * FROM users WHERE user_id=$user_id") or die("Couldn't connect to database");
if ($result){
  $row = $result->fetch_array();
  $finalA = $row['scoreA'];  
  $finalB = $row['scoreB']; 
  $finalC = $row['scoreC']; 
  $finalD = $row['scoreD']; 
  $finalE = $row['scoreE']; 
  $finalF = $row['scoreF']; 
  $finalG = $row['scoreG']; 
  $finalH = $row['scoreH']; 
  $finalI = $row['scoreI']; 
  $finalJ = $row['scoreJ']; 
  $finalK = $row['scoreK']; 
  $finalL = $row['scoreL'];
  $finalM = $row['scoreM']; 
  $finalN = $row['scoreN']; 
  $finalO = $row['scoreO']; 
 
}

  $myOccupational = array($finalA, $finalB, $finalC, $finalD, $finalE, $finalF, $finalG, $finalH, $finalI, $finalJ, $finalK, $finalL, $finalM, $finalN, $finalO);
  
  arsort($myOccupational);
  
$theTops = [];
$thePercentYarn = [];
  $x = 0;
  while (++$x <= 3)
  {
      $mykeyOccu = key($myOccupational);
      $value = current($myOccupational);
      next($myOccupational);
      echo "<br>";
      //echo "<br>Key : " . $mykeyOccu . " Value  : " . $value . '<br>' ;
    //  echo "<br>". " Score  : " . $value . '<br>' ;
      
  
      if ($mykeyOccu==0) {
        //   echo "Social Science";
          array_push($theTops,"Social Science");
          $percentt=$finalA/50*100;
          array_push($thePercentYarn,$percentt);
        //   echo "<br>".$percentt."% match";
      }
      elseif($mykeyOccu==1){
        //   echo "Clerical Services";
          array_push($theTops,"Clerical Services");
          $percentt=$finalB/50*100;
          array_push($thePercentYarn,$percentt);
        //   echo "<br>".$percentt."% match";
      }
      elseif($mykeyOccu==2){
        //   echo "Health Services";
          array_push($theTops,"Health Services");
          $percentt=$finalC/50*100;
          array_push($thePercentYarn,$percentt);
        //   echo "<br>".$percentt."% match";
      }
      elseif($mykeyOccu==3){
        //   echo "Agriculture";
          array_push($theTops,"Agriculture");
          $percentt=$finalD/50*100;
          array_push($thePercentYarn,$percentt);
        //   echo "<br>".$percentt ."% match";
      }
      elseif($mykeyOccu==4){
        //   echo "Customer Service";
          array_push($theTops, "Customer Service");
          $percentt=$finalE/50*100;
          array_push($thePercentYarn,$percentt);
        //   echo "<br>".$percentt."% match";
      }
      elseif($mykeyOccu==5){
        //   echo "Fine Arts";
          array_push($theTops,"Fine Arts");
          $percentt=$finalF/50*100;
          array_push($thePercentYarn,$percentt);
        //   echo "<br>".$percentt."% match";
      }
      elseif($mykeyOccu==6){
        //   echo "Mathematics and Science";
          array_push($theTops,"Mathematics and Science");
          $percentt=$finalG/50*100;
          array_push($thePercentYarn,$percentt);
        //   echo "<br>".$percentt ."% match";
      }
      elseif($mykeyOccu==7){
        //   echo "Building Trades";
          array_push($theTops,"Building Trades");
          $percentt=$finalH/50*100;
          array_push($thePercentYarn,$percentt);
        //   echo "<br>".$percentt."% match";
      }
      elseif($mykeyOccu==8){
        //   echo "Educational Services";
          array_push($theTops,"Educational Services");
          $percentt=$finalI/50*100;
          array_push($thePercentYarn,$percentt);
        //   echo "<br>".$percentt."% match";
      }
      elseif($mykeyOccu==9){
        //   echo "Legal Services";
          array_push($theTops,"Legal Services");
          $percentt=$finalJ/50*100;
          array_push($thePercentYarn,$percentt);
        //   echo "<br>".$percentt."% match";
      }
      elseif($mykeyOccu==10){
        //   echo "Transport";
          array_push($theTops,"Transport");
          $percentt=$finalK/50*100;
          array_push($thePercentYarn,$percentt);
        //   echo "<br>".$percentt."% match";
      }
      elseif($mykeyOccu==11){
        //   echo "Sales";
          array_push($theTops,"Sales");
          $percentt=$finalL/50*100;
          array_push($thePercentYarn,$percentt);
        //   echo "<br>".$percentt."% match";
      }
      elseif($mykeyOccu==12){
        //   echo "Management";
          array_push($theTops,"Management");
          $percentt=$finalM/50*100;
          array_push($thePercentYarn,$percentt);
        //   echo "<br>".$percentt."% match";
      }
      elseif($mykeyOccu==13){
        //   echo "Craft Work";
          array_push($theTops,"Craft Work");
          $percentt=$finalN/50*100;
          array_push($thePercentYarn,$percentt);
        //   echo "<br>".$percentt."% match";
      }
      elseif($mykeyOccu==14){
        //   echo "Machine Operation";
          array_push($theTops,"Machine Operation");
          $percentt=$finalO/50*100;
          array_push($thePercentYarn,$percentt);
        //   echo "<br>".$percentt ."% match";
      }
      else{
          echo "NO RESULT";
      }
      
    }

     $conn->query("UPDATE users SET topOne='$theTops[0]',topTwo='$theTops[1]',topThree='$theTops[2]' WHERE user_id=$user_id") or die("Couldn't connect to database");



  
    ?>


<div class="container">
  <div class="row">
        <div class="col-xs-6 col-sm-4" id="secondz">
            <b><?php echo $theTops[1];?><br></b>
            <?php echo $thePercentYarn[1]."% match";?>
            <img src="img/twoo.png" class="img-fluid">
        </div>
        <div class="col-xs-6 col-sm-4" id="firstz">
            <b><?php echo $theTops[0];?><br></b>
            <?php echo $thePercentYarn[0]."% match";?>
            <img src="img/onee.png" class="img-fluid">
        </div>
        <div class="col-xs-6 col-sm-4" id="thirdz">
            <b><?php echo $theTops[2];?><br></b>
            <?php echo $thePercentYarn[2]."% match";?>
            <img src="img/threee.png" class="img-fluid">
        </div>
  </div>


</div>









<br>

    </div>
    <!-- Subject Areas -->
    <br>
  
  <div style="text-align:center;" id="lolski">
  <h3 align="center"></h3>
  <br>
  <h4 align="center">Based on your interest, these are the Subject Areas you Like that you may excel</h4>
  <?php
   $result = $conn->query("SELECT * FROM users WHERE user_id=$user_id") or die("Couldn't connect to database");
   if ($result){
     $row = $result->fetch_array();
 $finalAS = $row['scoreAS'];  
 $finalBS = $row['scoreBS']; 
 $finalCS = $row['scoreCS']; 
 $finalDS = $row['scoreDS']; 
 $finalES = $row['scoreES']; 
 $finalFS = $row['scoreFS']; 
 $finalGS = $row['scoreGS']; 
 $finalHS = $row['scoreHS']; 
 $finalIS = $row['scoreIS']; 
 $finalJS = $row['scoreJS']; 
 $finalKS = $row['scoreKS']; 
 $finalLS = $row['scoreLS'];
 $finalMS = $row['scoreMS']; 
 $finalNS = $row['scoreNS']; 
 $finalOS = $row['scoreOS']; 
 $finalPS = $row['scorePS']; 
 $finalQS = $row['scoreQS'];
 $finalRS = $row['scoreRS']; 
 $finalSS = $row['scoreSS']; 
 $finalTS = $row['scoreTS']; 
   }
$mySubject = array($finalAS, $finalBS, $finalCS, $finalDS, $finalES, $finalFS, $finalGS, $finalGS, $finalIS, $finalJS, $finalKS, $finalLS, $finalMS, $finalNS, $finalOS, $finalPS, $finalQS, $finalRS, $finalSS, $finalTS);


arsort($mySubject);
$theLikes=[];
$x = 0;
while (++$x <= 20)
{
    $mykeySub = key($mySubject);
    $valueSub = current($mySubject);
    next($mySubject);
   // echo "<br>";
  //  echo "<br>Key : " . $mykeySub . " Value  : " . $valueSub . '<br>' ;

}

if($finalAS==4 || $finalAS==5 ){
    echo "<br>Marketing or Sales";
    array_push($theLikes,"Marketing or Sales");
    
}
if($finalBS==4 || $finalBS==5 ){
    echo "<br>Computer Technology";
    array_push($theLikes,"Computer Technology");
}
if($finalCS==4 || $finalCS==5 ){
    echo "<br>Electronics/Electrical Trade";
    array_push($theLikes,"Electronics/Electrical Trade");
}
if($finalDS==4 || $finalDS==5 ){
    echo "<br>Plumbing or Welding";
    array_push($theLikes,"Plumbing or Welding");
}
if($finalES==4 || $finalES==5 ){
    echo "<br>Motor Vehicle Repair";
    array_push($theLikes,"Motor Vehicle Repair");
}
if($finalFS==4 || $finalFS==5 ){
    echo "<br>Carpentry or Building";
    array_push($theLikes,"Carpentry or Building");
}
if($finalGS==4 || $finalGS==5 ){
    echo "<br>Word Processing or Typing";
    array_push($theLikes,"Word Processing or Typing");
}
if($finalHS==4 || $finalHS==5 ){
    echo "<br>Haircutting or Styling";
    array_push($theLikes,"Haircutting or Styling");
}
if($finalIS==4 || $finalIS==5 ){
    echo "<br>Bookeeping/Office Procedures";
    array_push($theLikes,"Bookeeping/Office Procedures");
}
if($finalJS==4 || $finalJS==5 ){
    echo "<br>Cooking or Sewing";
    array_push($theLikes,"Cooking or Sewing");
}
if($finalKS==4 || $finalKS==5 ){
    echo "<br>Music or Art";
    array_push($theLikes,"Music or Art");
}
if($finalLS==4 || $finalLS==5 ){
    echo "<br>Farming/Livestock Care";
    array_push($theLikes,"Farming/Livestock Care");
}
if($finalMS==4 || $finalMS==5 ){
    echo "<br>Maths or Science";
    array_push($theLikes,"Maths or Science");
}
if($finalNS==4 || $finalNS==5 ){
    echo "<br>English or Foreign Language";
    array_push($theLikes,"English or Foreign Language");
}
if($finalOS==4 || $finalOS==5 ){
    echo "<br>Business Law/Management";
    array_push($theLikes,"Business Law/Management");
}
if($finalPS==4 || $finalPS==5 ){
    echo "<br>Creative Writing";
    array_push($theLikes,"Creative Writing");
}
if($finalQS==4 || $finalQS==5 ){
    echo "<br>Speech or Drama";
    array_push($theLikes,"Speech or Drama");
}
if($finalRS==4 || $finalRS==5 ){
    echo "<br>Photography";
    array_push($theLikes,"Photography");
}
if($finalSS==4 || $finalSS==5 ){
    echo "<br>Health Care";
    array_push($theLikes,"Health Care");
}
if($finalTS==4 || $finalTS==5 ){
    echo "<br>Journalism";
    array_push($theLikes,"Journalism");
}
echo "<br>";

echo "<br>";

$theLike=(implode("<br>",$theLikes));

$conn->query("UPDATE users SET theSubjectLikes='$theLike' WHERE user_id=$user_id") or die("Couldn't connect to database");

?>

  </div>
  <?php
  //this change examTaken into Yes which means that the user is done with the exam
  $conn->query("UPDATE users SET examTaken='Yes' WHERE user_id=$user_id") or die("Couldn't connect to database");

  ?>
    <br>

<div class= "mymargg"> 
   <p style="text-align:center"> <b>Do not exit </b>this <b>page</b> by closing the tab. <br>
   <b>Do not use </b>the <b>browser's back and forward button.</b><br><br>

   
   Click <b>'Check Schools'</b> to check the schools that offer programs related to your <b>Top One (1) Occupational Group.</b>
<br>
Click <b>'Done'</b> to return to the <b>main site.</b>
</div>
</p>
    <?php
    
    $result = $conn->query("SELECT * FROM users WHERE user_id=$user_id") or die("Couldn't connect to database");
    if ($result){
        $row = $result->fetch_array();
        $topOne = $row['topOne'];  
    }

    if ($topOne=="Social Science"){
        echo "<center>
         <button class=\"btn btn-info\" onclick=\"window.open('social-science.php')\"> Check Schools</button> <button class=\"btn btn-success\" onclick=\"resultsPage()\">Done</button>
        </center>";
    }
    else if ($topOne=="Clerical Services"){
        echo "<center>
         <button class=\"btn btn-info\" onclick=\"window.open('educational-services.php')\"> Check Schools</button> <button class=\"btn btn-success\" onclick=\"resultsPage()\">Done</button>
        </center>";
    }
    else if ($topOne=="Health Services"){
        echo "<center>
         <button class=\"btn btn-info\" onclick=\"window.open('health-services.php')\"> Check Schools</button> <button class=\"btn btn-success\" onclick=\"resultsPage()\">Done</button>
        </center>";
    }
    else if ($topOne=="Agriculture"){
        echo "<center>
         <button class=\"btn btn-info\" onclick=\"window.open('agriculture.php')\"> Check Schools</button> <button class=\"btn btn-success\" onclick=\"resultsPage()\">Done</button>
        </center>";
    }
    else if ($topOne=="Customer Service"){
        echo "<center>
         <button class=\"btn btn-info\" onclick=\"window.open('customer-services.php')\"> Check Schools</button> <button class=\"btn btn-success\" onclick=\"resultsPage()\">Done</button>
        </center>";
    }
    else  if ($topOne=="Fine Arts"){
        echo "<center>
         <button class=\"btn btn-info\" onclick=\"window.open('fine-arts.php')\"> Check Schools</button> <button class=\"btn btn-success\" onclick=\"resultsPage()\">Done</button>
        </center>";
    }
    else if ($topOne=="Mathematics and Science"){
        echo "<center>
         <button class=\"btn btn-info\" onclick=\"window.open('maths-science.php')\"> Check Schools</button> <button class=\"btn btn-success\" onclick=\"resultsPage()\">Done</button>
        </center>";
    }
    else  if ($topOne=="Building Trades"){
        echo "<center>
         <button class=\"btn btn-info\" onclick=\"window.open('building-trades.php')\"> Check Schools</button> <button class=\"btn btn-success\" onclick=\"resultsPage()\">Done</button>
        </center>";
    }
    else  if ($topOne=="Educational Services"){
        echo "<center>
         <button class=\"btn btn-info\" onclick=\"window.open('educational-services.php')\"> Check Schools</button> <button class=\"btn btn-success\" onclick=\"resultsPage()\">Done</button>
        </center>";
    }
    else  if ($topOne=="Legal Services"){
        echo "<center>
         <button class=\"btn btn-info\" onclick=\"window.open('legal-services.php')\"> Check Schools</button> <button class=\"btn btn-success\" onclick=\"resultsPage()\">Done</button>
        </center>";
    }
    else  if ($topOne=="Transport"){
        echo "<center>
         <button class=\"btn btn-info\" onclick=\"window.open('transport.php')\"> Check Schools</button> <button class=\"btn btn-success\" onclick=\"resultsPage()\">Done</button>
        </center>";
    }
    else  if ($topOne=="Sales"){
        echo "<center>
         <button class=\"btn btn-info\" onclick=\"window.open('sales.php')\"> Check Schools</button> <button class=\"btn btn-success\" onclick=\"resultsPage()\">Done</button>
        </center>";
    }
    else  if ($topOne=="Management"){
        echo "<center>
         <button class=\"btn btn-info\" onclick=\"window.open('management.php')\"> Check Schools</button> <button class=\"btn btn-success\" onclick=\"resultsPage()\">Done</button>
        </center>";
    }
    else   if ($topOne=="Craft Work"){
        echo "<center>
         <button class=\"btn btn-info\" onclick=\"window.open('craftwork.php')\"> Check Schools</button> <button class=\"btn btn-success\" onclick=\"resultsPage()\">Done</button>
        </center>";
    }
    else   if ($topOne=="Machine Operation"){
        echo "<center>
         <button class=\"btn btn-info\" onclick=\"window.open('machine-operator.php')\"> Check Schools</button> <button class=\"btn btn-success\" onclick=\"resultsPage()\">Done</button>
        </center>";
    }
    ?>

<br>



    
   

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
  function resultsPage() {
    <?php 
    unset($_SESSION['test1-verification']);
     unset($_SESSION['test2-verification']);
     unset($_SESSION['test3-verification']);
     unset($_SESSION['test4-verification']);
    unset($_SESSION['test5-verification']);
    unset($_SESSION['post-test-verification']);?>
    window.location.href="student-assessment-results.php";
  }
 </script>
 </section>
</body>
</html>
<?php endif;?>