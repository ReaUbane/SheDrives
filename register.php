<?php
include 'db.php';

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = "buyer";

$stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $password, $role);

    $sql = "INSERT INTO users (name, email, password, role)
    VALUES ('$name', '$email', $password', '$role')"; 

    if($conn->query($sql)){
        echo "Registered successfully!";
    }
}
?>

<form method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button name="register">Register</button>
</form> 

<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card shadow">
        <div class="card-header text-center bg-dark text-white">
          <h4>Create Account</h4>
        </div>

        <div class="card-body">
          <form method="POST">
            <input class="form-control mb-3" type="text" name="name" placeholder="Name" required>
            <input class="form-control mb-3" type="email" name="email" placeholder="Email" required>
            <input class="form-control mb-3" type="password" name="password" placeholder="Password" required>
            <button class="btn btn-dark w-100" name="register">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>