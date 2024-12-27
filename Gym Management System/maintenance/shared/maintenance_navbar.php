<nav class="navbar navbar-expand-lg" style="background-color: black;">
    <div class="container-fluid">
        <a class="navbar-brand" href="https://localhost/Gym%20Management%20System/index.php" style="color: whitesmoke">
            <img src="https://localhost/Gym%20Management%20System/styling/images/no_bg_logo.png" alt="Logo" style="height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://localhost/Gym%20Management%20System/instructors/instructors_panel.php" style="color: whitesmoke">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://localhost/Gym%20Management%20System/instructors/attendance/attendance.php" style="color: whitesmoke;">Equipment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://localhost/Gym%20Management%20System/instructors/attendance/attendance.php" style="color: whitesmoke;">Maintenance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://localhost/Gym%20Management%20System" style="color: whitesmoke;">Complaint</a>
                </li>
            </ul>
            <?php if (isset($_POST['user_id'])): ?>
                <a href="https://localhost/Gym%20Management%20System/user/logout.php" class="btn btn-danger me-2 text-white">Logout</a>
            <?php endif; ?>
        </div>
    </div>
</nav>