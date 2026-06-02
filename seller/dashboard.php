<?php

session_start();

include("../db_connect.php");

?>

<!DOCTYPE html>
<html>
<head>

    <title>Seller Dashboard | SheDrives</title>

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

        /* NAVBAR */

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

        .nav-links a{

            text-decoration:none;

            margin-left:15px;

            background:
            linear-gradient(to right,#d81b60,#7b1fa2);

            color:white;

            padding:12px 20px;

            border-radius:8px;

            transition:0.3s;

        }

        .nav-links a:hover{

            opacity:0.9;

        }

        /* HERO */

        .hero{

            width:90%;
            margin:40px auto;

            background:
            linear-gradient(to right,#d81b60,#7b1fa2);

            color:white;

            padding:60px;

            border-radius:20px;

            box-shadow:0 5px 20px rgba(0,0,0,0.1);

        }

        .hero h1{

            font-size:42px;
            margin-bottom:15px;

        }

        .hero p{

            font-size:18px;

        }

        /* CARDS */

        .dashboard-grid{

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

            transition:0.3s;

        }

        .card:hover{

            transform:translateY(-8px);

        }

        .card h2{

            color:#7b1fa2;

            margin-bottom:15px;

        }

        .card p{

            color:#666;

            line-height:1.8;

            margin-bottom:25px;

        }

        .btn{

            display:inline-block;

            background:
            linear-gradient(to right,#d81b60,#7b1fa2);

            color:white;

            padding:12px 20px;

            border-radius:8px;

            text-decoration:none;

            transition:0.3s;

        }

        .btn:hover{

            opacity:0.9;

        }

    </style>

</head>

<body>

<!-- NAVBAR -->

<div class="navbar">

    <div class="logo">

        SheDrives

    </div>

    <div class="nav-links">

        <a href="add_car.php">

            Add Vehicle

        </a>

        <a href="my_listings.php">

            My Listings

        </a>

        <a href="../logout.php">

            Logout

        </a>

    </div>

</div>

<!-- HERO -->

<div class="hero">

    <h1>

        Seller Dashboard

    </h1>

    <p>

        Manage your vehicle listings, upload cars for sale, and connect with buyers securely through SheDrives.

    </p>

</div>

<!-- DASHBOARD CARDS -->

<div class="dashboard-grid">

    <div class="card">

        <h2>

            Add New Vehicle

        </h2>

        <p>

            Upload a vehicle with images, pricing, mileage, and specifications.

        </p>


    </div>

    <div class="card">

        <h2>

            Manage Listings

        </h2>

        <p>

            Edit or remove your vehicle listings at any time.

        </p>


    </div>

    <div class="card">

        <h2>

            Secure Selling

        </h2>

        <p>

            Communicate with buyers and manage sales safely through the platform.

        </p>

    </div>

</div>

</body>
</html>