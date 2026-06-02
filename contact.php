<!DOCTYPE html>
<html>
<head>

    <title>Contact Us | SheDrives</title>

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
            height:320px;

            background:
            linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
            url('images/contact-banner.jpg');

            background-size:cover;
            background-position:center;

            display:flex;
            justify-content:center;
            align-items:center;

            color:white;
            text-align:center;
        }

        .hero h1{
            font-size:55px;
        }

        /* CONTACT SECTION */

        .contact-container{
            width:85%;
            margin:60px auto;

            display:grid;
            grid-template-columns:1fr 1fr;

            gap:40px;
        }

        .contact-box,
        .info-box{
            background:white;
            padding:40px;
            border-radius:20px;
            box-shadow:0 5px 20px rgba(0,0,0,0.1);
        }

        .contact-box h2,
        .info-box h2{
            margin-bottom:25px;
            color:#7b1fa2;
        }

        .form-group{
            margin-bottom:20px;
        }

        .form-group input,
        .form-group textarea{
            width:100%;
            padding:14px;
            border:1px solid #ccc;
            border-radius:8px;
            font-size:16px;
        }

        textarea{
            height:140px;
            resize:none;
        }

        .send-btn{
            width:100%;
            padding:14px;
            border:none;

            background:
            linear-gradient(to right,#d81b60,#7b1fa2);

            color:white;

            border-radius:8px;

            font-size:16px;

            cursor:pointer;
        }

        .info{
            margin-bottom:25px;
            line-height:2;
            color:#555;
        }

        .info strong{
            color:#222;
        }

        @media(max-width:900px){

            .contact-container{
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

        <h1>Contact Us</h1>

        <p>
            We'd love to hear from you. Contact the SheDrives support team using the details below or send us a message directly through the form:
        </p>

    </div>

</div>

<!-- CONTACT -->

<div class="contact-container">

    <!-- FORM -->

    <div class="contact-box">

        <h2>Send Us A Message</h2>

        <form>

            <div class="form-group">

                <input type="hidden"
                placeholder="General Contact">

            </div>
        
            <div class="form-group">

                <input type="text"
                placeholder="Full Name">

            </div>

            <div class="form-group">

                <input type="email"
                placeholder="Email Address">

            </div>

            <div class="form-group">

                <input type="text"
                placeholder="Phone Number">

            </div>

            <div class="form-group">

                <input type="subject"
                placeholder="Subject">

            </div>

            <div class="form-group">

                <textarea
                placeholder="Your Message"></textarea>

            </div>

            <button class="send-btn">

                Send Message

            </button>

        </form>

    </div>

    <!-- INFO -->

    <div class="info-box">

        <h2>Contact Information</h2>

        <div class="info">

            <strong>Customer Support Admin: Given Hamilton</strong>

        </div>

        <div class="info">

            <strong>Telephone:</strong>

            <br>

            +27 11 565 5943

        </div>

        <div class="info">

            <strong>Mobile:</strong>

            <br>

            +27 83 462 1848 

        </div>

        <div class="info">

            <strong>Email:</strong>

            <br>

            G.Hamilton@shedrives.com

        </div>

        <div class="info">

            <strong>Location:</strong>

            <br>

            Midrand, South Africa

        </div>

        <div class="info">

            <strong>Operating Hours:</strong>

            <br>

            Monday - Friday
            <br>
            08:00 - 17:00

            <br>
            Saturday
            <br>
            09:00 - 15:00

        </div>

    </div>

</div>

</body>
</html>