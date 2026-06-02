<!DOCTYPE html>
<html>
<head>

    <title>About Us | SheDrives</title>

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

        .home-btn{
            background:linear-gradient(to right,#d81b60,#7b1fa2);
            color:white;
            padding:12px 22px;
            border-radius:8px;
            text-decoration:none;
            font-weight:500;
        }

        /* HERO */

        .hero{
            height:350px;

            background:
            linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
            url('images/about-banner.jpg');

            background-size:cover;
            background-position:center;

            display:flex;
            justify-content:center;
            align-items:center;

            color:white;
            text-align:center;
        }

        .hero h1{
            font-size:60px;
        }

        /* CONTENT */

        .content{
            width:85%;
            margin:60px auto;

            background:white;

            padding:50px;

            border-radius:20px;

            box-shadow:0 5px 20px rgba(0,0,0,0.1);
        }

        .content h2{
            color:#7b1fa2;
            margin-bottom:20px;
        }

        .content p{
            line-height:2;
            color:#555;
            margin-bottom:25px;
        }

        /* FEATURES */

        .features{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:25px;
            margin-top:40px;
        }

        .feature-box{
            background:#fafafa;
            padding:30px;
            border-radius:15px;
            text-align:center;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        .feature-box h3{
            color:#d81b60;
            margin-bottom:15px;
        }

        @media(max-width:900px){

            .features{
                grid-template-columns:1fr;
            }

            .hero h1{
                font-size:40px;
            }

        }

    </style>

</head>

<body>

<!-- NAVBAR -->

<div class="navbar">

    <div class="logo">
        SheDrives
    </div>

    <a href="index.php" class="home-btn">
        Back to Home
    </a>

</div>

<!-- HERO -->

<div class="hero">

    <div>

        <h1>About SheDrives</h1>

        <p>
            South Africa’s trusted C2C vehicle marketplace
        </p>

    </div>

</div>

<!-- CONTENT -->

<div class="content">

    <h2>Who We Are</h2>

    <p>
        SheDrives is a modern customer-to-customer vehicle marketplace developed to simplify the process of buying and selling vehicles across South Africa. The platform connects independent sellers and buyers through a secure and user-friendly digital environment.
    </p>

    <p>
        Our mission is to provide a safe, professional, and accessible online marketplace where individuals can advertise vehicles, communicate with buyers, and complete transactions with confidence.
    </p>

    <h2>Our Vision</h2>

    <p>
        We aim to empower individuals through digital commerce by making vehicle trading more accessible, transparent, and efficient for everyone.
    </p>

    <!-- FEATURES -->

    <div class="features">

        <div class="feature-box">

            <h3>Secure Platform</h3>

            <p>
                Secure login systems and protected transactions for buyers and sellers.
            </p>

        </div>

        <div class="feature-box">

            <h3>Trusted Sellers</h3>

            <p>
                Vehicle listings managed by verified users across the platform.
            </p>

        </div>

        <div class="feature-box">

            <h3>Easy To Use</h3>

            <p>
                A modern responsive interface designed for all devices.
            </p>

        </div>

    </div>

</div>

</body>
</html>