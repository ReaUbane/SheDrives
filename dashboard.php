<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Locatrion: login.php");

}
?>

<h2>Welcome to SheDrives Market</h2>

<a href="add_car.php">Sell a Car</a>
<a href="view_cars.php">Browse Cars</a>
<a href="logout.php">Logout</a>
<a href="inbox.php" class="btn btn-dark">Messages</a>