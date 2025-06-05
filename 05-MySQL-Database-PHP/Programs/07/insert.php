<?php 
include("connect.php"); 
 
$enroll = $_POST['enroll']; 
$name = $_POST['name']; 
$sem = $_POST['sem']; 
$gender = $_POST['gender']; 
$qual = $_POST['qual']; 
 
$sql = "INSERT INTO students VALUES ('$enroll', '$name', $sem, '$gender', '$qual')"; 
if ($conn->query($sql)) { 
    echo "Record inserted successfully."; 
} else { 
    echo "Error: " . $conn->error; 
} 
$conn->close(); 
?> 