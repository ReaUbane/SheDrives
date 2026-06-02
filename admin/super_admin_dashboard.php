<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <title>Super Admin Dashboard | SheDrives</title>

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

        .hero h1{

            font-size:42px;
            margin-bottom:15px;

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

        Welcome, Super Admin!

    </h1>

    <p>

        Manage users, reports, and administrator permissions across the platform.

    </p>

</div>

<div class="dashboard">

    <div class="card">

        <h2>Manage Users</h2>

        <p>
            View, update, and remove users from the platform.
        </p>

        <a href="manage_users.php" class="btn">

            Open

        </a>

    </div>

    <div class="card">

        <h2>Role Management</h2>

        <p>
            Control administrator permissions and access levels.
        </p>

        <a href="role_management.php" class="btn">

            Open

        </a>

    </div>

    <div class="card">

        <h2>Reports</h2>

        <p>
            Monitor platform activities and marketplace statistics.
        </p>

        <a href="reports.php" class="btn">

            Open

        </a>

    </div>

</div>

</body>
</html>