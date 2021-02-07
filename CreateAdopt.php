<?php
require_once "connect.php";
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){
  header("location: Login.php");
} else{
if(isset($_POST["A_name"])||isset($_POST["species"])){
    
    $animalName = mysqli_real_escape_string($db,$_POST["A_name"]);
    $animalDescription = mysqli_real_escape_string($db,$_POST["A_description"]); 
      
	$sql = "";
	
	$result = mysqli_query($db, "SELECT * FROM animals WHERE A_name='$animalname' and species='$animalspecies'");
	
	if($result->num_rows == 0) {
	
	    $userid=$_SESSION['login_id'];
		
		$sql = mysqli_query($db,"INSERT INTO animals (A_name,species,gender,age,A_description,creator_id)
        VALUES ('".$animalName."','".$_POST["species"]."','".$_POST["gender"]."','".$_POST["age"]."','".$animalDescription."','".$userid."')"); 
           
        header("location: Adopt.php");
    }
    
    else{
        echo "<p align='center'>Same listing already exists!</p>";
    }
				
        
}  }
?>