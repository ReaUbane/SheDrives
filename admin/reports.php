<?php

session_start();

if(!isset($_SESSION['role'])){

    die("Access Denied");

}


include("../db_connect.php");

$user_query = mysqli_query($conn,
"SELECT COUNT(*) AS total_users FROM users");

$user_data = mysqli_fetch_assoc($user_query);

$vehicle_query = mysqli_query($conn,
"SELECT COUNT(*) AS total_vehicles FROM vehicles");

$vehicle_data = mysqli_fetch_assoc($vehicle_query);

?>

<!DOCTYPE html>
<html>
<head>

<title>Reports | SheDrives</title>

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

.container{
    width:90%;
    margin:40px auto;
}

h1{
    color:#7b1fa2;
    margin-bottom:30px;
}

.card{

    background:white;

    padding:40px;

    border-radius:20px;

    margin-bottom:25px;

    box-shadow:0 5px 20px rgba(0,0,0,0.08);

}

.card h2{

    color:#7b1fa2;

    margin-bottom:15px;

}

.card p{

    font-size:22px;

    color:#444;

}

</style>

</head>

<body>

<div class="container">

<h1>Platform Reports</h1>

<div class="card">

<h2>Total Users</h2>

<p>

<?php echo $user_data['total_users']; ?>

</p>

</div>

<div class="card">

<h2>Total Vehicle Listings</h2>

<p>

<?php echo $vehicle_data['total_vehicles']; ?>

</p>

</div>

</div>

</body>
</html>