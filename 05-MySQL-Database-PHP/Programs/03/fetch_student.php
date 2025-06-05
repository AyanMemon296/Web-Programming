<?php 
// Connect to database 
$conn = new mysqli("localhost", "root", "", "studentdb"); 
 
// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
 
// Get input 
$enr = $_POST['enrollment_no']; 
 
// Prepare and execute 
$stmt = $conn->prepare("SELECT * FROM students WHERE enrollment_no = ?"); 
$stmt->bind_param("s", $enr); 
$stmt->execute(); 
$result = $stmt->get_result(); 
 
// Check and display 
if ($result->num_rows > 0) { 
    $row = $result->fetch_assoc(); 
    echo "<h3>Student Details:</h3>"; 
    echo "Enrollment No: " . $row['enrollment_no'] . "<br>"; 
    echo "Name: " . $row['name'] . "<br>"; 
    echo "Course: " . $row['course'] . "<br>"; 
    echo "Semester: " . $row['semester'] . "<br>"; 
} else { 
    echo "No student found with enrollment number: " . htmlspecialchars($enr); 
} 
 
// Close 
$stmt->close(); 
$conn->close(); 
?> 