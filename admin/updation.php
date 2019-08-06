<?php

  $fltn=$_POST["fltname"];
  $fltnum=$_POST["fltnum"];
  $citf=$_POST["citf"];
  $citt=$_POST["citt"];
  $tif=$_POST["tif"];
  $tit=$_POST["tit"];
  $capa=$_POST["capa"];
  $pri=$_POST["pri"];

  $conn3 = mysqli_connect("localhost","root","","airlinebooking");
  if (!$conn3) {
    echo "Connection Failed";
    exit();
  }
  $chd= "UPDATE flights SET Flight_name='$fltn',City_from='$citf',City_to='$citt'
  ,Time_from='$tif',Time_to='$tit',Capacity='$capa',Price='$pri' WHERE Flight_no='$fltnum'";
  if (mysqli_query($conn3,$chd)) {
    //echo mysqli_error($conn3);
    echo "Record Updated";
    exit();
  }
  else {
    echo "Error";
    exit();
  }

?>
