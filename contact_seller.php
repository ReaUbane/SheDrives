<?php

include("db_connect.php");

if(isset($_GET['id'])){

    $vehicle_id = $_GET['id'];

    $query = "SELECT * FROM vehicles
    WHERE vehicle_id='$vehicle_id'";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){

        $vehicle = mysqli_fetch_assoc($result);

    }else{

        die("Vehicle not found");

    }

}else{

    die("Invalid request");

}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Contact Seller | SheDrives</title>

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

        .back-btn{
            background:linear-gradient(to right,#d81b60,#7b1fa2);
            color:white;
            padding:12px 22px;
            border-radius:8px;
            text-decoration:none;
            font-weight:500;
        }

        /* MAIN SECTION */

        .contact-container{
            width:90%;
            max-width:1200px;

            margin:50px auto;

            display:grid;
            grid-template-columns:1fr 1fr;

            gap:40px;
        }

        /* VEHICLE CARD */

        .vehicle-card{
            background:white;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 5px 20px rgba(0,0,0,0.1);
        }

        .vehicle-card img{
            width:100%;
            height:350px;
            object-fit:cover;
        }

        .vehicle-info{
            padding:30px;
        }

        .vehicle-info h1{
            font-size:36px;
            margin-bottom:15px;
        }

        .price{
            color:#d81b60;
            font-size:34px;
            font-weight:700;
            margin-bottom:20px;
        }

        .details{
            color:#555;
            line-height:2;
        }

        /* CONTACT FORM */

        .contact-box{
            background:white;
            padding:40px;
            border-radius:20px;
            box-shadow:0 5px 20px rgba(0,0,0,0.1);
        }

        .contact-box h2{
            margin-bottom:25px;
            color:#7b1fa2;
        }

        .form-group{
            margin-bottom:20px;
        }

        .form-group label{
            display:block;
            margin-bottom:8px;
            font-weight:500;
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
            height:150px;
            resize:none;
        }

        .send-btn{
            width:100%;
            padding:16px;
            border:none;

            background:
            linear-gradient(to right,#d81b60,#7b1fa2);

            color:white;

            font-size:18px;

            border-radius:8px;

            cursor:pointer;

            transition:0.3s;
        }

        .send-btn:hover{
            opacity:0.9;
        }

        .note{
            margin-top:20px;
            color:#777;
            font-size:14px;
            line-height:1.7;
        }

        /* RESPONSIVE */

        @media(max-width:900px){

            .contact-container{
                grid-template-columns:1fr;
            }

            .vehicle-info h1{
                font-size:30px;
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

    <a href="car_details.php?id=<?php echo $vehicle['vehicle_id']; ?>"
    class="back-btn">

        Back to Details

    </a>

</div>

<!-- MAIN -->

<div class="contact-container">

    <!-- VEHICLE -->

    <div class="vehicle-card">

        <img src="uploads/<?php echo $vehicle['image']; ?>">

        <div class="vehicle-info">

            <h1>

                <?php echo $vehicle['make']; ?>
                <?php echo $vehicle['model']; ?>

            </h1>

            <div class="price">

                R<?php echo number_format($vehicle['price']); ?>

            </div>

            <div class="details">

                <strong>Year:</strong>
                <?php echo $vehicle['year']; ?>

                <br>

                <strong>Mileage:</strong>
                <?php echo $vehicle['mileage']; ?> km

                <br>

                <strong>Fuel Type:</strong>
                <?php echo $vehicle['fuel_type']; ?>

                <br>

                <strong>Transmission:</strong>
                <?php echo $vehicle['transmission']; ?>

            </div>

        </div>

    </div>

    <!-- CONTACT FORM -->

    <div class="contact-box">

        <h2>Contact Seller</h2>

        <form action="send_message.php" method="POST">

            <input type="hidden"
            name="vehicle_id"
            value="<?php echo $vehicle_id; ?>">

            <div class="form-group">

                <label>Car Enquriy</label>

                <input type="hidden"
                name="message_type"
                required>

            </div>

            <div class="form-group">

                <label>Full Name</label>

                <input type="text"
                name="sender_name"
                required>

            </div>

            <div class="form-group">

                <label>Email Address</label>

                <input type="email"
                name="sender_email"
                required>

            </div>

            <div class="form-group">

                <label>Phone Number</label>

                <input type="text"
                name="sender_phone"
                required>

            </div>

            <div class="form-group">

                <label>Subject</label>

                <input type="text"
                name="subject"
                required>

            </div>

            <div class="form-group">

                <label>Your Message</label>

                <textarea
                name="message"
                required>I am interested in this vehicle. Please contact me with more information.</textarea>

            </div>

            <button type="submit"
            class="send-btn">

                Send Message

            </button>

        </form>

        <div class="note">

            Your message will be securely sent to the seller through the SheDrives platform.

        </div>

    </div>

</div>

</body>
</html>