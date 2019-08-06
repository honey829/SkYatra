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
<body style="color:white">
  <div class="container">
    <h1 style="margin-top:10px;font-size:35px;text-align:center;">DISPLAY FLIGHTS</h1>
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
        </div>
      </div>
      <div class="col-md-9">
        <form action="" method="post">
          <div class="form-group">
            <label for="flightnumber"></label>
            <input type="text" class="form-control" id="flightnumber" name="flnum" placeholder="Enter flight number">
          </div>
          <button style="margin-left:40%; padding: 20px;" type="submit" name="disf" class="btn btn-info">Display</button>
        </form>
      </div>
    </div>
  </div>
  <?php
  if(isset($_POST["disf"])){
    $flnum=$_POST["flnum"];
    $conn = mysqli_connect("localhost","root","","airlinebooking");
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $fln=explode(",",$flnum);
    foreach ($fln as $flna){
    $qu="select * from flights where Flight_no='$flna'";
    $res=mysqli_query($conn,$qu);
    echo '<div class="container" style="margin-top:5%;color:#17a2b8;float:right;">';
      while($res2=mysqli_fetch_assoc($res)){
        echo '
        <div class="row" style="margin-top:2%;">
          <div class="col-3" style="text-align:center;">';
            if($res2["Flight_name"]=="indigo"){
              echo '<img src="../image/indigo.png" alt="indigo logo">';
            }else if($res2["Flight_name"]=="goair"){
              echo '<img src="../image/goair.jpg" alt="goair logo">';
            }else{
              echo '<img src="../image/airasia.png" alt="airasia logo">';
            }
            echo '</div>';
            $dtime = $res2["Time_from"];
            $dep_time = explode(":",$dtime);
            $atime = $res2["Time_to"];
            $arr_time = explode(":",$atime);
            $city_from = $res2["City_from"];
            $city_to = $res2["City_to"];
            $price = $res2["Price"];
            echo '<div class="col-2" style="text-align:center;">
              <h2 class="text-info">'.$dep_time[0].':'.$dep_time[1].'</h2>
              <p>'.$city_from.'</p>
            </div>
            <div class="col-2" margin-top:1.5%;" style="text-align:center;">
              <p>Flight Number : '.$flna.'</p>
              ---------------------
              <p>Capacity : '.$res2["Capacity"].'</p>
            </div>
            <div style="text-align:center;"class="col-2">
              <h2 class="text-info">'.$arr_time[0].':'.$arr_time[1].'</h2>
              <p>'.$city_to.'</p>
            </div>
            <div class="col-3" style="text-align:center;">
              <h3 class="text-info">₹'.$price.'</h3>
            </div>
          </div>';
        }
        echo '</div>';
      }
    }
      ?>
    </body>
    </html>
