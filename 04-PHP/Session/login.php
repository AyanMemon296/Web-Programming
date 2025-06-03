<?php 
session_start(); // Start the session 
 
// Set session variables 
$_SESSION['username'] = "Ayan"; 
$_SESSION['role'] = "Student"; 
 
echo "Session started. <a href='dashboard.php'>Go to Dashboard</a>"; 
?> 