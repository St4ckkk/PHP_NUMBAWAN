<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DATABASE | KAD-F</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">PHP PRACTICE - KAD-F</a>
            <form class="form-inline my-2 my-lg-0 ml-auto searchform" action="./includes/search.php" method="post">
                <input type="text" class="form-control mr-sm-2" name="usersearch" placeholder="Search..."
                    aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Signup</h5>
                            <form action="./includes/formhandler.inc.php" method="post">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="E-Mail">
                                </div>
                                <button name="signupSubmit" class="btn btn-primary">Sign Up!</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Change Account</h5>
                            <form action="./includes/userupdate.inc.php" method="post">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="E-Mail">
                                </div>
                                <button type="submit" name="signupSubmit" class="btn btn-primary">Change</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Delete Account</h5>
                            <form action="./includes/userdelete.inc.php" method="post">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <button type="submit" name="signupSubmit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            &copy; 2023 KAD-F. All rights reserved.
        </div>
    </footer>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>