<?php

session_start();

include("../db_connect.php");

$query = "SELECT * FROM users";

$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>

<title>Role Management | SheDrives</title>

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
    color:#7b1fa2;
    margin-bottom:30px;
}

table{

    width:100%;

    border-collapse:collapse;

    background:white;

    border-radius:15px;

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

select{

    padding:10px;

    border-radius:8px;

}

.btn{

    background:
    linear-gradient(to right,#d81b60,#7b1fa2);

    color:white;

    border:none;

    padding:10px 18px;

    border-radius:8px;

    cursor:pointer;

}

</style>

</head>

<body>

<div class="container">

<h1>Role Management</h1>

<table>

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Role</th>

</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td>

<?php echo $row['user_id']; ?>

</td>

<td>

<?php echo $row['full_name']; ?>

</td>

<td>

<?php echo $row['email']; ?>

</td>

<td>

<?php echo $row['role']; ?>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>