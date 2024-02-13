<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location:loginuser.php");
    }
?>

<?php
    include("../inc/function.php");
    $debut = $_GET['debut'];
    $fin = $_GET['fin'];
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="../assets/js/script.js"></script>   
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Resultat</title>
    <link href="../assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="../assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/libs/moment/min/moment.min.js"></script>
    <script src="../assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="../dist/js/pages/calendar/cal-init.js"></script>
</head>

<body>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <div class="navbar-brand">
                        <a href="index.html">
                            <b class="logo-icon">
                                <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            </b>
                            <span class="logo-text logo">
                                Tea Garden
                            </span>
                        </a>
                    </div>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> 
                            <a class="sidebar-link" href="insertion_date.php">
                                <span class="hide-menu">
                                    Resultat
                                </span>
                            </a>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link" href="f_cueillettes.php">
                                <span class="hide-menu">
                                    Cueillete
                                </span>
                            </a>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link" href="f_depenses.php">
                                <span class="hide-menu">
                                    Depense
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper" style="min-height: 80vh;">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 align-self-center">
                        <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h1>Bilan du <?php echo($debut); ?> au <?php echo($fin); ?></h1>
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-4 col-xlg-4">
                                                        <div class="card card-hover">
                                                            <div class="p-2 bg-primary text-center">
                                                                <h1 class="font-light text-white"><?php echo(getPoidsTotalCueillette($debut,$fin)); ?></h1>
                                                                <h6 class="text-white">Poids cueillette</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4 col-xlg-4">
                                                        <div class="card card-hover">
                                                            <div class="p-2 bg-cyan text-center">
                                                                <h1 class="font-light text-white"><?php echo(getPoidsRestant($fin)); ?></h1>
                                                                <h6 class="text-white">Poids restant</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4 col-xlg-4">
                                                        <div class="card card-hover">
                                                            <div class="p-2 bg-success text-center">
                                                                <h1 class="font-light text-white"><?php echo(getRevientParKilo($debut,$fin)); ?></h1>
                                                                <h6 class="text-white">Cout de revient/kg</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>ETU2444_Anthony_ETU2424_Mahaliana_ETU_2608_Kenny</p>
        <div class="col-lg-12 lien">
            <label class="text-dark" for="pwd"><a href="deconnexion.php">Se deconnecter</a></label>
        </div>
    </footer>
</body>
</html>