<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ARRAYS | KAD-F</title>
</head>

<body>
    <?php

    $task = [
        "laundry" => "Daniel",
        "trash" => "Frida",
        "dishes" => "Johan",
        "gardening" => "Lisa"
    ];

    echo $task["laundry"];
    echo "<br";
    print_r($task);
    echo "<br>";
    echo count($task);
    echo "<br>";
    sort($task);
    ?>

</body>

</html>