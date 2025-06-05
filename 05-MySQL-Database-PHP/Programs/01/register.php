<?php
// 1. Create connection 
$conn = new mysqli("localhost", "root", "", "studentdb");

// 2. Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 3. Get form data 
$rollno = $_POST['rollno'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];


// 4. Prepare and bind using prepared statement 
$stmt = $conn->prepare("INSERT INTO students (rollno, name, email, mobile) VALUES (?, ?, 
?, ?)");
$stmt->bind_param("ssss", $rollno, $name, $email, $mobile);
// 5. Execute and check 
if ($stmt->execute()) {
    echo "Student registered successfully.";
} else {
    echo "Error: " . $stmt->error;
}
// 6. Close 
$stmt->close();
$conn->close();
