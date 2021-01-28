<!DOCTYPE html>
<html lang="en">

<head>
   <title>Login</title>
   <?php include('head.php'); ?>


</head>

<body>
   <header>
      <?php include('header.php'); ?>
      <?php include('navbar.php'); ?>
   </header>
   <main>
      <form class="form-login" action="Login.php" method="post">
         <div class="form-group">
            <label for="username">Username: </label><br>
            <input type="text" name="username" id="username" placeholder="Enter username" required="required">
         </div>
         <div class="form-group">
            <label for="password">Password: </label><br>
            <input type="password" name="password" id="password" placeholder="enter password" required="required">
         </div>


         <button type="submit" class="btn btn-primary">Login</button>

         <p>Don't have an account?<a class="nav-link" href="Register.php">Register</a></p>

      </form>
   </main>









   <?php include('footer.php'); ?>



</body>

<?php
include_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $myusername = mysqli_real_escape_string($db, $_POST['username']);
   $mypassword = mysqli_real_escape_string($db, $_POST['password']);



   $sql = "SELECT id,role FROM users WHERE username = '$myusername' and password = '$mypassword'";

   $result = mysqli_query($db, $sql);

   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $myid = $row['id'];
   $myrole = $row['role'];
   $count = $result->num_rows;



   if ($count == 1) {
      $_SESSION['loggedin'] = true;
      $_SESSION['login_user'] = $myusername;
      $_SESSION['login_role'] = $myrole;
      $_SESSION['login_id'] = $myid;


      header("location: Frontpage.php");
   } else {
      $_SESSION['loggedin'] = false;
      echo  "Wrong password or user doesn't exist!";
   }
}
?>