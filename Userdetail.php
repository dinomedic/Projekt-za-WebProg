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
$sql = "SELECT * FROM users where id=$id";
$result = $db->query($sql);




      
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);      
?>
<div class="container-fluid">
  <div class="row">
  
    <div class="col-sm-4 text-fluid ">
      <p>Fname: <br>
      <?php echo $row["Fname"];?></p><br>
      <p>Lname: <br>
      <?php echo $row["Lname"];?></p><br>
      <p>Username: <br>
      <?php echo $row["username"];?></p><br>
      <p>Email: <br>
      <?php echo $row["email"];?></p><br>
      <p>Role: <br>
      <?php echo $row["role"];?></p><br>
      
      
    </div>
    <div class="col-sm-4 ">
    
  </div>
  <div class="col-sm-4 ">
    
    <?php echo "<a href='usermodif.php?id=".$row["id"]."'>Delete</a>";?><br>
    
   
    
</div>




</div>
</div>

<?php include('footer.php'); ?>


</body>
</html>