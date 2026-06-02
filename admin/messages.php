<?php

session_start();

include("../db_connect.php");

$query = "SELECT * FROM messages ORDER BY message_id DESC";

$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>

<title>Messages | SheDrives</title>

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

.message-card{

    background:white;

    padding:30px;

    border-radius:20px;

    margin-bottom:25px;

    box-shadow:0 5px 20px rgba(0,0,0,0.08);

}

.message-card h3{

    color:#7b1fa2;

    margin-bottom:15px;

}

.message-card p{

    color:#555;

    line-height:1.8;

}

.message-info{

    margin-top:15px;

    font-size:14px;

    color:#888;

}

</style>

</head>

<body>

<div class="navbar">

    <div class="logo">

        SheDrives

    </div>

    <a href="support_dashboard.php"
    class="back-btn">

        Back Dashboard

    </a>

</div>

<div class="container">

<h1>Buyer & Seller Messages</h1>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<div class="message-card">

<h3>

<?php echo $row['subject']; ?>

</h3>

<p>

<?php echo $row['message']; ?>

</p>

<div class="message-info">
Type:
<?php echo $row['message_type']; ?>

<br><br>

Name:
<?php echo $row['sender_name']; ?>

<br><br>

Email:
<?php echo $row['sender_email']; ?>

<br><br>

Phone:
<?php echo $row['sender_phone']; ?>

</div>

</div>

<?php } ?>

</div>

</body>
</html>