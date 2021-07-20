<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/main.css">
  <style>
  .signup{
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


  <div class="container signin-container">
    <div class="row">
      <div class="col"></div>
      <div class="col-sm-12 col-md-8">
        <div class="card signin-card">
          <div class="card-block">
            <a href="./index.php"><img src="img/logo2.png" class="img-fluid signin-img"></a>
            <form class="sigin-form" method="post" id="signupform">
              <!--Sign up message from PHP file-->
              <div id="signupmessage"></div>

                <h1><center>Sign Up</center></h1><br>
                <div class="form-group">
							 <input class="form-control" type="text" name="username" id="username" placeholder="Username" maxlength="30">
              </div>
              <div class="form-group">
                         <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" maxlength="50">
              </div>
              <div class="form-group">
 <input class="form-control" type="password" name="password" id="password" placeholder="Choose a password" maxlength="30">
              </div>
							<div class="form-group">
                <input class="form-control" type="password" name="password2" id="password2" placeholder="Confirm password" maxlength="30">
                </div>


              <input class="btn green" name="signup" type="submit" value="Sign up">
            </form>
          </div>
        </div>
<a href="./loginlayout.php" class="create-new-account">Login</a>
      </div>
      <div class="col"></div>
    </div>

</div>
  </div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>

</html>
