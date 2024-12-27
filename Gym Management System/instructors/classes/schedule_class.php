<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Classes - Atheletes Fitness</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://localhost/Gym%20Management%20System/styling/images/no_bg_logo.png">
</head>

<body class="bg-dark text-white">
    <?php include '../shared/navbar_instructors.php'; ?>
    <div class="container py-5">
        <h1 class="text-center mb-4">Schedule a Class</h1>
        <form action="processes/process_add_class.php" method="post">
            <div class="mb-3">
                <label class="form-label" for="class_name">Class Name</label>
                <input class="form-control" type="text" name="class_name" id="class_name" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="class_capacity">Class Capacity</label>
                <input class="form-control" type="text" name="class_capacity" id="class_capacity" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="class_date">Class Date</label>
                <input class="form-control" type="date" name="class_date" id="class_date" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="class_time">Class Time</label>
                <input class="form-control" type="time" name="class_time" id="class_time" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="class_duration">Class Duration</label>
                <input class="form-control" type="text" name="class_duration" id="class_duration" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="class_description">Class Description</label>
                <input class="form-control" type="text" name="class_description" id="class_description" required>
            </div>
            <button class="btn btn-success " id="submit">Schedule Class</button>
        </form>
    </div>
    <?php include '../../shared/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>