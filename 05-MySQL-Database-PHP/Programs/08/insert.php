<?php 
include("connect.php"); 
 
$emp_id = $_POST['emp_id']; 
$name = $_POST['name']; 
$dept = $_POST['department']; 
$desg = $_POST['designation']; 
 
$sql = "INSERT INTO employees VALUES ('$emp_id', '$name', '$dept', '$desg')"; 
if ($conn->query($sql)) { 
    echo "Employee inserted successfully."; 
} else { 
    echo "Error: " . $conn->error; 
} 
$conn->close(); 
?> 