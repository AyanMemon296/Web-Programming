<!-- Design Employee form with Employee ID, Employee Name, Designation details with submit button using 
HTML. On clicking submit button, entered Employee details should be fetched and displayed on another 
webpage “EmpInfo.php“. -->

<!DOCTYPE html>
<html>

<head>
    <title>Employee Form</title>
</head>

<body>

    <h2>Employee Registration Form</h2>

    <form method="post">
        Employee ID: <input type="text" name="empId" required><br><br>
        Employee Name: <input type="text" name="empName" required><br><br>
        Designation: <input type="text" name="designation" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Fetch data sent by form using POST method 
    $empId = $_POST['empId'] ?? '';
    $empName = $_POST['empName'] ?? '';
    $designation = $_POST['designation'] ?? '';
    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Employee Information</title>
    </head>

    <body>

        <h2>Employee Details</h2>

        <?php if ($empId && $empName && $designation): ?>
            <p><strong>Employee ID:</strong> <?php echo htmlspecialchars($empId); ?></p>
            <p><strong>Employee Name:</strong> <?php echo htmlspecialchars($empName); ?></p>
            <p><strong>Designation:</strong> <?php echo htmlspecialchars($designation); ?></p>
        <?php else: ?>
            <p>Error: Please submit the form properly.</p>
        <?php endif; ?>

    </body>

    </html>

</body>

</html>