<?php 
// To delete a cookie, set its expiration time in the past 
setcookie("username", "", time() - 3600);  
echo "Cookie has been deleted!"; 
?> 