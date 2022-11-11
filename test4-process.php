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
LIMIT 34 OFFSET 102') or die("Couldn't connect to database"); // LIMIT 10 RECORDS ONLY OFFSET/START AT 0 OR FIRST

?>
<?php 

$sessA2 = $_SESSION['Avarb'];// sessionvariable for 3rd a
$sessB2 = $_SESSION['Bvarb'];
$sessC2 = $_SESSION['Cvarb'];
$sessD2 = $_SESSION['Dvarb'];
$sessE2 = $_SESSION['Evarb'];
$sessF2 = $_SESSION['Fvarb'];
$sessG2 = $_SESSION['Gvarb'];
$sessH2 = $_SESSION['Hvarb'];
$sessI2 = $_SESSION['Ivarb'];
$sessJ2 = $_SESSION['Jvarb'];
$sessK2 = $_SESSION['Kvarb'];
$sessL2 = $_SESSION['Lvarb'];
$sessM2 = $_SESSION['Mvarb'];
$sessN2 = $_SESSION['Nvarb'];
$sessO2 = $_SESSION['Ovarb'];
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
  $thirdA = $row['scoreA'];
  $thirdB = $row['scoreB']; 
  $thirdC = $row['scoreC']; 
  $thirdD = $row['scoreD']; 
  $thirdE = $row['scoreE']; 
  $thirdF = $row['scoreF']; 
  $thirdG = $row['scoreG']; 
  $thirdH = $row['scoreH']; 
  $thirdI = $row['scoreI']; 
  $thirdJ = $row['scoreJ']; 
  $thirdK = $row['scoreK']; 
  $thirdL = $row['scoreL'];
  $thirdM = $row['scoreM']; 
  $thirdN = $row['scoreN']; 
  $thirdO = $row['scoreO'];   
  
}
$fourthA=$thirdA + $a;
$fourthB=$thirdB + $b;
$fourthC=$thirdC + $c;
$fourthD=$thirdD + $d;
$fourthE=$thirdE + $e;
$fourthF=$thirdF + $f;
$fourthG=$thirdG + $g;
$fourthH=$thirdH + $h;
$fourthI=$thirdI + $i;
$fourthJ=$thirdJ + $j;
$fourthK=$thirdK + $k;
$fourthL=$thirdL + $l;
$fourthM=$thirdM + $m;
$fourthN=$thirdN + $n;
$fourthO=$thirdO + $o;

$conn->query("UPDATE users SET scoreA='$fourthA',scoreB='$fourthB',scoreC='$fourthC',scoreD='$fourthD',scoreE='$fourthE',scoreF='$fourthF',scoreG='$fourthG',scoreH='$fourthH',scoreI='$fourthI',scoreJ='$fourthJ',scoreK='$fourthK',scoreL='$fourthL',scoreM='$fourthM',scoreN='$fourthN',scoreO='$fourthO' ,scoreMS='$ms',scoreNS='$ns',scoreOS='$os',scorePS='$ps' WHERE user_id=$user_id") or die("Couldn't connect to database");
$_SESSION['Avarc']=$a;
$_SESSION['Bvarc']=$b;
$_SESSION['Cvarc']=$c;
$_SESSION['Dvarc']=$d;
$_SESSION['Evarc']=$e;
$_SESSION['Fvarc']=$f;
$_SESSION['Gvarc']=$g;
$_SESSION['Hvarc']=$h;
$_SESSION['Ivarc']=$i;
$_SESSION['Jvarc']=$j;
$_SESSION['Kvarc']=$k;
$_SESSION['Lvarc']=$l;
$_SESSION['Mvarc']=$m;
$_SESSION['Nvarc']=$n;
$_SESSION['Ovarc']=$o;

$_SESSION['Msvara']=$ms;
$_SESSION['Nsvara']=$ns;
$_SESSION['Osvara']=$os;
$_SESSION['Psvara']=$ps;
$_SESSION['test5-verification']=true;
  header("Location:test5.php");
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
  $newA = $currentA-$sessA2;
  $newB = $currentB-$sessB2;
  $newC = $currentC-$sessC2;
  $newD = $currentD-$sessD2;
  $newE = $currentE-$sessE2;
  $newF = $currentF-$sessF2;
  $newG = $currentG-$sessG2;
  $newH = $currentH-$sessH2;
  $newI = $currentI-$sessI2;
  $newJ = $currentJ-$sessJ2;
  $newK = $currentK-$sessK2;
  $newL = $currentL-$sessL2;
  $newM = $currentM-$sessM2;
  $newN = $currentN-$sessN2;
  $newO = $currentO-$sessO2;
  $conn->query("UPDATE users SET scoreA='$newA' ,scoreB='$newB',scoreC='$newC',scoreD='$newD',scoreE='$newE',scoreF='$newF',scoreG='$newG',scoreH='$newH',scoreI='$newI',scoreJ='$newJ',scoreK='$newK',scoreL='$newL',scoreM='$newM',scoreN='$newN',scoreO='$newO',scoreIS='0',scoreJS='0',scoreKS='0',scoreLS='0' WHERE user_id=$user_id") or die("Couldn't connect to database");
  unset($_SESSION['test4-verification']);
  header("Location:test3.php");
}

?>
