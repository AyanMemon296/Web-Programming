<?php

echo "implode:<br>";

$arr = ["PHP", "is", "awesome"]; 
$str = implode(" ", $arr); 
echo $str."<br>";  // Output: PHP is awesome 

echo "<br>explode:<br>";

$str = "Ayan,Memon,Developer"; 
$arr = explode(",", $str); 
print_r($arr); 
/* Output: 
Array 
( 
    [0] => Ayan 
    [1] => Memon 
    [2] => Developer 
) 
*/ 


?>