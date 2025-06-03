<?php

$file = fopen("example.txt", "w"); // Open for writing 
fwrite($file, "Hello, Ayan!"); 
fclose($file); 

?>