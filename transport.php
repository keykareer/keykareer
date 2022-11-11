<?php echo "<title>KeyKareer | Transport</title>";
include('student-header.php');?>
<?php
if (!isset($_SESSION['user_logged_in'])) {
  header('location: student-login.php');
}
$user_id=$_SESSION['user_id'];
?>
 <!-- Page Preloder -->
 <div id="preloder">
        <div class="loader"></div>
    </div>

  <!-- Normal Breadcrumb Begin -->
<br><br><br>

<div class="container">

        <div class="row">

                <div class="col-12 text-center">
                    <div class="normal__breadcrumb__text" id="setblack">
                        <div class="a">
                           
                            <p style="font-size:40px;"> Schools that offer <b>Transport</b> related programs </p><br>
                        </div>

                            
                             <div class="cols-12">
                                                           
                                <br><h4 align="justify">1. Feati University <img src="img/pin.png"><span style = "font-size: 18px;">1001 Helios St., Sta. Cruz, Quiapo</span></h4>
                                <br><h4 align="justify">2. Philsin College Foundation <img src="img/pin.png"><span style = "font-size: 18px;">3153 R. Magsaysay Boulevard</span></h4>
                                <br><h4 align="justify">3. PMI Colleges <img src="img/pin.png"><span style = "font-size: 18px;">419 W. Burke Street</span></h4>                  
                                <br><h4 align="justify">4. PNTC College - Manila <img src="img/pin.png"><span style = "font-size: 18px;">39 Aurora Boulevard</span></h4>
                                <br><h4 align="justify">5. Polytechnic University of the Philippines <img src="img/pin.png"><span style = "font-size: 18px;">1016 Anonas, Sta. Mesa</span></h4>
                                <br><h4 align="justify">6. STI Namei <img src="img/pin.png"><span style = "font-size: 18px;">1035 P. Sanchez St., Sta. Mesa</span></h4>
                                <br><h4 align="justify">7. STI Academic Center Sta. Mesa <img src="img/pin.png"><span style = "font-size: 18px;">1035 P. Sanchez St., Sta. Mesa</span></h4>            
                                <br><h4 align="justify">8. Technological Institute of the Philippines - Manila <img src="img/pin.png"><span style = "font-size: 18px;">363 Pascual Casal St., Quiapo</span></h4>
                                
                            </div>
                        </div>
                    </div>
                </div>
</div>
</div>










<div class="container">

        <div class="row">

                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text" id="setblack">
                            <br><br><h3><b></h3>

                        <div class="a">
                            <br><h4 align="justify">     </h4>



                            <br><h4 align="justify">   </h4>
                        </div>
                    </div>
                </div>
</div>
</div>

<?php include('student-footer.php'); ?>