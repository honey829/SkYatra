<?php
session_start();
if(!isset($_SESSION["email"])){
  header("location:../index.php");
}
$id=$_SESSION["email"];
?>
<!DOCTYPE html>
<html lang="en"><head>
  <title>userphp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
  h6{
    color:black;
    margin-top:25px;
  }
  td
  {
    text-align: center;
    font-weight: bold;
  }
</style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6" style="background-color: black;">
        <center><h1 style="margin-top:46px; padding:30px;">MENU</h1>
          <a href="user.php" class="btn btn-block" style="padding:7px; color:white; margin-top: 50px;">HOME</a>
          <a href="edituser.php" class="btn btn-block" style="padding:7px; color:white; margin-top: 50px;">EDIT PROFILE</a>
          <a href="../Myaccount.php" class="btn btn-block" style="padding:7px; color:white; margin-top: 50px;">Search Flight</a>
          <a href="#" class="btn btn-block" style="padding:5px; color:white; margin-top: 50px; ">TICKET HISTORY</a>
          <a href="#" class="btn btn-block" style="padding:5px; color:white; margin-top: 50px;">CANCEL TICKET</a>
          <a href="#" class="btn btn-block" style="padding:5px; color:white; margin-top: 50px;">PRINT TICKET</a>
          <a href="logout.php" class="btn btn-block" style="padding:5px; color:white; margin-top: 50px;">LOGOUT</a>
        </center></div>


        <!-- <center><h3 style="margin-top: 50px;">PERSONAL INFORMATION</h3>  display user info from database-->
        <?php
        $con=mysqli_connect("localhost","root","","airlinebooking");
        $que="select * from user where emailid='$id'";
        $res=mysqli_query($con,$que);
        $res1=mysqli_fetch_assoc($res);
        $name=$res1["fullname"];
        $add=$res1["address"];
        $phone=$res1["ph_number"];
        $dob=$res1["dob"];
        $email=$res1["emailid"];
        $dp=$res1["dp"];
        echo ' <div class="col-md-6" style="background-color: #77a5ef;">
          <center><img src="dp/'.$dp.'" class="rounded-circle" style="margin-top: 40px; padding:30px; width:50%;"></center>
          <div class="container">
            <table class="table table-striped" style="margin-top:50px;">
              <tbody>
                <tr>
                  <td>
                    '.$name.'
                  </td>
                </tr>
                <tr>
                  <td>
                    '.$add.'
                  </td>
                </tr>
                <tr>
                  <td>
                    '.$phone.'
                  </td>
                </tr>
                <tr>
                  <td>
                    '.$dob.'
                  </td>
                  </tr
                  <tr>
                    <td>
                      '.$email.'
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>'
            ?>
          </div>
        </div>
      </body>
      </html>
