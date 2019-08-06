<?php
session_start();
if(!isset($_SESSION["email"])){
  header("location:../user/index2.php");}
  $id=$_SESSION["email"];
  $fname=$_POST["fname"];
  $add=$_POST["add"];
  $phno=$_POST["phno"];
  $dob=$_POST["dob"];
  $pass=$_POST["pass"];
  $em=$_POST["em"];
   $target_dir = "../user/dp/";
$filename = $_FILES["dp"]["name"];
$fileext  = explode(".",$filename);
$imageFileType = $fileext[1];
$uploadOk = 1;
echo $filename.$imageFileType;
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["dp"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check file size
if ($_FILES["dp"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	$newfilename = date("Y-m-d h-i-sa").'.'.$imageFileType;
	$target_file = $target_dir.$newfilename;
    if (move_uploaded_file($_FILES["dp"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["dp"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

  $con=mysqli_connect("localhost","root","","airlinebooking");
  $query="update user set fullname='$fname', address='$add',ph_number='$phno', dob='$dob', password='$pass', dp='$newfilename' where emailid='$em'";
  if(mysqli_query($con,$query))
  {
  	echo '<script> alert("record updated successfully")
  	window.location="admin.php";
  	</script>';
  }
  else
  	echo "updation error";
}
?>
