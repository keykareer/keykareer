<?php echo "<title>KeyKareer | Frequently Asked Questions</title>";
include('student-header.php');?>
 <!-- Page Preloder -->
 <div id="preloder">
        <div class="loader"></div>
    </div>

 <!--FAQS-->
 <section id="contact" class="container my-5 py-5">
    <div class="container text-center">
    <p style="color:#323232; text-align:center; font-size:2.5vw; "><b> Frequently Asked Questions </b></p>

    <br><br>
    
    <div class="container mb-auto">
    <?php 
    $conn= new mysqli("localhost","keykareer","","keykareer")
    or die("Couldn't connect to database");
    $result = $conn->query("SELECT * FROM faqs") or die("Couldn't connect to database"); 
     //pre_r($result);
   // pre_r($result->fetch_assoc());
    //pre_r($result->fetch_assoc());
    ?>
    <!--1st ROW HEADING-->
     <div class="row justify-content-center">
      <table class="table">
<thead>
  <tr>
    <th style="text-align:center; background-color: #80C0D3">Question</th>
    <th style="text-align:center; background-color: #E5E4E2">Answer</th>
  </tr>
</thead>
<!--2nd ROW FETCH ALL RECORDS--> 
<?php while ($row = $result->fetch_assoc()):?>
<tr>
  <td style="overflow: hidden; width: 500px; text-align: left; vertical-align: top">
  <?php echo $row['faqQuestion'];?></td>
  <td style="overflow: hidden; width: 500px; text-align: left; vertical-align: top">
  <?php echo $row['faqAnswer'];?></td>
 
</tr>

<?php endwhile; ?>

      </table>
</div>
   
    
    </div>
  </section>

  <br> <br> <br> <br> <br>

<?php include('student-footer.php'); ?>