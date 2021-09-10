@extends('layouts.app')


@section('content')

<!DOCTYPE html>
<html>
<title>User Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=CDtj-M3-1K11tMPQrmLMuao_RgwPRjGOZUqh480QR6LR5NRPM8wqCwtnPOTjeHfOguA4rYK04Dc-K_gAJ5CSuN_8jCi6eaC1iRfvny5hBWY" charset="UTF-8"></script><style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="w3-theme-l5">

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="/w3images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> User Name, UI</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> City Name</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> DOB</p>
        </div>
      </div>
      <br>
      

      
  
      <a href="javascript:history.back()" class="btn btn-default">Dashboard</a>
     

</body>
</html> 


@endsection