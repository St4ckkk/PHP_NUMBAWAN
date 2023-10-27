<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SCOPES | KAD-F</title>
</head>

<body>
    <?php

    /*
    $x = 5; // Global scope
    $test = "Daniel";
    
    function myFunction($test)
    {
        // global $test;
        // Define a local variable
        $localVar = "Hello, World";

        // Use the local variable
        return $GLOBALS["test"]; // shortcut
    }
    */
    /*
    // Static scope
    function myFunction()
    {
        // Declare a static variable
        static $staticVar = 0;
        // Increment the static variable
        $staticVar++;

        return $staticVar;
    }
    echo myFunction();
    echo myFunction(); // the output will be 2 because it will be incremented using static variable
    */

    // Class Scope
    class MyClass
    {
        public $classVar = "Hello, World";

        public function myMethod()
        {
            echo $this->classVar;
        }
    }

    
    ?>
</body>

</html>