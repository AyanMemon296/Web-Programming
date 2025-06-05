<?php 
include("connect.php"); 
 
$enroll = 'ENR001'; // example enrollment no 
$sql = "UPDATE students SET semester = 6 WHERE enrollment_no = '$enroll'"; 
if ($conn->query($sql)) { 
    echo "Record updated successfully."; 
} else { 
    echo "Error: " . $conn->error; 
} 
$conn->close(); 
?> 