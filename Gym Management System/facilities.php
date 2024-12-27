<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities - Azeem Fitness</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styling/styling.css">
    <link rel="icon" type="image/x-icon" href="https://localhost/Gym%20Management%20System/styling/images/no_bg_logo.png">
</head>

<body class="bg-dark text-white">
    <?php include 'shared/navbar.php'; ?>

    <!-- Main Content -->
    <div class="container my-5">
        <h1 class="text-center mb-4">Our Facilities</h1>

        <!-- Introduction Section -->
        <section class="mb-5">
            <h2 class="h3">Welcome to Azeem Fitness!</h2>
            <p>At Azeem Fitness, we offer a state-of-the-art gym with all the facilities you need to reach your fitness goals. From advanced equipment to specialized training zones, we have it all!</p>
        </section>

        <!-- Gym Equipment Section -->
        <section class="mb-5">
            <h2 class="h3">Gym Equipment</h2>
            <p>We provide a wide range of equipment for all fitness levels, including:</p>
            <div class="row">
                <div class="col-md-4">
                    <h5>Free Weights</h5>
                    <img src="path/to/your/image.jpg" class="img-fluid" alt="Free Weights">
                    <p>Everything from dumbbells to barbells for strength training.</p>
                </div>
                <div class="col-md-4">
                    <h5>Cardio Machines</h5>
                    <img src="path/to/your/image.jpg" class="img-fluid" alt="Cardio Machines">
                    <p>State-of-the-art treadmills, ellipticals, and bikes.</p>
                </div>
                <div class="col-md-4">
                    <h5>Strength Training Machines</h5>
                    <img src="path/to/your/image.jpg" class="img-fluid" alt="Strength Training Machines">
                    <p>Variety of machines for all body parts to build strength.</p>
                </div>
            </div>
        </section>

        <!-- Training Areas Section -->
        <section class="mb-5">
            <h2 class="h3">Training Areas</h2>
            <p>We have multiple specialized areas to cater to all your fitness needs:</p>
            <ul>
                <li>Weight Training Zone</li>
                <li>Cardio Area</li>
                <li>Functional Training Space</li>
                <li>Boxing Ring</li>
                <li>Yoga & Pilates Studio</li>
            </ul>
        </section>

        <!-- Classes & Programs Section -->
        <section class="mb-5">
            <h2 class="h3">Classes & Programs</h2>
            <p>We offer a variety of classes to keep your workouts exciting and challenging:</p>
            <ul>
                <li>Group Fitness Classes</li>
                <li>Yoga & Pilates</li>
                <li>HIIT & Circuit Training</li>
                <li>Boxing & Martial Arts</li>
                <li>Personal Training Sessions</li>
            </ul>
        </section>

        <!-- Locker Rooms & Showers Section -->
        <section class="mb-5">
            <h2 class="h3">Locker Rooms & Showers</h2>
            <p>Our locker rooms are spacious and equipped with secure lockers, showers, and changing facilities for your comfort.</p>
        </section>

        <!-- Membership Perks Section -->
        <section class="mb-5">
            <h2 class="h3">Membership Perks</h2>
            <p>Become a member of Azeem Fitness and enjoy exclusive perks:</p>
            <ul>
                <li>Access to all gym facilities</li>
                <li>Complimentary fitness assessment</li>
                <li>Discounts on personal training sessions</li>
                <li>Free access to select classes</li>
            </ul>
        </section>

        <!-- Safety & Cleanliness Section -->
        <section class="mb-5">
            <h2 class="h3">Safety & Cleanliness</h2>
            <p>We prioritize your health and safety with the highest standards of cleanliness and hygiene, ensuring that all equipment and facilities are sanitized regularly.</p>
        </section>

        <!-- Contact Information Section -->
        <section class="text-center mb-5">
            <h2 class="h3">Get In Touch</h2>
            <p>If you have any questions or would like to book a tour, feel free to contact us!</p>
            <a href="contact.php" class="btn btn-primary">Contact Us</a>
        </section>

    </div>

    <?php include 'shared/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>