<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <?php include ('head.php');?>
  <script src="scripts/loginjs.js"></script>
  
</head>
<body>
    <?php include ('header.php'); ?>
    
    <?php include ('navbar.php'); ?>

    
    <form class="form-login">
        <div class="form-group">
        <label for="Email">Email address: </label><br>
        <input type="email"  id="Email"  placeholder="Enter your email address">
    </div>
    <div class="form-group">
        <label for="Password">Password: </label><br>
        <input type="password"  id="Password" placeholder="enter desired password"> 
    </div>
        <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Remember me
            </label>
          </div>

          <button type="submit" onclick="provjeraLogin()" class="btn btn-primary">Login</button>
    </form>









    <?php include('footer.php'); ?>

    
    
</body>