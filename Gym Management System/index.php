<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Athelete's Fitness</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styling/styling.css">
    <link rel="icon" type="image/x-icon" href="https://localhost/Gym%20Management%20System/styling/images/no_bg_logo.png">
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include 'shared/navbar.php'; ?>

    <div class="container-fluid p-0">
        <section class="background-section">
            <div class="content-wrapper d-flex align-items-center">
                <div class="image-container">
                    <img src="styling/images/logo_new.png" alt="gym-pic" class="section-1_img">
                </div>
                <div class="text-container">
                    <h1>Welcome to Athletes Gym</h1>
                    <p>Where your fitness journey begins!</p>
                    <p> Whether you're looking to build strength, boost endurance, or simply lead a healthier lifestyle, we provide the perfect environment to help you achieve your goals. With state-of-the-art equipment, expert trainers, and a community that supports your progress, we’re here to make every step of your fitness transformation a success. Join us today and become the best version of yourself!</p>
                </div>
            </div>
        </section>
        <section class="section-02" style="background-color: black;">
            <div class="text-center mb-4">
                <h2 class="section-heading text-white">High Standard Gym</h2>
            </div>
            <div id="carouselExampleDark" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="1000">
                        <img src="styling/images/slide-1.png" class="d-block w-100" alt="Slide 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First Slide Label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="styling/images/slide-2.png" class="d-block w-100" alt="Slide 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second Slide Label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="styling/images/slide-3.png" class="d-block w-100" alt="Slide 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third Slide Label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="section-03" style="background-color: black;">
            <div class="text-center mb-4">
                <h2 class="section-heading text-white">Meet Our Team</h2>
            </div>
            <div class="container">
                <h2 class="text-center mb-5">Our Team</h2>
                <div class="team-grid">
                    <div class="team-member mb-5">
                        <img src="styling/images/team/m1.jpeg" alt="Team Member 1" class="profile-pic">
                        <h5>Team Member 1</h5>
                    </div>
                    <div class="team-member mb-5">
                        <img src="styling/images/team/m2.jpeg" alt="Team Member 2" class="profile-pic">
                        <h5>Team Member 2</h5>
                    </div>
                    <div class="team-member mb-5">
                        <img src="styling/images/team/m3.jpeg" alt="Team Member 3" class="profile-pic">
                        <h5>Team Member 3</h5>
                    </div>
                    <div class="team-member">
                        <img src="styling/images/team/m4.jpeg" alt="Team Member 4" class="profile-pic">
                        <h5>Team Member 4</h5>
                    </div>
                    <div class="team-member">
                        <img src="styling/images/team/m5.jpeg" alt="Team Member 5" class="profile-pic">
                        <h5>Team Member 5</h5>
                    </div>
                    <div class="team-member">
                        <img src="styling/images/team/m6.jpeg" alt="Team Member 6" class="profile-pic">
                        <h5>Team Member 6</h5>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include 'shared/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>