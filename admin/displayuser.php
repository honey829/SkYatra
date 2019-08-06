  <?php
  session_start();
  if(!isset($_SESSION["email"])){
    header("location:../user/index2.php");
  }
  $id=$_SESSION["email"];
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
    <div class="container">
      <div class="row">
      <div class="col-md-4">
        </div>
        <div class="col-md-8">
          <h1 >DISPLAY USER</h1>
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
          <form action="" method="POST">
             <div class="form-group">
              <input type="email" class="form-control" id="UserEmail-id" name="em" placeholder="Enter User Email-id">
             </div>
             <button style="margin-left:43%; padding: 20px;" type="submit" name="sub" class="btn btn-info">Display</button>
         </form>


  <?php
          if (isset($_POST["sub"])) {
          $em=$_POST["em"];
          $con=mysqli_connect("localhost","root","","airlinebooking");
          $que="select * from user where emailid='$em'";
          $res=mysqli_query($con,$que);
          $res1=mysqli_fetch_assoc($res);
          $name=$res1["fullname"];
          $add=$res1["address"];
          $phone=$res1["ph_number"];
          $dob=$res1["dob"];
          $email=$res1["emailid"];
          $dp=$res1["dp"];
          echo '<div class="row">
          <div class="col-md-4">
          <center><img src="../user/dp/'.$dp.'" class="rounded-circle" style="margin-top: 155px; margin-left:0px; padding:10px; width:200px;"></center>
          </div>
        <div class="col-md-8">
    <center> <table class="table table-striped" style="margin-top:160px; color:white; margin-left:-40px; text-align:center;">
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
      </tr
    </tbody>
  </table></center>
  </div>
</div>';}
?>

    </div>
   </div>
   </div>
  </body>
  </html>
