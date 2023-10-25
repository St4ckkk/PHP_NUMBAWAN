<?php

// var_dump($_SERVER["REQUEST_METHOD"]);

if(empty($firstnam))
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = htmlspecialchars($_POST["firstname"]);
    $lname = htmlspecialchars($_POST["lastname"]);
    $pets = htmlspecialchars($_POST["favouritePet"]);

    if(empty($firstname)) {
        exit();
    }
    echo $fname . "<br>" . $lname . "<br>" . $pets;

    header("Location: index.php");
} else {
    header("Location: index.php");
}