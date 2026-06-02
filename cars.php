<?php

include("db_connect.php");

$search = "";

if(isset($_GET['search'])){

    $search = mysqli_real_escape_string(
    $conn,
    $_GET['search']
    );

    $query = "SELECT * FROM vehicles
    WHERE make LIKE '%$search%'
    OR model LIKE '%$search%'";

}else{

    $query = "SELECT * FROM vehicles";

}

$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>

    <title>Available Cars | SheDrives</title>

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

        .navbar h1{
            color:#7b1fa2;
        }

        .home-btn{
            background:linear-gradient(to right,#d81b60,#7b1fa2);
            color:white;
            padding:12px 20px;
            text-decoration:none;
            border-radius:8px;
            font-weight:500;
            transition:0.3s;
        }

        .home-btn:hover{
            opacity:0.9;
        }

        /* PAGE TITLE */

        .page-title{
            text-align:center;
            margin:50px 0 30px;
        }

        .page-title h2{
            font-size:42px;
            color:#222;
        }

        .page-title p{
            color:gray;
            margin-top:10px;
        }

        /* CAR GRID */

        .car-container{
            width:90%;
            margin:auto;

            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(300px,1fr));

            gap:30px;

            margin-bottom:60px;
        }

        /* CARD */

        .car-card{
            background:white;
            border-radius:15px;
            overflow:hidden;
            box-shadow:0 5px 20px rgba(0,0,0,0.1);
            transition:0.3s;
        }

        .car-card:hover{
            transform:translateY(-8px);
        }

        .car-card img{
            width:100%;
            height:230px;
            object-fit:cover;
        }

        .car-info{
            padding:20px;
        }

        .car-info h3{
            margin-bottom:10px;
            font-size:24px;
        }

        .price{
            color:#d81b60;
            font-size:26px;
            font-weight:700;
            margin-bottom:10px;
        }

        .details{
            color:#555;
            margin-bottom:20px;
            line-height:1.7;
        }

        /* BUTTONS */

        .btn{
            display:inline-block;
            background:linear-gradient(to right,#d81b60,#7b1fa2);
            color:white;
            padding:12px 22px;
            border-radius:8px;
            text-decoration:none;
            font-weight:500;
            transition:0.3s;
        }

        .btn:hover{
            opacity:0.9;
        }

        /* EMPTY */

        .empty{
            text-align:center;
            margin-top:80px;
            font-size:22px;
            color:gray;
        }

        /* RESPONSIVE */

        @media(max-width:768px){

            .navbar{
                flex-direction:column;
                gap:20px;
            }

            .page-title h2{
                font-size:32px;
            }

        }

    </style>

</head>

<body>

<!-- NAVBAR -->

<div class="navbar">

    <h1>SheDrives</h1>

    <a href="index.php" class="home-btn">

        Back to Home

    </a>

</div>

<!-- PAGE TITLE -->

<div class="page-title">

    <h2>Available Cars</h2>

    <p>
        Explore vehicles listed by trusted sellers across South Africa
    </p>

</div>

<!-- CAR LIST -->

<div class="car-container">

<?php

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){

?>

    <div class="car-card">

        <img src="uploads/<?php echo $row['image']; ?>">

        <div class="car-info">

            <h3>

                <?php echo $row['make']; ?>
                <?php echo $row['model']; ?>

            </h3>

            <p class="price">

                R<?php echo number_format($row['price']); ?>

            </p>

            <div class="details">

                Mileage:
                <?php echo $row['mileage']; ?> km

                <br><br>

                Year:
                <?php echo $row['year']; ?>

            </div>

            <a href="car_details.php?id=<?php echo $row['vehicle_id']; ?>"
            class="btn">

                View Details

            </a>

        </div>

    </div>

<?php

    }

}else{

    echo "<div class='empty'>No vehicles available yet.</div>";

}

?>

</div>

</body>
</html>