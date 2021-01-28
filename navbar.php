<?php
include_once "connect.php";

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){
echo '
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="Frontpage.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Adopt.php">Adopt</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="About.php">About us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Volunteer.php">Volunteer</a>
    </li>
    </ul>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="Login.php">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Register.php"">Register</a>
    </li>
  </ul>

</nav><br><br>';}
elseif($_SESSION['login_role']=='admin'){
  echo '
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="Frontpage.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Adopt.php">Adopt</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="About.php">About us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Volunteer.php">Volunteer</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="CheckApplications.php">Check Applications</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="Users.php">See user information</a>
      </li>
    </ul>
    <ul class="navbar-nav">
    <li class="nav-item">
      <p class="navbar-text"> You are logged in as admin: ',$_SESSION['login_user'],'</p>
      
    <li class="nav-item">
    <a class="nav-link" href="logout.php">Logout</a>
    </ul>
</nav><br><br>';
}


else{
  echo '
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="Frontpage.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Adopt.php">Adopt</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="About.php">About us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Volunteer.php">Volunteer</a>
    </li>
    </ul>
    <ul class="navbar-nav">
    <li class="nav-item">
      <p class="navbar-text"> You are logged in as: ',$_SESSION['login_user'],'</p>
      
    <li class="nav-item">
    <a class="nav-link" href="logout.php">Logout</a>
    </ul>
</nav><br><br>';
}
?>