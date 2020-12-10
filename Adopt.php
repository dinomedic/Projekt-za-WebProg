<!DOCTYPE html>
<html lang="en">
<head>
  <title>Adopt</title>
  <?php include ('head.php');?>
</head>
<body>

<?php include ('header.php'); ?>
<?php include ('navbar.php');?>


<main>
<?php
require_once "connect.php";
$sql = "SELECT A_name,species,id,age FROM animals";
$result = $db->query($sql);
?>
<div class="container-fluid">
  <div class="row">
  <div class="col-sm-4 ">
</div>
  <div class="col-sm ">
<p class="text-center"> Pet adoption is a critical part of our mission. Each year, 6.5 million pets enter animal shelters in the United States. Tragically, only half of them are adopted. 

At Seattle Humane, homeless pets stay with us until they are adopted — no matter how long it takes. We believe every animal deserves a chance for a good home. 

There are many reasons pets come to our shelter.  Some animals are transferred from other shelters, and some pets are surrendered for medical or behavioral concerns, 
or due to financial hardship. No matter the situation, we prepare adopters for success by 
helping you choose a pet that is right for your home environment and providing education and care that will get your relationship off to a good start. <br><br>
<a href="CreateAdopt.php">Create adoption listing</a><br><br></p>

</div>
<div class="col-sm-4 ">
</div>
</div>
</div>
<div class="container-fluid">
  
</div>
    <div class="col-sm ">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Animal name</th>
      <th scope="col">Species</th>
      <th scope="col">Age</th>
      
    </tr>
  </thead>
  <tbody>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {?>
    <tr>
    <?php echo "<td><a href='ViewAnima.php?id=".$row['id']."'>".$row['A_name']."</a></td>";?>
      <td><?php echo $row["species"]?></td>
      <td><?php echo $row["age"]?></td>
      
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
</main>
<?php include('footer.php'); ?>


</body>
</html>