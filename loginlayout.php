<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="css/barfiller.css" type="text/css">
	<link rel="stylesheet" href="css/nowfont.css" type="text/css">
	<link rel="stylesheet" href="css/rockville.css" type="text/css">
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/main.css">
  <style>
  .login{
      margin-top: 40px;

  }

  .green{
      background-color:#1ad1ff;
      margin-left: 15%;
      width: 70%;
  }

  .green:hover{
      background-color:  #00e6e6;
  }
</style>
</head>
<body class="sigin-body">
  <div id="preloder">
      <div class="loader"></div>
  </div>

  <div class="container signin-container">
    <div class="row">
      <div class="col"></div>
      <div class="col-sm-12 col-md-8">
        <div class="card signin-card">
          <div class="card-block">
            <a href="./index.php"><img src="img/logo2.png" class="img-fluid signin-img"></a>
            <form class="sigin-form" method="post" id="loginform">
              <!--Sign up message from PHP file-->
              <div id="loginmessage"></div>

                <h1><center>Log In</center></h1><br>

              <div class="form-group">
                         <input class="form-control" type="email" name="loginemail" id="loginemail" placeholder="Email Address" maxlength="50">
              </div>
              <div class="form-group">
 <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="Password" maxlength="30">
              </div>
              <input class="btn green" name="login" type="submit" value="Log In">
            </form>
          </div>
        </div>
<a href="./signuplayout.php" class="create-new-account">Create New Account</a>
      </div>
      <div class="col"></div>
    </div>

</div>
  </div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/jquery.barfiller.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
  <script src="javascript.js"></script>
</body>

</html>
