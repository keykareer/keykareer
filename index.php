<?php echo "<title>KeyKareer | Home</title>";
include('student-header.php');
?>
<?php

include('server/connection.php');

?>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

   

  <!-- Normal Breadcrumb Begin -->
   <center> <section class="normal-breadcrumb set-bg" data-setbg="img/stuu.jpg" style="width:100%;">

    </section></center>

    <!-- Normal Breadcrumb End -->



<br>

<head>
    <style>#owl {
  width:100%;
  height:700px;
  position:relative;
}</style>


<style>
* {box-sizing: border-box}

.mySlides {display: none;}
.mySlides2 {display: none;}

img .infographics {vertical-align: middle;}
img .infographics2 {vertical-align: middle;}
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


#graphbuttons{
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px;
  cursor: pointer;
  float:center;
  width:120px;
  height:30px;
  border-radius: 3px;
  padding: 10px 8px 30px 8px
}


/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>
    <!-- Slideshow Section Begin -->
    <body>
    <section>  
       <!-- Occupational Groups -->   
       <h2 align="center"> Occupational Group</h2>  <br>  
<div class="slideshow-container">
<?php include('server/get_occupational.php'); ?>
<?php  while ($row = $occupational_group->fetch_assoc()) {?>
<div class="mySlides">

  <img name ="infographics"src="<?php echo "../img/infographics/occupational/".$row['occupational_group_file'];?>" style="width:100%">

</div>

<?php }?> 
<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>
   </div>
</section>
<br> <br>
<br> <br>
<br> <br>
<h2 align="center"> Subject Area</h2>  <br>  
<section>  
       <!-- Subject Area -->       
<div class="slideshow-container">
<?php include('server/get_subject.php'); ?>
<?php  while ($row = $subject_area->fetch_assoc()) {?>
<div class="mySlides2">

  <img name ="infographics2"src="<?php echo "../img/infographics/subject/".$row['subject_area_file'];?>" style="width:100%">

</div>

<?php }?> 
<a class="prev" onclick="plusSlides2(-1)">❮</a>
<a class="next" onclick="plusSlides2(1)">❯</a>
   </div>
</section>


<?php 

$conn=mysqli_connect("localhost","keykareer","","keykareer")
or die("Couldn't connect to database");

/////////////1
$result1 = $conn->query("SELECT COUNT(*) AS totalSocialScience FROM users WHERE 
topOne='Social Science'") or die("Couldn't connect to database");
$row1 = $result1->fetch_assoc();
//echo $row1['totalSocialScience'];

//////////////2
$result2 = $conn->query("SELECT COUNT(*) AS totalClericalServices FROM users WHERE 
topOne='Clerical Services'") or die("Couldn't connect to database");
$row2 = $result2->fetch_assoc();
//echo $row2['totalClericalServices'];

///////////////3
$result3 = $conn->query("SELECT COUNT(*) AS totalHealthServices FROM users WHERE 
topOne='Health Services'") or die("Couldn't connect to database");
$row3 = $result3->fetch_assoc();
//echo $row3['totalHealthServices'];

//////////////4
$result4 = $conn->query("SELECT COUNT(*) AS totalAgriculture FROM users WHERE 
topOne='Agriculture'") or die("Couldn't connect to database");
$row4 = $result4->fetch_assoc();
//echo $row4['totalAgriculture'];

//////////////5
$result5 = $conn->query("SELECT COUNT(*) AS totalCustomerService FROM users WHERE 
topOne='Customer Service'") or die("Couldn't connect to database");
$row5 = $result5->fetch_assoc();
//echo $row5['totalCustomerService'];

//////////////6
$result6 = $conn->query("SELECT COUNT(*) AS totalFineArts FROM users WHERE 
topOne='Fine Arts'") or die("Couldn't connect to database");
$row6 = $result6->fetch_assoc();
//echo $row6['totalFineArts'];

//////////////7
$result7 = $conn->query("SELECT COUNT(*) AS totalMathematicsandScience FROM users WHERE 
topOne='Mathematics and Science'") or die("Couldn't connect to database");
$row7 = $result7->fetch_assoc();
//echo $row7['totalMathematicsandScience'];

//////////////8
$result8 = $conn->query("SELECT COUNT(*) AS totalBuildingTrades FROM users WHERE 
topOne='Building Trades'") or die("Couldn't connect to database");
$row8 = $result8->fetch_assoc();
//echo $row8['totalBuildingTrades'];

//////////////9
$result9 = $conn->query("SELECT COUNT(*) AS totalEducationalServices FROM users WHERE 
topOne='Educational Services'") or die("Couldn't connect to database");
$row9 = $result9->fetch_assoc();
//echo $row9['totalEducationalServices'];

//////////////10
$result10 = $conn->query("SELECT COUNT(*) AS totalLegalServices FROM users WHERE 
topOne='Legal Services'") or die("Couldn't connect to database");
$row10 = $result10->fetch_assoc();
//echo $row10['totalLegalServices'];

//////////////11
$result11 = $conn->query("SELECT COUNT(*) AS totalTransport FROM users WHERE 
topOne='Transport'") or die("Couldn't connect to database");
$row11 = $result11->fetch_assoc();
//echo $row11['totalTransport'];

//////////////12
$result12 = $conn->query("SELECT COUNT(*) AS totalSales FROM users WHERE 
topOne='Sales'") or die("Couldn't connect to database");
$row12 = $result12->fetch_assoc();
//echo $row12['totalSales'];

//////////////13
$result13 = $conn->query("SELECT COUNT(*) AS totalManagement FROM users WHERE 
topOne='Management'") or die("Couldn't connect to database");
$row13 = $result13->fetch_assoc();
// echo $row13['totalManagement'];

//////////////14
$result14 = $conn->query("SELECT COUNT(*) AS totalCraftWork FROM users WHERE 
topOne='Craft Work'") or die("Couldn't connect to database");
$row14 = $result14->fetch_assoc();
// echo $row14['totalCraftWork'];

//////////////15
$result15 = $conn->query("SELECT COUNT(*) AS totalMachineOperation FROM users WHERE 
topOne='Machine Operation'") or die("Couldn't connect to database");
$row15 = $result15->fetch_assoc();
// echo $row15['totalMachineOperation'];

?>


<!-- Chart Begin -->
<br><br><h4 align="center">KeyKareer Statistical Graph Reports</h4> <br>

<div class="container">
<div id="firstChart">
<p align="center"><b>Number of KeyKareer Test Takers and their Top 1 recommended occupational group</b></p>
<canvas id="myChart" style="width:100%;max-width:1000px;margin:auto;" ></canvas>
</div>
<div id="secondChart" style="display:none;">
<p align="center"><b>Number of KeyKareer Test Takers and their Top 1 recommended occupational group</b></p>
<canvas id="myChart2" style="width:100%;max-width:1000px;margin:auto;" ></canvas>
</div>
<div id="thirdChart" style="display:none;">
<p align="center"><b>Number of KeyKareer Test Takers and their Top 1 recommended occupational group</b></p>
<canvas id="myChart3" style="width:100%;max-width:1000px;margin:auto;" ></canvas>
</div>
<br>

</div>
<div class="container text-center">
<button id="graphbuttons"onclick="myFunction()">Line Graph</button>
<button id="graphbuttons"onclick="myFunction2()">Pie Graph</button>
<button id="graphbuttons"onclick="myFunction3()">Bar Graph</button>
</div>
<script>
//PIE GRAPH

var xValues = ["Social Science", 
"Clerical Services", 
"Health Services", 
"Agriculture", 
"Customer Service",
"Fine Arts",
"Mathematics and Science",
"Building Trades",
"Educational Services",
"Legal Services",
"Transport",
"Sales",
"Management",
"Craft Work",
"Machine Operation"];
var yValues = [<?php echo $row1['totalSocialScience'];?>,
<?php echo $row2['totalClericalServices']?>,
<?php echo $row3['totalHealthServices']?>,
<?php echo $row4['totalAgriculture']?>,
<?php echo $row5['totalCustomerService']?>,
<?php echo $row6['totalFineArts']?>,
<?php echo $row7['totalMathematicsandScience']?>,
<?php echo $row8['totalBuildingTrades']?>,
<?php echo $row9['totalEducationalServices']?>,
<?php echo $row10['totalLegalServices'];?>,
<?php echo $row11['totalTransport']?>,
<?php echo $row12['totalSales']?>,
<?php echo $row13['totalManagement']?>,
<?php echo $row14['totalCraftWork']?>,
<?php echo $row15['totalMachineOperation']?>];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145",
  "#e28743",
  "lime",
  "red",
  "orange",
  "yellow",
  "green",
  "blue",
  "violet",
  "maroon",
  "black"

];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
     // text: "Number of KeyKareer Test Takers and their Top 1 recommended occupational group"
    }
  }
});




</script>
<script>
//LINE GRAPH


var xValues = ["Social Science", 
"Clerical Services", 
"Health Services", 
"Agriculture", 
"Customer Service",
"Fine Arts",
"Mathematics and Science",
"Building Trades",
"Educational Services",
"Legal Services",
"Transport",
"Sales",
"Management",
"Craft Work",
"Machine Operation"];
var yValues = [<?php echo $row1['totalSocialScience'];?>,
<?php echo $row2['totalClericalServices']?>,
<?php echo $row3['totalHealthServices']?>,
<?php echo $row4['totalAgriculture']?>,
<?php echo $row5['totalCustomerService']?>,
<?php echo $row6['totalFineArts']?>,
<?php echo $row7['totalMathematicsandScience']?>,
<?php echo $row8['totalBuildingTrades']?>,
<?php echo $row9['totalEducationalServices']?>,
<?php echo $row10['totalLegalServices'];?>,
<?php echo $row11['totalTransport']?>,
<?php echo $row12['totalSales']?>,
<?php echo $row13['totalManagement']?>,
<?php echo $row14['totalCraftWork']?>,
<?php echo $row15['totalMachineOperation']?>];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145",
  "#e28743",
  "lime",
  "red",
  "orange",
  "yellow",
  "green",
  "blue",
  "violet",
  "maroon",
  "black"

];

new Chart("myChart2", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 0}}],
    }
  }
});





</script>

<script>
//LINE GRAPH


var xValues = ["Social Science", 
"Clerical Services", 
"Health Services", 
"Agriculture", 
"Customer Service",
"Fine Arts",
"Mathematics and Science",
"Building Trades",
"Educational Services",
"Legal Services",
"Transport",
"Sales",
"Management",
"Craft Work",
"Machine Operation"];
var yValues = [<?php echo $row1['totalSocialScience'];?>,
<?php echo $row2['totalClericalServices']?>,
<?php echo $row3['totalHealthServices']?>,
<?php echo $row4['totalAgriculture']?>,
<?php echo $row5['totalCustomerService']?>,
<?php echo $row6['totalFineArts']?>,
<?php echo $row7['totalMathematicsandScience']?>,
<?php echo $row8['totalBuildingTrades']?>,
<?php echo $row9['totalEducationalServices']?>,
<?php echo $row10['totalLegalServices'];?>,
<?php echo $row11['totalTransport']?>,
<?php echo $row12['totalSales']?>,
<?php echo $row13['totalManagement']?>,
<?php echo $row14['totalCraftWork']?>,
<?php echo $row15['totalMachineOperation']?>];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145",
  "#e28743",
  "lime",
  "red",
  "orange",
  "yellow",
  "green",
  "blue",
  "violet",
  "maroon",
  "black"

];
new Chart("myChart3", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
    //  text: "Number of KeyKareer Test Takers and their Top 1 recommended occupational group"
    }
  }
});
</script>
<script>

  //TOGGLE FUNCTIONS FOR GRAPHS
function myFunction() {
  var x = document.getElementById("firstChart");
  var y =  document.getElementById("secondChart");
  var z =  document.getElementById("thirdChart");
  if (y.style.display === "none") {
    y.style.display = "block";
    x.style.display = "none";
    z.style.display = "none";
  } else {
    y.style.display = "block";
  }
}

function myFunction2() {
  var x = document.getElementById("firstChart");
  var y =  document.getElementById("secondChart");
  var z =  document.getElementById("thirdChart");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function myFunction3() {
  var x = document.getElementById("firstChart");
  var y =  document.getElementById("secondChart");
  var z =  document.getElementById("thirdChart");
  if (z.style.display === "none") {
    z.style.display = "block";
    x.style.display = "none";
    y.style.display = "none";
  } else {
    z.style.display = "block";
  }
}
</script>
<br><br><br>






<script>
    //occu
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  
  slides[slideIndex-1].style.display = "block";  
 
}
</script>


<script>
    //subj
let slideIndex2 = 1;
showSlides2(slideIndex2);

function plusSlides2(m) {
  showSlides2(slideIndex2 += m);
}

function currentSlide2(n) {
  showSlides2(slideIndex2 = m);
}

function showSlides2(m) {
  let i;
  let slides2 = document.getElementsByClassName("mySlides2");
  
  if (m > slides2.length) {slideIndex2 = 1}    
  if (m < 1) {slideIndex2 = slides2.length}
  for (i = 0; i < slides2.length; i++) {
    slides2[i].style.display = "none";  
  }
  
  slides2[slideIndex2-1].style.display = "block";  
 
}
</script>
<!-- Chart End -->
<?php include('student-footer.php'); ?>