<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM listings WHERE listing_id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if(isset($_SESSION['user_id'])){
?>

<a href="message.php?receiver_id=<?php echo $row['user_id']; ?>&listing_id=<?php echo $row['listing_id']; ?>" 
   class="btn btn-success mt-3">
   Contact Seller
</a>

<?php } else {
    echo "<p>Please login to contact seller</p>";
}

echo "<h2>".$row['title']."</h2>";
echo "<p>".$row['description']."</p>";
echo "<p>Price: R".$row['price']."</p>";
?>

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-body">
      <h2><?php echo $row['title']; ?></h2>
      <p><?php echo $row['description']; ?></p>
      <h4 class="text-success">R<?php echo $row['price']; ?></h4>
    </div>
  </div>
</div>

<img src="uploads/<?php echo htmlspecialchars($row['image']); ?>" 
     class="img-fluid mb-3">