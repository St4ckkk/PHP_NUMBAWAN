<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OPERATORS | KAD-F</title>
</head>

<body>
    <?php

    // String Operators
    echo "<h1> String Operator </h1>";
    echo "<br>";
    $a = "HELLO";
    $b = "WORLD";

    echo $a . " " . $b;

    echo "<br>";

    // Arithmetic Operators
    echo "<h1> Arithmetic Operator </h1>";
    echo "<br>";
    echo 1 + 2;
    echo "<br>";
    echo 10 ** 3;

    echo "<br>";

    echo "<h1> Assignment Operator </h1>";
    echo "<br>";
    $x = 2;
    $x += 4;

    echo $x;

    echo "<br>";
    echo "<h1> Comparison Operator </h1>";
    echo "<br>";
    $d = 2;
    $e = 4;
    if ($d == $e) {
        echo "True";
    } else {
        echo "False";
    }
    ?>
</body>

</html>