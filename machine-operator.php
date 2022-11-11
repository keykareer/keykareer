<?php echo "<title>KeyKareer | Machine Operation</title>";
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
                            <p style="font-size:40px;"> Schools that offer <b>Machine Operation</b> related programs </p><br>
                        </div>

                            
                             <div class="cols-12">
                                
                                <br><h4 align="justify">1. Adamson University <img src="img/pin.png"><span style = "font-size: 18px;">900 San Marcelino St., Ermitac</span></h4>
                                <br><h4 align="justify">2. De La Salle University<img src="img/pin.png"><span style = "font-size: 18px;">2401 Taft Ave, Malate</span></h4>
                                <br><h4 align="justify">3. Eulogio "Amang" Rodriguez Institute of Science and Technology <img src="img/pin.png"><span style = "font-size: 18px;">Nagtahan St., Sampaloc</span></h4>
                                <br><h4 align="justify">4. Far Eastern University <img src="img/pin.png"><span style = "font-size: 18px;">1015 Nicanor Reyes Street, Sampaloc</span></h4>
                                <br><h4 align="justify">5. Feati University <img src="img/pin.png"><span style = "font-size: 18px;">1001 Helios St., Sta. Cruz, Quiapo</span></h4>
                                <br><h4 align="justify">6. Guzman College of Science and Technology <img src="img/pin.png"><span style = "font-size: 18px;">509 Z.P. De Guzman St., Quiapo</span></h4>
                                <br><h4 align="justify">7. National University <img src="img/pin.png"><span style = "font-size: 18px;">551 M.F. Jhocson St., Sampaloc</span></h4>
                                <br><h4 align="justify">8. PMI Colleges <img src="img/pin.png"><span style = "font-size: 18px;">419 W. Burke Street</span></h4>
                                <br><h4 align="justify">9. Pamantasan ng Lungsod ng Maynila <img src="img/pin.png"><span style = "font-size: 18px;">General Luna, corner Muralla St., Intramuros</span></h4>
                                <br><h4 align="justify">10. PNTC College - Manila <img src="img/pin.png"><span style = "font-size: 18px;">39 Aurora Boulevard</span></h4>
                                <br><h4 align="justify">11. Technological Institute of the Philippines - Manila <img src="img/pin.png"><span style = "font-size: 18px;">363 Pascual Casal St., Quiapo</span></h4>
                                <br><h4 align="justify">12. University of the East <img src="img/pin.png"><span style = "font-size: 18px;">2219 Recto Ave, Sampaloc</span></h4>
                                <br><h4 align="justify">13. University of Santo Tomas <img src="img/pin.png"><span style = "font-size: 18px;">España Blvd, Sampaloc</span></h4>
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