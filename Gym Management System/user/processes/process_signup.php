<?php
session_start();
include '../../shared/db_connection.php';

if (isset($_POST['signup'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $role = $_POST['role'];

    // Prepare the SQL statement to check if the username is already taken
    $check_query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($check_query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the username is already taken
    if ($result->num_rows > 0) {
        echo "Username already taken. Please choose another.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the SQL statement to insert the new user
        $insert_query = "INSERT INTO users (username, password, role, created_at) VALUES (?, ?, ?, NOW())";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("sss", $username, $hashed_password, $role);

        if ($stmt->execute()) {
            echo "Signup successful!";
            header('location: ../../index.php');
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    }
    $stmt->close();
    $conn->close();
}
