<?php
session_start();
include "includes/setting.php";

$msg = "";

if (isset($_POST["submit"])) {

    $user = mysqli_real_escape_string($conn, $_POST["user"]);
    $pwd  = mysqli_real_escape_string($conn, $_POST["pwd"]);

    // Encrypt password
    $pwd = md5($pwd);

    // Semak login
    $sql = "SELECT * FROM tbl_user WHERE user='$user' AND pwd='$pwd'";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if (mysqli_num_rows($query) > 0) {
        $_SESSION["mydb"] = $user;
        header("Location: dashboard.php");
        exit();
    } else {
        $msg = "<div class='alert alert-danger text-center'>
                    <i class='fas fa-exclamation-triangle'></i>
                    Wrong Username or Password
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

    <title>Internship Tracker | Login</title>

    <!-- Fonts & Icons -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- Styles -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

</head>

<body class="d-flex align-items-center justify-content-center">

<div class="login-wrapper">

    <div class="card shadow-lg border-0">
        <div class="card-body p-5">

            <!-- TITLE -->
            <div class="text-center mb-4">
                <i class="fas fa-user-graduate fa-3x text-primary mb-3"></i>
                <h1 class="h4 text-gray-900">Welcome Back!</h1>
                <p class="text-muted small">
                    Login to continue your internship tracking
                </p>
            </div>

            <!-- MESSAGE -->
            <?php
            if (!empty($msg)) {
                echo $msg;
            }
            ?>

            <!-- FORM -->
            <form method="post">

                <div class="form-group">
                    <input type="text"
                           name="user"
                           class="form-control form-control-user"
                           placeholder="Username"
                           required>
                </div>

                <div class="form-group">
                    <input type="password"
                           name="pwd"
                           class="form-control form-control-user"
                           placeholder="Password"
                           required>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox"
                               class="custom-control-input"
                               id="rememberMe">
                        <label class="custom-control-label" for="rememberMe">
                            Remember Me
                        </label>
                    </div>
                </div>

                <input type="submit"
                       name="submit"
                       class="btn btn-primary btn-user btn-block"
                       value="Login">

            </form>

            <hr>

            <div class="text-center">
                <a class="small" href="register.php">
                    Create an Account
                </a>
            </div>

        </div>
    </div>

    <!-- FOOTER -->
    <div class="text-center mt-3">
        <small class="text-muted">
            © <?php echo date("Y"); ?> Syanizzayu 
        </small>
    </div>

</div>



<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>

</body>
</html>
