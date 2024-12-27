<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Panel - Athelete's Fitness</title>
    <title><?php
            if (isset($_SESSION['username'])) {
                echo htmlspecialchars($_SESSION['username']);
            } else {
                echo "Instructor";
            }
            ?>'s Panel - Athletes Fitness</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styling/styling.css">
    <link rel="icon" type="image/x-icon" href="https://localhost/Gym%20Management%20System/styling/images/no_bg_logo.png">
</head>

<body class="bg-dark text-white">
    <?php include 'shared/maintenance_navbar.php'; ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12 mb-3">
                <h1 class="text-center">
                    Welcome to Maintenance Panel
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo '"' . htmlspecialchars($_SESSION['username']) . '"';
                    } else {
                        echo "Maintenance";
                    }
                    ?>
                </h1>
                <p class="text-center">Maintain gym equipment efficiently.</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Total No. of Equipment</h5>
                            <h3 class="card-text">8</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                            <h5 class="card-title">No. of Faulty Equipment</h5>
                            <h3 class="card-text">5</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card text-white bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">Pending Fixes</h5>
                            <h3 class="card-text">5</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4 mb-4">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <h5>Recent Fixes</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Chest Press - Missing Weight Setter</li>
                                <li class="list-group-item">HIIT Training - 12:00 PM</li>
                                <li class="list-group-item">Strength Training - 3:00 PM</li>
                                <li class="list-group-item">Cardio Blast - 5:00 PM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>

    <?php include '../shared/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>