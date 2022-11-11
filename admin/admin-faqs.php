

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
  $stmt1 = $conn->prepare("SELECT COUNT(*) As total_records FROM faqs");
  $stmt1->execute();
  $stmt1->bind_result($total_records);
  $stmt1->store_result();
  $stmt1->fetch();
  
  
  //3. products per page
  $total_records_per_page = 10;
  
  $offset = ($page_no-1) * $total_records_per_page;
  
  $previous_page = $page_no - 1;
  $next_page = $page_no + 1;
  
  $adjacents = "3";
  
  $total_no_of_pages = ceil($total_records/$total_records_per_page);
  
  
  
  //4. get all products
  
  $stmt2 = $conn->prepare("SELECT * FROM faqs LIMIT $offset,$total_records_per_page");
  $stmt2->execute();
  $rows = $stmt2->get_result();

?>

  <head>
    <title>KeyKareer | FAQs</title>
  </head>
  <body>

  
    <?php require_once 'admin-faqs-process.php';?>

  
    <div class="container-fluid">
  <div class="row" style="min-height: 1000px">

  <?php include('admin-navigation.php'); ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Frequently Asked Questions</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">

          </div>

        </div>
      </div>
    


  <div class="container">

    <!--1st ROW HEADING-->
     <div class="row justify-content-center">
      <table class="table">
<thead>
  <tr>
    <th>Question</th>
    <th>Answer</th>
    <th colspan="2">Action</th>
  </tr>
</thead>
<!--2nd ROW FETCH ALL RECORDS--> 
<?php foreach($rows as $row){?>
<tr>
  <td style="overflow: hidden; width: 300px; text-align: left; vertical-align: top;">
  <?php echo $row['faqQuestion'];?></td>
  <td style="overflow: hidden; width: 500px; text-align: left; vertical-align: top;">
  <?php echo $row['faqAnswer'];?></td>
  <!--EDIT and DELETE RECORDS-->
  <td style="overflow: hidden; width: 280px; text-align: left; vertical-align: top;">
    <a href="admin-faqs.php?edit= <?php echo $row['id']; ?>"
    class="btn btn-info"> Edit </a>
    <a href="admin-faqs-process.php?delete= <?php echo $row['id']; ?>"
    class="btn btn-danger"> Delete </a>
</td>
</tr>

<?php } ?>

      </table>
      <h6 align="center" style="color:red;">*NOTE: Ten (10) frequently asked questions will show per page*</h6>
  <nav aria-label="Page navigation example" class="mx-auto">
        <ul class="pagination mt-5 mx-auto">
          
          <li class="page-item <?php if($page_no<=1){echo 'disabled';}?> ">
               <a class="page-link" href="<?php if($page_no <= 1){echo '#';}else{ echo "?page_no=".($page_no-1);} ?>">Previous</a>
          </li>


          <li class="page-item"><a class="page-link" href="?page_no=1">1</a></li>
          <li class="page-item"><a class="page-link" href="?page_no=2">2</a></li>
          
          <?php if( $page_no >=3) {?>
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
    <form action="admin-faqs-process.php" method="POST"> 
        <input type="hidden" name="id" value="<?php echo $id?>">
        <div class="form-group">
        <label>Question</label>
        <input type="text" name="faqQuestion" class="form-control"required value="<?php echo $faqQuestion;?>" placeholder="Enter your question...">
        </div>

        <div class="form-group">
        <label>Answer</label>
        <textarea name="faqAnswer" class="form-control" resize="none" required placeholder="Enter your answer..."><?php echo $faqAnswer;?></textarea>
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

    <!--SCRIPT for TEXTAREA-->
    <script> const tx = document.getElementsByTagName("textarea");
for (let i = 0; i < tx.length; i++) {
  tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;overflow-y:hidden;");
  tx[i].addEventListener("input", OnInput, false);
}

function OnInput() {
  this.style.height = "auto";
  this.style.height = (this.scrollHeight) + "px";
}</script>

  </body>
</html>