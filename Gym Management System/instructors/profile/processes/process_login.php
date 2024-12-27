<?php
session_start();
include('../../../shared/db_connection.php');

if (isset($_POST['login'])) {
    $full_name = trim($_POST['full_name']);
    $password = trim($_POST['password']);

    $instructors_query = "SELECT * FROM instructors WHERE full_name = ?";
    $stmt = $conn->prepare($instructors_query);
    $stmt->bind_param("s", $full_name);
    $stmt->execute();
    $instructors_result = $stmt->get_result();
    $instructors = $instructors_result->fetch_assoc();

    if ($instructors) {
        if (password_verify($password, $instructors['password'])) {
            $_SESSION['instructor_id'] = $instructors['instructor_id'];
            $_SESSION['full_name'] = $instructors['full_name'];
            $_SESSION['phone'] = $instructors['role'];
            $_SESSION['speciality'] = $instructors['speciality'];

            header('location: ../../instructors_panel.php');
            exit();
        } else {
            echo "Invalid username or password!";
        }
    } else {
        echo "User not found.";
    }
}
