<?php 
include("connect.php"); 
$emp_id = $_POST['emp_id']; 
$sql = "DELETE FROM employees WHERE emp_id = '$emp_id'"; 
if ($conn->query($sql)) { 
echo "Employee deleted successfully."; 
} else { 
echo "Error: " . $conn->error; 
} 
$conn->close(); 
?>