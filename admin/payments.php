<?php

session_start();

include("../db_connect.php");

$query = "SELECT * FROM payments ORDER BY payment_id DESC";

$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>

<title>Payments | SheDrives</title>

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

    background:
    linear-gradient(to right,#d81b60,#7b1fa2);

    color:white;

    padding:12px 20px;

    border-radius:8px;

    text-decoration:none;

}

.container{

    width:90%;
    margin:40px auto;

}

h1{

    margin-bottom:30px;
    color:#7b1fa2;

}

table{

    width:100%;

    border-collapse:collapse;

    background:white;

    border-radius:20px;

    overflow:hidden;

    box-shadow:0 5px 20px rgba(0,0,0,0.08);

}

table th{

    background:#7b1fa2;

    color:white;

    padding:18px;

    text-align:left;

}

table td{

    padding:18px;

    border-bottom:1px solid #eee;

}

.status{

    padding:8px 15px;

    border-radius:20px;

    color:white;

    font-size:14px;

    background:
    linear-gradient(to right,#d81b60,#7b1fa2);

}

</style>

</head>

<body>

<div class="navbar">

    <div class="logo">

        SheDrives

    </div>

    <a href="moderator_dashboard.php"
    class="back-btn">

        Back Dashboard

    </a>

</div>

<div class="container">

<h1>Payments</h1>

<table>

<tr>

<th>ID</th>
<th>Buyer</th>
<th>Vehicle</th>
<th>Amount</th>
<th>Status</th>

</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td>

<?php echo $row['payment_id']; ?>

</td>

<td>

<?php echo $row['buyer_name']; ?>

</td>

<td>

<?php echo $row['vehicle_id']; ?>

</td>

<td>

R<?php echo number_format($row['amount']); ?>

</td>

<td>

<span class="status">

<?php echo $row['payment_status']; ?>

</span>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>