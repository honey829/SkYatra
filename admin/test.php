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
  <link rel="stylesheet" type="text/css" href="styles/mystyle.css">
  <script>
  function load(){
    var loading = document.getElementById('loading');
    var btn = document.getElementById('btn');
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if(this.readyState == 4 && this.status == 200){
        if(document.getElementById('btn'))
        {
          loading.style.display="block";
          btn.style.display="none";
        }
      }
    }
    xmlhttp.open("POST","test.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send();
  }
  </script>
</head>
<body>
  <div id="loading" style="display:none" class="overlay">
    <img src="..\image\loading.gif" style="height:10%;width:10%;" title="loading"></img>
  </div>
  <button type="button" id="btn" onclick="load();" class="btn btn-info" name="button">see</button>
</body>
