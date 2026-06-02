<?php

include("../db_connect.php");

$id = $_POST['vehicle_id'];

$make = mysqli_real_escape_string($conn,
$_POST['make']);

$model = mysqli_real_escape_string($conn,
$_POST['model']);

$price = mysqli_real_escape_string($conn,
$_POST['price']);

$mileage = mysqli_real_escape_string($conn,
$_POST['mileage']);

$description = mysqli_real_escape_string($conn,
$_POST['description']);

$sql = "UPDATE vehicles SET

make='$make',
model='$model',
price='$price',
mileage='$mileage',
description='$description'

WHERE vehicle_id='$id'";

if(mysqli_query($conn, $sql)){

    echo "

    <h2>Vehicle updated successfully.</h2>

    <a class='back-btn'
    href='dashboard.php'>

        Back to Dashboard

    </a>

    ";

} else {

    echo mysqli_error($conn);

}

?>