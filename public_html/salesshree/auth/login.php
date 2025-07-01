<?php
session_start();
include_once("../config/config.php");

// Redirect if already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit();
}

// Login logic
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email' AND status = 'active' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_role'] = $user['role'];
            
            header("Location: ../index.php");
            exit();
        } else {
            $_SESSION['login_error'] = "Invalid credentials.";
        }
    } else {
        $_SESSION['login_error'] = "User not found or inactive.";
    }
    
    header("Location: ../login.php");
    exit();
}
?>
