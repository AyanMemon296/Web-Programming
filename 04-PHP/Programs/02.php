<!-- Write an HTML and PHP program which accepts N as input and print N Fibonacci numbers as list. -->

<!DOCTYPE html>
<html>

<head>
    <title>Fibonacci Form</title>
</head>

<body>

    <h2>Enter a Number (N)</h2>
    <form method="post">
        <label for="num">N:</label>
        <input type="number" name="num" id="num" required>
        <input type="submit" value="Show Fibonacci">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST["num"]);

        echo "<h2>First $n Fibonacci Numbers:</h2>";
        echo "<ul>";

        $a = 0;
        $b = 1;

        for ($i = 1; $i <= $n; $i++) {
            echo "<li>$a</li>";
            $next = $a + $b;
            $a = $b;
            $b = $next;
        }

        echo "</ul>";
    } else {
        echo "Please submit the form.";
    }
    ?>
</body>

</html>