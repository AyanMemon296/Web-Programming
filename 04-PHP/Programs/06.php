<!-- Write a PHP script to sort the elements of an array. -->

<?php
// Step 1: Define the array 
$numbers = array(5, 2, 9, 1, 7);

// Step 2: Display original array 
echo "Original Array: ";
print_r($numbers);

// Step 3: Sort the array in ascending order 
sort($numbers);

// Step 4: Display sorted array 
echo "<br>Sorted Array (Ascending): ";
print_r($numbers);
?>

<!-- To sort in descending order: 
Replace sort($numbers); with rsort($numbers); -->