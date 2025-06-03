<?php

// Indexed Array
echo "Indexed Array<br>";
// Method 1 
$fruits = array("Apple", "Banana", "Mango");

// Method 2 
$fruits[0] = "Apple";
$fruits[1] = "Banana";
$fruits[2] = "Mango";

// Access example 
echo $fruits[1] . "<br>";  // Output: Banana

// Associative Array
echo "<br>Associative Array<br>";
$student = array(
    "RollNo" => 101,
    "Name" => "Ayan",
    "Course" => "BE"
);

// Access example 
echo $student["Name"] . "<br>"; // Output: Ayan

// Multidimensional Array
echo "<br>Multidimensional Array<br>";
$marks = array(
    array("Ayan", 85, 90),
    array("User2", 78, 88),
    array("User3", 92, 81)
);

// Access example 
echo $marks[1][0] . "<br>"; // Output: User2 
echo $marks[2][2] . "<br>";  // Output: 81 


// Processing Arrays (Loops)
echo "<br>Processing Arrays with Loops<br>";

// Indexed array using for loop:
echo "<br>Indexed array using for loop:<br>";
$fruits = array("Apple", "Banana", "Mango");
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}

// Associative array using foreach:
echo "<br>Associative array using foreach:<br>";
$student = array("RollNo" => 101, "Name" => "Ayan");
foreach ($student as $key => $value) {
    echo "$key: $value<br>";
}

?>