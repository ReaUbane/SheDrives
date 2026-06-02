<?php
include("../db_connect.php");

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM vehicles WHERE vehicle_id='$id'");

header("Location: my-listings.php");
?>