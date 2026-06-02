<?php

session_start();

include("../db_connect.php");

$vehicle_id = $_GET['id'];

$query = mysqli_query($conn,
"SELECT * FROM vehicles WHERE vehicle_id='$vehicle_id'");

$vehicle = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Vehicle | SheDrives</title>

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

    background:white;

    padding:20px 8%;

    display:flex;

    justify-content:space-between;

    align-items:center;

    box-shadow:0 2px 10px rgba(0,0,0,0.08);

}

.logo{

    font-size:32px;

    font-weight:700;

    color:#7b1fa2;

}

.back-btn{

    text-decoration:none;

    background:linear-gradient(to right,#d81b60,#7b1fa2);

    color:white;

    padding:12px 22px;

    border-radius:8px;

}

.container{

    width:90%;

    max-width:900px;

    margin:40px auto;

}

.form-card{

    background:white;

    padding:40px;

    border-radius:20px;

    box-shadow:0 5px 20px rgba(0,0,0,0.08);

}

h1{

    color:#7b1fa2;

    margin-bottom:30px;

}

.form-group{

    margin-bottom:20px;

}

label{

    display:block;

    margin-bottom:8px;

    font-weight:500;

    color:#555;

}

input,
select,
textarea{

    width:100%;

    padding:14px;

    border:1px solid #ddd;

    border-radius:10px;

    font-size:15px;

}

textarea{

    resize:none;

    height:120px;

}

.current-image{

    width:250px;

    border-radius:12px;

    margin-top:10px;

}

.save-btn{

    border:none;

    background:linear-gradient(to right,#d81b60,#7b1fa2);

    color:white;

    padding:14px 25px;

    border-radius:10px;

    cursor:pointer;

    font-size:16px;

    font-weight:600;

}

.save-btn:hover{

    opacity:0.9;

}

</style>

</head>

<body>

<div class="navbar">

    <div class="logo">
        SheDrives
    </div>

    <a href="my_listings.php" class="back-btn">
        Back to Listings
    </a>

</div>

<div class="container">

<div class="form-card">

<h1>Edit Vehicle</h1>

<form action="update_car.php" method="POST" enctype="multipart/form-data">

<input type="hidden"
name="vehicle_id"
value="<?php echo $vehicle['vehicle_id']; ?>">

<div class="form-group">

<label>Make</label>

<input type="text"
name="make"
value="<?php echo $vehicle['make']; ?>"
required>

</div>

<div class="form-group">

<label>Model</label>

<input type="text"
name="model"
value="<?php echo $vehicle['model']; ?>"
required>

</div>

<div class="form-group">

<label>Year</label>

<input type="number"
name="year"
value="<?php echo $vehicle['year']; ?>"
required>

</div>

<div class="form-group">

<label>Price</label>

<input type="number"
name="price"
value="<?php echo $vehicle['price']; ?>"
required>

</div>

<div class="form-group">

<label>Mileage</label>

<input type="number"
name="mileage"
value="<?php echo $vehicle['mileage']; ?>"
required>

</div>

<div class="form-group">

<label>Fuel Type</label>

<input type="text"
name="fuel_type"
value="<?php echo $vehicle['fuel_type']; ?>">

</div>

<div class="form-group">

<label>Transmission</label>

<input type="text"
name="transmission"
value="<?php echo $vehicle['transmission']; ?>">

</div>

<div class="form-group">

<label>Description</label>

<textarea name="description"><?php echo $vehicle['description']; ?></textarea>

</div>

<div class="form-group">

<label>Current Image</label>

<br>

<img src="../uploads/<?php echo $vehicle['image']; ?>"
class="current-image">

</div>

<div class="form-group">

<label>Upload New Image (Optional)</label>

<input type="file" name="image">

</div>

<button type="submit" class="save-btn">

Update Vehicle

</button>

</form>

</div>

</div>

</body>
</html>