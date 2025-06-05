<?php 
include("connect.php"); 
$enroll = 'ENR001'; // example enrollment no 
$sql = "DELETE FROM students WHERE enrollment_no = '$enroll'"; 
if ($conn->query($sql)) { 
echo "Record deleted successfully."; 
} else { 
echo "Error: " . $conn->error; 
} 
$conn->close(); 
?> 