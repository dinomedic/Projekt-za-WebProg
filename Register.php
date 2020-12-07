<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <?php include ('head.php');?>
  <script src="scripts/register.js"></script>
  
</head>
<body>
    <?php include ('header.php'); ?>  
      
    <?php include ('navbar.php'); ?>

    <form class="form-register">
      <div class="form-group">
        <label for="Fname">First name: </label><br>
        <input type="text" id="Fname" placeholder="Enter your first name">
      </div>
      
      <div class="form-group">
        <label for="Lname">Last name: </label><br>
        <input type="text" id="Lname" placeholder="Enter your last name">
      </div>
      
      <div class="form-group">
        <label for="Email">Email address: </label><br>
        <input type="email"  id="Email"  placeholder="Enter your email address">
      </div>
      
      <div class="form-group">
        <label for="Password">Password: </label><br>
        <input type="password"  id="Password" placeholder="enter desired password"> 
      </div>
      
      <div class="form-group">
        <label for="Passwordrepeat">Repeat Password: </label><br>
        <input type="password"  id="Passwordrepeat" placeholder="Repeat password">
      </div>
        
      <button type="submit" onclick="provjeraRegister()" class="btn btn-primary">Finish Registration</button>
      


    
    </form>









    <?php include('footer.php'); ?>

    
    
</body>