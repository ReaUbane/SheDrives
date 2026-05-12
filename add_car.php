<<?php
session_start();
include 'db.php';

if(isset($_POST['add'])){

    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $brand = $_POST['brand'];
    $location = $_POST['location'];
    $user_id = $_SESSION['user_id'];

    // FILE UPLOAD
    $image = $_FILES['image'];
    $imageName = time() . "_" . basename($image['name']);
    $target = "uploads/" . $imageName;

    // VALIDATION
    $allowed = ['image/jpeg', 'image/png', 'image/jpg'];

    if(in_array($image['type'], $allowed) && $image['size'] < 2000000){

        if(move_uploaded_file($image['tmp_name'], $target)){

            $stmt = $conn->prepare("INSERT INTO listings 
            (title, price, description, brand, location, image, user_id)
            VALUES (?, ?, ?, ?, ?, ?, ?)");

            $stmt->bind_param("sdssssi", $title, $price, $description, $brand, $location, $imageName, $user_id);
            $stmt->execute();

            echo "Car listed successfully!";
        } else {
            echo "Upload failed";
        }

    } else {
        echo "Invalid file (only JPG/PNG under 2MB allowed)";
    }
}
?>

<form method="POST">
    <input type="text" name="title" placeholder="Car Name">
    <input type="number" name="price" placeholder="Price">
    <textarea name="description"></textarea>
    <button name="add">Add Car</button>
</form>

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-success text-white">
      <h4>Sell Your Car</h4>
    </div>

    <div class="card-body">
      <form method="POST">
        <input class="form-control mb-3" type="text" name="title" placeholder="Car Name">
        <input class="form-control mb-3" type="number" name="price" placeholder="Price">
        <textarea class="form-control mb-3" name="description" placeholder="Description"></textarea>
        <button class="btn btn-success">Add Car</button>
      </form>
    </div>
  </div>
</div>

<input class="form-control mb-3" type="text" name="brand" placeholder="Brand">
<input class="form-control mb-3" type="text" name="location" placeholder="Location">