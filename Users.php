<!DOCTYPE html>
<html lang="en">
<head>
  <title>Adopt</title>
  <?php include ('head.php');?>
</head>
<body>

<?php include ('header.php'); ?>
<?php include ('navbar.php');?>



<?php
require_once "connect.php";
$sql = "SELECT id,username FROM users";
$result = $db->query($sql);
?>

<div class="container-fluid">
  
</div>
    <div class="col-sm ">
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">username</th>
      
      
    </tr>
  </thead>
  <tbody>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {?>
    <tr>
    <?php echo "<td><a href='Userdetail.php?id=".$row['id']."'>".$row['username']."</a></td>";?>
      
      
    </tr>
       <?php
    }
} else {
    echo "0 results";
}

?>
</div>

</div>
</div>

<?php include('footer.php'); ?>


</body>
</html>