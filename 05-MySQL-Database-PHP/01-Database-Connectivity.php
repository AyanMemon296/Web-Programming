<!-- CREATE TABLE users ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(50), 
    email VARCHAR(100) 
);  -->

<?php 
// Database connection parameters 
$servername = "localhost"; 
$username = "root";    // Your MySQL username 
$password = "";        // Your MySQL password 
$dbname = "testdb"; 
 
// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname); 
 
// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
 
// Insert data into users table 
$sql_insert = "INSERT INTO users (username, email) VALUES ('Ayan', 'ayan@example.com')"; 
if ($conn->query($sql_insert) === TRUE) { 
    echo "New record inserted successfully.<br>"; 
} else { 
    echo "Error: " . $conn->error . "<br>"; 
} 
 
// Select data from users table 
$sql_select = "SELECT id, username, email FROM users"; 
$result = $conn->query($sql_select); 
 
if ($result->num_rows > 0) { 
    // Output data of each row 
    while($row = $result->fetch_assoc()) { 
        echo "ID: " . $row["id"] . ", Username: " . $row["username"] . ", Email: " . 
$row["email"] . "<br>"; 
    } 
} else { 
    echo "No records found."; 
} 
 
// Close the connection 
$conn->close(); 
?> 