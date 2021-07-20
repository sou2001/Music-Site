<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intensity | Playlist</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/nowfont.css" type="text/css">
    <link rel="stylesheet" href="css/rockville.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header header--normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <a href="./mainpageloggedin.php"><img src="img/logo1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                              <ul>
                                  <li ><a href="./mainpageloggedin.php">Home</a></li>
                                  <li><a href="#">Premium</a></li>
                                  <li><a href="./contactloggedin.php">Help</a></li>
                                  <li class="active"><a>Welcome <b><?php echo $_SESSION['username']?></b></a></li>
                                  <li ><a href="./index.php?logout=1">Logout</a></li>
                              </ul>
                            </ul>
                        </nav>
                        <div class="header__right__social">
                          <a href="https://www.facebook.com/intensity.india.3"target="_blank"><i class="fa fa-facebook"></i></a>
                          <a href="https://twitter.com/IntensityIndia" target="_blank"><i class="fa fa-twitter"></i></a>
                          <a href="https://www.instagram.com/intensityindia/" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Playlist</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Discography Section Begin -->
    <section class="discography spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>Latest Releases</h2>
                        <h1>Playlist</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                            <img src="img/discography/disco-1.jpg" alt="">
                        </div>
                        <div class="discography__item__text">
                          <span>September 15,2020</span>
                            <h4>Master</h4>
                            <a href="dummy.php">  <i class="fa fa-play-circle fa-3x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                            <img src="img/discography/disco-2.jpg" alt="">
                        </div>
                        <div class="discography__item__text">
                            <span>August 1,2020</span>
                            <h4>Jagame Thandhiram</h4>
                            <a href="dummy.php"> <i class="fa fa-play-circle fa-3x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                            <img src="img/discography/disco-3.jpg" alt="">
                        </div>
                        <div class="discography__item__text">
                          <span>July 7,2020</span>
                          <h4>Soorarai Pottru</h4>
                            <a href="dummy.php"><i class="fa fa-play-circle fa-3x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                            <img src="img/discography/disco-4.jpg" alt="">
                        </div>
                        <div class="discography__item__text">
                          <span>June 19,2020</span>
                          <h4>Dil Bechara</h4>
                            <a href="dummy.php"><i class="fa fa-play-circle fa-3x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                            <img src="img/discography/disco-5.jpg" alt="">
                        </div>
                        <div class="discography__item__text">
                          <span>June 1,2020</span>
                          <h4>Doctor</h4>
                          <a href="dummy.php">  <i class="fa fa-play-circle fa-3x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                            <img src="img/discography/disco-6.jpg" alt="">
                        </div>
                        <div class="discography__item__text">
                          <span>March 5,2020</span>
                          <h4>Darbar</h4>
                          <a href="dummy.php">  <i class="fa fa-play-circle fa-3x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="pagination__links">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Discography Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer footer--normal spad set-bg" data-setbg="img/footer-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Phone</p>
                                <h6>044-3435 3435</h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6>intensityindiaoffl@gmail.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2>Intensity</h2>
                        <div class="footer__social__links">
                          <a href="https://www.facebook.com/intensity.india.3"target="_blank"><i class="fa fa-facebook"></i></a>
                          <a href="https://twitter.com/IntensityIndia" target="_blank"><i class="fa fa-twitter"></i></a>
                          <a href="https://www.instagram.com/intensityindia/" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <h4>Connect With Us</h4>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Music Plugin -->
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/jplayerInit.js"></script>
</body>

</html>
