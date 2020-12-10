<!DOCTYPE html>
<html lang="en">
<head>
  <title>Adoption form</title>
  <?php include ('head.php');?>
  
  
  
</head>
<body>
  
    <?php include ('header.php'); ?>  
      
    <?php include ('navbar.php'); ?>
    <main>
    <div class="container-fluid">
        <div class="row">
    <div class="col-sm-6 border">
    <form class="form-adopt" action="" method="post">

    <div class="form-group">
        <label for="A_name">Animal name: </label><br>
        <input type="text" name="A_name" id="A_name" placeholder="Enter name of animal" required="required">
      </div>
      <div class="form-group">
      <label for="species">Species: </label><br>
      <select class="form-control-sm" id="species" name="species" required="required">
        <option>Dog</option>
        <option>Cat</option>
        
        
        </select>
      </div>
      <div class="form-group">
      <label for="gender">Gender: </label><br>
      <select class="form-control-sm" id="gender" name="gender" required="required">
        <option>Male</option>
        <option>Female</option>
        
        
        </select>
      </div>
      <div class="form-group">
      <label for="age">Age: </label><br>
      <select class="form-control-sm" id="age" name="age" required="required">
        <option>Less then a year</option>
        <option>Don't know</option>
        <?php for ($i = 1; $i <= 30; $i++) : ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>

        
        
        </select>
      </div>
      <div class="form-group">
      <label for="A_description">Description of animal: </label><br>
      <textarea class="form-control-m" id="A_description" name="A_description" rows="3" required="required" placeholder="Enter more details about animal and if animal has any special needs or conditions"></textarea>
      </div>
      
      <button type="submit" class="btn btn-primary">Create adoption listing</button>
    </form>
    </div>
  </div>
</div>

        </main>

    <?php include('footer.php'); ?>

    
    
</body>
<?php
require_once "connect.php";
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){
  header("location: Login.php");
} else{
if(isset($_POST["A_name"])||isset($_POST["species"])){
    
    $animalname = mysqli_real_escape_string($db,$_POST["A_name"]);
      $animalspecies = mysqli_real_escape_string($db,$_POST["species"]); 
	$sql = "";
	
	$result = mysqli_query($db, "SELECT * FROM animals WHERE A_name='$animalname' and species='$animalspecies'");
	
	if($result->num_rows == 0) {
	
	    $userid=$_SESSION['login_id'];
		
		$sql = mysqli_query($db,"INSERT INTO animals (A_name,species,gender,age,A_description,creator_id)
        VALUES ('".$_POST["A_name"]."','".$_POST["species"]."','".$_POST["gender"]."','".$_POST["age"]."','".$_POST["A_description"]."','".$userid."')"); 
        echo "<p align='center'>Adoption listing created!!</p>" ;   
        header("location: Adopt.php");
    }
    
    else{
        echo "<p align='center'>Same listing already exists!</p>";
    }
				
        
}  }


?>