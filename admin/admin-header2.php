<?php session_start(); ?>

<?php include('../server/connection.php');

//this is for admin login header?>



<!DOCTYPE html>
<html lang="zxx">

<head>
    <link rel="icon" href="img/kk1.png">
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/plyr.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">



</head>
<body>
 
        <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="../index.php">
                            <img src="../img/kkk.png" alt="" width=1100px>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li ><a href="../index.php">Home</a></li>
                                <li ><a href="../aboutus.php">About Us</a></li>
                                <li ><a href="../featured-schools.php">Featured Schools</a></li>
                                <li ><a href="../student-faqs.php">FAQs</a></li>
                                
                                <li><img src="../img/iconic.png" alt="" width=20px height=20px> <span class="arrow_wcarrot-down"></span>
                                    <ul class="dump">
                                        <!--WILL ONLY SHOW IF ADMIN IS LOGGED IN-->
                                        <?php if (isset($_SESSION['admin_logged_in'])):?>
                                         <li><a href="admin/admin-account.php">Dashboard</a></li>
                                         <!--WILL ONLY SHOW IF STUDENT IS LOGGED IN-->
                                         <?php elseif (isset($_SESSION['user_logged_in'])):?>
                                         <li><a href="student-account.php">Account Profile</a></li>
                                         <li><a href="#">Take the Assessment</a></li>
                                         <li><a href="#">Assessment Results</a></li>
                                         <li><a href="student-logout.php">Log out</a></li>
                                        <?php else: ?>
                                            <!--WILL ONLY SHOW IF NOONE IS LOGGED IN-->
                                            <li><a href="../student-login.php">Login</a></li>
                                        <li><a href="../student-register.php">Register</a></li>
                                        <?php endif;?>

                                        
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

</body>
