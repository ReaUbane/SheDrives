<?php
session_start();
if($_SESSION['role'] != 'admin'){
    header("Location: ../login.php");
}
include("../db_connect.php");

$id = $_GET['id'];

$sellerQuery = mysqli_query($conn,
"SELECT seller_id FROM sellers WHERE user_id='$id'");

if(mysqli_num_rows($sellerQuery) > 0){

    $seller = mysqli_fetch_assoc($sellerQuery);

    $seller_id = $seller['seller_id'];

    mysqli_query($conn,
    "DELETE FROM vehicles WHERE seller_id='$seller_id'");

}

mysqli_query($conn,
"DELETE FROM buyers WHERE user_id='$id'");

mysqli_query($conn,
"DELETE FROM sellers WHERE user_id='$id'");

$deleteUser = mysqli_query($conn,
"DELETE FROM users WHERE user_id='$id'");

if($deleteUser){

    header("Location: manage_users.php");

} else {

    echo "Error deleting user.";

}

?>