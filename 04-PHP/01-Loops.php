<?php

echo "Loops in PHP<br>";
// For loop example
echo "<br>For loop example<br>";
for ($i = 0; $i < 5; $i++) { 
echo $i."<br>"; 
} 

// While loop example
echo "<br>While loop example<br>";
$i = 0; 
while ($i < 5) { 
echo $i."<br>"; 
$i++; 
} 

// Do-while loop example
echo "<br>Do-while loop example<br>";
$i = 0; 
do { 
echo $i."<br>"; 
$i++; 
} while ($i < 5);

// Foreach loop example
echo "<br>Foreach loop example<br>";
$arr = [1, 2, 3]; 
foreach ($arr as $value) { 
echo $value.", "; 
} 

?>