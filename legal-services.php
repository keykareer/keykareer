<?php echo "<title>KeyKareer | Legal Services</title>";
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
                         
                            <p style="font-size:40px;"> Schools that offer <b>Legal Services</b> related programs </p><br>
                        </div>

                            
                             <div class="cols-12">
                                <br><h4 align="justify">1. Adamson University <img src="img/pin.png"><span style = "font-size: 18px;">900 San Marcelino St., Ermitac</span></h4>
                                <br><h4 align="justify">2. Ama Computer College - Sta. Mesa <img src="img/pin.png"><span style = "font-size: 18px;">628 R. Magsaysay Blvd, Santa Mesa</span></h4>
                                <br><h4 align="justify">3. Arellano University <img src="img/pin.png"><span style = "font-size: 18px;">2600 Legarda St., Sampaloc/span></h4>
                                <br><h4 align="justify">4. Centro Escolar University <img src="img/pin.png"><span style = "font-size: 18px;">Mendiola St., San Miguel</span></h4>
                                <br><h4 align="justify">5. College De San Juan De Letran <img src="img/pin.png"><span style = "font-size: 18px;">151 Muralla St., San Miguel</span></h4>
                                <br><h4 align="justify">6. De La Salle University<img src="img/pin.png"><span style = "font-size: 18px;">2401 Taft Ave, Malate</span></h4>
                                <br><h4 align="justify">7. College of Saint Benilde <img src="img/pin.png"><span style = "font-size: 18px;">2544 Taft Ave, Malate</span></h4>
                                <br><h4 align="justify">8. Emilio Aguinaldo College <img src="img/pin.png"><span style = "font-size: 18px;">1113 San Marcelino St., Paco</span></h4>
                                <br><h4 align="justify">9. Eulogio "Amang" Rodriguez Institute of Science and Technology <img src="img/pin.png"><span style = "font-size: 18px;">Nagtahan St., Sampaloc</span></h4>
                                <br><h4 align="justify">10. Far Eastern University <img src="img/pin.png"><span style = "font-size: 18px;">1015 Nicanor Reyes Street, Sampaloc</span></h4>
                                <br><h4 align="justify">11. Lyceum of the Philippines University <img src="img/pin.png"><span style = "font-size: 18px;">1002 Muralla St., Intramuros</span></h4>
                                <br><h4 align="justify">12. National University <img src="img/pin.png"><span style = "font-size: 18px;">551 M.F. Jhocson St., Sampaloc</span></h4>
                                <br><h4 align="justify">13. Philippine College Criminology <img src="img/pin.png"><span style = "font-size: 18px;">641 Sales St., Quiapo</span></h4>
                                <br><h4 align="justify">14. Phinma - St. Jude College <img src="img/pin.png"><span style = "font-size: 18px;">Dimasalang cor, Don Quijote St., Sampaloc</span></h4>
                                <br><h4 align="justify">15. Polytechnic University of the Philippines <img src="img/pin.png"><span style = "font-size: 18px;">1016 Anonas, Sta. Mesa</span></h4>
                                <br><h4 align="justify">16. San Beda University <img src="img/pin.png"><span style = "font-size: 18px;">638 Mendiola St., San Miguel</span></h4>                          
                                <br><h4 align="justify">17. St. Scholastica College <img src="img/pin.png"><span style = "font-size: 18px;">2560 Leon Guinto St., malate</span></h4>
                                <br><h4 align="justify">18. Technological Institute of the Philippines - Manila <img src="img/pin.png"><span style = "font-size: 18px;">363 Pascual Casal St., Quiapo</span></h4>
                                <br><h4 align="justify">19. University of the East <img src="img/pin.png"><span style = "font-size: 18px;">2219 Recto Ave, Sampaloc</span></h4>
                                <br><h4 align="justify">20. University of the Philippines <img src="img/pin.png"><span style = "font-size: 18px;">Zone 72, 670 Padre Faura St., Ermita</span></h4>
                                <br><h4 align="justify">21. Universidad De Manila <img src="img/pin.png"><span style = "font-size: 18px;">659-A Cecila Muñoz St., Ermita</span></h4>
                                <br><h4 align="justify">22. University of Santo Tomas <img src="img/pin.png"><span style = "font-size: 18px;">España Blvd, Sampaloc</span></h4>
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