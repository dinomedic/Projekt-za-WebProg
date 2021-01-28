<!DOCTYPE html>
<html lang="en">

<head>
  <title>Volunteer form</title>
  <?php include('head.php'); ?>
  <script src="scripts/Volunteerformjs.js"></script>


</head>

<body>
  <header>
  <?php include('header.php'); ?>

  <?php include('navbar.php'); ?>
</header>
<main>
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
      <label for="email">Email address: </label><br>
      <input type="email" name="email" id="email" placeholder="Enter your email address" required="required">
    </div>

    <div class="form-group">
      <label for="dob">Date of birth: </label><br>
      <input type="date" name="dob" id="dob" required="required">
    </div>
    <div class="form-group">
      <label for="work">Select what kind of volunteer work you are interested in:</label><br>
      <select class="form-control-sm" id="work" name="work" required="required">
        <option>Fostering</option>
        <option>Administration</option>
        <option>Working in shelter</option>
        <option>Working with animals</option>

      </select>
    </div>
    </div>


    <button type="submit" class="btn btn-primary" onclick="clicked()">Send application</button>
  </form>

</main>







  <?php include('footer.php'); ?>



</body>

<?php


if (isset($_POST["email"])) {
  require_once "connect.php";
  $sql = "";

  $result = mysqli_query($db, "SELECT * FROM volunteerapplication WHERE email = '" . $_POST["email"] . "'");

  if ($result->num_rows == 0) {



    $sql = mysqli_query($db, "INSERT INTO volunteerapplication (Fname,Lname,email,dob,work)
        VALUES ('" . $_POST["Fname"] . "','" . $_POST["Lname"] . "','" . $_POST["email"] . "','" . $_POST["dob"] . "','" . $_POST["work"] . "')");
    echo "<p align='center'>Application sent!</p>";
  } else {
    echo "<p align='center'>You already submitted an application!</p>";
  }
}




?>