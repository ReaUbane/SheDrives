<?php
include("db_connect.php");

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// USER CHOOSES ROLE
$role = $_POST['role'];

$query = "INSERT INTO users (full_name, email, phone, password, role)
VALUES ('$full_name', '$email', '$phone', '$password', '$role')";

if(mysqli_query($conn, $query)){

    $user_id = mysqli_insert_id($conn);

    // CREATE SELLER RECORD
    if($role == "seller"){

        mysqli_query($conn,
        "INSERT INTO sellers (user_id) VALUES ('$user_id')");

    }

    // CREATE BUYER RECORD
    if($role == "buyer"){

        mysqli_query($conn,
        "INSERT INTO buyers (user_id) VALUES ('$user_id')");

    }

    header("Location: login.php");

}else{

    echo "Registration failed: " . mysqli_error($conn);

}

?>