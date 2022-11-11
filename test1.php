
<?php require_once 'test1-process.php';?>
<?php

if (!isset($_SESSION['user_logged_in'])) {
  header('location: student-login.php');
}
$user_id=$_SESSION['user_id'];
if (!isset($_SESSION['test1-verification'])) {
header('location: student-assessment-welcome.php');
}
?>
<?php

// this is a test 3 v2 PAGE 1 modified
$conn= new mysqli("localhost","keykareer","","keykareer")
or die("Couldn't connect to database");
$result = $conn->query('SELECT * FROM questionnaire 
LIMIT 34 OFFSET 0') or die("Couldn't connect to database"); // LIMIT 10 RECORDS ONLY OFFSET/START AT 0 OR FIRST
?>
<?php echo "<title>KeyKareer | Page 1</title>";?>
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
    <link rel="stylesheet" href="css/kkstyleee.css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<body>



<section style="background-color:#80C0D3;"><!-- backgroundcolor of whole page -->
 <?php require_once 'test1-process.php';?>
 <?php include ('test-reminder.php');?> <!--This is the reminder header of the test-->
 
<form method="POST" action="test1-process.php" autocomplete="off">
<table class="responsive" style="margin-left:auto; margin-right:auto;width:100%;" > <!-- adjustment of whole table -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<?php while ($row = $result->fetch_assoc()):?>
 
  <tr>
  
<br>
<p  align="center" style="color:black; font-size:18px;"><b><?php echo $row['question'];?> </b></p>
<br> 
  <?php $question_id = $row['question_id'];//ID?> 
  <?php $question_field = $row['question_field'];//field?>

  <!---Value is the number submitted-->
  <br>
  <h6>Dislike a great deal
  <input type="radio" name="<?php echo $question_id?>" <?php if (isset($value) && $value=="1") echo "checked"; ?>  value="1">
  <input type="radio" name="<?php echo $question_id?>" <?php if (isset($value) && $value=="2") echo "checked";?> value="2">
  <input type="radio" name="<?php echo $question_id?>" <?php if (isset($value) && $value=="3") echo "checked";?> value="3" >
  <input type="radio" name="<?php echo $question_id?>" <?php if (isset($value) && $value=="4" ) echo "checked";?> value="4" >
  <input type="radio" name="<?php echo $question_id?>" <?php if (isset($value) && $value=="5") echo "checked";?> value="5" >
  Like very much
  </h6>
  <br><br>
  <hr style="border: 1px solid; width:60%; opacity:0.4;"><br><br> <!-- adjustment of hr line -->
</tr>

  <?php endwhile; ?>
  
      </table>
      <br>
      <tr><h3><input type="submit" id="button" value="Next" name="submit"></tr></h3>

  </form>

 
  <br><br>
  </section>
</body>
  </html>