<?php
session_start();
include "includes/security.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Internship Tracker</title>

    <!-- Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- Styles -->
   <link href="css/sb-admin-2.css" rel="stylesheet">
<link href="css/dashboard1.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-text mx-3">INTERNSHIP TRACKER</div>
        </a>

        <hr class="sidebar-divider my-0">

        <li class="nav-item active">
            <a class="nav-link" href="dashboard.php">

                <span>Dashboard</span>
            </a>
        </li>

        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link" href="company.html">
                <i class="fas fa-building"></i>
                <span>About Company</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="logbook.html">
                <i class="fas fa-book"></i>
                <span>Logbook</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-chart-area"></i>
                <span>Progress Overview</span>
            </a>
        </li>

        <hr class="sidebar-divider d-none d-md-block">

        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

           <!-- TOPBAR -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">

                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="logbook.html">Logbook</a></li>
                    <li class="nav-item"><a class="nav-link" href="company.html">About Company</a></li>
                    <li class="nav-item"><a class="nav-link" href="charts.html">Progress Overview</a></li>

                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            <span class="mr-2 text-gray-600 small">Syanizzayu Iqhlas</span>
                            <img class="img-profile rounded-circle" src="img/mygambar.jpeg">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- END TOPBAR -->


            <!-- Page Content -->
            <div class="container-fluid">

                <!-- Welcome -->
                <div class="row mb-4">
                    <div class="col-md-8">
                        <h1 class="h3 text-gray-800 font-weight-bold">Welcome, Syanizzayu!</h1>
                        <p class="text-muted">Internship Dashboard Overview</p>
                    </div>
                </div>

                <!-- Internship Info -->
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-10">
                        <div class="card shadow">
                            <div class="card-header bg-white">
                                <h6 class="font-weight-bold text-primary">Internship Information</h6>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">

                                    <div class="col-md-3 text-center mb-3">
                                        <img src="img/mygambar.jpeg" class="rounded-circle img-fluid" style="max-width:140px">
                                    </div>

                                    <div class="col-md-9">
                                        <table class="table table-borderless">
                                            <tr><th>Name</th><td class="font-weight-bold">Norsyanizzayu Iqhlas Ahmad Sahfiee</td></tr>
                                            <tr><th>Course</th><td>Bachelor Degree (Hons) Information Management System</td></tr>
                                            <tr><th>Faculty</th><td>UiTM / Faculty of Information Science</td></tr>
                                            <tr><th>CGPA</th><td>4.0</td></tr>
                                            <tr><th>Internship Period</th><td>22 December 2025 – 23 March 2026</td></tr>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              <!-- Statistic Cards -->
<div class="row">

    <div class="col-md-3 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Logs</div>
                    <div class="h5 font-weight-bold">18</div>
                </div>
                <div class="text-primary">
                    <i class="fas fa-file-alt fa-2x"></i> <!-- Icon for Total Logs -->
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Approved</div>
                    <div class="h5 font-weight-bold">12</div>
                </div>
                <div class="text-success">
                    <i class="fas fa-check-circle fa-2x"></i> <!-- Icon for Approved -->
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending</div>
                    <div class="h5 font-weight-bold">6</div>
                </div>
                <div class="text-warning">
                    <i class="fas fa-hourglass-half fa-2x"></i> <!-- Icon for Pending -->
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Progress</div>
                    <div class="h5 font-weight-bold">50%</div>
                </div>
                <div class="text-info">
                    <i class="fas fa-spinner fa-2x"></i> <!-- Icon for Progress -->
                </div>
            </div>
        </div>
    </div>

<!-- Make sure you include Font Awesome in your <head> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

                </div>

      <!-- CHART + REMINDER SECTION -->
<div class="row">

    <!-- Bar Chart -->
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Log Status Overview
                </h6>
            </div>
            <div class="card-body">
                <div class="chart-bar">
                    <canvas id="myBarChart"></canvas>
                </div>
            </div>
        </div>
    </div>
  <div class="col-lg-4">
        <div class="card shadow mb-4 reminder-card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-warning">
                    <i class="fas fa-bell mr-2"></i> Log Reminder
                </h6>
            </div>

            <div class="card-body">
                <p class="mb-2 font-weight-bold text-dark">
                    Logs to Submit
                </p>

                <ul class="list-unstyled reminder-list">
                    <li>
                        <i class="fas fa-exclamation-circle text-danger mr-2"></i>
                        Week 6 Log
                    </li>
                    <li>
                        <i class="fas fa-exclamation-circle text-danger mr-2"></i>
                        Week 7 Log
                    </li>
                </ul>

                <hr>

                <p class="small text-muted mb-2">
                    ⏰ Deadline: <strong>This Friday</strong>
                </p>

                <a href="logbook.html" class="btn btn-warning btn-sm btn-block">
                    Go to Logbook
                </a>
            </div>
        </div>
    </div>

</div>


            </div>
            <!-- End Page Content -->

        </div>
        <!-- End Main Content -->
                 <!-- FOOTER -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto text-center">
                <span>© Syanizzayu 2025</span>
            </div>
        </footer>

    </div>
</div>
<div class="modal fade" id="logoutModal">

            <div class="modal-header">
                <h5 class="modal-title">Ready to Leave?</h5>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">Select "Logout" to end your session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.php">Logout</a>
            </div>
        </div>
    </div>
</div>



<!-- Scripts -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="js/demo/chart-bar-demo.js"></script>

</body>
</html>
