<?php
// 1. Connect to MySQL 
$conn = new mysqli("localhost", "root", "", "userdb");

// 2. Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 3. Get form data 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

// 4. Prepare the SQL query using prepared statement 
$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email) VALUES (?, ?, ?)");
// 5. Bind parameters 
$stmt->bind_param("sss", $firstname, $lastname, $email);
// 6. Execute the query 
if ($stmt->execute()) {
    echo "User registered successfully!";
} else {
    echo "Error: " . $stmt->error;
}
// 7. Close statement and connection 
$stmt->close();
$conn->close();
