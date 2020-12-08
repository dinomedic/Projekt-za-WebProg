<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <?php include ('head.php');?>
  
  
</head>
<body>
  
<?php include ('header.php'); ?>
<?php include ('navbar.php');?>
    
    <form class="form-login" action="Login.php" method="post">
        <div class="form-group">
        <label for="username">Username: </label><br>
        <input type="text"  name="username" id="username"  placeholder="Enter username" required="required">
    </div>
    <div class="form-group">
        <label for="password">Password: </label><br>
        <input type="password" name="password" id="password" placeholder="enter password" required="required"> 
    </div>
        

          <button type="submit" class="btn btn-primary">Login</button>
    </form>









    <?php include('footer.php'); ?>

    
    
</body>

<?php
   include_once "connect.php";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      
      $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = $result->num_rows;
      
		
      if($count == 1) {
         $_SESSION['loggedin'] = true;
         $_SESSION['login_user'] = $myusername;
        
         
         header("location: listings.php");
      }
	  else {
      $_SESSION['loggedin']=false;
         echo  "Wrong password or username or user doesn't exist!";
      }
   }
?>