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

    <title>Secure Checkout | SheDrives</title>

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

        /* MAIN CONTAINER */

        .checkout-container{
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

        /* PAYMENT SECTION */

        .payment-box{
            background:white;
            padding:40px;
            border-radius:20px;
            box-shadow:0 5px 20px rgba(0,0,0,0.1);
        }

        .payment-box h2{
            margin-bottom:30px;
            color:#7b1fa2;
        }

        .secure{
            background:#f3e5f5;
            padding:12px;
            border-radius:8px;
            margin-bottom:25px;
            color:#7b1fa2;
            font-size:14px;
        }

        .form-group{
            margin-bottom:20px;
        }

        .form-group label{
            display:block;
            margin-bottom:8px;
            font-weight:500;
        }

        .form-group input{
            width:100%;
            padding:14px;
            border:1px solid #ccc;
            border-radius:8px;
            font-size:16px;
        }

        .form-row{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:20px;
        }

        .pay-btn{
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

        .pay-btn:hover{
            opacity:0.9;
        }

        /* RESPONSIVE */

        @media(max-width:900px){

            .checkout-container{
                grid-template-columns:1fr;
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

    <a href="cars.php" class="back-btn">
        Back to Cars
    </a>

</div>

<!-- MAIN -->

<div class="checkout-container">

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

    <!-- PAYMENT -->

    <div class="payment-box">

        <h2>Secure Payment Gateway</h2>

        <div class="secure">

            Your payment is encrypted and securely processed.

        </div>

        <form action="process_payment.php" method="POST">

            <input type="hidden"
            name="vehicle_id"
            value="<?php echo $vehicle['vehicle_id']; ?>">

            <input type="hidden"
            name="amount"
            value="<?php echo $vehicle['price']; ?>">

            <div class="form-group">

                <label>Full Name</label>

                <input type="text"
                name="buyer_name"
                required>

            </div>

            <div class="form-group">

                <label>Email Address</label>

                <input type="email"
                name="buyer_email"
                required>

            </div>

            <div class="form-group">

                <label>Name On Card</label>

                <input type="text"
                name="card_name"
                required>

            </div>

            <div class="form-group">

                <label>Card Number</label>

                <input type="text"
                name="card_number"
                maxlength="16"
                required>

            </div>

            <div class="form-row">

                <div class="form-group">

                    <label>Expiry Date</label>

                    <input type="text"
                    name="expiry_date"
                    placeholder="MM/YY"
                    required>

                </div>

                <div class="form-group">

                    <label>CVV</label>

                    <input type="password"
                    name="cvv"
                    maxlength="3"
                    required>

                </div>

            </div>

            <button type="submit"
            class="pay-btn">

                Pay Securely

            </button>

        </form>

    </div>

</div>

</body>
</html>