<?php
include "includes/security.php";
include "includes/db.php"; // sambungan database

if (isset($_POST['submit_log'])) {

    $log_date = $_POST['log_date'];
    $activity = $_POST['activity'];
    $hours = $_POST['hours'];

    $query = "INSERT INTO internship_logs (log_date, activity, hours, status)
              VALUES ('$log_date', '$activity', '$hours', 'Pending')";

    if (mysqli_query($conn, $query)) {
        header("Location: logbook.php?success=1");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<?php if (isset($_GET['success'])) { ?>
    <div class="alert alert-success text-center">
        Log submitted successfully! Waiting for approval.
    </div>
<?php } ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Internship Tracker </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
         
                </div>
                <div class="sidebar-brand-text mx-3">INTERNSHIP TRACKER</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="dashboard.php">
        <span>Dashboard</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - About Company -->
<li class="nav-item">
    <a class="nav-link" href="company.html">
        <i class="fas fa-fw fa-building"></i>
        <span>About Company</span>
    </a>
</li>

<!-- Nav Item - Logbook -->
<li class="nav-item">
    <a class="nav-link" href="logbook.html">
        <i class="fas fa-fw fa-book"></i>
        <span>Logbook</span>
    </a>
</li>

<!-- Nav Item - Logbook -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
           <i class="fas fa-fw fa-chart-area"></i>
        <span>Progress Chart</span>
    </a>
</li>
            <!-- Heading -->
            <div class="sidebar-heading">
            </div>

            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
                        <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           


        </ul>
        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="dashboard.html">

            Dashboard
        </a>
    </li>

    <!-- Logbook -->
    <li class="nav-item">
        <a class="nav-link" href="logbook.html">
            Logbook
        </a>
    </li>

    <!-- About Company -->
    <li class="nav-item">
        <a class="nav-link" href="company.html">
            About Company
        </a>
    </li>

    <!-- Internship Progress -->
    <li class="nav-item">
        <a class="nav-link" href="progress.html">
             Progress Overview
        </a>
    </li>
</ul>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Syanizzayu Iqhlas</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg"> 
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                 <div class="row justify-content-center mb-4">
    <div class="col-lg-8">

        <div class="card shadow">
            <div class="card-header font-weight-bold text-primary">
                Submit Internship Log
            </div>

            <div class="card-body">
                <form method="POST" action="submit_log.php">

                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="log_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Activity Description</label>
                        <textarea name="activity" class="form-control" rows="3" required></textarea>
                    </div>

                    <button type="submit" name="submit_log" class="btn btn-primary btn-block">
                        Submit Log
                    </button>

                </form>
            </div>
        </div>

    </div>
</div>
                     <!-- Logbook Table -->
  <div class="row justify-content-center">
    <div class="col-lg-10 col-md-11">

        <div class="card shadow-sm">
            <div class="card-header font-weight-bold text-center">
                Logbook Records
            </div>
            <div class="card-body p-0">
                <table class="table table-bordered table-striped mb-0 text-center">
                    <thead class="thead-light">
                        <tr>
                            <th>Date</th>
                            <th>Activity</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>20 Dec 2025</td>
                            <td>Worked on project report</td>
                            <td><span class="badge badge-success">Approved</span></td>
                        </tr>
                        <tr>
                              <tr>
                            <td>21 Dec 2025</td>
                            <td>Team meeting and discussion</td>
                            <td><span class="badge badge-success">Approved</span></td>
                        </tr>
                        <tr>
                              <tr>
                            <td>22 Dec 2025</td>
                            <td>Update system data</td>
                            <td><span class="badge badge-success">Approved</span></td>
                        </tr>
                        <tr>
                            <td>23 Dec 2025</td>
                            <td>Research on new technology</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                        </tr>
                          <tr>
                            <td>24 Dec 2025</td>
                            <td>Meeting with supervisor</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                          </tr>
                      <tr>
                            <td>27 Dec 2025</td>
                            <td>Updated database records</td>
                            <td><span class="badge badge-success">Approved</span></td>
                        </tr>
                        <tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>



    

              

            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>

        </div>
    

    </div>

    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
   

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> 