<?php
session_start();
$selectedPlan = isset($_GET['plan']) ? htmlspecialchars($_GET['plan']) : 'No Plan Selected';
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $selectedPlan; ?> Membership Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styling/styling.css">
    <link rel="icon" type="image/x-icon" href="../styling/images/no_bg_logo.png">
</head>

<body class="bg-dark text-white">
    <?php include '../shared/navbar.php'; ?>

    <div class="container py-5">
        <h1 class="text-center mb-4"><?php echo $selectedPlan; ?> Membership Registration</h1>
        <form action="processes/process_plan.php" method="POST">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="John" required>
                </div>
                <div class="col-md-6">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Doe" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="user@example.com" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="03XX-XXXXXXX" required>
            </div>
            <div class="mb-3">
                <label for="join_date" class="form-label">Joining Date</label>
                <input type="date" class="form-control" id="join_date" name="join_date" required>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="selectedPlan" class="form-label">Selected Plan</label>
                    <input type="text" class="form-control" id="selectedPlan" name="selectedPlan" value="<?php echo $selectedPlan; ?>" readonly>
                </div>
                <div class="col-md-6">
                    <label for="membership_type" class="form-label">Membership Type</label>
                    <input type="text" class="form-control" id="membership_type" name="membership_type" placeholder="Monthly / Yearly" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Start Membership</button>
        </form>
    </div>

    <?php include '../shared/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>