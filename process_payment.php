<?php

session_start();

include("db_connect.php");

?>

<!DOCTYPE html>
<html>
<head>

<title>Payment Successful | SheDrives</title>

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

    display:flex;

    justify-content:center;

    align-items:center;

    height:100vh;

}

/* PAYMENT CARD */

.payment-card{

    width:500px;

    background:white;

    padding:50px;

    border-radius:25px;

    text-align:center;

    box-shadow:0 5px 25px rgba(0,0,0,0.1);

}

/* SUCCESS ICON */

.icon{

    width:100px;
    height:100px;

    margin:0 auto 25px auto;

    border-radius:50%;

    background:
    linear-gradient(to right,#d81b60,#7b1fa2);

    display:flex;

    justify-content:center;
    align-items:center;

    color:white;

    font-size:45px;

}

/* HEADINGS */

h1{

    color:#7b1fa2;

    margin-bottom:20px;

    font-size:36px;

}

p{

    color:#666;

    line-height:1.8;

    margin-bottom:35px;

    font-size:17px;

}

/* BUTTON */

.btn{

    display:inline-block;

    background:
    linear-gradient(to right,#d81b60,#7b1fa2);

    color:white;

    padding:14px 28px;

    border-radius:10px;

    text-decoration:none;

    font-size:16px;

    font-weight:500;

    transition:0.3s;

}

.btn:hover{

    opacity:0.9;

}

</style>

</head>

<body>

<div class="payment-card">

<div class="icon">

✓

</div>

<h1>

Payment Successful

</h1>

<p>

Your vehicle purchase has been processed successfully through the SheDrives secure payment gateway.

Thank you for using our platform.

</p>

<a href="index.php" class="btn">

Return Home

</a>

</div>

</body>
</html>