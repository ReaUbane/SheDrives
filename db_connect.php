<?php

$conn = mysqli_connect(
    "sql102.infinityfree.com",
    "if0_42054448",
    "Betswe22",
    "if0_42054448_shedrives"
);

if(!$conn){
    die("Database connection failed: " . mysqli_connect_error());
}

?>