<?php
session_start();
include '../../../shared/db_connection.php';

if (isset($_POST['signup'])) {
    $full_name = $_POST['full_name'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $speciality = $_POST['speciality'];
    $status = "active";

    $query = "SELECT * FROM instructors WHERE full_name = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $full_name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Username is already taken. Please choose another";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO instructors (full_name, password, phone, speciality, status) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssss", $full_name, $hashed_password, $phone, $speciality, $status);

        if ($stmt->execute()) {
            header('location: ../login.php');
        } else {
            echo "Error: " . $stmt->error;
        }
    }
    $stmt->close();
    $conn->close();
}
