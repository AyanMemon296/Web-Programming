<!-- Write a PHP code to demonstrate a calculator using switch case. -->

<!DOCTYPE html>
<html>

<head>
    <title>Simple PHP Calculator</title>
</head>

<body>

    <h2>Calculator using PHP Switch Case</h2>

    <form method="post" action="">
        Enter first number: <input type="number" name="num1" required><br><br>
        Enter second number: <input type="number" name="num2" required><br><br>
        Select Operation:
        <select name="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (×)</option>
            <option value="divide">Division (÷)</option>
        </select><br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                echo "<h3>Result: $num1 + $num2 = $result</h3>";
                break;

            case "subtract":
                $result = $num1 - $num2;
                echo "<h3>Result: $num1 - $num2 = $result</h3>";
                break;

            case "multiply":
                $result = $num1 * $num2;
                echo "<h3>Result: $num1 × $num2 = $result</h3>";
                break;

            case "divide":
                if ($num2 == 0) {
                    echo "<h3>Error: Division by zero is not allowed.</h3>";
                } else {
                    $result = $num1 / $num2;
                    echo "<h3>Result: $num1 ÷ $num2 = $result</h3>";
                }
                break;
            default:
                echo "<h3>Invalid Operation</h3>";
                break;
        }
    }
    ?>
</body>

</html>