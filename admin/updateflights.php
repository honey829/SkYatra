<?php
session_start();
if(!isset($_SESSION["email"])){
  header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="../css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/mystyle.css">
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <script>
  function updf(id) {
    var var1 = document.getElementById(id+"fn").value;
    var var3 = document.getElementById(id+"cf").value;
    var var4 = document.getElementById(id+"ct").value;
    var var5 = document.getElementById(id+"tf").value;
    var var6 = document.getElementById(id+"tt").value;
    var var7 = document.getElementById(id+"cap").value;
    var var8 = document.getElementById(id+"pri").value;
    var block = document.getElementById(id+"col");
    var loading = document.getElementById(id+"loading");

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      //alert(this.readyState);
      if (this.readyState == 4 && this.status == 200) {
        if(this.responseText == "Connection Failed")
        {
          alert("Connection Error");
        }else if(this.responseText == "Record Updated")
        {
          block.style.display = "none";
          loading.style.display = "block";
        }else if(this.responseText == "Error"){
          alert("Updation Error");
        }
      }
    }
    xmlhttp.open("POST","updation.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("fltname="+var1+"&fltnum="+id+"&citf="+var3+"&citt="+var4+"&tif="+var5+"&tit="+var6+"&capa="+var7+"&pri="+var8);
  }
</script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-8">
        <h1 style="color:white;">UPDATE FLIGHTS</h1>
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
            <label for="flightnumber"></label>
            <input type="text" class="form-control" id="flightnumber" name="flnum" placeholder="Enter flight number">
          </div>
          <center><button type="submit" name="src" class="btn btn-info">Search</button></center>
        </form>
      </div>
    </div>
  </div>

  <?php
  if(isset($_POST["src"])){
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
              $flname = $res2["Flight_name"];
              $flna = $res2["Flight_no"];
              $capa1 = $res2["Capacity"];
              echo '
              <div class="col-2" style="text-align:center;">
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
                <button type="button" data-toggle="collapse" data-target="#'.$flna.'col" class="btn btn-info" name="upd">View</button>
              </div>
            </div>

            <div id="'.$flna.'loading" class="animated fadeInUp" style="color:black;display:none;margin-left:35%;">
              <div class="card card-inverse text-center" style="max-width: 320px;">
                <img class="card-img-top" src="../image/loading.gif" alt="loading">
                <div class="card-img-overlay">
                  <h4 class="card-text">Record Updated Successful</h4><br><br><br>
                  <p class="card-text">Please Refresh The Page to see any Updates</p>
                </div>
              </div>
            </div>

            <div id="'.$flna.'col" class="collapse" style="width:75%;">
              <div class="container">
                <div class="row">
                  <div class="col-2">
                  </div>
                  <div class="col-10">
                    <table class="table-sm" style="text-align:center;width:100%;">
                      <form action="" method="POST">
                        <tbody>
                          <tr>
                            <td>Flight name </td>
                            <td><input type="text" class="form-control" id="'.$flna.'fn" name="fltname" value='.$flname.' placeholder="Enter Flight Name for Updation"></td>
                          </tr>
                          <tr>
                            <td>Flight Number </td>
                            <td><input type="text" class="form-control" id="'.$flna.'" name="fltnum" value='.$flna.' name="flname" readonly></td>
                          </tr>
                          <tr>
                            <td>City From </td>
                            <td><input type="text" class="form-control" id="'.$flna.'cf" name="citf" value='.$city_from.' name="flname" placeholder="Enter the Takeoff City"></td>
                          </tr>
                          <tr>
                            <td>City To </td>
                            <td><input type="text" class="form-control" id="'.$flna.'ct" name="citt" value='.$city_to.' name="flname" placeholder="Enter the Landing City"></td>
                          </tr>
                          <tr>
                            <td>Time From </td>
                            <td><input type="text" class="form-control" id="'.$flna.'tf" name="tif" value='.$dtime.' name="flname" placeholder="Enter Departure Time"></td>
                          </tr>
                          <tr>
                            <td>Time To </td>
                            <td><input type="text" class="form-control" id="'.$flna.'tt" name="tit" value='.$atime.' name="flname" placeholder="Enter Arrival Time"></td>
                          </tr>
                          <tr>
                            <td>Capacity </td>
                            <td><input type="text" class="form-control" id="'.$flna.'cap" name="capa" value='.$capa1.' name="flname" placeholder="Enter Capacity of Flight"></td>
                          </tr>
                          <tr>
                            <td>Price </td>
                            <td><input type="text" class="form-control" id="'.$flna.'pri" name="pri" value='.$price.' name="flname" placeholder="Enter Revised Price"></td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <td></td>
                          <td><button class="btn btn-primary" onclick="updf(\''.$flna.'\')" type="button" name="updt">UPDATE</button></td>
                        </tfoot>
                      </form>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>';
        }
      }
    }
    ?>
  </body>
  </html>
