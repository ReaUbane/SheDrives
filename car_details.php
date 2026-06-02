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

    <title>Car Details | SheDrives</title>

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
            transition:0.3s;
        }

        .home-btn:hover{
            opacity:0.9;
        }

        /* MAIN SECTION */

        .details-container{
            width:90%;
            margin:50px auto;

            display:grid;
            grid-template-columns:1fr 1fr;

            gap:40px;

            background:white;

            border-radius:20px;

            overflow:hidden;

            box-shadow:0 5px 20px rgba(0,0,0,0.1);
        }

        /* IMAGE */

        .car-image img{
            width:100%;
            height:100%;
            object-fit:cover;
        }

        /* INFO */

        .car-info{
            padding:40px;
        }

        .car-info h1{
            font-size:42px;
            margin-bottom:20px;
            color:#222;
        }

        .price{
            font-size:38px;
            color:#d81b60;
            font-weight:700;
            margin-bottom:25px;
        }

        .info-box{
            margin-bottom:30px;
            line-height:2;
            color:#555;
            font-size:18px;
        }

        .description{
            margin-bottom:30px;
            line-height:1.8;
            color:#666;
        }

        /* BUTTONS */

        .button-group{
            display:flex;
            gap:20px;
            flex-wrap:wrap;
        }

        .btn{
            display:inline-block;
            padding:14px 25px;
            border-radius:8px;
            text-decoration:none;
            color:white;
            font-weight:500;
            transition:0.3s;
        }

        .buy-btn{
            background:linear-gradient(to right,#d81b60,#7b1fa2);
        }

        .contact-btn{
            background:#222;
        }

        .back-btn{
            background:linear-gradient(to right,#d81b60,#7b1fa2);
        }

        .btn:hover{
            opacity:0.9;
        }

        /* RESPONSIVE */

        @media(max-width:900px){

            .details-container{
                grid-template-columns:1fr;
            }

            .car-info h1{
                font-size:34px;
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

</div>

<!-- DETAILS -->

<div class="details-container">

    <!-- IMAGE -->

    <div class="car-image">

        <img src="uploads/car_images<?php echo $vehicle['image']; ?>">

    </div>

    <!-- INFO -->

    <div class="car-info">

        <h1>

            <?php echo $vehicle['make']; ?>
            <?php echo $vehicle['model']; ?>

        </h1>

        <div class="price">

            R<?php echo number_format($vehicle['price']); ?>

        </div>

        <div class="info-box">

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

        <div class="description">

            <?php echo $vehicle['description']; ?>

        </div>

        <!-- BUTTONS -->

        <div class="button-group">

            <a href="checkout.php?id=<?php echo $vehicle['vehicle_id']; ?>"
            class="btn buy-btn">

                Buy Car

            </a>

            <a href="contact_seller.php?id=<?php echo $vehicle['vehicle_id']; ?>"
            class="btn contact-btn">

                Contact Seller

            </a>

            <a href="cars.php"
            class="btn back-btn">

                Back to Cars

            </a>

        </div>

    </div>

</div>

</body>
</html>