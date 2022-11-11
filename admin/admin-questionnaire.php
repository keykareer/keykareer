<?php include('admin-header.php'); ?>
<?php
if (!isset($_SESSION['admin_logged_in'])) {
  header('location: admin-login.php');
}
?>
 <?php 
   $conn= new mysqli("localhost","keykareer","","keykareer")
   or die("Couldn't connect to database");
//get orders
  //1. determine page no
  if(isset($_GET['page_no']) && $_GET['page_no'] != ""){
    //if user has already entered page then page number is the one that they selected
     $page_no = $_GET['page_no'];
  }else{
    //if user just entered the page then default page is 1
    $page_no = 1;
  }
  
  
  
  //2. return number of products 
  $stmt1 = $conn->prepare("SELECT COUNT(*) As total_records FROM questionnaire");
  $stmt1->execute();
  $stmt1->bind_result($total_records);
  $stmt1->store_result();
  $stmt1->fetch();
  
  
  //3. products per page
  $total_records_per_page = 34;
  
  $offset = ($page_no-1) * $total_records_per_page;
  
  $previous_page = $page_no - 1;
  $next_page = $page_no + 1;
  
  $adjacents = "3";
  
  $total_no_of_pages = ceil($total_records/$total_records_per_page);
  
  
  
  //4. get all products
  
  $stmt2 = $conn->prepare("SELECT * FROM questionnaire LIMIT $offset,$total_records_per_page");
  $stmt2->execute();
  $rows = $stmt2->get_result();

?>



  <head>
    <title>KeyKareer | Assessment Questions</title>
  </head>
  <body>
  <div class="container-fluid">
  <div class="row" style="min-height: 1000px">

  <?php include('admin-navigation.php'); ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Assessment Questions</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">

          </div>

        </div>
      </div>

  <body>
    <?php require_once 'admin-questionnaire-process.php';?>

  <div class="container">
  
    <!--1st ROW HEADING-->
     <div class="row justify-content-center">
      <table class="table">
<thead>
  <tr>
    <th>Question</th>
    <th>Category</th>
    <th>Field</th>
    <th colspan="2">Action</th>
  </tr>
</thead>
<!--2nd ROW FETCH ALL RECORDS--> 
<?php foreach($rows as $row){?>
<tr>
  <td><?php echo $row['question'];?></td>
  <td><?php echo $row['question_category'];?></td>
  <td><?php echo $row['question_field'];?></td>
  <!--EDIT and DELETE RECORDS-->
  <td>
    <a href="admin-questionnaire.php?edit= <?php echo $row['question_id']; ?>"
    class="btn btn-info"> Edit </a>
    <a href="admin-questionnaire-process.php?delete= <?php echo $row['question_id']; ?>"
    class="btn btn-danger"> Delete </a>
</td>
</tr>
<?php } ?>


      </table>
      <h6 align="center" style="color:red;">*NOTE: Thirty-four (34) assessment questions will show per page*</h6>
  <nav aria-label="Page navigation example" class="mx-auto">
        <ul class="pagination mt-5 mx-auto">
          
          <li class="page-item <?php if($page_no<=1){echo 'disabled';}?> ">
               <a class="page-link" href="<?php if($page_no <= 1){echo '#';}else{ echo "?page_no=".($page_no-1);} ?>">Previous</a>
          </li>


          <li class="page-item"><a class="page-link" href="?page_no=1">1</a></li>
          <li class="page-item"><a class="page-link" href="?page_no=2">2</a></li>
          <li class="page-item"><a class="page-link" href="?page_no=3">3</a></li>
          <li class="page-item"><a class="page-link" href="?page_no=4">4</a></li>
          <li class="page-item"><a class="page-link" href="?page_no=5">5</a></li>
          <?php if( $page_no >=6) {?>
            <li class="page-item"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="<?php echo "?page_no=".$page_no;?>"><?php echo $page_no;?></a></li>
          <?php } ?>



          <li class="page-item <?php if($page_no >=  $total_no_of_pages){echo 'disabled';}?>">
                 <a class="page-link" href="<?php if($page_no >= $total_no_of_pages ){echo '#';} else{ echo "?page_no=".($page_no+1);}?>">Next</a></li>
         </ul>
      </nav>

</div>

   
<!--ADD RECORDS-->
  <div class="row justify-content-center">
    <form action="admin-questionnaire-process.php" method="POST"> 
        <input type="hidden" name="question_id" value="<?php echo $question_id?>">

        <div class="form-group">
        <label>Question</label>
        <textarea name="question" class="form-control" resize="none" required placeholder="Enter your question..."><?php echo $question;?></textarea>
        
        </div>
<!---
        <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" class="form-control" value="<?php // echo $location;?>" placeholder="Enter your location...">
        </div>
--->
<div class="form-group">
        <label>Category</label> <br>
<select required name="question_category" id="question_category" onchange="category()">
<option></option>
  <option value="occupationalgroup">Occupational Group</option>
  <option value="subjectarea">Subject Area</option>
</select>
</div>
<div class="form-group">
        <label>Field</label> <br>
<select required name="question_field" id="question_oc" disabled>
  <option></option>
  <option value="socialscience">Social Science</option>
  <option value="clericalservices">Clerical Services</option>
  <option value="healthservices">Health Services</option>
  <option value="agriculture">Agriculture</option>
  <option value="customerservices">Customer Services</option>
  <option value="finearts">Fine Arts</option>
  <option value="mathsciences">Math & Sciences</option>
  <option value="buildingtrades">Building Trades</option>
  <option value="educationalservices">Educational Services</option>
  <option value="legalservices">Legal Services</option>
  <option value="transport">Transport</option>
  <option value="sales">Sales</option>
  <option value="management">Management</option>
  <option value="craftwork">Craft Work</option>
  <option value="machineoperation">Machine Operation</option>
</select>
<br> <br>
<select required name="question_field" id="question_sa" disabled>
  <option></option>
  <option value="marketingorsales">Marketing or Sales</option>
  <option value="computertechnology">Computer Technology</option>
  <option value="electronics/electricaltrade">Electronics/Electrical Trade</option>
  <option value="plumbingorwelding">Plumbing or Welding</option>
  <option value="motorvehiclerepair">Motor Vehicle Repair</option>
  <option value="carpentryorbuilding">Carpentry or Building</option>
  <option value="wordprocessingortyping">Word Processing or Typing</option>
  <option value="haircuttingorstyling">Haircutting or  Styling</option>
  <option value="bookkeeping/officeprocedures">Bookkeeping/Office Procedures</option>
  <option value="cookingorsewing">Cooking or Sewing</option>
  <option value="musicorart">Music or Art</option>
  <option value="farming/livestockcare">Farming/Livestock Care</option>
  <option value="mathsorscience">Maths or Science</option>
  <option value="englishorforeignlanguage">English or Foreign Language</option>
  <option value="businesslawmanagement">Business Law/Management</option>
  <option value="creativewriting">Creative Writing</option>
  <option value="speechordrama">Speech or Drama</option>
  <option value="photography">Photography</option>
  <option value="healthcare">Health Care</option>
  <option value="journalism">Journalism</option>
</select>
</div>

        <div class="form-group">
          <?php if ($update == true):?>
            <button type="submit" class="btn btn-info" name="update">Update</button>
        <?php else:?>
        <button type="submit" class="btn btn-primary" name="save">Add</button>
        <?php endif?>
        </div>
    </form>
</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
  function category(){
    var x = document.getElementById("question_category").value;
  
  if (x=='occupationalgroup'){
    question_oc.disabled=false;
    question_sa.disabled=true;
  }
  else if(x=='subjectarea'){
    question_oc.disabled=true;
    question_sa.disabled=false;
  }
  else{
    question_oc.disabled=true;
    question_sa.disabled=true;
  }
    
  }
</script>

  </body>
</html>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>