<?php

$id = $_GET['id'];
require_once "connect.php";



$sql2 = "DELETE FROM users WHERE id = $id"; 

if (mysqli_query($db, $sql2)) {
    mysqli_close($db);
    header('Location: Users.php'); 
    exit;
} else {
    echo "Error deleting record";
}
?>