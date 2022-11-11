<?php echo "<title>KeyKareer | Mathematics & Science</title>";
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

                            <p style="font-size:40px;"> Schools that offer <b>Mathematics & Science</b> related programs </p><br>
                        </div>

                            
                             <div class="cols-12">
                                <br><h4 align="justify">1. ABE International College Manila <img src="img/pin.png"><span style = "font-size: 18px;">2578 Legarda Ave, Sampaloc</span></h4>
                                <br><h4 align="justify">2. Access Computer College Manila <img src="img/pin.png"><span style = "font-size: 18px;"></span>Access Main Building, Recto Ave, corner Quezon Blvd</h4>
                                <br><h4 align="justify">3. Adamson University <img src="img/pin.png"><span style = "font-size: 18px;">900 San Marcelino St., Ermitac</span></h4>
                                <br><h4 align="justify">4. Ama Computer College - Sta. Mesa <img src="img/pin.png"><span style = "font-size: 18px;">628 R. Magsaysay Blvd, Santa Mesa</span></h4>
                                <br><h4 align="justify">5. Arellano University <img src="img/pin.png"><span style = "font-size: 18px;">2600 Legarda St., Sampaloc/span></h4>
                                <br><h4 align="justify">6. Centro Escolar University <img src="img/pin.png"><span style = "font-size: 18px;">Mendiola St., San Miguel</span></h4>
                                <br><h4 align="justify">7. Chang Kai Shek College <img src="img/pin.png"><span style = "font-size: 18px;">1274 Padre Algue St., Tondo</span></h4>
                                <br><h4 align="justify">9. College De San Juan De Letran <img src="img/pin.png"><span style = "font-size: 18px;">151 Muralla St., San Miguel</span></h4>
                                <br><h4 align="justify">10. De La Salle University<img src="img/pin.png"><span style = "font-size: 18px;">2401 Taft Ave, Malate</span></h4>
                                <br><h4 align="justify">11. College of Saint Benilde <img src="img/pin.png"><span style = "font-size: 18px;">2544 Taft Ave, Malate</span></h4>
                                <br><h4 align="justify">13. Emilio Aguinaldo College <img src="img/pin.png"><span style = "font-size: 18px;">1113 San Marcelino St., Paco</span></h4>
                                <br><h4 align="justify">14. Eulogio "Amang" Rodriguez Institute of Science and Technology <img src="img/pin.png"><span style = "font-size: 18px;">Nagtahan St., Sampaloc</span></h4>                           
                                <br><h4 align="justify">15. Far Eastern University <img src="img/pin.png"><span style = "font-size: 18px;">1015 Nicanor Reyes Street, Sampaloc</span></h4>                                
                                <br><h4 align="justify">16. Feati University <img src="img/pin.png"><span style = "font-size: 18px;">1001 Helios St., Sta. Cruz, Quiapo</span></h4>
                                <br><h4 align="justify">15. Guzman College of Science and Technology <img src="img/pin.png"><span style = "font-size: 18px;">509 Z.P. De Guzman St., Quiapo</span></h4>
                                <br><h4 align="justify">17. Interface Computer College - Manila <img src="img/pin.png"><span style = "font-size: 18px;">811 Julio Nakpil, Malate</span></h4>
                                <br><h4 align="justify">18. Jesus Reigns Christian College <img src="img/pin.png"><span style = "font-size: 18px;">811 Julio Nakpil, Malate</span></h4>
                                <br><h4 align="justify">19. La Concordia College <img src="img/pin.png"><span style = "font-size: 18px;">1730 Pedro Gil St., Paco</span></h4>
                                <br><h4 align="justify">20. La Consolacion College <img src="img/pin.png"><span style = "font-size: 18px;">8 Mendiola Ext, San Miguel</span></h4>
                                <br><h4 align="justify">21. Lyceum of the Philippines University <img src="img/pin.png"><span style = "font-size: 18px;">1002 Muralla St., Intramuros</span></h4>
                                <br><h4 align="justify">22. Manila Business College<img src="img/pin.png"><span style = "font-size: 18px;">1671 MBC Bldg., Sta. Cruz Alvarez St.</span></h4>
                                <br><h4 align="justify">23. Mapua University <img src="img/pin.png"><span style = "font-size: 18px;">658 Muralla St., Intramuros</span></h4>                
                                <br><h4 align="justify">24. National University <img src="img/pin.png"><span style = "font-size: 18px;">551 M.F. Jhocson St., Sampaloc</span></h4>
                                <br><h4 align="justify">25. Perpetual Help College of Manila <img src="img/pin.png"><span style = "font-size: 18px;">1240 Concepcion St., Sampaloc</span></h4>
                                <br><h4 align="justify">26. Philippine College of Health and Sciences <img src="img/pin.png"><span style = "font-size: 18px;">1813 Recto Ave, Sampaloc</span></h4>
                                <br><h4 align="justify">27. Philippine Cultural College <img src="img/pin.png"><span style = "font-size: 18px;">1253 Abad Santos Ave, Tondo</span></h4>
                                <br><h4 align="justify">27. Phinma - St. Jude College <img src="img/pin.png"><span style = "font-size: 18px;">Dimasalang cor, Don Quijote St., Sampaloc</span></h4>
                                <br><h4 align="justify">28. PMI Colleges <img src="img/pin.png"><span style = "font-size: 18px;">419 W. Burke Street</span></h4>
                                <br><h4 align="justify">30. Pamantasan ng Lungsod ng Maynila <img src="img/pin.png"><span style = "font-size: 18px;">General Luna, corner Muralla St., Intramuros</span></h4>
                                <br><h4 align="justify">31. Philippine Christian University <img src="img/pin.png"><span style = "font-size: 18px;">1648 Taft Ave, Malate </span></h4>
                                <br><h4 align="justify">32. PNTC College - Manila <img src="img/pin.png"><span style = "font-size: 18px;">39 Aurora Boulevard</span></h4>
                                <br><h4 align="justify">33. Philippine Normal University <img src="img/pin.png"><span style = "font-size: 18px;">104 Taft Ave, Ermita </span></h4>
                                <br><h4 align="justify">34. Philippine Women's University <img src="img/pin.png"><span style = "font-size: 18px;">1743 Taft Ave, Malate</span></h4>
                                <br><h4 align="justify">35. Polytechnic University of the Philippines <img src="img/pin.png"><span style = "font-size: 18px;">1016 Anonas, Sta. Mesa</span></h4>
                                <br><h4 align="justify">36. San Beda University <img src="img/pin.png"><span style = "font-size: 18px;">638 Mendiola St., San Miguel</span></h4>
                                <br><h4 align="justify">37. San Sebastian College <img src="img/pin.png"><span style = "font-size: 18px;">1001 Recto Ave, Quiapo</span></h4>
                                <br><h4 align="justify">38. Santa Isabel College - Manila <img src="img/pin.png"><span style = "font-size: 18px;">210 Taft Avenue</span></h4>
                                <br><h4 align="justify">39. St. Paul University <img src="img/pin.png"><span style = "font-size: 18px;">680 Pedro Gif St., Malate</span></h4>
                                <br><h4 align="justify">40. St. Scholastica College <img src="img/pin.png"><span style = "font-size: 18px;">2560 Leon Guinto St., malate</span></h4>
                                <br><h4 align="justify">41. STI Academic Center Sta. Mesa <img src="img/pin.png"><span style = "font-size: 18px;">1035 P. Sanchez St., Sta. Mesa</span></h4>
                                <br><h4 align="justify">42. Technological Institute of the Philippines - Manila <img src="img/pin.png"><span style = "font-size: 18px;">363 Pascual Casal St., Quiapo</span></h4>
                                <br><h4 align="justify">43. University of the East <img src="img/pin.png"><span style = "font-size: 18px;">2219 Recto Ave, Sampaloc</span></h4>
                                <br><h4 align="justify">44. University of the Philippines <img src="img/pin.png"><span style = "font-size: 18px;">Zone 72, 670 Padre Faura St., Ermita </span></h4>
                                <br><h4 align="justify">45. Universidad De Manila <img src="img/pin.png"><span style = "font-size: 18px;">659-A Cecila Muñoz St., Ermita</span></h4>
                                <br><h4 align="justify">46. University of Santo Tomas <img src="img/pin.png"><span style = "font-size: 18px;">España Blvd, Sampaloc</span></h4>
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