<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["usersearch"];


    try {
        // check if we already include the database
        require_once "dbh.inc.php";
        #include
        #include_once
        $query = "SELECT * FROM comments WHERE username = :usersearch;";

        // PASSING THE QUERY TO DATABASE
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':usersearch', $userSearch);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        #$stmt->execute([$username, $pwd, $email]);

        // Closing of the connection
        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }

} else {
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SEARCH | KAD-F</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <h3 class="mx-2 mt-4 mb-3">Search Results</h3>
    <div class="container">
        <?php
        if (empty($result)) {
            echo "<div class='alert alert-danger'>No results found.</div>";
        } else {
            foreach ($result as $row) {
                ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="media">
                            <img src="../img/cat.png" class="mr-4 rounded-circle" alt="User Profile Picture" width="64"
                                height="64">
                            <div class="media-body">
                                <h5 class="mt-0">
                                    <?php echo htmlspecialchars($row["username"]); ?>
                                </h5>
                                <?php echo htmlspecialchars($row["comment_text"]); ?>
                                <div class="text-muted small">
                                    <?php echo htmlspecialchars($row["created_at"]); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
    </div>


</html>