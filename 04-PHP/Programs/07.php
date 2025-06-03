<!-- Write PHP script to make sum of first 10 even numbers. -->

<?php
$sum = 0;
$count = 0;
$num = 2; // First even number 

while ($count < 10) {
    $sum += $num;  // Add current even number to sum 
    $num += 2;     // Next even number 
    $count++;      // Increase count 
}

echo "Sum of first 10 even numbers is: " . $sum;
?>