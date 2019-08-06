<?php
  $db = mysqli_connect('localhost','root','','airlinebooking');
  if (isset($_POST["email_check"])) {
    echo "sar";
    exit();
  	$email = $_POST['email'];
  	$sql = "SELECT * FROM user WHERE emailid='$email'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";
  	  exit();
  	}else{
  	  echo "not_taken";
  	}
  }
  if (isset($_POST['save'])) {
  	$fullname = $_POST['fullname'];
  	$add = $_POST['address'];
  	$phone = $_POST['phone'];
  	$dob = $_POST['dob'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];
  	$sql = "SELECT * FROM user WHERE emailid='$email'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "exists";
  	  exit();
  	}else{
  	  $query = "INSERT INTO user (fullname, address, ph_number,dob,emailid,password)
  	       	VALUES ('$fullname', '$add', '$phone','$dob','$email','$password')";
  	  $results = mysqli_query($db, $query);
  	  echo "Saved!";
  	  exit();
  	}
  }

?>
