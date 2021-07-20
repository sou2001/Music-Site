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
    <title>Intensity | Festivals</title>

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
                              <li ><a href="./mainpageloggedin.php">Home</a></li>
                              <li><a href="#">Premium</a></li>
                              <li><a href="./contactloggedin.php">Help</a></li>
                              <li class="active"><a>Welcome <b><?php echo $_SESSION['username']?></b></a></li>
                              <li ><a href="./index.php?logout=1">Logout</a></li>

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

    <!-- Countdown Section Begin -->
    <section class="countdown countdown--page spad set-bg" data-setbg="img/countdown-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="countdown__text">
                        <h1>Tomorrowland 2020</h1>
                        <h4>Music festival start in</h4>
                    </div>
                    <div class="countdown__timer" id="countdown-time">
                        <div class="countdown__item">
                            <span>20</span>
                            <p>days</p>
                        </div>
                        <div class="countdown__item">
                            <span>45</span>
                            <p>hours</p>
                        </div>
                        <div class="countdown__item">
                            <span>18</span>
                            <p>minutes</p>
                        </div>
                        <div class="countdown__item">
                            <span>09</span>
                            <p>seconds</p>
                        </div>
                    </div>
                    <div class="buy__tickets">
                        <a href="#" class="primary-btn">Buy tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Countdown Section End -->

    <!-- Tours Section Begin -->
    <section class="tours spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1">
                    <div class="tours__item__text">
                        <h2> Electric Daisy Carnival 2020</h2>
                        <div class="tours__text__widget">
                            <ul>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <span>8:00pm</span>
                                    <span>Dec 15, 2020</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    Las Vegas, Nevada, USA
                                </li>
                            </ul>
                            <div class="price">Rs 9,585 | $ 135.00</div>
                        </div>
                        <div class="tours__text__desc">
                            <p>This classic rave, held in Las Vegas, is one of the biggest electronic dance music festivals in the world. The largest outside Europe, it embraces trap, bounce, trance, techno, bass, house, hard-style, and more.
                            </p>
                            <p>Also held in Puerto Rico, Mexico and New York City, the festival rose from the underground in 2014 with the Sundance Film Festival documentary EDC 2013: Under The Electric Sky, which was based on the event.</p>
                        </div>
                        <a href="https://lasvegas.electricdaisycarnival.com/" target="_blank" class="primary-btn border-btn">Buy tickets</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="tours__item__pic">
                        <img src="img/tours/tour-1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-4">
                    <div class="tours__item__text tours__item__text--right">
                        <h2>Essence 2021</h2>
                        <div class="tours__text__widget">
                            <ul>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <span>7:00pm</span>
                                    <span>Aug 30, 2021</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    New Orleans, Louisiana, USA
                                </li>
                            </ul>
                            <div class="price">Rs 6,035 | $ 85.00</div>
                        </div>
                        <div class="tours__text__desc">
                            <p>Started in 1994 to celebrate the 25th anniversary of Essence, a magazine for African-American women, the event has grown into the largest music festival of African-American culture in the United States.</p>
                            <p>Soundtracking the leap from 2019 into 2020 in what is one of the most anticipated nights
                                of the year, in one of the city’s most hyped venues, HYTE Berlin NYE is the</p>
                        </div>
                        <a href="https://www.essence.com/essence-festival-2020-unstoppable-june-25-28-july-2-5-virtual-edition/" target="_blank" class="primary-btn border-btn">Buy tickets</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-3">
                    <div class="tours__item__pic tours__item__pic--left">
                        <img src="img/tours/tour-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-5">
                    <div class="tours__item__text">
                        <h2>Donauinselfest 2021</h2>
                        <div class="tours__text__widget">
                            <ul>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <span>8:00pm</span>
                                    <span>Oct 13, 2021</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                  Vienna, Austria
                                </li>
                            </ul>
                            <div class="price">Rs 16,685 | $ 235.00</div>
                        </div>
                        <div class="tours__text__desc">
                            <p>Vienna has long been home to musical geniuses, with luminaries such as Mozart being previous residents, so it’s no surprise it’s now home to the biggest festival in the world.</p>
                            <p>With more than 200 acts on 11 stages, there’s a huge variety of music, and in 2017, one of the headliners will be a tribute concert to music legend Falco.</p>
                        </div>
                        <a href="https://donauinselfest.at/?nofade" target="_blank" class="primary-btn border-btn">Buy tickets</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-6">
                    <div class="tours__item__pic tours__item__pic--last">
                        <img src="img/tours/tour-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tours Section End -->

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
                                <h6>044- 3435 3435</h6>
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
