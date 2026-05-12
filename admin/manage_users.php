<?php
include '../db.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    echo $row['name']." - ".$row['role'];
    echo "<br>";
}
?>