<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get to Know Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styling/styling.css">
    <link rel="icon" type="image/x-icon" href="https://localhost/Gym%20Management%20System/styling/images/no_bg_logo.png">
</head>

<body class="bg-dark text-white">
    <?php include 'shared/navbar.php'; ?>

    <div class="container py-5">
        <h1 class="text-center">Get to Know Us</h1>
        <p class="lead text-center">Empowering you to achieve your fitness goals with expert guidance and state-of-the-art facilities.</p>

        <section class="my-5">
            <h2>Our Mission</h2>
            <p>To inspire and support individuals in leading healthier lives through fitness, wellness, and community building.</p>
        </section>

        <section class="my-5">
            <h2>Meet the Team</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="trainer1.jpg" alt="Trainer 1" class="img-fluid rounded-circle">
                    <h5>Sarah Johnson</h5>
                    <p>Strength and Conditioning Specialist</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="trainer2.jpg" alt="Trainer 2" class="img-fluid rounded-circle">
                    <h5>Ali Khan</h5>
                    <p>Personal Trainer & Nutritionist</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="trainer3.jpg" alt="Trainer 3" class="img-fluid rounded-circle">
                    <h5>Sara Ahmed</h5>
                    <p>Yoga Instructor</p>
                </div>
            </div>
        </section>

        <section class="my-5">
            <h2>Our Facilities</h2>
            <p>From state-of-the-art gym equipment to a variety of group classes, we’ve got everything you need to succeed.</p>
            <img src="gym_facility.jpg" alt="Gym Facility" class="img-fluid">
        </section>

        <section class="my-5 text-center">
            <h2>Join Us Today!</h2>
            <p>Visit our <a href="memberships/membership.php">Membership Plans</a> page or contact us to start your fitness journey.</p>
        </section>
    </div>

    <?php include 'shared/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>