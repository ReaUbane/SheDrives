<?php

session_start();

include("db_connect.php");

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$query = "SELECT * FROM users WHERE email='$email'";

$result = mysqli_query($conn, $query);

if(!$result){

    die("SQL ERROR: " . mysqli_error($conn));

}

if(mysqli_num_rows($result) == 1){

    $user = mysqli_fetch_assoc($result);

    // CHECK PASSWORD

    if(password_verify($password, $user['password'])){

        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['full_name'] = $user['full_name'];
        $_SESSION['role'] = $user['role'];

        // ADMINS

        if($user['role'] == "super_admin"){

            header("Location: admin/super_admin_dashboard.php");
            exit();

        }

        elseif($user['role'] == "support_admin"){

            header("Location: admin/support_dashboard.php");
            exit();

        }

        elseif($user['role'] == "moderator"){

            header("Location: admin/moderator_dashboard.php");
            exit();

        }

        // NORMAL USERS

        elseif($user['role'] == "seller"){

            header("Location: seller/dashboard.php");
            exit();

        }

        elseif($user['role'] == "buyer"){

            header("Location: buyer/dashboard.php");
            exit();

        }

    }else{

        echo "Incorrect password";

    }

}else{

    echo "User not found";

}

?>