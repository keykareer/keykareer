
<?php session_start(); ?>
<?php
if (!isset($_SESSION['user_logged_in'])) {
  header('location: student-login.php');
}
$user_id=$_SESSION['user_id'];
?>
<?php
$conn= new mysqli("localhost","keykareer","","keykareer")
or die("Couldn't connect to database");
$result = $conn->query('SELECT * FROM questionnaire 
LIMIT 34 OFFSET 136') or die("Couldn't connect to database"); // LIMIT 10 RECORDS ONLY OFFSET/START AT 0 OR FIRST

?>

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
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="css/plyr.css" type="text/css">
  <link rel="stylesheet" href="css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">



</head>
<?php 

$sessA3 = $_SESSION['Avarc'];// sessionvariable for 4th a
$sessB3 = $_SESSION['Bvarc'];
$sessC3 = $_SESSION['Cvarc'];
$sessD3 = $_SESSION['Dvarc'];
$sessE3 = $_SESSION['Evarc'];
$sessF3 = $_SESSION['Fvarc'];
$sessG3 = $_SESSION['Gvarc'];
$sessH3 = $_SESSION['Hvarc'];
$sessI3 = $_SESSION['Ivarc'];
$sessJ3 = $_SESSION['Jvarc'];
$sessK3 = $_SESSION['Kvarc'];
$sessL3 = $_SESSION['Lvarc'];
$sessM3 = $_SESSION['Mvarc'];
$sessN3 = $_SESSION['Nvarc'];
$sessO3 = $_SESSION['Ovarc'];

// $sessAS=$_SESSION['Asvara'];
// $sessBS=$_SESSION['Bsvara'];
// $sessCS=$_SESSION['Csvara'];
// $sessDS=$_SESSION['Dsvara'];

// $sessES=$_SESSION['Esvara'];
// $sessFS=$_SESSION['Fsvara'];
// $sessGS=$_SESSION['Gsvara'];
// $sessHS=$_SESSION['Hsvara'];

// $sessIS=$_SESSION['Isvara'];
// $sessJS=$_SESSION['Jsvara'];
// $sessKS=$_SESSION['Ksvara'];
// $sessLS=$_SESSION['Lsvara'];

// $sessMS=$_SESSION['Msvara'];
// $sessNS=$_SESSION['Nsvara'];
// $sessOS=$_SESSION['Osvara'];
// $sessPS=$_SESSION['Psvara'];
// define variables and set to empty values
$value = "";
$a="0"; //Social Science
$b="0"; //Clerical Services
$c="0"; //Health Services
$d="0"; //Agriculture
$e="0"; //Customer Service
$f="0"; //Fine Arts
$g="0"; //Maths & Science
$h="0"; //Building Trades
$i="0"; //Educational Services
$j="0"; //Legal Services
$k="0"; //Transport
$l="0"; //Sales
$m="0"; //Management
$n="0"; //Craft Work
$o="0"; //Machine Operation

$as="0"; //Marketing or Sales
$bs="0"; //Computer Technology
$cs="0"; //Electronics/Electrical Trade
$ds="0"; //Plumbing or Welding
$es="0"; //Motor Vehicle Repair
$fs="0"; //Carpentry or Building
$gs="0"; //Word Processing or Typing
$hs="0"; //Haircutting or Styling
$is="0"; //Bookeeping/Office Procedures
$js="0"; //Cooking or Sewing
$ks="0"; //Music or Art
$ls="0"; //Farming/Livestock Care
$ms="0"; //Maths or Science
$ns="0"; //English or Foreign Language
$os="0"; //Business Law/Management
$ps="0"; //Creative Writing
$qs="0"; //Speech or Drama
$rs="0"; //Photography
$ss="0"; //Health Care
$ts="0"; //Journalism

// SUBMIT BUTTON
if (isset($_POST['submit'])){
  while($row = $result->fetch_assoc()){
  $question_id = $row['question_id'];
  $question_field = $row['question_field'];
  if (isset($value)){
      $value = $_POST[$question_id];
      //1 POINT
      if ($value == "1"){
        //OCCUPATIONAL GROUP
        if ($question_field=="socialscience"){
          $a+=1;
        }
        else if ($question_field=="clericalservices"){
          $b+=1;
        }
        else if ($question_field=="healthservices"){
          $c+=1;
        }
        else if ($question_field=="agriculture"){
          $d+=1;
        }
        else if ($question_field=="customerservices"){
          $e+=1;
        }
        else if ($question_field=="finearts"){
          $f+=1;
        }
        else if ($question_field=="mathsciences"){
          $g+=1;
        }
        else if ($question_field=="buildingtrades"){
          $h+=1;
        }
        else if ($question_field=="educationalservices"){
          $i+=1;
        }
        else if ($question_field=="legalservices"){
          $j+=1;
        }
        else if ($question_field=="transport"){
          $k+=1;
        }
        else if ($question_field=="sales"){
          $l+=1;
        }
        else if ($question_field=="management"){
          $m+=1;
        }
        else if ($question_field=="craftwork"){
          $n+=1;
        }
        else if ($question_field=="machineoperation"){
          $o+=1;
        }
        // SUBJECT AREA
        else if ($question_field=="marketingorsales"){
          $as+=1;
        }
        else if ($question_field=="computertechnology"){
          $bs+=1;
        }
        else if ($question_field=="electronics/electricaltrade"){
          $cs+=1;
        }
        else if ($question_field=="plumbingorwelding"){
          $ds+=1;
        }
        else if ($question_field=="motorvehiclerepair"){
          $es+=1;
        }
        else if ($question_field=="carpentryorbuilding"){
          $fs+=1;
        }
        else if ($question_field=="wordprocessingortyping"){
          $gs+=1;
        }
        else if ($question_field=="haircuttingorstyling"){
          $hs+=1;
        }
        else if ($question_field=="bookkeeping/officeprocedures"){
          $is+=1;
        }
        else if ($question_field=="cookingorsewing"){
          $js+=1;
        }
        else if ($question_field=="musicorart"){
          $ks+=1;
        }
        else if ($question_field=="farming/livestockcare"){
          $ls+=1;
        }
        else if ($question_field=="mathsorscience"){
          $ms+=1;
        }
        else if ($question_field=="englishorforeignlanguage"){
          $ns+=1;
        }
        else if ($question_field=="businesslawmanagement"){
          $os+=1;
        }
        else if ($question_field=="creativewriting"){
          $ps+=1;
        }
        else if ($question_field=="speechordrama"){
          $qs+=1;
        }
        else if ($question_field=="photography"){
          $rs+=1;
        }
        else if ($question_field=="healthcare"){
          $ss+=1;
        }
        else if ($question_field=="journalism"){
          $ts+=1;
        }

      }
      //2 POINTS
      if ($value == "2"){
        if ($question_field=="socialscience"){
          $a+=2;
        }
        else if ($question_field=="clericalservices"){
          $b+=2;
      }
      else if ($question_field=="healthservices"){
        $c+=2;
      }
      else if ($question_field=="agriculture"){
        $d+=2;
      }
      else if ($question_field=="customerservices"){
        $e+=2;
      }
      else if ($question_field=="finearts"){
        $f+=2;
      }
      else if ($question_field=="mathsciences"){
        $g+=2;
      }
      else if ($question_field=="buildingtrades"){
        $h+=2;
      }
      else if ($question_field=="educationalservices"){
        $i+=2;
      }
      else if ($question_field=="legalservices"){
        $j+=2;
      }
      else if ($question_field=="transport"){
        $k+=2;
      }
      else if ($question_field=="sales"){
        $l+=2;
      }
      else if ($question_field=="management"){
        $m+=2;
      }
      else if ($question_field=="craftwork"){
        $n+=2;
      }
      else if ($question_field=="machineoperation"){
        $o+=2;
      }
      // SUBJECT AREA
      else if ($question_field=="marketingorsales"){
        $as+=2;
      }
      else if ($question_field=="computertechnology"){
        $bs+=2;
      }
      else if ($question_field=="electronics/electricaltrade"){
        $cs+=2;
      }
      else if ($question_field=="plumbingorwelding"){
        $ds+=2;
      }
      else if ($question_field=="motorvehiclerepair"){
        $es+=2;
      }
      else if ($question_field=="carpentryorbuilding"){
        $fs+=2;
      }
      else if ($question_field=="wordprocessingortyping"){
        $gs+=2;
      }
      else if ($question_field=="haircuttingorstyling"){
        $hs+=2;
      }
      else if ($question_field=="bookkeeping/officeprocedures"){
        $is+=2;
      }
      else if ($question_field=="cookingorsewing"){
        $js+=2;
      }
      else if ($question_field=="musicorart"){
        $ks+=2;
      }
      else if ($question_field=="farming/livestockcare"){
        $ls+=2;
      }
      else if ($question_field=="mathsorscience"){
        $ms+=2;
      }
      else if ($question_field=="englishorforeignlanguage"){
        $ns+=2;
      }
      else if ($question_field=="businesslawmanagement"){
        $os+=2;
      }
      else if ($question_field=="creativewriting"){
        $ps+=2;
      }
      else if ($question_field=="speechordrama"){
        $qs+=2;
      }
      else if ($question_field=="photography"){
        $rs+=2;
      }
      else if ($question_field=="healthcare"){
        $ss+=2;
      }
      else if ($question_field=="journalism"){
        $ts+=2;
      }
      }

      //3 POINTS
      if ($value == "3"){
        if ($question_field=="socialscience"){
          $a+=3;
        }
        else if ($question_field=="clericalservices"){
          $b+=3;
        }
        else if ($question_field=="healthservices"){
          $c+=3;
        }
        else if ($question_field=="agriculture"){
          $d+=3;
        }
        else if ($question_field=="customerservices"){
          $e+=3;
        }
        else if ($question_field=="finearts"){
          $f+=3;
        }
        else if ($question_field=="mathsciences"){
          $g+=3;
        }
        else if ($question_field=="buildingtrades"){
          $h+=3;
        }
        else if ($question_field=="educationalservices"){
          $i+=3;
        }
        else if ($question_field=="legalservices"){
          $j+=3;
        }
        else if ($question_field=="transport"){
          $k+=3;
        }
        else if ($question_field=="sales"){
          $l+=3;
        }
        else if ($question_field=="management"){
          $m+=3;
        }
        else if ($question_field=="craftwork"){
          $n+=3;
        }
        else if ($question_field=="machineoperation"){
          $o+=3;
        }
        // SUBJECT AREA
        else if ($question_field=="marketingorsales"){
          $as+=3;
        }
        else if ($question_field=="computertechnology"){
          $bs+=3;
        }
        else if ($question_field=="electronics/electricaltrade"){
          $cs+=3;
        }
        else if ($question_field=="plumbingorwelding"){
          $ds+=3;
        }
        else if ($question_field=="motorvehiclerepair"){
          $es+=3;
        }
        else if ($question_field=="carpentryorbuilding"){
          $fs+=3;
        }
        else if ($question_field=="wordprocessingortyping"){
          $gs+=3;
        }
        else if ($question_field=="haircuttingorstyling"){
          $hs+=3;
        }
        else if ($question_field=="bookkeeping/officeprocedures"){
          $is+=3;
        }
        else if ($question_field=="cookingorsewing"){
          $js+=3;
        }
        else if ($question_field=="musicorart"){
          $ks+=3;
        }
        else if ($question_field=="farming/livestockcare"){
          $ls+=3;
        }
        else if ($question_field=="mathsorscience"){
          $ms+=3;
        }
        else if ($question_field=="englishorforeignlanguage"){
          $ns+=3;
        }
        else if ($question_field=="businesslawmanagement"){
          $os+=3;
        }
        else if ($question_field=="creativewriting"){
          $ps+=3;
        }
        else if ($question_field=="speechordrama"){
          $qs+=3;
        }
        else if ($question_field=="photography"){
          $rs+=3;
        }
        else if ($question_field=="healthcare"){
          $ss+=3;
        }
        else if ($question_field=="journalism"){
          $ts+=3;

        }
      }


       //4 POINTS
      if ($value == "4"){
        if ($question_field=="socialscience"){
          $a+=4;
        }
        else if ($question_field=="clericalservices"){
          $b+=4;
        }
        else if ($question_field=="healthservices"){
          $c+=4;
        }
        else if ($question_field=="agriculture"){
          $d+=4;
        }
        else if ($question_field=="customerservices"){
          $e+=4;
        }
        else if ($question_field=="finearts"){
          $f+=4;
        }
        else if ($question_field=="mathsciences"){
          $g+=4;
        }
        else if ($question_field=="buildingtrades"){
          $h+=4;
        }
        else if ($question_field=="educationalservices"){
          $i+=4;
        }
        else if ($question_field=="legalservices"){
          $j+=4;
        }
        else if ($question_field=="transport"){
          $k+=4;
        }
        else if ($question_field=="sales"){
          $l+=4;
        }
        else if ($question_field=="management"){
          $m+=4;
        }
        else if ($question_field=="craftwork"){
          $n+=4;
        }
        else if ($question_field=="machineoperation"){
          $o+=4;
        }
        // SUBJECT AREA
        else if ($question_field=="marketingorsales"){
          $as+=4;
        }
        else if ($question_field=="computertechnology"){
          $bs+=4;
        }
        else if ($question_field=="electronics/electricaltrade"){
          $cs+=4;
        }
        else if ($question_field=="plumbingorwelding"){
          $ds+=4;
        }
        else if ($question_field=="motorvehiclerepair"){
          $es+=4;
        }
        else if ($question_field=="carpentryorbuilding"){
          $fs+=4;
        }
        else if ($question_field=="wordprocessingortyping"){
          $gs+=4;
        }
        else if ($question_field=="haircuttingorstyling"){
          $hs+=4;
        }
        else if ($question_field=="bookkeeping/officeprocedures"){
          $is+=4;
        }
        else if ($question_field=="cookingorsewing"){
          $js+=4;
        }
        else if ($question_field=="musicorart"){
          $ks+=4;
        }
        else if ($question_field=="farming/livestockcare"){
          $ls+=4;
        }
        else if ($question_field=="mathsorscience"){
          $ms+=4;
        }
        else if ($question_field=="englishorforeignlanguage"){
          $ns+=4;
        }
        else if ($question_field=="businesslawmanagement"){
          $os+=4;
        }
        else if ($question_field=="creativewriting"){
          $ps+=4;
        }
        else if ($question_field=="speechordrama"){
          $qs+=4;
        }
        else if ($question_field=="photography"){
          $rs+=4;
        }
        else if ($question_field=="healthcare"){
          $ss+=4;
        }
        else if ($question_field=="journalism"){
          $ts+=4;
        }
        
      }


      //5 POINTS
      if ($value == "5"){
        if ($question_field=="socialscience"){
          $a+=5;
        }
        else if ($question_field=="clericalservices"){
          $b+=5;
        }
        else if ($question_field=="healthservices"){
          $c+=5;
        }
        else if ($question_field=="agriculture"){
          $d+=5;
        }
        else if ($question_field=="customerservices"){
          $e+=5;
        }
        else if ($question_field=="finearts"){
          $f+=5;
        }
        else if ($question_field=="mathsciences"){
          $g+=5;
        }
        else if ($question_field=="buildingtrades"){
          $h+=5;
        }
        else if ($question_field=="educationalservices"){
          $i+=5;
        }
        else if ($question_field=="legalservices"){
          $j+=5;
        }
        else if ($question_field=="transport"){
          $k+=5;
        }
        else if ($question_field=="sales"){
          $l+=5;
        }
        else if ($question_field=="management"){
          $m+=5;
        }
        else if ($question_field=="craftwork"){
          $n+=5;
        }
        else if ($question_field=="machineoperation"){
          $o+=5;
        }
        // SUBJECT AREA
        else if ($question_field=="marketingorsales"){
          $as+=5;
        }
        else if ($question_field=="computertechnology"){
          $bs+=5;
        }
        else if ($question_field=="electronics/electricaltrade"){
          $cs+=5;
        }
        else if ($question_field=="plumbingorwelding"){
          $ds+=5;
        }
        else if ($question_field=="motorvehiclerepair"){
          $es+=5;
        }
        else if ($question_field=="carpentryorbuilding"){
          $fs+=5;
        }
        else if ($question_field=="wordprocessingortyping"){
          $gs+=5;
        }
        else if ($question_field=="haircuttingorstyling"){
          $hs+=5;
        }
        else if ($question_field=="bookkeeping/officeprocedures"){
          $is+=5;
        }
        else if ($question_field=="cookingorsewing"){
          $js+=5;
        }
        else if ($question_field=="musicorart"){
          $ks+=5;
        }
        else if ($question_field=="farming/livestockcare"){
          $ls+=5;
        }
        else if ($question_field=="mathsorscience"){
          $ms+=5;
        }
        else if ($question_field=="englishorforeignlanguage"){
          $ns+=5;
        }
        else if ($question_field=="businesslawmanagement"){
          $os+=5;
        }
        else if ($question_field=="creativewriting"){
          $ps+=5;
        }
        else if ($question_field=="speechordrama"){
          $qs+=5;
        }
        else if ($question_field=="photography"){
          $rs+=5;
        }
        else if ($question_field=="healthcare"){
          $ss+=5;
        }
        else if ($question_field=="journalism"){
          $ts+=5;
        }
      }
}
}
$result = $conn->query("SELECT * FROM users WHERE user_id=$user_id") or die("Couldn't connect to database");
if ($result){
  $row = $result->fetch_array();
  $fourthA = $row['scoreA'];  
  $fourthB = $row['scoreB']; 
  $fourthC = $row['scoreC']; 
  $fourthD = $row['scoreD']; 
  $fourthE = $row['scoreE']; 
  $fourthF = $row['scoreF']; 
  $fourthG = $row['scoreG']; 
  $fourthH = $row['scoreH']; 
  $fourthI = $row['scoreI']; 
  $fourthJ = $row['scoreJ']; 
  $fourthK = $row['scoreK']; 
  $fourthL = $row['scoreL'];
  $fourthM = $row['scoreM']; 
  $fourthN = $row['scoreN']; 
  $fourthO = $row['scoreO'];   
  
}
$fifthA=$fourthA + $a;
$fifthB=$fourthB + $b;
$fifthC=$fourthC + $c;
$fifthD=$fourthD + $d;
$fifthE=$fourthE + $e;
$fifthF=$fourthF + $f;
$fifthG=$fourthG + $g;
$fifthH=$fourthH + $h;
$fifthI=$fourthI + $i;
$fifthJ=$fourthJ + $j;
$fifthK=$fourthK + $k;
$fifthL=$fourthL + $l;
$fifthM=$fourthM + $m;
$fifthN=$fourthN + $n;
$fifthO=$fourthO + $o;

$conn->query("UPDATE users SET scoreA='$fifthA',scoreB='$fifthB',scoreC='$fifthC',scoreD='$fifthD',scoreE='$fifthE',scoreF='$fifthF',scoreG='$fifthG',scoreH='$fifthH',scoreI='$fifthI',scoreJ='$fifthJ',scoreK='$fifthK',scoreL='$fifthL',scoreM='$fifthM',scoreN='$fifthN',scoreO='$fifthO' ,scoreQS='$qs',scoreRS='$rs',scoreSS='$ss',scoreTS='$ts'  WHERE user_id=$user_id") or die("Couldn't connect to database");
$_SESSION['post-test-verification']=true;
header("Location:post-test-results.php");



}

else if (isset($_POST['back'])){
  $result = $conn->query("SELECT * FROM users WHERE user_id=$user_id") or die("Couldn't connect to database");
if ($result){
  $row = $result->fetch_array();
  $currentA = $row['scoreA'];   
  $currentB = $row['scoreB']; 
  $currentC = $row['scoreC']; 
  $currentD = $row['scoreD']; 
  $currentE = $row['scoreE']; 
  $currentF = $row['scoreF']; 
  $currentG = $row['scoreG']; 
  $currentH = $row['scoreH']; 
  $currentI = $row['scoreI']; 
  $currentJ = $row['scoreJ']; 
  $currentK = $row['scoreK']; 
  $currentL = $row['scoreL'];
  $currentM = $row['scoreM']; 
  $currentN = $row['scoreN']; 
  $currentO = $row['scoreO']; 
}
  $newA = $currentA-$sessA3;
  $newB = $currentB-$sessB3;
  $newC = $currentC-$sessC3;
  $newD = $currentD-$sessD3;
  $newE = $currentE-$sessE3;
  $newF = $currentF-$sessF3;
  $newG = $currentG-$sessG3;
  $newH = $currentH-$sessH3;
  $newI = $currentI-$sessI3;
  $newJ = $currentJ-$sessJ3;
  $newK = $currentK-$sessK3;
  $newL = $currentL-$sessL3;
  $newM = $currentM-$sessM3;
  $newN = $currentN-$sessN3;
  $newO = $currentO-$sessO3;
  $conn->query("UPDATE users SET scoreA='$newA' ,scoreB='$newB',scoreC='$newC',scoreD='$newD',scoreE='$newE',scoreF='$newF',scoreG='$newG',scoreH='$newH',scoreI='$newI',scoreJ='$newJ',scoreK='$newK',scoreL='$newL',scoreM='$newM',scoreN='$newN',scoreO='$newO',scoreMS='0',scoreNS='0',scoreOS='0',scorePS='0' WHERE user_id=$user_id") or die("Couldn't connect to database");
  unset($_SESSION['test5-verification']);
  header("Location:test4.php");
}

?>
