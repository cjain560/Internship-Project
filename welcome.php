<?php

session_start();
 

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" >
    <style type="text/css">
        body{ font: 56px; text-align: center; }
    </style>
</head>
<form class="form-inline">
    <a href="logout.php" class="btn btn-danger" style="    position: absolute;
    top: 10px;
    right: 10px;    padding: 11px 12px;" 
>Sign Out of Your Account</a>
  </form>
<body style="background-color: #04c0dc">
    <div class="page-header" style="padding-bottom: 105px; border-bottom: 0px solid #eee;">
        <h1 style="color:#ffffff; font-size: 51px; margin-top: 180px;
    margin-bottom: 10px;
    margin-left: 29px;    font-weight: 100">Welcome to <br> </h1>
    <h1 style="color:#ffffff; font-size: 162px; margin-top: -10px;
    font-weight: 350;margin-left: 367px;float:left"> Park.Le </h1>
    <img class="mb-4" src="WhatsApp Image 2018-07-10 at 11.54.54.jpeg" alt="" width="200" height="240" style="margin-left: -236px;margin-top: -41px">
</div>
<div>

        <a href="Booking.php" class="btn btn-primary" style="; background-color:#005b7f;    padding: 10px 43px;line-height: 2.428571;    margin-top: -204px;
   border-radius: 17px;    margin-left: -21px;">BOOK YOUR PARKING</a>
</div>
<div>
        <a href="details.php" class="btn btn-primary" style="background-color:#0076a3;    padding: 6px 33px;line-height: 2.428571;font-size: 13px;margin-top: -18px;    border-radius: 49px;
    float: left;
    margin-left: 233px;
">ENTER YOUR DETAILS</a>
        <a href ="upcoming.php" class="btn btn-primary"style=" background-color:#0076a3;    padding: 6px 33px;line-height: 2.428571;font-size: 13px;margin-top: -18px;border-radius: 49px;    margin-left: -28.5px;">UPCOMING EVENTS</a>
        <a href="support.php" class="btn btn-primary"style=" background-color:#0076a3;    padding: 6px 33px;line-height: 2.428571;font-size: 13px;margin-top: -18px;border-radius: 49px;margin-right: 291px;float: right;">SUPPORT</a>

    
      </div>  
    </p>

</body>
</html>