<!DOCTYPE html>
<html>

<head>
    <title>Employee Management</title>
    <style>
        form,
        table {
            margin: 20px auto;
            width: 60%;
        }

        input,
        select {
            padding: 8px;
            margin: 5px;
            width: 90%;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }

        table {
            border-collapse: collapse;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Insert Employee Record</h2>

    <form method="post">
        Employee ID: <input type="number" name="e_id" required><br>
        Name: <input type="text" name="e_name" required><br>
        Department: <input type="text" name="e_dept" required><br>
        Experience (Years): <input type="number" name="e_exp" required><br>
        Salary: <input type="number" step="0.01" name="e_salary" required><br>
        <input type="submit" name="insert" value="Insert Record">
    </form>

    <h2>Search Employee by Department</h2>

    <form method="post">
        Enter Department: <input type="text" name="search_dept" required>
        <input type="submit" name="search" value="Search">
    </form>

    <?php
    $conn = new mysqli("localhost", "root", "", "CompanyDB");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert logic 
    if (isset($_POST['insert'])) {
        $e_id = $_POST['e_id'];
        $e_name = $_POST['e_name'];
        $e_dept = $_POST['e_dept'];
        $e_exp = $_POST['e_exp'];
        $e_salary = $_POST['e_salary'];

        $sql = "INSERT INTO employee (e_id, e_name, e_dept, e_exp, e_salary) 
            VALUES ('$e_id', '$e_name', '$e_dept', '$e_exp', '$e_salary')";

        if ($conn->query($sql)) {
            echo "<p style='text-align:center;'>Employee inserted successfully.</p>";
        } else {
            echo "<p style='text-align:center; color:red;'>Error: " . $conn->error . "</p>";
        }
    }

    // Search logic 
    if (isset($_POST['search'])) {
        $search_dept = $_POST['search_dept'];
        $sql = "SELECT * FROM employee WHERE e_dept = '$search_dept'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h2>Search Results for Department: $search_dept</h2>";
            echo "<table> 
                <tr> 
                    <th>Emp ID</th> 
                    <th>Name</th> 
                    <th>Dept</th> 
                    <th>Experience</th> 
                    <th>Salary</th> 
                </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr> 
                    <td>{$row['e_id']}</td> 
                    <td>{$row['e_name']}</td> 
                    <td>{$row['e_dept']}</td> 
                    <td>{$row['e_exp']}</td> 
                    <td>{$row['e_salary']}</td> 
                  </tr>";
            }
            echo "</table>";
        } else {
            echo "<p style='text-align:center;'>No records found for department: 
$search_dept</p>";
        }
    }

    $conn->close();
    ?>

</body>

</html>