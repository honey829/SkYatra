<?php include("register.php");
?>
<!DOCTYPE html>
<html>
<head>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css">
  <script src="script.js"></script>
  <link rel="stylesheet" href="styles/reg.css">
  <style>
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
<script>
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
          <div class="col-8">  <!--column div of logo-->
            <a href="index.php"><img style="margin-top:29px; margin-left:60px;" height="50px" src="image/logo.png" alt=""></a>
          </div>  <!--column div of logo ended-->
          <div class="col-1 w3-dropdown-hover" style="margin-top:30px"><!--Dropdown Div start-->
            <button class="btn btn-light"><i class="fa fa-life-ring"> Support</i> <i class="fa fa-caret-down"></i> </button>
            <div class="w3-dropdown-content" style="padding:0%;"><!--Dropdown-content Div start-->
              <a href="#" class="list-group-item" data-toggle="modal" data-target="#myModal1"> <i class="fa fa-phone"> Contact Us </i></a>
              <a href="#" class="list-group-item" data-toggle="modal" data-target="#myModal2"> <i class="fa fa-comments"> Feedback </i></a>
              <a href="#" class="list-group-item" data-toggle="modal" data-target="#myModal3"> <i class="fa fa-times"> Flight Cancellation</i></a>
            </div><!--Dropdown-content Div end-->
          </div><!--Dropdown Div end-->
          <div class="col-2" style="margin-top:30px"> <!--col div of login-->
            <button data-toggle="modal" data-target="#myModal" class="btn btn-light"><i class="fa fa-sign-in-alt"></i> Login/Register</button>
          </div>  <!--col div of login ended-->
        </div>  <!--row div of login-->
      </div>
    </div>
  </div>
  <!-- Header -->
  <header class="w3-display-container" style="margin-top:5.5%;max-width:1500px">
    <img class="w3-image" src="image/bgimage.jpg" alt="London" width="1500" height="700">
    <div class="w3-display-middle" style="width:63%">
      <div class="w3-container">
        <div class="row" style="margin-bottom:3%;margin-left:1.7%;"> <!--background image row div search element(radio)-->
          <div class="btn-group btn-group-toggle" data-toggle="buttons"> <!--radio button end-->
            <label class="btn btn-info active"><input type="radio" onchange="enable();" name="radio" value="Return"> Return</label>
            <label class="btn btn-info"> <input type="radio" onchange="disable();" name="radio" value="One_way"> One way</label>
          </div> <!--radio button end-->
        </div>  <!--background image row div search element-->
        <div class="row"style="color:white;"> <!-- row div search element(text box)-->
          <div class="container-fluid"><!--background image div search element(container)-->
            <form class="form-inline" action="search.php" method="post"><!--search form(container)-->
              <div class="col-md-3"><!--background image div search element(column)-->
                <label for="from">From</label>
                <input required type="text" class="form-control" id="from" placeholder="Country, City or Airport" name="from" value="bangalore">
              </div><!--background image div search element(column ended)-->
              <div class="col-md-3"><!--background image div search element(column 2)-->
                <label for="to">To</label>
                <input type="text" required class="form-control" id="to" placeholder="Country, City or Airport" name="to" value="delhi">
              </div><!--background image div search element(column2 ended)-->
              <div class="col-md-3">  <!--background image div search element(column3)-->
                <label for="depart">Depart</label>
                <input type="text" required class="form-control" id="depart" placeholder="Depart date" name="date">
              </div>  <!--background image div search element(column3 ended)-->
              <div class="col-md-3">  <!--background image div search element(column 4)-->
                <label for="Return">Return</label>
                <input type="text" required class="form-control" id="Return" placeholder="Return Date" name="rdate">
              </div><!--background image div search element(column 4 ended)-->
            </div><!--background image div search element(container)-->
          </div><!--background image div search element(text box)-->
          <div class="container"><!--background image div search element(container2)-->
            <div class="row" style="margin-top:5%"><!--background image div search element(row)-->
              <div class="col-10 btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-info">
                  <input type="checkbox"> Direct Flight
                </label>
              </div>
              <div class="col-2">
                <label>
                  <button type="submit" class="btn btn-info" name="btn"> <i class="fa fa-search"></i> Search</button>
                </label>
              </div>
            </div><!--background image div search element(container2 ended)-->
          </div><!--background image div search element(row)-->
        </form><!--search form-->
      </div>
    </div>
  </header>
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content modal-popout-bg" style="background-image: url(images/modal.jpg);">
        <!-- Modal Header -->
        <div class="modal-body font-weight-bold" id="body">
          <center><h4 style="font-weight:bold; color:white;">EXISTING USER</h4></center>
          <form action="user/login.php" method="POST">
            <div class="form-group">
              <label for="email"></label>
              <input type="email" class="form-control" id="em" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
              <label for="pwd"></label>
              <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-left: 10%;">Submit</button>
            <button onclick="change();" type="button" class="btn btn-primary" style="margin-left: 45%;">Register</button>
          </form>
        </div><!-- Modal footer -->
        <button  type="button" class="btn btn-link" data-dismiss="modal"><h5 style="color:white; font-weight:bold;">CLOSE</h5></button>
      </div>
    </div>
  </div>

  <div class="container"><!--modal1 -->
    <!-- The Modal -->
    <div class="modal fade" id="myModal1">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-body">
            <center><h4>CONTACT US</h4></center>
            <form action="">
              <div class="form-group">
                <label for="email"></label>
                <input type="email" class="form-control" id="email4" placeholder="Enter email" name="email4">
              </div>
              <div class="form-group">
                <label for="pwd"></label>
                <input type="password" class="form-control" id="pwd5" placeholder="Enter password" name="pswd5">
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
    <!-- The Modal -->
    <div class="modal fade" id="myModal3">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
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
        <!-- The Modal -->
        <div class="modal fade" id="myModal2">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-body">
                <center><h4>FEEDBACK</h4></center>
                <form action="">
                  <div class="form-group">
                    <label for="NAME"></label>
                    <input type="text" class="form-control" id="name5" placeholder="Your name" name="nm5">
                  </div>
                  <div class="form-group">
                    <label for="EMAIL"></label>
                    <input type="email" class="form-control" id="email5" placeholder="Your mail" name="em5">
                  </div>
                  <div class="form-group">
                    <label for="FEEDBACK"></label>
                    <textarea rows="5" cols="50" placeholder="Share your experience with us" name="FEEDBACK" id="feed"></textarea>
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
    <div class="container">
      <div class="row">
        <div class="col-md-4">
      <center>
        <div id="carousel1" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel1" data-slide-to="1"></li>
            <li data-target="#carousel1" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="https://1.bp.blogspot.com/-SOs4sixfFso/UgCCwyOQTsI/AAAAAAAAod0/39pECy1sV5I/s320/Jaipur+HD+wallpapers+21.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img src="https://3.bp.blogspot.com/-H5X-5IorE6s/UgCCtlvBXkI/AAAAAAAAocs/BL1yl64QpLg/s320/Jaipur+HD+wallpapers+13.jpg"  alt="Second slide">
            </div>
            <div class="carousel-item">
              <img src="https://4.bp.blogspot.com/-5oSi0aO7Kbs/UgCCsrrS6OI/AAAAAAAAocU/RpvkHhXsqb0/s320/Jaipur+HD+wallpapers+1.jpg"  alt="Third slide">
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </center>
    </div>
    <div class="col-md-4">
      <center>
        <div id="carousel2" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel2" data-slide-to="1"></li>
            <li data-target="#carousel2" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="image/caro1.jpg" style="height:80%;width:80%" alt="First slide">
            </div>
            <div class="carousel-item">
              <img src="image/caro2.jpg" style="height:80%;width:80%" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img src="image/caro3.jpg" style="height:80%;width:80%" alt="Third slide">
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </center>
    </div>
    <div class="col-md-4">
      <center>
        <div id="carousel2" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel2" data-slide-to="1"></li>
            <li data-target="#carousel2" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="image/caro1.jpg" style="height:80%;width:80%" alt="First slide">
            </div>
            <div class="carousel-item">
              <img src="image/caro2.jpg" style="height:80%;width:80%" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img src="image/caro3.jpg" style="height:80%;width:80%" alt="Third slide">
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </center>
    </div>
    </div>
    </div>
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
  <script>
    function change(){
      //var body = document.getElementById("body");
      document.getElementById('body').innerHTML="<center><h4 style='font-weight:bold; color:white;'>NEW USER</h4></center><form id='register_form'><div id='error_msg'></div><div><input type='text' style='width:80%;' class='form-control' id='name' placeholder='Enter full name' name='name'></div><div><textarea style='width:80%; padding:0px; margin-left:47px;' class='form-control' id='add'  placeholder='Enter address' name='add'></textarea></div><div><input type='text' class='form-control' id='phno' placeholder='Enter phone number' style='width:80%;' name='phno'></div><div><input type='date' style='width:80%;' name='dob' class='form-control' id='dob' placeholder='Enter D.O.B' ></div><div><input type='email' style='width:80%;"+
        "'pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$' class='form-control'  id='email' placeholder='Enter email-id' name='em'><span></span></div> <div><input type='password' style='width:80%;' name='pwd' class='form-control' id='pwd' pattern='(?=.*\d)(?=.*[a-z])(?=.*[.{8,}' placeholder='Enter password(min 8 characters)'></div><button type='button' class='btn btn-primary' name='sub' id='reg_btn' style='margin-left: 10%;'>Submit</button><button style='margin-left:50%;' onclick='change2();' type='button' class='btn btn-primary' style='margin-left: 40%;'>Login</button></form>";
      }
      function change2(){
        var body = document.getElementById("body");
        body.innerHTML='<center><h4 style="font-weight:bold;color:white;" >EXISTING USER</h4></center><form action="user/login.php" method="post"><div class="form-group"><label for="email"></label><input type="email" class="form-control"  id="em" placeholder="Enter email" name="email"></div><div class="form-group"><label for="pwd"></label><input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd"></div><button type="submit" class="btn btn-primary" style="margin-left: 10%;">Submit</button><button onclick="change()" type="button" class="btn btn-primary" style="margin-left: 40%;">Register</button></form>';
      }
    </script>
