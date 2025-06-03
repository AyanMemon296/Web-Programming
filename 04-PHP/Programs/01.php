<!-- Write a PHP script to print following pattern 4M W21 
1   
10   
101   
0101   
10101 -->

<?php 
$rows = 5; 
 
for ($i = 1; $i <= $rows; $i++) { 
    for ($j = 1; $j <= $i; $j++) { 
        // Check if position is even or odd to print 0 or 1 
        if (($i + $j) % 2 == 0) { 
            echo "1"; 
        } else { 
            echo "0"; 
        } 
    } 
    echo "<br>"; 
} 
?> 