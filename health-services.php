<?php echo "<title>KeyKareer || Health Services </title>";
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
                            
                            <p style="font-size:40px;"> Schools that offer <b>Health Services</b> related programs </p><br>
                        </div>

                            
                             <div class="cols-12">
                                <br><h4 align="justify">1. Adamson University <img src="img/pin.png"><span style = "font-size: 18px;">900 San Marcelino St., Ermitac</span></h4>
                                <br><h4 align="justify">2. Arellano University <img src="img/pin.png"><span style = "font-size: 18px;">2600 Legarda St., Sampaloc</span></h4>
                                <br><h4 align="justify">3. Caritas Family Hospital and Colleges <img src="img/pin.png"><span style = "font-size: 18px;">1003 Sta. Cruz</span></h4>
                                <br><h4 align="justify">4. Centro Escolar University <img src="img/pin.png"><span style = "font-size: 18px;">Mendiola St., San Miguel</span></h4>
                                <br><h4 align="justify">5. Chinese General Hospital Colleges <img src="img/pin.png"><span style = "font-size: 18px;">286 Blumentritt Rd, Sta. Cruz</span></h4>
                                <br><h4 align="justify">6. College of the Holy Spirit Manila <img src="img/pin.png"><span style = "font-size: 18px;">E. Mendiola St., San Miguel</span></h4>
                                <br><h4 align="justify">7. College De San Juan De Letran <img src="img/pin.png"><span style = "font-size: 18px;">151 Muralla St., San Miguel</span></h4>
                                <br><h4 align="justify">8. De La Salle University<img src="img/pin.png"><span style = "font-size: 18px;">2401 Taft Ave, Malate</span></h4>  
                                <br><h4 align="justify">9. De Ocampo Memorial College<img src="img/pin.png"><span style = "font-size: 18px;">3222 Ramon Magsaysay Blvd</span></h4>
                                <br><h4 align="justify">10. Emilio Aguinaldo College <img src="img/pin.png"><span style = "font-size: 18px;">1113 San Marcelino St., Paco</span></h4>
                                <br><h4 align="justify">11. Far Eastern University <img src="img/pin.png"><span style = "font-size: 18px;">1015 Nicanor Reyes Street, Sampaloc</span></h4>                                
                                <br><h4 align="justify">12. La Consolacion College <img src="img/pin.png"><span style = "font-size: 18px;">8 Mendiola Ext, San Miguel</span></h4>
                                <br><h4 align="justify">13. Manila Central University <img src="img/pin.png"><span style = "font-size: 18px;">Calle Cuatro, Morning Breeze Subdivision</span></h4>
                                <br><h4 align="justify">14. The Manila Times College <img src="img/pin.png"><span style = "font-size: 18px;">371 A., Bonifacio Drive, Port Area</span></h4>
                                <br><h4 align="justify">15. College of Arts, Science, and Technology <img src="img/pin.png"><span style = "font-size: 18px;">1357 Masangkay St., Sta. Cruz</span></h4>
                                <br><h4 align="justify">16. Mary Chiles College <img src="img/pin.png"><span style = "font-size: 18px;">667 Dalupan St., Sampaloc</span></h4>
                                <br><h4 align="justify">17. National University <img src="img/pin.png"><span style = "font-size: 18px;">551 M.F. Jhocson St., Sampaloc</span></h4>                  
                                <br><h4 align="justify">18. Perpetual Help College of Manila <img src="img/pin.png"><span style = "font-size: 18px;">1240 Concepcion St., Sampaloc</span></h4>
                                <br><h4 align="justify">19. Philippine College of Health and Sciences <img src="img/pin.png"><span style = "font-size: 18px;">1813 Recto Ave, Sampaloc</span></h4>                                
                                <br><h4 align="justify">20. Pamantasan ng Lungsod ng Maynila <img src="img/pin.png"><span style = "font-size: 18px;">General Luna, corner Muralla St., Intramuros</span></h4>
                                <br><h4 align="justify">21. Philippine Christian University <img src="img/pin.png"><span style = "font-size: 18px;">1648 Taft Ave, Malate </span></h4>                                
                                <br><h4 align="justify">22. Philippine Women's University <img src="img/pin.png"><span style = "font-size: 18px;">1743 Taft Ave, Malate</span></h4>
                                <br><h4 align="justify">23. Polytechnic University of the Philippines <img src="img/pin.png"><span style = "font-size: 18px;">1016 Anonas, Sta. Mesa</span></h4>
                                <br><h4 align="justify">24. San Beda University <img src="img/pin.png"><span style = "font-size: 18px;">638 Mendiola St., San Miguel</span></h4>                               
                                <br><h4 align="justify">25. St. Paul University <img src="img/pin.png"><span style = "font-size: 18px;">680 Pedro Gif St., Malate</span></h4>
                                <br><h4 align="justify">26. St. Scholastica College <img src="img/pin.png"><span style = "font-size: 18px;">2560 Leon Guinto St., malate</span></h4>
                                <br><h4 align="justify">27. Technological Institute of the Philippines - Manila <img src="img/pin.png"><span style = "font-size: 18px;">363 Pascual Casal St., Quiapo</span></h4>
                                <br><h4 align="justify">28. Technological University of the Philippines <img src="img/pin.png"><span style = "font-size: 18px;">1000 Ayala Blvd, Ermita</span></h4>
                                <br><h4 align="justify">29. University of the East <img src="img/pin.png"><span style = "font-size: 18px;">2219 Recto Ave, Sampaloc</span></h4>
                                <br><h4 align="justify">30. Unciano Colleges and General Hospital <img src="img/pin.png"><span style = "font-size: 18px;">V. Mapa-Guadalcanal St., Sta. Mesa</span></h4>
                                <br><h4 align="justify">31. University of the Philippines <img src="img/pin.png"><span style = "font-size: 18px;">Zone 72, 670 Padre Faura St., Ermita</span></h4>
                                <br><h4 align="justify">32. Universidad De Manila <img src="img/pin.png"><span style = "font-size: 18px;">659-A Cecila Muñoz St., Ermita</span></h4>
                                <br><h4 align="justify">33. University of Santo Tomas <img src="img/pin.png"><span style = "font-size: 18px;">España Blvd, Sampaloc</span></h4>
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