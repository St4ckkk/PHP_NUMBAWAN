<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CALCULATOR | KAD-F</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <input type="number" name="num1" id="num1" placeholder="Number one">
        <select name="operator" id="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="dividie">/</option>
        </select>
        <input type="number" name="num2" id="num2" placeholder="Number two">
        <button type="submit">Calculate</button>
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] = "POST") {
        $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
        $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        // ERROR HANDLERS
        $errors = false;
        if (empty($num1) || empty($num2) || empty($operator)) {
            echo "<p class='calc-error'> FILL IN ALL FIELDS </p>";
            $errors = true;
        }
        if (!is_numeric($num1) || !is_numeric($num2)) {
            echo "<p class='calc-error'> ONLY WRITE NUMBERS! </p>";
            $errors = "true";
        }

        // Calculate the numbers if no errors
        if (!$errors) {
            $value = 0;
            switch ($operator) {
                case "add":
                    $value = $num1 + $num2;
                    break;
                case "subtract":
                    $value = $num1 - $num2;
                    break;
                case "multiply":
                    $value = $num1 * $num2;
                    break;
                case "divide":
                    $value = $num1 / $num2;
                    break;
                default:
                    echo "<p class='calc-error'> SOMETHING WENT WRONG! </p>";
                    break;
            }

            echo "<p class='calc-result'>Result = " . $value . "</p>";
        }
    }
    ?>
</body>

</html>