<?php

$email = "ayan@example.com";
if (preg_match("/^[a-zA-Z0-9._%+-]+@[a-z]+\.[a-z]{2,}$/", $email)) {
    echo "Valid Email";
} else {
    echo "Invalid Email";
}
// Output: Valid Email 

$text = "User123";
$cleaned = preg_replace("/\d/", "", $text);  // Remove digits 
echo $cleaned; // Output: User 

$input = "123456";
if (preg_match("/^[0-9]+$/", $input)) {
    echo "Only Numbers";
} else {
    echo "Invalid Input";
}
