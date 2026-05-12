<?php
session_start();
include 'db.php';

$sender_id = $_SESSION['user_id'];
$receiver_id = $_GET['receiver_id'];
$listing_id = $_GET['listing_id'];

if(isset($_POST['send'])){
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (sender_id, receiver_id, listing_id, message)
            VALUES ('$sender_id', '$receiver_id', '$listing_id', '$message')";
    
    $conn->query($sql);
    echo "Message sent!";
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-dark text-white">
      Send Message
    </div>

    <div class="card-body">
      <form method="POST">
        <textarea name="message" class="form-control mb-3" placeholder="Type your message..."></textarea>
        <button class="btn btn-success" name="send">Send</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>