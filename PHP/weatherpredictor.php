<!DOCTYPE html>
<html>
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 14 June 2007), see www.w3.org">
<title>Weather Forcaster</title>
<meta charset="utf-8">
<meta http-equiv="Content-type" content="text/html; charset=us-ascii">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css">
<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" type="text/css">
<style type="text/css">
html, body {
height:100%;
}
.container {
 background-image:url("images/background.jpg");
 width:100%;
 height:100%;
 background-size:cover;
 background-position:center;
 padding-top:100px;
 
}
.center {
 text-align:center;
}
.white {
color:white;
}
p {
 padding-top:15px;
 padding-bottom:15px;
}
button {
 margin-top:20px;
 margin-bottom:20px;
}
.alert {
 margin-top:20px;
display:none;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3 center">
<h1 class="center white">Weather Predictor</h1>
<p class="lead center white">Enter your city below to get a forecast for the weather.</p>
<form>
<div class="form-group"><input type="text" class="form-control"
name="city" id="city" placeholder="Eg.London, Paris, San Francisco..."></div>
<button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>
</form>
<div id="success" class="alert alert-success">Success!</div>
<div id="fail" class="alert alert-danger">Could not find weather data for that city. Please try again.</div>
<div id="noCity" class="alert alert-danger">Please enter a city!</div>
</div>
</div>
</div>
<script src="//code.jquery.com/jquery-1.11.0.min.js" type="text/javascript"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"type="text/javascript">
</script>
<script type="text/javascript">

$("#findMyWeather").click(function(event) {

 event.preventDefault();

 $(".alert").hide();

 if ($("#city").val()!="") {

 $.get("scraper.php?city="+$("#city").val(),
function( data ) {




 if (data=="") {


 $("#fail").fadeIn();

 } else {


 $("#success").html(data).fadeIn();

 }


 });

 } else {

 $("#noCity").fadeIn();

 }



 });
</script>
</body>
</html>