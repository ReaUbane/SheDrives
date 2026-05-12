<?php
include '../db.php';

$sql = "SELECT * FROM listings";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    echo $row['title'];
    echo "<br>";
}
?>