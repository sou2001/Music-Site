<?php
session_start();
include('connection.php');

//logout
include('logout.php');
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Intensity ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intensity</title>


    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">


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
    <!--  Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- header section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.php">Home</a></li>
                                <li><a href="#">Premium</a></li>
                                <li><a href="./contact.php">Help</a></li>
                                <li><a href="./signuplayout.php">Sign Up</a></li>
                                <li><a href="./loginlayout.php">Log In</a></li>

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
    <!-- header section End -->

    <!-- hero section Begin -->
    <section class="hero spad set-bg" data-setbg="img/hero-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <span>When Words Fail</span>
                        <h1>Intensity Speaks</h1><br>
                        <span>Every Decibel Counts</span><br><br>
                        <a href="https://www.youtube.com/watch?v=pOKhpp58WlU" class="play-btn "><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="linear__icon">
            <i class="fa fa-angle-double-down"></i>
        </div>
    </section>
    <!-- hero section End -->




    <!-- Youtube Section Begin -->
    <section class="youtube spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>News feed</h2>
                        <h1>Latest News</h1>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="videos__slider owl-carousel">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="youtube__item">
                      <blockquote class="twitter-tweet"><p lang="en" dir="ltr">We&#39;ll Miss your Voice Forever <a href="https://twitter.com/hashtag/SPB?src=hash&amp;ref_src=twsrc%5Etfw">#SPB</a> garu 🙏 <a href="https://t.co/jsRYiudkho">pic.twitter.com/jsRYiudkho</a></p>&mdash; Ajay Bhupathi (@DirAjayBhupathi) <a href="https://twitter.com/DirAjayBhupathi/status/1309509313933619200?ref_src=twsrc%5Etfw">September 25, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="youtube__item">
                          <blockquote class="twitter-tweet"><p lang="en" dir="ltr">♥️ if you’re clowning around; comment if you’re stopping to smell the 🌹 <a href="https://twitter.com/hashtag/smileofficialmusicvideocomestomorrowidk?src=hash&amp;ref_src=twsrc%5Etfw">#smileofficialmusicvideocomestomorrowidk</a> <a href="https://t.co/Zr5YyT5zGw">pic.twitter.com/Zr5YyT5zGw</a></p>&mdash; KATY PERRY (@katyperry) <a href="https://twitter.com/katyperry/status/1293711837570019328?ref_src=twsrc%5Etfw">August 13, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="youtube__item">
                      <blockquote class="twitter-tweet" width="350"><p lang="en" dir="ltr">Brendon is my nibbling and this is their story...Draw With Me is a short film about accepting change and challenges with love knowing when we do everything is possible 🌸 (cont...)</p>&mdash; jlo (@JLo) <a href="https://twitter.com/JLo/status/1297264366157529089?ref_src=twsrc%5Etfw">August 22, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                        </div>
                  </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Youtube Section End -->
    <!-- Services Section Begin -->
    <section class="services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="services__left set-bg" data-setbg="img/services/service-left.jpg">
                     <h1 class="he">The Power of Premium</h1>

                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="row services__list">
                        <div class="col-lg-6 p-0 order-lg-4 col-md-6 order-md-1">
                            <div class="service__item deep-bg">
                                <img src="img/services/pay.png" alt="">
                                <h4>Pay your way</h4>
                                <p>Subscribe or prepay with Paytm, UPI, and more.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-2 col-md-6 order-md-2">
                            <div class="service__item">
                                <img src="img/services/playback.png" alt="">
                                <h4>Offline playback</h4>
                                <p>Save your data by listening offline.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-1 col-md-6 order-md-3">
                            <div class="service__item deep-bg">
                                <img src="img/services/inter.png" alt="">
                                <h4>No interruptions</h4>
                                <p>Play the music you love, ad-free.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-3 col-md-6 order-md-4">
                            <div class="service__item ">
                                <img src="img/services/ads.png" alt="">
                                <h4>Play Intensity everywhere</h4>
                                <p>Listen on your favorite devices..</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Countdown Section Begin -->
    <section class="countdown spad set-bg" data-setbg="img/countdown-bg.jpg">
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
                        <a href="./tours.php" class="primary-btn">Buy tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Countdown Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad set-bg" data-setbg="img/footer-bg.png">
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
                          <div class="footer__social__links">
                      <a href="https://www.facebook.com/intensity.india.3"target="_blank"><i class="fa fa-facebook"></i></a>
                      <a href="https://twitter.com/IntensityIndia" target="_blank"><i class="fa fa-twitter"></i></a>
                      <a href="https://www.instagram.com/intensityindia/" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>

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
