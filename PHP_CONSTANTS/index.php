<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CONSTANTS | KAD-F</title>
</head>

<body>

    <?php

    define("PI", 3.14);
    define("NAME", "Daniel");
    define("IS_ADMIN", true);
    // echo IS_ADMIN;
    
    function test()
    {
        echo PI;
    }

    test();
    ?>

</body>

</html>