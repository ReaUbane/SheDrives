<?php

session_start();

include("../db_connect.php");

?>

<!DOCTYPE html>
<html>
<head>

<title>Add Vehicle | SheDrives</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    background:#f5f5f5;
}

.navbar{

    width:100%;
    background:white;

    padding:20px 8%;

    display:flex;
    justify-content:space-between;
    align-items:center;

    box-shadow:0 2px 10px rgba(0,0,0,0.1);

}

.logo{

    font-size:32px;
    font-weight:700;

    color:#7b1fa2;

}

.back-btn{

    background:
    linear-gradient(to right,#d81b60,#7b1fa2);

    color:white;

    padding:12px 20px;

    border-radius:8px;

    text-decoration:none;

}

.form-container{

    width:60%;
    margin:50px auto;

    background:white;

    padding:40px;

    border-radius:20px;

    box-shadow:0 5px 20px rgba(0,0,0,0.08);

}

.form-container h1{

    margin-bottom:30px;
    color:#7b1fa2;

}

input,
textarea,
select{

    width:100%;

    padding:14px;

    margin-bottom:20px;

    border:1px solid #ccc;

    border-radius:8px;

    font-size:16px;

}

textarea{
    height:140px;
    resize:none;
}

.btn{

    width:100%;

    background:
    linear-gradient(to right,#d81b60,#7b1fa2);

    color:white;

    padding:15px;

    border:none;

    border-radius:8px;

    font-size:16px;

    cursor:pointer;

}

</style>

</head>

<body>

<div class="navbar">

    <div class="logo">

        SheDrives

    </div>

    <a href="dashboard.php" class="back-btn">

        Back to Dashboard

    </a>

</div>

<div class="form-container">

<h1>Add Vehicle</h1>

<form action="save_vehicle.php"
method="POST"
enctype="multipart/form-data">

<input type="text"
name="make"
placeholder="Vehicle Make"
required>

<input type="text"
name="model"
placeholder="Vehicle Model"
required>

<input type="number"
name="year"
placeholder="Year"
required>

<input type="number"
name="price"
placeholder="Price"
required>

<input type="number"
name="mileage"
placeholder="Mileage"
required>

<input type="text"
name="fuel_type"
placeholder="Fuel Type"
required>

<input type="text"
name="transmission"
placeholder="Transmission"
required>

<textarea
name="description"
placeholder="Vehicle Description"
required></textarea>

<input type="file"
name="image"
required>

<button type="submit"
class="btn">

Add Vehicle

</button>

</form>

</div>

</body>
</html>