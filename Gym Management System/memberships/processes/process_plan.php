<?php
include '../../shared/db_connection.php';

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone'];
    $membership_type = $_POST['membership_type'];
    $join_date = $_POST['join_date'];
    $status = 'Active';

    $query = ("INSERT INTO members(first_name, last_name, email, phone, membership_type, join_date, status) VALUES ('$first_name', '$last_name', '$email', '$phone_no', '$membership_type', '$join_date', '$status');");

    if (mysqli_query($conn, $query)) {
        header("Location: ../../index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
