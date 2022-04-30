<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Dr El Kholy University </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body 
  {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p 
  {
      
   font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">My coures</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.html">login</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Who Am I?</h3>
  <img src="pictures/mortarboard.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="200" height="200">
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Who Am I?</h3>
  <p>Pharos University is the first Egyptian private university in Alexandria. It was established by Presidential Decree No. 252, 2006 and Presidential Decree No. 302, 2009.The university’s certificates are all accredited by the Supreme Council of Egyptian Universities and the Ministry of Higher Education.
    Member of the Association of Arab Universities
    Member of the Euro-Mediterranean Universities Union </p>
  
</div>

<!-- Third Container (Grid) -->
<?php  include("thirdcontainer.html"); ?>
<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p> Powerd By <a href="https://www.youtube.com/channel/UCI_7T_iFJkaZKZz5TjT8ypw">Habashy Masr</a></p> 
</footer>

</body>
</html>
