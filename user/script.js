 var email_state = false;
 $(document).on('blur', '#email', function(){
   var email = $('#email').val();
  alert(email);
  //$('#email').on('blur', function(){
 	if (email == '') {
 		email_state = false;
 		return;
 	}
  //console.log(email);
 	$.ajax({
      url: 'index.php',
      type: 'post',
      data: {
      	'email_check' : 1,
      	'email' : email,
      },
      success: function(response){
        alert(response);
      	if (response == 'taken' ){
          email_state = false;
          $('#email').parent().removeClass();
          $('#email').parent().addClass("form_error");
          $('#email').siblings("span").text('Email already there');
      	}else if (response == 'not_taken') {
      	  email_state = true;
      	  $('#email').parent().removeClass();
      	  $('#email').parent().addClass("form_success");
      	  $('#email').siblings("span").text('Email available');
      	}
      }
 	});
 });

 $(document).on('click', '#reg_btn', function(){
//$('#reg_btn').on('click', function(){
  alert("hello");
  var fullname=$('#name').val();
  var address=$('#add').val();
  var phone=$('#phno').val();
  var dob=$('#dob').val();
  var email = $('#email').val();
  var password = $('#pwd').val();
  console.log(fullname);
  console.log(fullname);
  if (email_state == false) {
    $('#error_msg').text('Fix the errors in the form first');
  }else{
      // proceed with form submission
      $.ajax({
        url: '../index.php',
        type: 'post',
        data: {
          'save' : 1,
          'fullname' : fullname,
          'address' : address,
          'phone' : phone,
          'dob' : dob,
          'email' : email,
          'password' : password,
        },
        success: function(response){
          alert('user saved');
          window.location="../index.php";
          $('#email').val('');
        }
      });
  }
 });
