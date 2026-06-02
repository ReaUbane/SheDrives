<?php
session_start();
include("db_connect.php");

$buyer_id = $_SESSION['user_id'];
$vehicle_id = $_GET['id'];

mysqli_query($conn, "INSERT INTO favourites (buyer_id, vehicle_id)
VALUES ('$buyer_id','$vehicle_id')");

header("Location: cars.php");
?>