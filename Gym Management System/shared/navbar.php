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
                    <a class="nav-link active" aria-current="page" href="https://localhost/Gym%20Management%20System/index.php" style="color: whitesmoke">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://localhost/Gym%20Management%20System/facilities.php" style="color: whitesmoke;">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://localhost/Gym%20Management%20System/personal_training.php" style="color: whitesmoke;">Personal Training</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="https://localhost/Gym%20Management%20System/classes/classes.php" style="color: whitesmoke;">Explore Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://localhost/Gym%20Management%20System/memberships/membership.php" style="color: whitesmoke">Become a Member</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://localhost/Gym%20Management%20System/about.php" style="color: whitesmoke">Get to Know Us</a>
                </li>
            </ul>
            <?php if (!isset($_SESSION['user_id'])): ?>
                <a href="https://localhost/Gym%20Management%20System/user/login.php" class="btn btn-outline-success me-2">Log In</a>
                <a href="https://localhost/Gym%20Management%20System/user/signup.php" class="btn btn-primary">Sign Up</a>
            <?php else: ?>
                <a href="https://localhost/Gym%20Management%20System/user/logout.php" class="btn btn-danger ms-2">Logout</a>
            <?php endif; ?>
        </div>
    </div>
</nav>