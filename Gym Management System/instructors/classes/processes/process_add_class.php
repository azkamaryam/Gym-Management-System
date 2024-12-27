<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../../../shared/db_connection.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture form data
    $class_name = $_POST['class_name'] ?? null;
    $class_capacity = $_POST['class_capacity'] ?? null;
    $class_date = $_POST['class_date'] ?? null;
    $class_time = $_POST['class_time'] ?? null;
    $class_duration = $_POST['class_duration'] ?? null;
    $class_description = $_POST['class_description'] ?? null;

    // Debug form data
    if (!$class_name || !$class_capacity || !$class_date || !$class_time || !$class_duration || !$class_description) {
        die("Form fields are missing: " . print_r($_POST, true));
    }

    // Add instructor_id (assuming it's in session)
    session_start();
    $instructor_id = $_SESSION['instructor_id'] ?? null;
    if (!$instructor_id) {
        die("Instructor ID is missing.");
    }

    // SQL Query
    $query = "INSERT INTO classes (class_name, instructor_id, capacity, class_date, class_time, class_duration, class_description) 
              VALUES ('$class_name', '$instructor_id', '$class_capacity', '$class_date', '$class_time', '$class_duration', '$class_description')";

    // Execute query
    if (mysqli_query($conn, $query)) {
        header('Location: ../../../index.php');
        exit();
    } else {
        die("Error executing query: " . mysqli_error($conn));
    }
} else {
    die("Invalid request method.");
}
