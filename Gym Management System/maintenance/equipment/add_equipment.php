<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Equipment - Athelete's Fitness</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styling/styling.css">
    <link rel="icon" type="image/x-icon" href="https://localhost/Gym%20Management%20System/styling/images/no_bg_logo.png">
</head>

<body class="bg-dark text-white">
    <?php include '../shared/maintenance_navbar.php'; ?>

    <div class="container mt-4">
        <div>
            <form action="process_add_equipment.php">
                <div class="mb-3">
                    <label for="name" class="form-label">Equipment Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="purchase_date" class="form-label">Purchase Date</label>
                    <input type="date" class="form-control" id="purchase_date" name="purchase_date" required>
                </div>
                <div class="mb-3">
                    <label for="equipment_condition" class="form-label">Equipment Condition</label>
                    <input type="date" class="form-control" id="equipment_condition" name="equipment_condition" required>
                </div>
            </form>
        </div>
    </div>

    <?php include '../../shared/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>