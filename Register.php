<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <?php include ('head.php');?>
  
  
  
</head>
<body>
    <?php include ('header.php'); ?>  
      
    <?php include ('navbar.php'); ?>

    <form class="form-register" action="" method="post">

    <div class="form-group">
        <label for="Fname">First name: </label><br>
        <input type="text" name="Fname" id="Fname" placeholder="Enter your first name" required="required">
      </div>

      <div class="form-group">
        <label for="Lname">Last name: </label><br>
        <input type="text" name="Lname" id="Lname" placeholder="Enter your last name" required="required">
      </div>

      <div class="form-group">
        <label for="username">Username: </label><br>
        <input type="text" name="username" id="username" placeholder="Enter your username" required="required">
      </div>
      
      
      <div class="form-group">
        <label for="email">Email address: </label><br>
        <input type="email" name="email" id="email"  placeholder="Enter your email address" required="required">
      </div>
      
      <div class="form-group">
        <label for="Password">Password: </label><br>
        <input type="password" name="password" id="password" placeholder="enter desired password" required="required"> 
      </div>
      
      <button type="submit" onclick="provjeraRegister()" class="btn btn-primary">Finish Registration</button>
      </form>









    <?php include('footer.php'); ?>

    
    
</body>

<?php

if(isset($_POST["username"])){
	
	require_once "connect.php";
	$sql = "";
	$result = mysqli_query($db, "SELECT * FROM users WHERE username = '".$_POST["username"]."'");
	
	if($result->num_rows == 0) {
		
		$sql = mysqli_query($db,"INSERT INTO users (Fname,Lname,username,email,password,role)
		VALUES ('".$_POST["Fname"]."','".$_POST["Lname"]."','".$_POST["username"]."','".$_POST["email"]."','".$_POST["password"]."','user')"); 
				
		$sql = header("Location: Login.php");
	} 
	else {
		echo "Username already exists!";
	}


}

?>