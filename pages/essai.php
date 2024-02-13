<?php 
  include ("../inc/function.php");
  $types = getTypesDepense();
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
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link href="../assets/css/modals.css" rel="stylesheet">
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
                            <a class="sidebar-link" href="insertion_date.html">
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
                            <a class="sidebar-link" href=".html">
                                <span class="hide-menu">
                                    Depense
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="modal-dialog" role="document">
                    <div class="modal-content rounded-5 shadow">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h2 class="fw-bold mb-0">Inserer depense</h2>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form class="" action="insertdepense.php" method="get">
                        <div class="form-floating mb-3">
                            <label for="date">Date</label>
                            <input type="date" class="form-control rounded-4" id="date" name="date">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="idtype">Choix type</label>
                            <select class="form-control rounded-4" id="idtype" name="idtype">
                            <?php foreach($types as $type){ ?>
                                <option value="<?php echo($type['id_type']); ?>"><?php echo($type['nom']); ?></option> 
                            <?php } ?>
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <label for="montant">Montant</label>
                            <input type="number" class="form-control rounded-4" id="montant" name="montant">
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Valider</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>ETU2444_Anthony_ETU2424_Mahaliana_ETU_2608_Kenny</p>
    </footer>
    <script src="../assets/js/bootstrap.bundle.min.js" ></script>
</body>
</html>