<?php
session_start();
include "includes/setting.php";

$msg = "";

if (isset($_POST["submit"])) {

    // Ambil data dari form
    $user = mysqli_real_escape_string($conn, $_POST["user"]);
    $pwd  = mysqli_real_escape_string($conn, $_POST["pwd"]);

    // Encrypt password (ikut struktur database sedia ada)
    $pwd = md5($pwd);

    // Query semak user
    $sql = "SELECT * FROM tbl_user WHERE user='$user' AND pwd='$pwd'";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $bil_rekod = mysqli_num_rows($query);

    if ($bil_rekod > 0) {
        // LOGIN BERJAYA
        $_SESSION["mydb"] = $user;
        header("Location: dashboard.php");
        exit();
    } else {
        // LOGIN GAGAL
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

    <title><?php echo isset($title) ? $title : "Internship Tracker - Login"; ?></title>

    <!-- Font Awesome -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- SB Admin 2 CSS -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">

                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>

                        <div class="col-lg-6">
                            <div class="p-5">

                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>

                                <!-- ERROR MESSAGE -->
                                <?php
                                if (!empty($msg)) {
                                    echo $msg;
                                }
                                ?>

                                <!-- LOGIN FORM -->
                                <form class="user" method="post">

                                    <div class="form-group">
                                        <input type="text" name="user"
                                               class="form-control form-control-user"
                                               placeholder="Username"
                                               required>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="pwd"
                                               class="form-control form-control-user"
                                               placeholder="Password"
                                               required>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>

                                    <input type="submit" name="submit"
                                           class="btn btn-primary btn-user btn-block"
                                           value="Login">

                                </form>

                                <hr>

                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>

                                <div class="text-center">
                                    <a class="small" href="register.php">Create an Account!</a>
                                </div>

                            </div>
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
