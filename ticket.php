<?php
session_start();
if(!isset($_SESSION["email"])){
  header("location:index.php");
}
$id=$_SESSION["email"];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>SkYatra</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css">
</head>
<body>
  <header>
    <img src="image/logo.png" style="margin-left:2%;margin-top:2%;margin-bottom:2%;" width="15%" alt="" class="img-thumbnail">
    <a href="logout.php" style="float:right;margin-right:7%;" class="btn btn-light"> <i class="fa fa-sign-out-alt"> Logout </i></a>
    <a href="Myaccount.php" style="float:right;" class="btn btn-light"> <i class="fa fa-user"> Myaccount </i></a>
  </header>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>PNR</th>
        <th>Passenger Name</th>
        <th>Date of Journey</th>
        <th>Mobile number</th>
        <th>Email-id</th>
        <th>Flight id</th>
        <th>Source</th>
        <th>Destination</th>
        <th>Departure</th>
        <th>Arrival</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</body>
</html>
