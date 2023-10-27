<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DATABASE | KAD-F</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <div class="signup-container">
        <h3>Signup</h3>

        <form action="./includes/formhandler.inc.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="text" name="email" placeholder="E-Mail">
            <button type="submit" name="signupSubmit">Sign Up!</button>
        </form>
    </div>
</body>

</html>