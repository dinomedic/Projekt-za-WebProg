<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listings</title>
  <?php include ('head.php');?>
</head>
<body>

<?php include ('header.php'); ?>
<?php include ('navbar.php');?>
<?php
include_once "connect.php";
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){
    echo "not logged in";
}else{
  echo "logged in!";
  echo "<a href=logout.php>Odjava</a>";

}
?>




<?php include('footer.php'); ?>


</body>
</html>