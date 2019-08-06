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
  <title>deleteuser</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/mystyle.css">
  <style>
   input[type="file"] {
  display: none;
}

</style>
</head>
<body>
	<div class="container">
		<div class="row">
		<div class="col-md-4">
	    </div>
	    <div class="col-md-8">
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

<?php
          echo '<div class="col-md-9">';
          if(!isset($_POST["sub"]))
          {
          echo'
        <h1 style="margin-left: 260px;">DELETE USER</h1>
          <form action="" method="POST">
           <div class="form-group">
            <label for="User Email-id"></label>
            <input type="email" class="form-control" id="User Email-id" name="em" placeholder="Enter User Email-id">
           </div>
        <button style="margin-left:41%; padding: 20px;"  type="submit" name="sub" class="btn btn-info">Search</button>
        </form>
        </div>';
         }
          else
          {
          $em=$_POST["em"];
          $con=mysqli_connect("localhost","root","","airlinebooking");
          $que="select * from user where emailid='$em'";
          $res=mysqli_query($con,$que);
          $res1=mysqli_fetch_assoc($res);
          $name=$res1["fullname"];
          $add=$res1["address"];
          $phone=$res1["ph_number"];
          $dob=$res1["dob"];
          $pass=$res1["password"];
          $dp=$res1["dp"];
          echo '
          <div class="row">
           <div class="col-md-4">
            <form method="POST" action="delete2user.php">
             <input type="file" readonly name="dp"/>
         <center><img style="margin-top: 150px;width:200px;" class="rounded-circle"  src="../user/dp/'.$dp.'" ></img></center>
         </div>
         <div class="col-md-8">
        <div class="f" style="margin-top:100px;">
         <div class="form-group">
            <input type="text" class="form-control" id="fname" placeholder="UPDATE FULL NAME" readonly name="fname" value="'.$name.'">
         </div>
         <div class="form-group">
             <label for="add"></label>
            <textarea class="form-control" id="add" name="add" readonly placeholder="UPDATE ADDRESS">'.$add.'</textarea>
                     </div>
           <div class="form-group">
             <label for="usr"></label>
            <input type="date" class="form-control" name="dob" id="dob" readonly placeholder="UPDATE DATE OF BIRTH" value="'.$dob.'">
         </div>
               <div class="form-group">
             <label for="usr"></label>
            <input type="text" class="form-control" id="phno" name="phno" readonly placeholder="UPDATE PH NUMBER" value="'.$phone.'">
         </div>
         <div class="form-group">
            <input type="email" class="form-control" id="em" placeholder="YOUR EMAIL" name="em" value="'.$em.'" readonly>
         </div>
           <div class="form-group">
             <label for="usr"></label>
            <input type="password" class="form-control" id="pass" readonly name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="CHANGE PASSWORD" value="'.$pass.'"> <input type="checkbox" onclick="myFunction()"><p style="color:white;">Show Password</p>
         </div>
          <button style="margin-left:43%; margin-top:20px;" type="submit" class="btn btn-info">DELETE</button>
         </div>
      </form>
      </div>
      </div>
      </div>

</body>
</html>';
}
?>
    </div>
    </div>
  </div>
</body>
</html>
