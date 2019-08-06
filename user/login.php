<?php
$em=$_POST["email"];
$pass=$_POST["pswd"];
$con = mysqli_connect("localhost","root","","airlinebooking");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
{
  	echo "connected successfully"."<br>";
  	$que1="select emailid from user where emailid='$em' AND password='$pass'";
  	$que2="select emailid from admin where emailid='$em' AND password='$pass'";
  	$res1=mysqli_query($con,$que1);
  	$res2=mysqli_query($con,$que2);
  	$count=mysqli_num_rows($res1);
  	$countt=mysqli_num_rows($res2);
  	if($count>0)
  	{
  		session_start();
  		$_SESSION["email"]=$em;
  		header("location:../Myaccount.php");
  	}else if($countt > 0){
  		session_start();
  		$_SESSION["email"] = $em;
  		echo $_SESSION["email"];
  		header("location:../admin/admin.php");
  	}else{
  		echo '<script> alert("wrong username-password")
  	window.location="../index.php";
  	</script>';
  	}

}
?>
