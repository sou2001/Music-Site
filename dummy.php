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
    <nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2 abs" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
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
    <div class="container headd">
<div class="row">
  <div class="col-lg-3"></div>
    <div class="col-lg-7 p-0">
        <div class="track__content nice-scroll">
            <div class="single_player_container">
                <h4>Kutti Story </h4>
                <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1"
                    data-url="music-files/kutti.mp3"></div>
                <div class="jp-audio jp_container_1" role="application" aria-label="media player">
                    <div class="jp-gui jp-interface">
                        <!-- Player Controls -->
                        <div class="player_controls_box">
                            <button class="jp-play player_button" tabindex="0"></button>
                        </div>
                        <!-- Progress Bar -->
                        <div class="player_bars">
                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                    <div>
                                        <div class="jp-play-bar">
                                            <div class="jp-current-time" role="timer" aria-label="time">0:00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                        </div>
                        <!-- Volume Controls -->
                        <div class="jp-volume-controls">
                            <button class="jp-mute" tabindex="0"><i
                                    class="fa fa-volume-down"></i></button>
                            <div class="jp-volume-bar">
                                <div class="jp-volume-bar-value" style="width: 0%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_player_container">
                <h4>Vaathi Coming</h4>
                <div class="jp-jplayer jplayer" data-ancestor=".jp_container_2"
                    data-url="music-files/vaathi.mp3"></div>
                <div class="jp-audio jp_container_2" role="application" aria-label="media player">
                    <div class="jp-gui jp-interface">
                        <!-- Player Controls -->
                        <div class="player_controls_box">
                            <button class="jp-play player_button" tabindex="0"></button>
                        </div>
                        <!-- Progress Bar -->
                        <div class="player_bars">
                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                    <div>
                                        <div class="jp-play-bar">
                                            <div class="jp-current-time" role="timer" aria-label="time">0:00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                        </div>
                        <!-- Volume Controls -->
                        <div class="jp-volume-controls">
                            <button class="jp-mute" tabindex="0"><i
                                    class="fa fa-volume-down"></i></button>
                            <div class="jp-volume-bar">
                                <div class="jp-volume-bar-value" style="width: 0%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_player_container">
                <h4>Vaathi Raid</h4>
                <div class="jp-jplayer jplayer" data-ancestor=".jp_container_3"
                    data-url="music-files/vaathiraid.mp3"></div>
                <div class="jp-audio jp_container_3" role="application" aria-label="media player">
                    <div class="jp-gui jp-interface">
                        <!-- Player Controls -->
                        <div class="player_controls_box">
                            <button class="jp-play player_button" tabindex="0"></button>
                        </div>
                        <!-- Progress Bar -->
                        <div class="player_bars">
                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                    <div>
                                        <div class="jp-play-bar">
                                            <div class="jp-current-time" role="timer" aria-label="time">0:00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                        </div>
                        <!-- Volume Controls -->
                        <div class="jp-volume-controls">
                            <button class="jp-mute" tabindex="0"><i
                                    class="fa fa-volume-down"></i></button>
                            <div class="jp-volume-bar">
                                <div class="jp-volume-bar-value" style="width: 0%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_player_container">
                <h4>Quit Pannuda</h4>
                <div class="jp-jplayer jplayer" data-ancestor=".jp_container_5"
                    data-url="music-files/quit.mp3"></div>
                <div class="jp-audio jp_container_5" role="application" aria-label="media player">
                    <div class="jp-gui jp-interface">
                        <!-- Player Controls -->
                        <div class="player_controls_box">
                            <button class="jp-play player_button" tabindex="0"></button>
                        </div>
                        <!-- Progress Bar -->
                        <div class="player_bars">
                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                    <div>
                                        <div class="jp-play-bar">
                                            <div class="jp-current-time" role="timer" aria-label="time">0:00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                        </div>
                        <!-- Volume Controls -->
                        <div class="jp-volume-controls">
                            <button class="jp-mute" tabindex="0"><i
                                    class="fa fa-volume-down"></i></button>
                            <div class="jp-volume-bar">
                                <div class="jp-volume-bar-value" style="width: 0%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_player_container">
                <h4>Andha Kanna Paathaka</h4>
                <div class="jp-jplayer jplayer" data-ancestor=".jp_container_4"
                    data-url="music-files/Andha.mp3"></div>
                <div class="jp-audio jp_container_4" role="application" aria-label="media player">
                    <div class="jp-gui jp-interface">
                        <!-- Player Controls -->
                        <div class="player_controls_box">
                            <button class="jp-play player_button" tabindex="0"></button>
                        </div>
                        <!-- Progress Bar -->
                        <div class="player_bars">
                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                    <div>
                                        <div class="jp-play-bar">
                                            <div class="jp-current-time" role="timer" aria-label="time">0:00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                        </div>
                        <!-- Volume Controls -->
                        <div class="jp-volume-controls">
                            <button class="jp-mute" tabindex="0"><i
                                    class="fa fa-volume-down"></i></button>
                            <div class="jp-volume-bar">
                                <div class="jp-volume-bar-value" style="width: 0%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single_player_container">
                <h4>Polakattum Para Para</h4>
                <div class="jp-jplayer jplayer" data-ancestor=".jp_container_6"
                    data-url="music-files/para.mp3"></div>
                <div class="jp-audio jp_container_6" role="application" aria-label="media player">
                    <div class="jp-gui jp-interface">
                        <!-- Player Controls -->
                        <div class="player_controls_box">
                            <button class="jp-play player_button" tabindex="0"></button>
                        </div>
                        <!-- Progress Bar -->
                        <div class="player_bars">
                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                    <div>
                                        <div class="jp-play-bar">
                                            <div class="jp-current-time" role="timer" aria-label="time">0:00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                        </div>
                        <!-- Volume Controls -->
                        <div class="jp-volume-controls">
                            <button class="jp-mute" tabindex="0"><i
                                    class="fa fa-volume-down"></i></button>
                            <div class="jp-volume-bar">
                                <div class="jp-volume-bar-value" style="width: 0%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
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
