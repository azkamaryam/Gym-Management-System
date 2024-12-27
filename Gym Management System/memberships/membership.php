<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Plans - Athletes Fitness</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styling/styling.css">
    <link rel="icon" type="image/x-icon" href="https://localhost/Gym%20Management%20System/styling/images/no_bg_logo.png">
</head>

<body class="text-white" style="background-color: black;">
    <!-- Include Navbar -->
    <?php include '../shared/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="text-center py-5 bg-dark text-white">
        <div class="container">
            <h1 class="display-4">Join Atheletes Fitness Today!</h1>
            <p class="lead">Take the first step towards achieving your fitness goals. Choose a plan that works for you.</p>
            <a href="#membership-plans" class="btn btn-primary btn-lg mt-3">Explore Plans</a>
        </div>
    </section>


    <!-- Why Choose Us Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Why Choose Atheletes Fitness?</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="bi bi-award-fill text-primary fs-1"></i>
                    <h4 class="mt-3">Expert Trainers</h4>
                    <p>Our certified trainers will guide you every step of the way.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="bi bi-heart-pulse-fill text-danger fs-1"></i>
                    <h4 class="mt-3">State-of-the-Art Equipment</h4>
                    <p>Train with the best equipment to achieve your fitness goals.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="bi bi-people-fill text-success fs-1"></i>
                    <h4 class="mt-3">Community</h4>
                    <p>Be part of a supportive fitness community.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership Plans Section -->
    <section id="membership-plans" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our Membership Plans</h2>
            <div class="row text-center">
                <!-- Basic Plan -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h3>Basic Plan</h3>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Rs. 3000/month</h4>
                            <p>Perfect for beginners</p>
                            <ul class="list-unstyled">
                                <li>Access to gym equipment</li>
                                <li>Locker facility</li>
                                <li>1 fitness assessment session</li>
                            </ul>
                            <a href="plans_form.php?plan=Basic" class="btn btn-outline-primary">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- Standard Plan -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-success text-white">
                            <h3>Standard Plan</h3>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Rs. 5000/month</h4>
                            <p>Best for intermediate users</p>
                            <ul class="list-unstyled">
                                <li>All Basic Plan features</li>
                                <li>1 group fitness class/week</li>
                                <li>Access to sauna</li>
                            </ul>
                            <a href="plans_form.php?plan=Standard" class="btn btn-outline-success">Get Started</a>
                        </div>
                    </div>
                </div>
                <!-- Premium Plan -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h3>Premium Plan</h3>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Rs. 8000/month</h4>
                            <p>For serious fitness enthusiasts</p>
                            <ul class="list-unstyled">
                                <li>All Standard Plan features</li>
                                <li>Unlimited group classes</li>
                                <li>Personal trainer (4 sessions/month)</li>
                            </ul>
                            <a href="plans_form.php?plan=Premium" class="btn btn-outline-danger">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="text-center py-5 text-white">
        <div class="container">
            <h2 class="mb-4">Ready to Transform Your Life?</h2>
            <a href="membership-form.php" class="btn btn-lg btn-primary">Become a Member Now</a>
        </div>
    </section>

    <!-- Include Footer -->
    <?php include '../shared/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>