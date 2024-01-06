<?php 

include 'connection.php';

$id = $_POST['ID'];
$query = "DELETE FROM `contact` WHERE `id`='$id'";
mysqli_query($conn,$query);

header('location:dashboard.php');