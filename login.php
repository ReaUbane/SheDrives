<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SheDrives</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            height:100vh;
            background:
            linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)),
            url('images/car_wallpaper.jpg');

            background-size:cover;
            background-position:center;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .login-container{
            width:400px;
            background:white;
            padding:40px;
            border-radius:15px;
            box-shadow:0 0 20px rgba(0,0,0,0.3);
        }

        .login-container h1{
            text-align:center;
            margin-bottom:10px;
            color:#7b2cbf;
        }

        .login-container p{
            text-align:center;
            margin-bottom:30px;
            color:gray;
        }

        .form-group{
            margin-bottom:20px;
        }

        .form-group label{
            display:block;
            margin-bottom:8px;
            font-weight:bold;
        }

        .form-group input{
            width:100%;
            padding:12px;
            border:1px solid #ccc;
            border-radius:8px;
            font-size:16px;
        }

        .form-group input:focus{
            outline:none;
            border:2px solid #7b2cbf;
        }

        .login-btn{
            width:100%;
            padding:14px;
            border:none;
            background:#7b2cbf;
            color:white;
            font-size:16px;
            border-radius:8px;
            cursor:pointer;
            transition:0.3s;
        }

        .login-btn:hover{
            background:#5a189a;
        }

        .back-home{
            text-align:center;
            margin-top:20px;
        }

        .back-home a{
            text-decoration:none;
            color:#7b2cbf;
            font-weight:bold;
        }

        .back-home a:hover{
            text-decoration:underline;
        }

    </style>

</head>
<body>

    <div class="login-container">

        <h1>Welcome Back</h1>
        <p>Login to your SheDrives account</p>

        <form action="login_process.php" method="POST">

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="login-btn">
                Login
            </button>

        </form>

        <div class="register-link">
          New User?
            <a href="register.php">Register here</a>
        </div>

        <div class="back-home">
            <a href="index.php">← Back to Home</a>
        </div>

    </div>

</body>
</html>