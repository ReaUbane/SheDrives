<?php
session_start();

if($_SESSION['role'] != 'admin'){
    echo "Access denied";
    exit();
}
?>

<h2>Admin Dashboard</h2>

<a href="manage_users.php">Manage Users</a>
<a href="manage_listings.php">Manage Listings</a>