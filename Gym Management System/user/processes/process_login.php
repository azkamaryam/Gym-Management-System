<?php
session_start();
include('../../shared/db_connection.php');

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $user_query = "SELECT * FROM users WHERE username = ?";
    $user_result = mysqli_query($conn, $user_query);
    $user = $user_result->fetch_assoc();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['profile_id'] = $user['profile_id'];

            if ($user['role'] == 'member') {
                header('location: ../../index.php');
            } else {
                header('location: ../../maintenance/maintenance_panel.php');
            }
            exit();
        } else {
            echo "Invalid username or password!";
        }
    } else {
        echo "User not found.";
    }
}
