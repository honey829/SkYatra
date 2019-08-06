<?php
session_start();
if(!isset($_SESSION["email"])){
  header("location:index.php");
}
$id=$_SESSION["email"];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>SkYatra</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css">
  <style>
  .stlnum::-webkit-inner-spin-button,
  .stlnum::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
  </style>
  <script>
  function disable(){
    document.getElementById("Return").value = "";
    document.getElementById("Return").disabled = true;
  }
  </script>
  <script>
  function enable(){
    document.getElementById("Return").disabled = false;
  }
  </script>
  <script>
  function funt(flid,doj){
    document.getElementById("flid").value = flid;
    document.getElementById('doj').value = doj;
    $("#openbook").modal();
  }
</script>
<style>
  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
  }
  .dropdown:hover .dropdown-content {
    display: block;
  }
  .zoom {
    padding: 30px;
    transition: transform 1s;
    margin: 0 auto;
  }

  .zoom:hover {
    -ms-transform: scale(1.1);
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    -o-transform: scale(1.1);
  }
</style>
<script>
  function change(){
    var body = document.getElementById("body");
    body.innerHTML='<center><h4>Register</h4></center><form action="/action_page.php"></form><div class="form-group"><label for="name"></label><input type="text" class="form-control" id="name" placeholder="Enter full name" name="fname"></div><div class="form-group"><label for="dob"></label><input type="date" class="form-control" id="dob" placeholder="Enter D.O.B" name="date"></div><div class="form-group"><label for="email"></label><input type="email" class="form-control" id="em" placeholder="Enter email-id" name="em"></div><div class="form-group"><label for="pwd"></label><input type="password" class="form-control" id="pwd" placeholder="Enter password(min 8 characters)" name="pswd"></div><button type="submit" class="btn btn-primary" style="margin-left: 10%;">Submit</button><button onclick="change2()" type="button" class="btn btn-primary" style="margin-left: 40%;">Login</button></form>';
  }
  function change2(){
    var body = document.getElementById("body");
    body.innerHTML='<center><h4>Login</h4></center><form action="/action_page.php"></form><div class="form-group"><label for="email"></label><input type="email" class="form-control" id="email" placeholder="Enter email" name="email"></div><div class="form-group"><label for="pwd"></label><input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd"></div><div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" name="remember"> Remember me</label></div><button type="submit" class="btn btn-primary" style="margin-left: 10%;">Submit</button><button onclick="change()" type="button" class="btn btn-primary" style="margin-left: 40%;">Register</button></form>';
  }
</script>
<script type="text/javascript">
  $(function(){
    var date_from =$('input[name="date"]');
    date_from.datepicker({
      format: 'yyyy-mm-dd',
      minDate:new Date(),
      startDate:new Date(),
      todayHighlight: true,
      autoclose: true,
      orientation: "top left",
    });
    $('.datepicker').datepicker({
      format: 'yyyy-mm-dd',
      minDate:new Date(),
      startDate:new Date(),
      todayHighlight: true,
      autoclose: true,
      orientation: "top left",
    }).on('changeDate',function(event) {
      var formatted_date = $('.datepicker').datepicker('getFormattedDate');
      $('.selected_inline_date').val(formatted_date);
    });
  });
</script>
<script type="text/javascript">
  $(function(){
    var date_from =$('input[name="rdate"]');
    date_from.datepicker({
      format: 'yyyy-mm-dd',
      minDate:new Date(),
      startDate:new Date(),
      todayHighlight: true,
      autoclose: true,
      orientation: "top left",
    });
    $('.datepicker').datepicker({
      format: 'yyyy-mm-dd',
      minDate:new Date(),
      startDate:new Date(),
      todayHighlight: true,
      autoclose: true,
      orientation: "top left",
    }).on('changeDate',function(event) {
      var formatted_date = $('.datepicker').datepicker('getFormattedDate');
      $('.selected_inline_date').val(formatted_date);
    });
  });
</script>
</head>
<body style="background-color: black;">
  <div class="w3-top">
    <div class="w3-bar w3-white">
      <div class="container-fluid"> <!--container div-->
        <div style="background-color:#f9f9f9;" class="row">  <!--row div of logo-->
          <div class="col-7">  <!--column div of logo-->
            <a href="index.php"><img style="margin-top:30px; margin-left:60px"height="50px" src="image/logo.png" alt=""></a>
          </div>  <!--column div of logo ended-->
          <div>
            <a href="user/user.php" >
              <button style="margin-top:30px;" class="btn btn-info">
                <i class="fa fa-user"></i>My Account</button></a>
              </div>
              <div class="w3-dropdown-hover" style="margin-top:30px"><!--Dropdown Div start-->
                <button style="margin-left:1%;" class="btn btn-info"><i class="fa fa-life-ring"></i> Support <i class="fa fa-caret-down"></i> </button>
                <div class="w3-dropdown-content" style="padding:0%;"><!--Dropdown-content Div start-->
                  <a href="#" class="list-group-item" data-toggle="modal" data-target="#myModal1"> <i class="fa fa-phone"> Contact Us </i></a>
                  <a href="#" class="list-group-item" data-toggle="modal" data-target="#myModal2"> <i class="fa fa-comments"> Feedback </i></a>
                  <a href="#" class="list-group-item" data-toggle="modal" data-target="#myModal3"> <i class="fa fa-times"> Flight Cancellation</i></a>
                </div><!--Dropdown-content Div end-->
              </div><!--Dropdown Div end-->
              <div> <!--col div of login-->
                <a href="user/logout.php"><button style="margin-top:30px; margin-left:2%;" data-toggle="modal" data-target="#myModal" class="btn btn-info"><i class="fa fa-sign-out-alt"></i> Logout</button></a>
              </div>  <!--col div of login ended-->
            </div>  <!--row div of login-->
          </div>
        </div>
      </div>
      <div class="container" style="margin-top:17%;">
        <?php
        if(isset($_POST["btn"])){
          $fc=$_POST["from"];
          $tc=$_POST["to"];
          $conn = mysqli_connect("localhost","root","","airlinebooking");
          if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
          }
          echo'<button style="width:100%;"type="button" data-target="#sd" class="btn btn-primary dropdown-toggle" data-toggle="collapse">
            <h3>'.$fc.' - '.$tc.'</h3>
            <p>1 adult | Economy</p>
          </button>';
        }
        ?>
        <div id="sd" class="collapse" style="background-color:#346487">
          <div class="row"> <!--background image row div search element(radio)-->
            <div class="col-3 btn-group btn-group-toggle" data-toggle="buttons"> <!--radio button end-->
              <label class="btn btn-info active"><input type="radio" onchange="enable();" name="radio"> Return</label>
              <label class="btn btn-info"><input onchange="disable();" type="radio" name="radio"> One way</label>
            </div> <!--radio button end-->
          </div><!--background image row div search element-->
          <div class="row"style="color:white;"> <!-- row div search element(text box)-->
            <div class="container-fluid"><!--background image div search element(container)-->
              <form class="form-inline" action="" method="post"><!--search form(container)-->
                <div class="col-md-3"><!--background image div search element(column)-->
                  <label for="from">From:</label>
                  <input type="text" class="form-control" id="from" placeholder="Country, City or Airport" name="from" value="bangalore" required>
                </div><!--background image div search element(column ended)-->
                <div class="col-md-3"><!--background image div search element(column 2)-->
                  <label for="to">To:</label>
                  <input type="text" class="form-control" id="to" placeholder="Country, City or Airport" name="to" value="delhi" required>
                </div><!--background image div search element(column2 ended)-->
                <div class="col-md-3">  <!--background image div search element(column3)-->
                  <label for="depart">Depart:</label>
                  <input type="text" class="form-control" id="depart" placeholder="Depart date" name="date" required>
                </div>  <!--background image div search element(column3 ended)-->
                <div class="col-md-3">  <!--background image div search element(column 4)-->
                  <label for="Return">Return:</label>
                  <input type="text" class="form-control" id="Return" placeholder="Return Date" name="rdate" required>
                </div><!--background image div search element(column 4 ended)-->
              </div><!--background image div search element(container)-->
            </div><!--background image div search element(text box)-->
            <div class="row" style="color:white; margin-top:5%"><!--background image div search element(row)-->
              <div class="col-10 btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-info">
                  <input type="checkbox"> Direct Flight
                </label>
              </div>
              <div class="col-2">
                <label>
                  <button type="submit" class="btn btn-info" name="btn">Search</button>
                </label>
              </div>
            </div><!--background image div search element(container2 ended)-->
          </form><!--search form-->
        </div><!--background image div search element(row)-->
      </div>

      <div class="container">
        <div class="row" style="margin-top:3%; margin-left:18%;">
          <div class="col-md-3 card">
            <button class="btn btn-light" style="background-color:lightblue;" name="button">
              <span>Best</span><br>
              Price<br>
              Duration of Flight</span>
            </div>
            <div class="col-md-3 card">
              <button class="btn btn-light" style="background-color:lightblue;" name="button">
                <span>Best</span><br>
                Price<br>
                Duration of Flight</span>
              </div>
              <div class="col-md-3 card">
                <button class="hello btn btn-light" style="background-color:lightblue;" name="button">
                  <span>Best</span><br>
                  Price<br>
                  Duration of Flight</span>
                </div>
              </div>
            </div>
            <div class="modal fade" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body" id="body">
                    <center><h4>Login</h4></center>
                    <form action="/action_page.php">
                      <div class="form-group">
                        <label for="email"></label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="pwd"></label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                      </div>
                      <button type="submit" class="btn btn-primary" style="margin-left: 10%;">Submit</button>
                      <button onclick="change();" type="button" class="btn btn-primary" style="margin-left: 40%;">Register</button>
                    </form>
                  </div><!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="container"><!--modal1 -->
              <div class="modal fade" id="myModal1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <center><h4>CONTACT US</h4></center>
                      <form action="">
                        <div class="form-group">
                          <label for="email"></label>
                          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                          <label for="pwd"></label>
                          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                          </label>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-left: 10%;">Submit</button>
                        <button  type="button" class="btn btn-primary" style="margin-left: 40%;">Register</button>
                      </form>
                    </div><!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container"><!--modal3 -->
              <div class="modal fade" id="myModal3">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <center><h4>Flight Cancellation</h4></center>
                      <h5> Cancellation Policy:</h5>
                      <p>Every booking made on skyatra is subject to cancellation charges levied by the airline, which may vary by flight and booking class.
                        Some booked fares may be non-refundable per the specific airline's policy.
                        Online cancellations: Cancellations can be made online by Customer Support page. Step by step details for online cancellations are available Customer Support page. Step by step details for online cancellations are available here
                        Offline cancellations: We also accept cancellation requests through phone.
                        skyatra cancellation charges: In addition to the airline cancellation charges, skyatra will charge Rs 300 per passenger per sector for each cancellation.
                        Only cancellation requests made online or telephonic or email (For emails travel date must be more than 48 Hrs) through our customer support shall be entertained. skyatra shall not be liable to entertain any cancellation requests made through any other medium.
                        For e-tickets, if your cancellation request is made less than 4 hours before departure, you'll need to contact the airline directly to get your reservation cancelled. We will not be able to provide any assistance for these cancellations.
                        For e-tickets, if your cancellation request is made less than 24 hours before departure, you'll need to contact our customer care executive through telephone. The request through any other medium will not be entertained.
                        If you have done a 'Web/Tele Check-in' with the airline, get in touch with the airline for cancellation. Skyatra will not be able to process the refund for the same and will not take any responsibility for the same.
                        To cancel the tickets over the phone, call the 24x7 customer care numbers 09213025552 / 1860 258 5858.</p><br>
                        <h5> Refund:</h5>
                        <p> It is mandatory to contact skyatra for all refunds, as the airline will not be able to refund your tickets booked at skyatra.com.
                          All cancellations made directly with the Airline need to be intimated to skyatra by Email or Phone in order to initiate the refunds process
                          Processing times for cancellation and refund requests vary
                          Convenience charge of INR 270/- for one-way flight and INR 415/- for roundtrip flights, paid at the time of booking is a non-refundable fee and same shall be applicable on all cancellations including any partial cancellation requests
                          The refund will be credited back to the same account from where the payment was made. For example, if the User used a credit card, Company will make an appropriate charge reversal. If the User used a debit card, Company will credit the money back to the debit card.
                          On the event of cancellation and refund of partially utilized tickets upfront discount and promo code discount availed at the time of booking would be deducted from the refund amount.
                          In case, where the user has cancelled his/her booking directly with the airlines, he/she will need to inform Company with valid documentation to initiate the refund process. It is advisable to contact Company within 48 hours of the cancellation request.
                          The meal amount is non-refundable. (Refundable only if the flight is cancelled by the airlines).
                          Company will be able to initiate customer's refund only after receipt and/or confirmation of refund from the airline.</p>
                        </div><!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container"><!--modal2 -->
                  <div class="modal fade" id="myModal2">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-body">
                          <center><h4>FEEDBACK</h4></center>
                          <form action="/action_page.php">
                            <div class="form-group">
                              <label for="NAME"></label>
                              <input type="text" class="form-control" id="name" placeholder="Your name" name="nm">
                            </div>
                            <div class="form-group">
                              <label for="EMAIL"></label>
                              <input type="email" class="form-control" id="email" placeholder="Your mail" name="em">
                            </div>
                            <div class="form-group">
                              <label for="FEEDBACK"></label>
                              <textarea rows="5" cols="55" placeholder="Share your experience with us" name="FEEDBACK" id="feed"></textarea>
                            </label>
                          </div>
                          <button style="margin-left: 45%;" type="submit" class="btn btn-primary" style="margin-left: 10%;">Submit</button>
                          <!-- <button  type="button" class="btn btn-primary" style="margin-left: 40%;">New User</button>-->
                        </form>
                      </div><!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!--div class="container" style="margin-top:5%;"-->
              <?php
              if(isset($_POST["btn"])){
                $fc=$_POST["from"];
                $tc=$_POST["to"];
                $ded=$_POST["date"];
                @$rd=$_POST["rdate"];
                $conn = mysqli_connect("localhost","root","","airlinebooking");
                if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
                }
                if(empty($_POST["rdate"]))
                {
                  $qu="select * from flights where City_from='$fc' AND City_to='$tc'";
                  $res=mysqli_query($conn,$qu);
                  echo '<div class="container" style="margin-top:5%;">';
                    while($res2=mysqli_fetch_assoc($res)){
                      echo '
                      <div class="row" style="margin-top:2%;">
                        <div class="col-3" style="text-align:center;">';
                          if($res2["Flight_name"]=="indigo"){
                            echo '<img src="image/indigo.png" alt="indigo logo">';
                          }else if($res2["Flight_name"]=="goair"){
                            echo '<img src="image/goair.jpg" alt="goair logo">';
                          }else{
                            echo '<img src="image/airasia.png" alt="airasia logo">';
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
                          <div class="col-2" style="margin-top:30px;">
                            <i style="font-size:20px;"class="fa fa-plane"></i>
                            <i style="font-size:20px;"class="fa fa-plane"></i>
                            <i style="font-size:20px;"class="fa fa-plane"></i>
                            <i style="font-size:20px;"class="fa fa-plane"></i>
                            <i style="font-size:20px;"class="fa fa-plane"></i>
                          </div>
                          <div style="text-align:center;"class="col-2">
                            <h2 class="text-info">'.$arr_time[0].':'.$arr_time[1].'</h2>
                            <p>'.$city_to.'</p>
                          </div>
                          <div class="col-3" style="text-align:center;">
                            <h3 class="text-info">'.$price.'</h3>
                            <button type="button" id="book" onclick="funt(\''.$res2["Flight_no"].'\',\''.$ded.'\');" class="btn btn-info" name="button">Book</button>
                          </div>
                        </div>';
                      }
                      echo "</div>";
                    }
                    else {
                      $qu="select * from flights where City_from='$fc' AND City_to='$tc'";
                      $res=mysqli_query($conn,$qu);
                      echo '<div class="container" style="margin-top:5%;">';
                        echo '<div class="row">
                          <h3>Departure</h3>
                        </div>';
                        while($res2=mysqli_fetch_assoc($res)){
                          echo '<div class="row" style="margin-top:2%;">
                            <div class="col-3" style="text-align:center;">';
                              if($res2["Flight_name"]=="indigo"){
                                echo '<img src="image/indigo.png" alt="indigo logo">';
                              }else if($res2["Flight_name"]=="goair"){
                                echo '<img src="image/goair.jpg" alt="goair logo">';
                              }else{
                                echo '<img src="image/airasia.png" alt="airasia logo">';
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
                              <div class="col-2" style="margin-top:30px;">
                                <i style="font-size:20px;"class="fa fa-plane"></i>
                                <i style="font-size:20px;"class="fa fa-plane"></i>
                                <i style="font-size:20px;"class="fa fa-plane"></i>
                                <i style="font-size:20px;"class="fa fa-plane"></i>
                                <i style="font-size:20px;"class="fa fa-plane"></i>
                              </div>
                              <div style="text-align:center;"class="col-2">
                                <h2 class="text-info">'.$arr_time[0].':'.$arr_time[1].'</h2>
                                <p>'.$city_to.'</p>
                              </div>
                              <div class="col-3" style="text-align:center;">
                                <h3 class="text-info">'.$price.'</h3>
                                <button type="button" onclick="funt(\''.$res2["Flight_no"].'\',\''.$ded.'\');" class="btn btn-info" name="button">Book</button>
                              </div>
                            </div>';
                          }
                          echo "</div>";
                          $qu1="select * from flights where City_from='$tc' AND City_to='$fc'";
                          $res3=mysqli_query($conn,$qu1);
                          echo '<div class="container" style="margin-top:5%;">';
                            echo '<div class="row">
                              <h3>Return</h3>
                            </div>';
                            while($res4=mysqli_fetch_assoc($res3)){
                              echo '<div class="row" style="margin-top:2%;">
                                <div class="col-3" style="text-align:center;">';
                                  if($res4["Flight_name"]=="indigo"){
                                    echo '<img src="image/indigo.png" alt="indigo logo">';
                                  }else if($res4["Flight_name"]=="goair"){
                                    echo '<img src="image/goair.jpg" alt="goair logo">';
                                  }else{
                                    echo '<img src="image/airasia.png" alt="airasia logo">';
                                  }
                                  echo '</div>';
                                  $dtime1 = $res4["Time_from"];
                                  $dep_time1 = explode(":",$dtime1);
                                  $atime1 = $res4["Time_to"];
                                  $arr_time1 = explode(":",$atime1);
                                  $city_to1 = $res4["City_from"];
                                  $city_from1 = $res4["City_to"];
                                  $price1 = $res4["Price"];
                                  echo '<div class="col-2" style="text-align:center;">
                                    <h2 class="text-info">'.$dep_time1[0].':'.$dep_time1[1].'</h2>
                                    <p>'.$city_to1.'</p>
                                  </div>
                                  <div class="col-2" style="margin-top:30px;">
                                    <i style="font-size:20px;"class="fa fa-plane"></i>
                                    <i style="font-size:20px;"class="fa fa-plane"></i>
                                    <i style="font-size:20px;"class="fa fa-plane"></i>
                                    <i style="font-size:20px;"class="fa fa-plane"></i>
                                    <i style="font-size:20px;"class="fa fa-plane"></i>
                                  </div>
                                  <div style="text-align:center;" class="col-2">
                                    <h2 class="text-info">'.$arr_time1[0].':'.$arr_time1[1].'</h2>
                                    <p>'.$city_from1.'</p>
                                  </div>
                                  <div class="col-3" style="text-align:center;">
                                    <h3 class="text-info">'.$price1.'</h3>
                                    <button type="button" onclick="funt(\''.$res2["Flight_no"].'\',\''.$ded.'\');" class="btn btn-info" name="button">Book</button>
                                  </div>
                                </div>';
                              }
                              echo "</div>";
                            }
                          }
                          ?>

                          <!--modal2 -->
                          <div class="modal fade" id="openbook">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-body">
                                  <center><h4 class="btn-primary">Traveler Details</h4></center>
                                  <form action="" method="post">
                                    <input type="text" name="flidn" id="flid" style="display:none;" value="">
                                    <input type="text" name="doj" id=doj style="display:none;" value="">
                                    <div style="margin-top:2%;">
                                      <button type="button" data-toggle="collapse" data-target="#adult" class="btn btn-info">Adult</button>
                                      <div class="collapse" id="adult">
                                        <p style="margin-top:2%" class="btn-danger">Add Adult</p>
                                        <input type="number" name="noa" min="0" max="6" value="0" id="go" onchange="fun1();" class="form-control" placeholder="Number of Adults">
                                        <script>
                                          function fun1()
                                          {
                                            var var1 = document.getElementById("go").value;
                                            var1 = parseInt(var1);
                                            var cont="";
                                            while(var1 >= 1){
                                              cont +='<div class="container form-group" style="margin-top:2%;"><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="label btn btn-info"><input class="form-control" type="radio" value="Mr." name="ra'+var1+'">Mr.</label><label class="btn btn-info label"><input class="form-control" value="Mrs." type="radio" name="ra'+var1+'">Mrs.</label><label class="btn btn-info label"><input class="form-control" type="radio" value="Miss" name="ra'+var1+'">Miss</label></div><div style="margin-top:2%;"><input class="form-control" type="text" name="a'+var1+'" placeholder="Full Name" required></div></div><div style="margin-top:2%;"><input type="email"class="form-control" placeholder="Email" name="ema'+var1+'"required></input><input style="margin-top:2%;" type="number"class="form-control stlnum" placeholder="Mobile Number"name="mnum'+var1+'" required></input></div>';
                                              var1=var1-1;
                                            }
                                            document.getElementById("showres").innerHTML = cont;
                                          }
                                        </script>
                                        <div id="showres">
                                          <div class="container form-group" style="margin-top:2%;"><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="label btn btn-info">
                                              <input class="form-control" type="radio" value="Mr." name="ra1" required>Mr.
                                            </label>
                                            <label class="btn btn-info label">
                                              <input class="form-control" type="radio" value="Mrs." name="ra1" required>Mrs.
                                            </label>
                                            <label class="btn btn-info label">
                                              <input class="form-control" type="radio" value="Miss" name="ra1" required>Miss
                                            </label>
                                          </div>
                                          <div style="margin-top:2%;">
                                            <input type="text" class="form-control" name="a1" placeholder="Full Name" required>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div style="margin-top:2%;">
                                    <button type="button" data-toggle="collapse" data-target="#child" class="btn btn-info" name="button">Child</button>
                                    <div class="collapse" id="child">
                                      <p style="margin-top:2%" class="btn-danger">Add Child</p>
                                      <input type="number" id="go1" min="0" max="6" name="noc" onchange="fun2();" class="form-control" placeholder="Number of Child">
                                      <script>
                                        function fun2()
                                        {
                                          var var2 = document.getElementById("go1").value;
                                          var2 = parseInt(var2);
                                          var cont1="";
                                          while(var2 >= 1){
                                            cont1 +='<div class="container form-group" style="margin-top:2%;"><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="label btn btn-info"><input class="form-control" type="radio" value="Miss" name="rc'+var2+'">Miss</label><label class="btn btn-info label"><input class="form-control" value="Master" type="radio" name="rc'+var2+'">Master</label></div><div style="margin-top:2%;"><input type="text" class="form-control" name="c'+var2+'"placeholder="Full Name" required></div></div>';
                                            var2=var2-1;
                                          }
                                          document.getElementById("showres1").innerHTML = cont1;
                                        }
                                      </script>
                                    </div>
                                    <div id="showres1">
                                    </div>
                                    <div class="modal-footer"><!-- Modal footer -->
                                      <input type="submit" class="btn btn-primary" name="bosum" value="Book"></input>
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                        if (isset($_POST["bosum"])) {
                          $flidd=$_POST["flidn"];
                          $noa=$_POST["noa"];
                          $noc=$_POST["noc"];
                          $doj=$_POST["doj"];
                          $psnma="";
                          $psnmc="";
                          $ema="";
                          $mobn="";
                          $noa1=$noa;
                          $noc1=$noc;
                          while($noa>=1){
                            $psnma.=$_POST["ra$noa"]." ". $_POST["a$noa"].",";
                            $ema.=$_POST["ema$noa"].",";
                            $mobn.=$_POST["mnum$noa"].",";
                            $noa--;
                          }
                          while ($noc>=1) {
                            $psnmc.=$_POST["rc$noc"]." ".$_POST["c$noc"].",";
                            $noc--;
                          }
                          $conn3 = mysqli_connect("localhost","root","","airlinebooking");
                          if (!$conn3) {
                            die("Connection failed: ".mysqli_connect_error($conn3));
                          }else {
                            $qer = "INSERT INTO `booking` (userid,adultpassenger,childpassenger,noa,noc,mobilenum,flightid,doj,email_id) VALUES ('$id','$psnma','$psnmc','$noa1','$noc1','$mobn','$flidd','$doj','$ema')";
                            if (mysqli_query($conn3,$qer) === TRUE) {
                              echo "<script>alert('Your Flight Booked Successfully')</script>";
                              echo "<script>window.location.href='ticket.php'</script>";
                            } else {
                              echo "Error: " . $qer . "<br>" . $conn3->error;
                            }
                          }
                        }
                        ?>
                        <footer style="background-color:#f9f9f9;" class="w3-container w3-center w3-opacity w3-margin-bottom">
                          <h5>Find Us On</h5>
                          <div class="w3-xlarge w3-padding-16">
                            <i class="fab fa-facebook w3-hover-opacity"></i>
                            <i class="fab fa-instagram w3-hover-opacity"></i>
                            <i class="fab fa-snapchat w3-hover-opacity"></i>
                            <i class="fab fa-pinterest-p w3-hover-opacity"></i>
                            <i class="fab fa-twitter w3-hover-opacity"></i>
                            <i class="fab fa-linkedin w3-hover-opacity"></i>
                          </div>
                        </footer>
                      </body>
                      </html>
