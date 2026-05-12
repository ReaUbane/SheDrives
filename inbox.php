<?php
session_start();
include 'db.php';

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM messages 
        WHERE receiver_id = '$user_id' 
        ORDER BY created_at DESC";

$result = $conn->query($sql);
?>

<div class="container mt-5">
  <h3>Your Messages</h3>

<?php
while($row = $result->fetch_assoc()){
    echo "<div class='card mb-2 p-3'>";
    echo "<p>".$row['message']."</p>";
    echo "<small>".$row['created_at']."</small>";
    echo "</div>";
}
?>
</div>