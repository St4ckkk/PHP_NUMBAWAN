<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $pwd = $_POST['password'];

    try {
        // check if we already include the database
        require_once "dbh.inc.php";
        #require
        #include
        #include_once
        $query = "DELETE FROM users_tb WHERE username = :username AND pwd = :pwd; ";

        // PASSING THE QUERY TO DATABASE
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $pwd);
        $stmt->execute();

        #$stmt->execute([$username, $pwd, $email]);

        // Closing of the connection
        $pdo = null;
        $stmt = null;
        header('Location: ../index.php');
        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }

} else {
    header('Location: ../index.php');
}