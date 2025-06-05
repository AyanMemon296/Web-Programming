<!DOCTYPE html>
<html>

<head>
    <title>Book Information</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #333;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Book Details from Database</h2>

    <?php
    // Database connection 
    $conn = new mysqli("localhost", "root", "", "LibraryDB");

    // Check connection 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to fetch book data 
    $sql = "SELECT * FROM Books";
    $result = $conn->query($sql);

    // Display data in table 
    if ($result->num_rows > 0) {
        echo "<table> 
            <tr> 
                <th>Book ID</th> 
                <th>Title</th> 
                <th>Author</th> 
                <th>Price (₹)</th> 
            </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr> 
                <td>" . $row['BookID'] . "</td> 
                <td>" . $row['Title'] . "</td> 
                <td>" . $row['Author'] . "</td> 
                <td>" . $row['Price'] . "</td> 
              </tr>";
        }

        echo "</table>";
    } else {
        echo "<p style='text-align:center;'>No books found in the database.</p>";
    }

    $conn->close();
    ?>

</body>

</html>