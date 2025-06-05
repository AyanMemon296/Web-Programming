<?php 
include("connect.php"); 
 
$emp_id = $_POST['emp_id']; 
$name = $_POST['name']; 
$dept = $_POST['department']; 
$desg = $_POST['designation']; 
 
$sql = "UPDATE employees SET  
        name = IF('$name' != '', '$name', name), 
        department = IF('$dept' != '', '$dept', department), 
        designation = IF('$desg' != '', '$desg', designation) 
        WHERE emp_id = '$emp_id'"; 
 
if ($conn->query($sql)) { 
    echo "Employee updated successfully."; 
} else { 
    echo "Error: " . $conn->error; 
} 
$conn->close(); 
?> 