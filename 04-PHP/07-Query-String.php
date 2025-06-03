<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <a href="07-Query-String.php?name=Ayan&city=Rajkot">Go to Welcome Page</a>
    <?php

    $name = $_GET['name'];
    $city = $_GET['city'];
    echo "Hello $name from $city!";

    ?>
</body>

</html>