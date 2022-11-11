<?php echo "<title>KeyKareer | Social Science</title>";
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
                            
                            <p style="font-size:40px;"> Schools that offer <b>Social Science</b> related programs </p><br>
                        </div>

                            
                             <div class="12-cols">
                                <br><h4 align="justify">1. Adamson University <img src="img/pin.png"><span style = "font-size: 18px;">900 San Marcelino St., Ermita</span></h4>
                                <br><h4 align="justify">2. AMA Computer College <img src="img/pin.png"><span style = "font-size: 18px;">628 R. Magsaysay Blvd, Santa Mesa</span></h4>
                                <br><h4 align="justify">3. Arellano University <img src="img/pin.png"><span style = "font-size: 18px;">Legarda St., Sampaloc</span></h4>
                                <br><h4 align="justify">4. Centro Escolar University <img src="img/pin.png"><span style = "font-size: 18px;">Mendiola St., San Miguel</span></h4>
                                <br><h4 align="justify">5. College of the Holy Spirit Manila <img src="img/pin.png"><span style = "font-size: 18px;">E. Mendiola St., San Miguel</span></h4>
                                <br><h4 align="justify">6. College de San Juan de Letran <img src="img/pin.png"><span style = "font-size: 18px;">151 Muralla St., Intramuros</span></h4>
                                <br><h4 align="justify">7. De La Salle University <img src="img/pin.png"><span style = "font-size: 18px;">2401 Taft Ave, Malate</span></h4>
                                <br><h4 align="justify">8. College of Saint Benilde <img src="img/pin.png"><span style = "font-size: 18px;">2544 Taft Ave, Malate</span></h4>
                                <br><h4 align="justify">9. De Ocampo Memorial College <img src="img/pin.png"><span style = "font-size: 18px;">3222 Ramon Magsaysay Blvd</span></h4>
                                <br><h4 align="justify">10. Emilio Aguinaldo College <img src="img/pin.png"><span style = "font-size: 18px;">1113 San Marcelino St., Paco</span></h4>
                                <br><h4 align="justify">11. Eulogio "Amang" Rodriguez Institute of Science and Technology <img src="img/pin.png"><span style = "font-size: 18px;">Nagtahan St., Sampaloc</span></h4>
                                <br><h4 align="justify">12. Far Eastern University <img src="img/pin.png"><span style = "font-size: 18px;">1015 Nicanor Reyes Street, Sampaloc</span></h4>
                                <br><h4 align="justify">13. Jesus Reigns Christian College <img src="img/pin.png"><span style = "font-size: 18px;">811 Julio Nakpil, Malate</span></h4>
                                <br><h4 align="justify">14. La Concordia College <img src="img/pin.png"><span style = "font-size: 18px;">1730 Pedro Gil St., Paco</span></h4>
                                <br><h4 align="justify">15. La Consolacion College Manila <img src="img/pin.png"><span style = "font-size: 18px;">8 Mendiola Ext, San Miguel</span></h4>
                                <br><h4 align="justify">16. Lyceum of the Philippines University <img src="img/pin.png"><span style = "font-size: 18px;">1002 Muralla St., Intramuros</span></h4>
                                <br><h4 align="justify">17. Manila Theological College <img src="img/pin.png"><span style = "font-size: 18px;">478 Manga Ave, Sampaloc</span></h4>
                                <br><h4 align="justify">18. Metropolitan Medical Center College of Arts, Science and Technology <img src="img/pin.png"><span style = "font-size: 18px;">1357 Masangkay St., Sta. Cruz</span></h4>
                                <br><h4 align="justify">19. Mapua University <img src="img/pin.png"><span style = "font-size: 18px;">658 Muralla St., Intramuros</span></h4>
                                <br><h4 align="justify">20. National Teachers College <img src="img/pin.png"><span style = "font-size: 18px;">629 Nepomuceno St., Quiapo</span></h4>
                                <br><h4 align="justify">21. National University <img src="img/pin.png"><span style = "font-size: 18px;">551 M.F. Jhocson St., Sampaloc</span></h4>
                                <br><h4 align="justify">21. Perpetual Help College of Manila <img src="img/pin.png"><span style = "font-size: 18px;">1240 Concepcion St., Sampaloc</span></h4>
                                <br><h4 align="justify">22. Philippine College of Criminology <img src="img/pin.png"><span style = "font-size: 18px;">641 Sales St., Quiapo</span></h4>
                                <br><h4 align="justify">23. Philippine College of Health and Sciences<img src="img/pin.png"><span style = "font-size: 18px;">1813 Recto Ave, Sampaloc</span></h4>
                                <br><h4 align="justify">24. Phinma - St. Jude College <img src="img/pin.png"><span style = "font-size: 18px;">Dimasalang cor, Don Quijote St., Sampaloc</span></h4>
                                <br><h4 align="justify">25. Pamantasan ng Lungsod ng Maynila <img src="img/pin.png"><span style = "font-size: 18px;">General Luna, corner Muralla St., Intramuros</span></h4>
                                <br><h4 align="justify">26. Philippine Christian University <img src="img/pin.png"><span style = "font-size: 18px;">1648 Taft Ave, Malate</span></h4>
                                <br><h4 align="justify">27. Philippine Normal University <img src="img/pin.png"><span style = "font-size: 18px;">104 Taft Ave, Ermita</span></h4>
                                <br><h4 align="justify">28. Philippine Women's University<img src="img/pin.png"><span style = "font-size: 18px;">1743 Taft Ave, Malate</span></h4>
                                <br><h4 align="justify">29. Polytechnic University of the Philippines <img src="img/pin.png"><span style = "font-size: 18px;">1016 Anonas, Santa Mesa</span></h4>
                                <br><h4 align="justify">30. San Beda University <img src="img/pin.png"><span style = "font-size: 18px;">638 Mendiola St., San Miguel</span></h4>
                                <br><h4 align="justify">31. San Sebastian College <img src="img/pin.png"><span style = "font-size: 18px;">1001 Recto Ave, Quiapo</span></h4>
                                <br><h4 align="justify">32. Santa Isabel College - Manila <img src="img/pin.png"><span style = "font-size: 18px;">210 Taft Avenue</span></h4>
                                <br><h4 align="justify">33. St. Paul University - Manila <img src="img/pin.png"><span style = "font-size: 18px;">680 Pedro Gil St., Malate </span></h4>
                                <br><h4 align="justify">34. St. Scholastica College <img src="img/pin.png"><span style = "font-size: 18px;">2560 Leon Guinto St., Malate</span></h4>
                                <br><h4 align="justify">35. Technological Institute of the Philippines <img src="img/pin.png"><span style = "font-size: 18px;">363 Pascual Casal St., Quiapo, Manila</span></h4>
                                <br><h4 align="justify">36. University of the East <img src="img/pin.png"><span style = "font-size: 18px;">2219 Recto Ave, Sampaloc</span></h4>
                                <br><h4 align="justify">37. University of the Philippines - Manila <img src="img/pin.png"><span style = "font-size: 18px;">Zone 72, 670 Padre Faura St., Ermita</span></h4>
                                <br><h4 align="justify">38. Universidad De Manila <img src="img/pin.png"><span style = "font-size: 18px;">659-A Cecila Muñoz St., Ermita</span></h4>
                                <br><h4 align="justify">39. University of Santo Tomas <img src="img/pin.png"><span style = "font-size: 18px;">España Blvd, Sampaloc</span></h4>
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