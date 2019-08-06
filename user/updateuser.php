<?php
session_start();
if(!isset($_SESSION["email"])){
  header("location:index2.php");}
  $id=$_SESSION["email"];
  $fname=$_POST["fname"];
  $add=$_POST["add"];
  $phno=$_POST["phno"];
  $dob=$_POST["dob"];  
  $pass=$_POST["pass"];
  $con=mysqli_connect("localhost","root","","airlinebooking");
  $query="update user set fullname='$fname', address='$add',ph_number='$phno', dob='$dob', password='$pass' where emailid='$id'";
  if(mysqli_query($con,$query))
  {
  	echo '<script> alert("record updated successfully")
  	window.location="user.php";
  	</script>';
  }
  else
  	echo "updation error";
?>