<?php

session_start();

include("../db_connect.php");

$user_id = $_SESSION['user_id'];

$seller_query = mysqli_query(
$conn,
"SELECT * FROM sellers
WHERE user_id='$user_id'"
);

if(mysqli_num_rows($seller_query) == 0){

    die("Seller not found");

}

$seller = mysqli_fetch_assoc($seller_query);

$seller_id = $seller['seller_id'];

$make = $_POST['make'];
$model = $_POST['model'];
$year = $_POST['year'];
$price = $_POST['price'];
$mileage = $_POST['mileage'];
$fuel_type = $_POST['fuel_type'];
$transmission = $_POST['transmission'];
$description = $_POST['description'];

$image = $_FILES['image']['name'];

$temp_name = $_FILES['image']['tmp_name'];

move_uploaded_file(
$temp_name,
"../uploads/$image"
);

$query = "INSERT INTO vehicles

(seller_id,
make,
model,
year,
price,
mileage,
fuel_type,
transmission,
description,
image)

VALUES

('$seller_id',
'$make',
'$model',
'$year',
'$price',
'$mileage',
'$fuel_type',
'$transmission',
'$description',
'$image')";

if(mysqli_query($conn,$query)){

    echo "
    <script>

    alert('Vehicle Added Successfully');

    window.location.href='my_listings.php';

    </script>
    ";

}else{

    echo mysqli_error($conn);

}

?>