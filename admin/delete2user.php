<?php
session_start();
if(!isset($_SESSION["email"])){
  header("location:../user/index2.php");}
  $id=$_SESSION["email"];
  $em=$_POST["em"];
  $con=mysqli_connect("localhost","root","","airlinebooking");
  $query="delete from user where emailid='$em'";
  if(mysqli_query($con,$query))
  {
  	echo '<script> alert("record deleted successfully")
  	window.location="admin.php";
  	</script>';
  }
  else
  	echo "deletion error";
?>