<?php
$id = $_GET['id'];
require_once "connect.php";



$sql = "DELETE FROM volunteerapplication WHERE id = $id"; 

if (mysqli_query($db, $sql)) {
    mysqli_close($db);
    header('Location: CheckApplications.php'); 
    exit;
} else {
    echo "Error deleting record";
}
?>