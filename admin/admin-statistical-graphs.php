<?php include('admin-header.php'); ?>
<?php
if (!isset($_SESSION['admin_logged_in'])) {
  header('location: admin-login.php');
}
?>

  <head>
    <title>KeyKareer | Statistical Graphs</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<style>
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
}
</style>
  </head>
  <body>
  <div class="container-fluid">
  <div class="row" style="min-height: 1000px">

  <?php include('admin-navigation.php'); ?>
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
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Statistical Graphs Report</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">



          </div>

        </div>
        
      </div>
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

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>