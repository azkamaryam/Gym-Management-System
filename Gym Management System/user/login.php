<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://localhost/Gym%20Management%20System/styling/images/no_bg_logo.png">
    <link rel="stylesheet" href="../styling/styling.css">
    <style>
        .image-container {
            background-color: black;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
        }
    </style>
</head>

<body class="login text-white">
    <nav class="navbar navbar-expand-lg" style="background-color: black;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Gym%20Management%20System/index.php">
                <img src="/Gym%20Management%20System/styling/images/no_bg_logo.png" alt="Logo" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/Gym%20Management%20System/index.php" style="color: #E0E0E0;">Home</a>
                    </li>
                </ul>
                <?php if (!isset($_SESSION['user_id'])): ?>
                    <a href="#" class="btn btn-danger me-2">Admin</a>
                    <a href="http://localhost/Gym%20Management%20System/user/signup.php" class="btn btn-primary">Sign Up</a>
                <?php else: ?>
                    <a href="https://localhost/Gym%20Management%20System/user/logout.php" class="btn btn-danger ms-2">Logout</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <div class="container-fluid vh-100 d-flex">
        <!-- Form Container -->
        <div class="col-md-7 d-flex align-items-center justify-content-center">
            <div class="form-container bg-dark">
                <h2 class="text-light">Login</h2>
                <form action="processes/process_login.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label text-light">Username</label>
                        <input type="text" class="form-control" id="username" name="username" style="width: 400px;" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-light">Password</label>
                        <input type="password" class="form-control" id="password" name="password" style="width: 400px;" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
                    <div class="mt-3">
                        <a href="https://localhost/Gym%20Management%20System/instructors/profile/login.php" style=" color: white; ">Intructors Login</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Image Container -->
        <div class="col-md-7 image-container">
            <img src="../styling/images/logo_new.png" alt="gym-pic" class="img-fluid" style="max-width: 85%; margin-bottom:30px">
        </div>
    </div>

    <?php include '../shared/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>