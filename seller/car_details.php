<?php
session_start();
include("../db_connect.php");

$user_id = $_SESSION['user_id'];

$sellerQuery = mysqli_query($conn, "SELECT seller_id FROM sellers WHERE user_id='$user_id'");
$seller = mysqli_fetch_assoc($sellerQuery);

$seller_id = $seller['seller_id'];

$result = mysqli_query($conn, "SELECT * FROM vehicles WHERE seller_id='$seller_id'");
?>

<h2>My Vehicle Listings</h2>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<div class="vehicle-card">

    <img src="../uploads/<?php echo $row['image']; ?>" width="200">

    <h3><?php echo $row['make'] . " " . $row['model']; ?></h3>

    <p>R<?php echo $row['price']; ?></p>

    <a href="edit_vehicle.php?id=<?php echo $row['vehicle_id']; ?>">Edit</a>

    <a href="delete_vehicle.php?id=<?php echo $row['vehicle_id']; ?>">Delete</a>

</div>

<?php } ?>