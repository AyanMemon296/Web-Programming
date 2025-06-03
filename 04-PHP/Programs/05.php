<!-- Write a PHP Script to display content of .txt file and display total number of words. -->

<?php
$filename = "myfile.txt"; // Name of the .txt file 

// Step 1: Check if file exists 
if (file_exists($filename)) {

    // Step 2: Read file content 
    $content = file_get_contents($filename);

    // Step 3: Display content 
    echo "<strong>File Content:</strong><br>";
    echo nl2br($content); // nl2br() converts new lines to <br> for browser 

    // Step 4: Count words 
    $wordCount = str_word_count($content);

    echo "<br><br><strong>Total Number of Words:</strong> " . $wordCount;
} else {
    echo "File does not exist.";
}
?>