<?php
//<!--Start session-->
session_start();
include('connection.php');


$errors='';
$missingmovie = '<p><strong>Please enter a Movie Name !</strong></p>';
 $missingshowtime = '<p><strong>Please enter your Show Time!</strong></p>';
$invaliddate = '<p><strong>Please enter a Date!</strong></p>';
$missingnooftickets = '<p><strong>Please enter a num of tickets!</strong></p>';
$invalidEmail = '<p><strong>Please enter a email!</strong></p>';


if(empty($_POST["moviename"])){
    $errors .= $missingmovie;
}else{
    $moviename = filter_var($_POST["moviename"], FILTER_SANITIZE_STRING);
}

if(empty($_POST["email"])){
    $errors .= $missingEmail;
}else{
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors .= $invalidEmail;
    }
}

if(empty($_POST["showtime"])){
    $errors .= $missingshowtime;
}else{
    $showtime = filter_var($_POST["showtime"], FILTER_SANITIZE_STRING);
   
}
if(empty($_POST["numOftickets"])){
    $errors .= $missingnooftickets;
}else{
    $numoftickets = filter_var($_POST["numOftickets"], FILTER_SANITIZE_STRING);
   
}

if($errors){
    $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
    echo $resultMessage;
    exit;
}


$moviename = mysqli_real_escape_string($link, $moviename);
$email = mysqli_real_escape_string($link, $email);
$showtime = mysqli_real_escape_string($link, $showtime);
$numoftickets = mysqli_real_escape_string($link, $numoftickets);


$sql = "SELECT * FROM bookings WHERE moviename = '$moviename'";
$result = mysqli_query($link, $sql);
if(!$result){
//  echo '<div class="alert alert-danger">Error running the query!</div>';
    echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';
    exit;
}
$results = mysqli_num_rows($result);
if($results){
    echo '<div class="alert alert-danger">That username is already registered. Do you want to log in?</div>';  exit;
}
//If email exists in the users table print error
$sql = "SELECT * FROM bookings WHERE email = '$email'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">Error running the query!</div>'; exit;
}
$results = mysqli_num_rows($result);
if($results){
    echo '<div class="alert alert-danger">That email is already registered. Do you want to log in?</div>';  exit;
}



$sql = "INSERT INTO users (`moviename`, `email`, `showtime`,'numoftickets') VALUES ('$moviename', '$email', '$showtime','$numoftickets')";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">There was an error inserting the  details in the database!</div>';
    exit;
}
else
{
       echo "<div class='alert alert-success'>Datas inserted "."<strong>$email</strong>"." has been activated successfully !</div>";
}

?>
