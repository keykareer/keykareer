

<?php include('../server/connection.php');
//SIDE MENU OF ALL ADMIN
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>


.sidebar {
  margin: 0;
  padding: 0;
  width: 300px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
  font-size: 19px;
  font-family:sans-serif;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
  background-color:#f1f1f1;
  
}
 
.sidebar a.active {
  background-color: lightblue;
  color: black;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}



@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .dropdown-btn .fa .fa-caret-down{
    float: center;
    text-align: center;}
  
  .sidebar a{
    float: center;
    text-align: center;
    float: none;}

}



/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color:#f1f1f1;
  padding-left: 8px;
  
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
/* Style the sidenav links and the dropdown button !!!!change button color*/
.sidenav a, .dropdown-btn {
  padding: 16px;
  font-family: sans-serif;
  font-size: 19px;
  border: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
 
  
}

.sidebar .dropdown-btn .active {
  background-color: #04AA6D;
  color: white;
  font-size: 18px;
}

.sidebar .dropdown-btn:hover:not(.active) {
  background-color: #555;
  color: white;
}

</style>
</head>
<body>

<div class="sidebar position-sticky">
  <a class="active" href="../index.php" style="text-align:center;" >Main Home</a>
  <a href="admin-account.php" style="text-align:center;">Admin Account</a>
  <a href="admin-questionnaire.php" style="text-align:center;">Assessment Questions</a>
  <button class="dropdown-btn" style="text-align:center; ">Infographics
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="admin-infographics.php" style="text-align:center;">Occupational Group</a>
    <a href="admin-infographics-subjectarea.php" style="text-align:center;">Subject Area</a>
    
  </div>

  <a href="admin-statistical-graphs.php"style="text-align:center;">Statistical Graph Report</a>
  <?php if(isset($_SESSION['admin_logged_in'])) { ?>
  <a href="admin-logout.php?logout=1"style="text-align:center;">Log out</a>
  <?php }?>  
</div>


<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse ">
      <div class="position-sticky">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php">
              Main Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="admin-account.php">
              <!--<span data-feather="#"></span>-->
              Admin Account
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin-questionnaire.php">
              Assessment Questions
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin-faqs.php">
              Frequently Asked Questions
            </a>
            </li>
            <li class="nav-item">
            <button class="dropdown-btn">Infographics
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="admin-infographics.php" >Occupational Group</a>
    <a href="admin-infographics-subjectarea.php" >Subject Area</a>
    
  </div><!--
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin-featured-logo.php">
              <span></span>
             Featured Logo
            </a>
          </li>--->
          <li class="nav-item">
            <a class="nav-link" href="admin-statistical-graphs.php">
              <span></span>
              Statistical Graph Report
            </a>
          </li>
          </li>
         <li class="nav-item">
        <?php if(isset($_SESSION['admin_logged_in'])) { ?>
      <a class="nav-link px-3" href="admin-logout.php?logout=1">Log out</a>
      <?php }?>       
    </a>
          </li>  
        </ul>

     
      </div>
    </nav>

<script>
    //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
</body>
</html>
