<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Animal</title>
  <?php include ('head.php');?>
</head>
<body>

<?php include ('header.php'); ?>
<?php include ('navbar.php');?>


<?php
require_once "connect.php";
$id = $_GET['id'];
$sql = "SELECT * FROM animals where id=$id";
$result = $db->query($sql);




      
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $userid=$row["creator_id"];
$sql1 = "SELECT Fname,Lname,email FROM users where id='$userid'";
$result1 = $db->query($sql1);
      $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
?>
<div class="container-fluid">
  <div class="row">
  
    <div class="col-sm-4 text-fluid ">
      <p>Animal name: <br>
      <?php echo $row["A_name"];?></p><br>
      <p>Species: <br>
      <?php echo $row["species"];?></p><br>
      <p>Gender: <br>
      <?php echo $row["gender"];?></p><br>
      <p>Age: <br>
      <?php echo $row["age"];?></p><br>
      <p>Description: <br>
      <?php echo $row["A_description"];?></p><br>
      
      
    </div>
    <div class="col-sm-4 ">
    <p>Current foster: <br>
      <?php echo $row1["Fname"]," ",$row1["Lname"];?></p><br>
      <p>Contact email: <br>
      <?php echo $row1["email"];?></p><br>
  </div>
  <div class="col-sm-4 ">
    <p>If you wish to adopt this animal or want to learn more contact it's current foster. If you run into issues be sure to <a href="Contactus.php">contact us.</p> 
    <?php if ($_SESSION['login_role'] == 'admin' || $_SESSION['login_id'] == $row['creator_id'] ){
     echo "<a href='deleteanima.php?id=".$row['id']."'>Delete</a>";
  }?>
</div>




</div>
</div>

<?php include('footer.php'); ?>


</body>
</html>