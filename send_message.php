<?php

include("db_connect.php");

$vehicle_id = $_POST['vehicle_id'];

$message_type = $_POST['message_type'];

$sender_name = mysqli_real_escape_string(
$conn,
$_POST['sender_name']
);

$sender_email = mysqli_real_escape_string(
$conn,
$_POST['sender_email']
);

$sender_phone = mysqli_real_escape_string(
$conn,
$_POST['sender_phone']
);

$subject = mysqli_real_escape_string(
$conn,
$_POST['subject']
);

$message = mysqli_real_escape_string(
$conn,
$_POST['message']
);

$query = "INSERT INTO messages

(vehicle_id,
message_type,
sender_name,
sender_email,
sender_phone,
subject,
message)

VALUES

('$vehicle_id',
'$message_type',
'$sender_name',
'$sender_email',
'$sender_phone',
'$subject',
'$message')";

if(mysqli_query($conn,$query)){

    echo "
    <script>

    alert('Message Sent Successfully');

    window.location.href='cars.php';

    </script>
    ";

}else{

    echo mysqli_error($conn);

}

?>