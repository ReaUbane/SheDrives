<?php
session_start();

if($_SESSION['role'] != 'admin'){

    header("Location: ../login.php");

}

include("../db_connect.php");

$id = $_GET['id'];

mysqli_query($conn,
"UPDATE vehicles SET listing_status='Rejected' WHERE vehicle_id='$id'");

header("Location: manage_listings.php");
?>