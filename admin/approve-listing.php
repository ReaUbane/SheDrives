<?php
session_start();
if($_SESSION['role'] !='admin'){
    header("LOcation: ../login.php");
}

include("../db_connect.php");

$id = $_GET['id'];

mysqli_query($conn,
"UPDATE vehicles SET listing_status='Approved' WHERE vehicle_id='$id'");

header("Location: manage_listings.php");
?>