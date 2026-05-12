<?php
include 'db.php';

$search = $_GET['search'] ?? '';
$brand = $_GET['brand'] ?? '';
$location = $_GET['location'] ?? '';

$sql = "SELECT * FROM listings WHERE 1=1";

if(!empty($search)){
    $sql .= " AND title LIKE '%$search%'";
}

if(!empty($brand)){
    $sql .= " AND brand LIKE '%$brand%'";
}

if(!empty($location)){
    $sql .= " AND location LIKE '%$location%'";
}

$result = $conn->query($sql);
?>

<div class="col-md-4 mb-4">
  <div class="card shadow">
    <div class="card-body">
      <h5 class="card-title"><?php echo $row['title']; ?></h5>
      <p class="card-text">Price: R<?php echo $row['price']; ?></p>
      <a href="car_details.php?id=<?php echo $row['listing_id']; ?>" class="btn btn-dark">View Details</a>
    </div>
  </div>
</div>

<?php } ?>

  </div>
</div>

<div class="container mt-4">
  <form method="GET" class="row g-2">
    
    <div class="col-md-4">
      <input type="text" name="search" class="form-control" placeholder="Search car name...">
    </div>

    <div class="col-md-3">
      <input type="text" name="brand" class="form-control" placeholder="Brand (e.g. Toyota)">
    </div>

    <div class="col-md-3">
      <input type="text" name="location" class="form-control" placeholder="Location">
    </div>

    <div class="col-md-2">
      <button class="btn btn-dark w-100">Search</button>
    </div>

  </form>
</div>

<img src="uploads/<?php echo htmlspecialchars($row['image']); ?>" 
     class="card-img-top" 
     style="height:200px; object-fit:cover;">