<!-- Write a PHP script to open, close, read and write into a file. -->

<?php
$filename = "myfile.txt";

// ===== Step 1: Open or Create the File for Writing ===== 
$file = fopen($filename, "w"); // "w" = write mode 

if ($file) {
    // ===== Step 2: Write Data to the File ===== 
    fwrite($file, "Hello, this is a sample text.\n");
    fwrite($file, "We are learning file handling in PHP.");

    // ===== Step 3: Close the File After Writing ===== 
    fclose($file);
    echo "Data written successfully.<br><br>";
} else {
    echo "Unable to open file for writing.";
}

// ===== Step 4: Open the Same File for Reading ===== 
$file = fopen($filename, "r"); // "r" = read mode 

if ($file) {
    echo "<strong>File Content:</strong><br>";
    while (!feof($file)) {
        $line = fgets($file); // read one line at a time 
        echo $line . "<br>";
    }

    // ===== Step 5: Close the File After Reading ===== 
    fclose($file);
} else {
    echo "Unable to open file for reading.";
}
?>