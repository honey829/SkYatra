<?php
session_start();
if(!isset($_SESSION["email"])){
  header("location:../index.php");}
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
<style>
.form-group{
  width: 40%;
  margin-left: 30%;
  margin-top: 0.01px;
  padding:-20px;
}
.f
{
  margin-top:30px;
}
  input[type="file"] {
  display: none;
}

img {
  cursor: pointer;
}
</style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6" style="background-color: black;">
       <center><h1 style="margin-top:46px; padding:30px;">MENU</h1>
        <a href="user.php" class="btn btn-block" style="padding:7px; color:white; margin-top: 60px;">HOME</a>
        <a href="#" class="btn btn-block" style="padding:5px; color:white; margin-top: 60px;">EDIT PROFILE</a>
        <a href="#" class="btn btn-block" style="padding:5px; color:white; margin-top: 60px; ">TICKET HISTORY</a>
        <a href="#" class="btn btn-block" style="padding:5px; color:white; margin-top: 60px;">CANCEL TICKET</a>
        <a href="#" class="btn btn-block" style="padding:5px; color:white; margin-top: 60px;">PRINT TICKET</a>
        <a href="logout.php" class="btn btn-block" style="padding:5px; color:white; margin-top: 60px;">LOGOUT</a>
      </div>
    </center>
<!--php for righthand content-->
        <?php
          $con=mysqli_connect("localhost","root","","airlinebooking");
          $que="select * from user where emailid='$id'";
          $res=mysqli_query($con,$que);
          $res1=mysqli_fetch_assoc($res);
          $name=$res1["fullname"];
          $add=$res1["address"];
          $phone=$res1["ph_number"];
          $dob=$res1["dob"];
          $pass=$res1["password"];
          $dp=$res1["dp"];
          echo '
        <div class="col-md-6" style="background-color: #77a5ef;">
            <form method="POST" action="dp.php" enctype="multipart/form-data">
             <input type="file" name="dp"/>
         <center><img style="margin-top: 35px;width:200px;" class="rounded-circle" src="dp/'.$dp.'" ></img></center>
         <button style="margin-left:44%; margin-top:5px;" type="submit" class="btn btn-info">change</button>
         </form>
         <form method="POST" action="updateuser.php">
        <div class="f">
         <div class="form-group">
            <input type="text" class="form-control" id="fname" placeholder="UPDATE FULL NAME" name="fname" value="'.$name.'">
         </div>
         <div class="form-group">
             <label for="add"></label>
            <textarea class="form-control" id="add" name="add" placeholder="UPDATE ADDRESS">'.$add.'</textarea>
                     </div>
           <div class="form-group">
             <label for="usr"></label>
            <input type="date" class="form-control" name="dob" id="dob" placeholder="UPDATE DATE OF BIRTH" value="'.$dob.'">
         </div>
               <div class="form-group">
             <label for="usr"></label>
            <input type="text" class="form-control" id="phno" name="phno" placeholder="UPDATE PH NUMBER" value="'.$phone.'">
         </div>
           <div class="form-group">
             <label for="usr"></label>
            <input type="password" class="form-control" id="pass" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="CHANGE PASSWORD" value="'.$pass.'"> <input type="checkbox" onclick="myFunction()">Show Password
         </div>
          <button style="margin-left:43%; margin-top:5px;" type="submit" class="btn btn-info">UPDATE</button>
         </div>
      </form>
      </div>

</body>
</html>';
?>
  <script>
    function myFunction()
    {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
 </script>

        <script>
               var imgBtn = document.querySelector('img');
               var fileInp = document.querySelector('[type="file"]');

               imgBtn.addEventListener('click', function() {
               fileInp.click();
               })
        </script>
