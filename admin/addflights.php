<?php
session_start();
if(!isset($_SESSION["email"])){
  header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/mystyle.css">

</head>
<body>
  <?php
  if(isset($_POST["add"])){
    $flname=$_POST["flnm"];
    $flnum=$_POST["flnum"];
    $ctf=$_POST["ctf"];
    $ctt=$_POST["ctt"];
    $tf=$_POST["tf"];
    $tt=$_POST["tt"];
    $cap=$_POST["cap"];
    $pr=$_POST["pr"];
    $conn = mysqli_connect("localhost", "root", "","airlinebooking");
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error($conn));
    }else{
      $sql = "INSERT INTO `flights` (Flight_name,Flight_no,City_from,City_to,Time_from,Time_to,Capacity,Price)
      VALUES ('$flname', '$flnum', '$ctf','$ctt','$tf','$tt','$cap','$pr')";
      if (mysqli_query($conn,$sql) === TRUE) {
        echo "<script>alert('Record has been added')</script>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  }
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <!--<center><h1 style="margin-top: 10px;">ADMIN PANEL</h1></center>-->
      </div>
      <div class="col-md-8">
        <h1 >ADD FLIGHTS</h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div  id="mySidenav" class="sidenav">
          <a href="admin.php" id="myac">MY ACCOUNT</a>
          <a href="addflights.php" id="about">Add flights</a>
          <a href="displayflights.php" id="blog">Display Flights</a>
          <a href="updateflights.php" id="projects">Update flights</a>
          <a href="deleteflights.php" id="contact">Delete Flights</a>
          <a href="displayuser.php" id="about1">Display User</a>
          <a href="updateuser.php" id="blog1">Update User</a>
          <a href="deleteuser.php" id="contact1">Delete User</a>
          <a href="../user/logout.php" id="log">logout</a>
        </div>
      </div>
      <div class="col-md-9">
        <form action="" method="post">
          <div class="form-group">
            <label for="flightname"></label>
            <input type="text" class="form-control" id="flightname" name="flnm" placeholder="Enter flight name">
          </div>
          <div class="form-group">
            <label for="flightnumber"></label>
            <input type="text" class="form-control" id="flightnumber" name="flnum" placeholder="Enter flight number">
          </div>
          <div class="form-group">
            <label for="cityf"></label>
            <input type="text" class="form-control" id="cityf" name="ctf" placeholder="Enter City(from)" >
          </div>
          <div class="form-group">
            <label for="cityt"></label>
            <input type="text" class="form-control" id="cityt" name="ctt" placeholder="Enter City(to)">
          </div>
          <div class="form-group">
            <label for="timef"></label>
            <input type="time" class="form-control" id="timef" name="tf" placeholder="Departure">
          </div>
          <div class="form-group">
            <label for="timet"></label>
            <input type="time" class="form-control" id="timet" name="tt" placeholder="Arrival">
          </div>
          <div class="form-group">
            <label for="capacity"></label>
            <input type="text" class="form-control" id="capacity" name="cap" placeholder="Capacity">
          </div>
          <div class="form-group">
            <label for="price"></label>
            <input type="text" class="form-control" id="price" name="pr" placeholder="Price">
          </div>
          <button style="margin-left:40%; padding: 20px;" type="submit" class="btn btn-primary" name="add">ADD</button>
        </form>
      </div>
    </div>
  </body>
  </html>
