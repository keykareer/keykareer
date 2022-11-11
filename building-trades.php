<?php echo "<title>KeyKareer | Building Trades</title>";
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
                            
                            <p style="font-size:40px;"> Schools that offer <b>Building Trades </b>related programs </p><br>
                        </div>

                            
                             <div class="cols-12">
                                <br><h4 align="justify">1. Adamson University <img src="img/pin.png"><span style = "font-size: 18px;">900 San Marcelino St., Ermitac</span></h4>
                                <br><h4 align="justify">2. Ama Computer College - Sta. Mesa <img src="img/pin.png"><span style = "font-size: 18px;">628 R. Magsaysay Blvd, Santa Mesa</span></h4>
                                <br><h4 align="justify">3. De La Salle University<img src="img/pin.png"><span style = "font-size: 18px;">2401 Taft Ave, Malate</span></h4>
                                <br><h4 align="justify">4. Eulogio "Amang" Rodriguez Institute of Science and Technology <img src="img/pin.png"><span style = "font-size: 18px;">Nagtahan St., Sampaloc</span></h4>
                                <br><h4 align="justify">5. Far Eastern University <img src="img/pin.png"><span style = "font-size: 18px;">1015 Nicanor Reyes Street, Sampaloc</span></h4>
                                <br><h4 align="justify">6. Mapua University <img src="img/pin.png"><span style = "font-size: 18px;">658 Muralla St., Intramuros</span></h4>
                                <br><h4 align="justify">7. National University <img src="img/pin.png"><span style = "font-size: 18px;">551 M.F. Jhocson St., Sampaloc</span></h4>
                                <br><h4 align="justify">8. Pamantasan ng Lungsod ng Maynila <img src="img/pin.png"><span style = "font-size: 18px;">General Luna, corner Muralla St., Intramuros</span></h4>
                                <br><h4 align="justify">9. University of Santo Tomas <img src="img/pin.png"><span style = "font-size: 18px;">España Blvd, Sampaloc</span></h4>
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