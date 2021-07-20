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
                        <a href="./mainpageloggedin.php"><img src="img/logo1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./mainpageloggedin.php">Home</a></li>
                                <li><a href="#">Premium</a></li>
                                <li><a href="./contactloggedin.php">Help</a></li>
                                <li class="active"><a>Welcome <b><?php echo $_SESSION['username']?></b></a></li>
                                <li ><a href="./index.php?logout=1">Logout</a></li>
                            </ul>
                        </nav>
                        <div class="header__right__social">
                        <a href="#"target="_blank"><i class="fa fa-user fa-2x" aria-hidden="true"></i></a>

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
    <!-- Track Section Begin -->
    <section class="track spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>Latest tracks</h2>
                        <h1>Music podcast</h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="track__all">
                        <a href="./discography.php" class="primary-btn border-btn">View all tracks</a>
                    </div>
                </div>
            </div>
            <div class="row">
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
                            <h4>Veyyon Silli</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_2"
                                data-url="music-files/Veyyon.mp3"></div>
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
                            <h4>Chumma Kizhi</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_3"
                                data-url="music-files/Chumma.mp3"></div>
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
                            <h4>Unna Nenachu</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_5"
                                data-url="music-files/unna.mp3"></div>
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
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_4"
                                data-url="music-files/3.mp3"></div>
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
                            <h4>Unakaga</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_6"
                                data-url="music-files/unakaga.mp3"></div>
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
                <div class="col-lg-5 p-0">
                    <div class="track__pic">
                        <img src="img/bck1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Track Section End -->

    <!-- event section Begin -->

    <section class="event spad">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Artists</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/anirudh1.jpg">
                            </div>
                            <div class="event__item__text">
                                <h4>Anirudh Ravichander</h4>
                                <p><a href="./discography.php"><i class="fa fa-play-circle fa-3x"></a></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/yuvan2.jpg">
                            </div>
                            <div class="event__item__text">
                                <h4>Yuvan Shankar Raja</h4>
                              <p><a href="./discography.php"><i class="fa fa-play-circle fa-3x"></a></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/arr2.jpg">
                            </div>
                            <div class="event__item__text">
                                <h4>AR Rahman</h4>
                                <p><a href="./discography.php"><i class="fa fa-play-circle fa-3x"></a></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/gv1.jpg">
                            </div>
                            <div class="event__item__text">
                                <h4>G V Prakash Kumar</h4>
                                <p><a href="./discography.php"><i class="fa fa-play-circle fa-3x"></a></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/harris1.jpg">
                            </div>
                            <div class="event__item__text">
                                <h4>Harris Jayaraj</h4>
                                <p><a href="./discography.php"><i class="fa fa-play-circle fa-3x"></a></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/san.jpg">
                            </div>
                            <div class="event__item__text">
                                <h4>Santosh Narayanan</h4>
                                <p><a href="./discography.php"><i class="fa fa-play-circle fa-3x"></a></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/hht3.jpg">
                            </div>
                            <div class="event__item__text">
                                <h4>Hip Hop Thamizha</h4>
                                <p><a href="./discography.php"><i class="fa fa-play-circle fa-3x"></a></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/imman.jpg">
                            </div>
                            <div class="event__item__text">
                                <h4>D Imman</h4>
                                <p><a href="./discography.php"><i class="fa fa-play-circle fa-3x"></a></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/sam.jpg">
                            </div>
                            <div class="event__item__text">
                                <h4>Sam CS</h4>
                                <p><a href="./discography.php"><i class="fa fa-play-circle fa-3x"></a></i></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Genres</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event__slider owl-carousel">
                  <div class="col-lg-4">
                      <div class="event__item">
                          <div class="event__item__pic set-bg" data-setbg="img/events/edm.jpg">
                          </div>
                          <div class="event__item__text">
                              <h4>Electronic</h4>
                            <p><a href="./discography.php"><i class="fa fa-play-circle fa-3x"></a></i></p>
                          </div>
                      </div>
                  </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/rock1.jpg">
                            </div>
                            <div class="event__item__text">
                                <h4>Rock</h4>
                              <p><a href="./discography.php"><i class="fa fa-play-circle fa-3x"></a></i></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/drake.jpg">

                            </div>
                            <div class="event__item__text">
                                <h4>Rap</h4>
                                <p><a href="./discography.php"><i class="fa fa-play-circle fa-3x"></a></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/jazz.jpg">
                            </div>
                            <div class="event__item__text">
                                <h4>Jazz</h4>
                              <p><a href="./discography.php"><i class="fa fa-play-circle fa-3x"></a></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/pop.jpg">
                            </div>
                            <div class="event__item__text">
                                <h4>Pop</h4>
                              <p><a href="./discography.php"><i class="fa fa-play-circle fa-3x"></a></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

    <!-- Event Section End -->
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
                        <a href="./toursloggedin.php" class="primary-btn">Buy tickets</a>
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
