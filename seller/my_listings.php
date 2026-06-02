<?php

session_start();

include("../db_connect.php");

$query = "SELECT * FROM vehicles";

$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>
<head>

<title>My Listings | SheDrives</title>

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

.container{
    width:90%;
    margin:40px auto;
}

h1{
    margin-bottom:30px;
    color:#7b1fa2;
}

.card{

    background:white;

    border-radius:20px;

    padding:25px;

    margin-bottom:25px;

    box-shadow:0 5px 20px rgba(0,0,0,0.08);

}

.card img{

    width:100%;
    height:250px;

    object-fit:cover;

    border-radius:15px;

    margin-bottom:20px;

}

.btn{

    display:inline-block;

    background:
    linear-gradient(to right,#d81b60,#7b1fa2);

    color:white;

    padding:12px 20px;

    border-radius:8px;

    text-decoration:none;

    margin-right:10px;

}

.back-btn{

    display:inline-block;

    margin-bottom:25px;

    background:
    linear-gradient(to right,#d81b60,#7b1fa2);

    color:white;

    padding:12px 22px;

    border-radius:8px;

    text-decoration:none;

    font-weight:500;

    transition:0.3s;

}

.back-btn:hover{

    opacity:0.9;

}

</style>

</head>

<body>

<div class="container">

<a href="dashboard.php" class="back-btn">
    Back to Dashboard
</a>

<h1>My Listings</h1>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<div class="card">

<img src="../uploads/<?php echo $row['image']; ?>">

<h2>

<?php echo $row['make']; ?>
<?php echo $row['model']; ?>

</h2>

<p>

Price:
R<?php echo number_format($row['price']); ?>

</p>

<br>

<a href="edit_car.php?id=<?php echo $row['vehicle_id']; ?>"
class="btn">

Edit

</a>

<a href="delete_car.php?id=<?php echo $row['vehicle_id']; ?>"
class="btn">

Delete

</a>

</div>

<?php } ?>

</div>

</body>
</html>