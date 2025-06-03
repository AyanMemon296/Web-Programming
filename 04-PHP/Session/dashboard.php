<?php 
session_start(); // Resume session 
 
echo "Welcome " . $_SESSION['username'] . "<br>"; 
echo "Your role is: " . $_SESSION['role']; 
?> 