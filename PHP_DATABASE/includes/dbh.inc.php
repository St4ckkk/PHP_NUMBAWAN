<?php
$dsn = "mysql:host=localhost;dbname=first_db";
$dbusername = "root";
$dbpassword = "";
try {
    // Create a new PDO instance, using the connection string and options set in dsn
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

