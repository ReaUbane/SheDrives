<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

    <title>Register | SheDrives</title>

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
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .register-container{

            width:500px;

            background:white;

            padding:40px;

            border-radius:20px;

            box-shadow:0 5px 20px rgba(0,0,0,0.1);

        }

        .logo{

            text-align:center;

            font-size:36px;

            font-weight:700;

            color:#7b1fa2;

            margin-bottom:10px;

        }

        .subtitle{

            text-align:center;

            color:#777;

            margin-bottom:30px;

        }

        h2{

            text-align:center;

            margin-bottom:25px;

            color:#333;

        }

        .form-group{

            margin-bottom:18px;

        }

        label{

            display:block;

            margin-bottom:8px;

            font-weight:500;

            color:#555;

        }

        input,
        select{

            width:100%;

            padding:14px;

            border:1px solid #ddd;

            border-radius:10px;

            font-size:15px;

        }

        input:focus,
        select:focus{

            outline:none;

            border-color:#7b1fa2;

        }

        .btn{

            width:100%;

            border:none;

            padding:15px;

            border-radius:10px;

            background:linear-gradient(to right,#d81b60,#7b1fa2);

            color:white;

            font-size:16px;

            font-weight:600;

            cursor:pointer;

            margin-top:10px;

        }

        .btn:hover{

            opacity:0.9;

        }

        .login-link{

            text-align:center;

            margin-top:20px;

        }

        .login-link a{

            color:#7b1fa2;

            text-decoration:none;

            font-weight:600;

        }

        .back-home{

            display:block;

            text-align:center;

            margin-top:15px;

            color:#555;

            text-decoration:none;

        }

    </style>

</head>

<body>

<div class="register-container">

    <div class="logo">
        SheDrives
    </div>

    <div class="subtitle">
        Join South Africa's trusted car marketplace
    </div>

    <h2>Create Account</h2>

    <form action="register_process.php" method="POST">

        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="full_name" required>
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="phone" required>
        </div>

        <div class="form-group">
            <label>Register As</label>

            <select name="role" required>
                <option value="">Select Role</option>
                <option value="buyer">Buyer</option>
                <option value="seller">Seller</option>
            </select>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit" class="btn">
            Create Account
        </button>

    </form>

    <div class="login-link">
        Already have an account?
        <a href="login.php">Login</a>
    </div>

    <a href="index.php" class="back-home">
        ← Back to Home
    </a>

</div>

</body>
</html>