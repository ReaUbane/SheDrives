<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<title>Moderator Dashboard | SheDrives</title>

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

.logout-btn{

    background:
    linear-gradient(to right,#d81b60,#7b1fa2);

    color:white;

    padding:12px 20px;

    border-radius:8px;

    text-decoration:none;

}

.hero{

    width:90%;
    margin:40px auto;

    padding:60px;

    border-radius:20px;

    background:
    linear-gradient(to right,#d81b60,#7b1fa2);

    color:white;

}

.dashboard{

    width:90%;
    margin:40px auto;

    display:grid;

    grid-template-columns:
    repeat(auto-fit,minmax(280px,1fr));

    gap:30px;

}

.card{

    background:white;

    padding:35px;

    border-radius:20px;

    box-shadow:0 5px 20px rgba(0,0,0,0.08);

}

.btn{

    display:inline-block;

    background:
    linear-gradient(to right,#d81b60,#7b1fa2);

    color:white;

    padding:12px 20px;

    border-radius:8px;

    text-decoration:none;

    margin-top:20px;

}

</style>

</head>

<body>

<div class="navbar">

<div class="logo">

SheDrives

</div>

<a href="../logout.php" class="logout-btn">

Logout

</a>

</div>

<div class="hero">

<h1>

Welcome, Moderator!

</h1>

<p>

Manage users and moderate vehicle listings across the platform.

</p>

</div>

<div class="dashboard">

<div class="card">

<h2>

Manage Payments

</h2>

<p>

Review and moderate payments

</p>

<a href="payments.php" class="btn">

Open

</a>

</div>

<div class="dashboard">

<div class="card">

<h2>

Manage Car Listings

</h2>

<p>

Review and moderate the car listings

</p>

<a href="manage_listings.php" class="btn">

Open

</a>

</div>

</div>

</body>
</html>