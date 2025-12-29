<?php
session_start();
include "includes/setting.php";

$msg = "";

if (isset($_POST["submit"])) {

    // Ambil data
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $user = mysqli_real_escape_string($conn, $_POST["user"]);
    $pwd  = mysqli_real_escape_string($conn, $_POST["pwd"]);

    // Encrypt password
    $pwd = md5($pwd);

    // Semak username wujud atau tidak
    $check = mysqli_query($conn, "SELECT * FROM tbl_user WHERE user='$user'")
             or die(mysqli_error($conn));

    if (mysqli_num_rows($check) == 0) {

        // Insert user baru
        mysqli_query(
            $conn,
            "INSERT INTO tbl_user (user, pwd, name)
             VALUES ('$user', '$pwd', '$name')"
        ) or die(mysqli_error($conn));

        $msg = "<div class='alert alert-success text-center'>
                    Account created successfully. Please login.
                </div>";

    } else {
        $msg = "<div class='alert alert-danger text-center'>
                    Username already exists.
                </div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Internship Tracking | Register</title>

    <!-- Fonts & Icons -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- Styles -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">

            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="p-5">

                        <!-- TITLE -->
                        <div class="text-center mb-4">
                            <i class="fas fa-user-plus fa-3x text-primary mb-3"></i>
                            <h1 class="h4 text-gray-900">Create an Account</h1>
                            <p class="text-muted small">Register to start your internship tracking</p>
                        </div>

                        <!-- MESSAGE -->
                        <?php
                        if (!empty($msg)) {
                            echo $msg;
                        }
                        ?>

                        <!-- REGISTER FORM -->
                        <form class="user" method="post">

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text"
                                           class="form-control form-control-user"
                                           name="user"
                                           placeholder="Username"
                                           required>
                                </div>

                                <div class="col-sm-6">
                                    <input type="password"
                                           class="form-control form-control-user"
                                           name="pwd"
                                           placeholder="Password"
                                           required>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text"
                                       class="form-control form-control-user"
                                       name="name"
                                       placeholder="Full Name"
                                       required>
                            </div>

                            <input type="submit"
                                   name="submit"
                                   class="btn btn-primary btn-user btn-block"
                                   value="Create Account">

                        </form>

                        <hr>

                        <div class="text-center">
                            <a class="small" href="login.php">
                                Already have an account? Login!
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>

</body>
</html>
