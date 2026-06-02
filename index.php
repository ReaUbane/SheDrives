<?php
include("db_connect.php");

$vehicles = mysqli_query($conn, "SELECT * FROM vehicles LIMIT 4");
?>

<!DOCTYPE html>
<html>
<head>

    <title>SheDrives</title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

<!-- NAVBAR -->

<div class="navbar">

    <div class="logo-area">

        <img src="assets/images/logo/shedrives_logo.jpg" class="logo">

    </div>

    <div class="nav-links">

        <a href="cars.php">Cars</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="login.php">Login</a>

        <a href="login.php" class="sell-btn">
            Sell Your Car
        </a>

    </div>

</div>

<!-- HERO SECTION -->

<div class="hero-section">

    <div class="hero-left">

        <h1>
            Buy and Sell Cars <br>
            Across <span>South Africa</span>
        </h1>

        <p>
            Trusted C2C vehicle marketplace for secure buying and selling.
        </p>

        <form method="GET" action="cars.php"  class="search-box">

            <input type="text"
                   name="search"
                   placeholder="Search by make or model">

            <button type="submit" class="btn">
                Search
            </button>

        </form>

    </div>

</div>

<!-- FEATURES -->

<div class="features">

    <div class="feature-box">

        <h3>Safe & Secure</h3>
        <p>Your safety is our priority.</p>

    </div>

    <div class="feature-box">

        <h3>Verified Sellers</h3>
        <p>Deal with trusted sellers.</p>

    </div>

    <div class="feature-box">

        <h3>Wide Selection</h3>
        <p>Find the perfect car.</p>

    </div>

    <div class="feature-box">

        <h3>24/7 Support</h3>
        <p>We are always available.</p>

    </div>

</div>

<!-- FEATURED VEHICLES -->

<div class="featured">

    <h2>Featured Cars</h2>

    <div class="car-container">

        <?php while($row = mysqli_fetch_assoc($vehicles)){ ?>

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

                <p>
                    <?php echo $row['mileage']; ?> km
                </p>

                <a href="car_details.php?id=<?php echo $row['vehicle_id']; ?>">

                    View Details

                </a>

            </div>

        </div>

        <?php } ?>

    </div>

</div>

<footer>
    <p>© 2026 SheDrives. All Rights Reserved.</p>
</footer>

</body>
</html>