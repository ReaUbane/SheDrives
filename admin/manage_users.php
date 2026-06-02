<?php

session_start();

include("../db_connect.php");

$query = "SELECT * FROM users";

$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>

    <title>Manage Users | SheDrives</title>

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

        .container{

            width:90%;
            margin:40px auto;

        }

        h1{

            margin-bottom:30px;
            color:#7b1fa2;

        }

        table{

            width:100%;

            background:white;

            border-radius:15px;

            overflow:hidden;

            border-collapse:collapse;

            box-shadow:0 5px 20px rgba(0,0,0,0.08);

        }

        table th{

            background:#7b1fa2;
            color:white;

            padding:18px;

            text-align:left;

        }

        table td{

            padding:18px;

            border-bottom:1px solid #eee;

        }

        .btn{

            display:inline-block;

            background:
            linear-gradient(to right,#d81b60,#7b1fa2);

            color:white;

            padding:10px 16px;

            border-radius:8px;

            text-decoration:none;

            margin-right:10px;

        }

    </style>

</head>

<body>

<div class="navbar">

    <div class="logo">

        SheDrives

    </div>

    <a href="super_admin_dashboard.php" class="back-btn">

        Back Dashboard

    </a>

</div>

<div class="container">

    <h1>

        Manage Users

    </h1>

    <table>

        <tr>

            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>

        </tr>

        <?php

        while($row = mysqli_fetch_assoc($result)){

        ?>

        <tr>

            <td>

                <?php echo $row['user_id']; ?>

            </td>

            <td>

                <?php echo $row['full_name']; ?>

            </td>

            <td>

                <?php echo $row['email']; ?>

            </td>

            <td>

                <?php echo $row['role']; ?>

            </td>

            <td>

                <a href="delete_user.php?id=<?php echo $row['user_id']; ?>"
                class="btn">

                    Delete

                </a>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>