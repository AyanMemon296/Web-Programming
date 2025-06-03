<!-- Write a PHP script to print number of words in a given statement. -->

<?php
$statement = "This is a sample statement to count words.";

// Use str_word_count() function to count words 
$wordCount = str_word_count($statement);

echo "Number of words in the statement: " . $wordCount;
?>