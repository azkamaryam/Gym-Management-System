<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($_SESSION['username'])) {
                echo htmlspecialchars($_SESSION['username']);
            } else {
                echo "Instructor";
            } ?>'s Profile - Athletes Fitness</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styling/styling.css">
    <link rel="icon" type="image/x-icon" href="https://localhost/Gym%20Management%20System/styling/images/no_bg_logo.png">
</head>

<body class="bg-dark text-white">
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg" style="background-color: black;">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://localhost/Gym%20Management%20System/index.php" style="color: whitesmoke">
                <img src="https://localhost/Gym%20Management%20System/styling/images/no_bg_logo.png" alt="Logo" style="height: 50px;">
            </a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="https://localhost/Gym%20Management%20System/instructors/instructors_panel.php" style="color: whitesmoke">Home</a>
                    </li>

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="page" style="color: whitesmoke">
                            Classes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">View Classes</a></li>
                            <li><a class="dropdown-item" href="#">Schedule a Class</a></li>
                        </ul>
                    </li> -->
                </ul>
                <a href="https://localhost/Gym%20Management%20System/instructors/instructors_panel.php" class="btn btn-info me-2 text-white">Back To Panel</a>
                <a href="https://localhost/Gym%20Management%20System/instructors/profile/logout.php" class="btn btn-danger me-2 text-white">Logout</a>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <div class="container mt-4">
        <div class="row">
            <div class="col-12 mb-3">
                <h1 class="text-center">
                    Welcome
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo htmlspecialchars($_SESSION['username']);
                    } else {
                        echo "Instructor";
                    }
                    ?>
                </h1>
                <p class="text-center">Manage Your Profile Here</p>
            </div>
        </div>

        <div class="row">
            <form action="edit_profile.php">

            </form>
        </div>
    </div>

    <?php include '../../shared/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>