<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="../assets/js/script.js"></script>   
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Gestion de variete</title>
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
                            <a class="sidebar-link" href="gestion_de_variete.php">
                                <span class="hide-menu">
                                    Gestion de variete 
                                </span>
                            </a>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link" href="gestion_de_parcelle.php">
                                <span>
                                    Gestion de parcelle
                                </span>
                            </a>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link" href="gestion_de_cueilleur.php">
                                <span>
                                    Gestion de cueilleur
                                </span>
                            </a>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link" href="gestion_depense.php">
                                <span>
                                    Type de depense
                                </span>
                            </a>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link" href="gestion-salaire.php">
                                <span>
                                    Configuration de salaire
                                </span>
                            </a>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link" href="gestion_de_saison.php">
                                <span>
                                    Configuration de saison
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <form action="create.php" method="get">
                                <div style="display: flex; justify-content: center; align-items: center; width: 100%;">
                                    <fieldset>
                                        <legend>Saison de   </legend>
                                        <div>
                                            <input type="hidden" name="type" value="saison">
                                            <input type="checkbox" name="mois[]" value="1" id="mois_1">
                                            <label for="mois_1">Janvier</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="mois[]" value="2" id="mois_2">
                                            <label for="mois_2">Février</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="mois[]" value="3" id="mois_3">
                                            <label for="mois_3">Mars</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="mois[]" value="4" id="mois_4">
                                            <label for="mois_4">Avril</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="mois[]" value="5" id="mois_5">
                                            <label for="mois_5">Mai</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="mois[]" value="6" id="mois_6">
                                            <label for="mois_6">Juin</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="mois[]" value="7" id="mois_7">
                                            <label for="mois_7">Juillet</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="mois[]" value="8" id="mois_8">
                                            <label for="mois_8">Août</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="mois[]" value="9" id="mois_9">
                                            <label for="mois_9">Septembre</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="mois[]" value="10" id="mois_10">
                                            <label for="mois_10">Octobre</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="mois[]" value="11" id="mois_11">
                                            <label for="mois_11">Novembre</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="mois[]" value="12" id="mois_12">
                                            <label for="mois_12">Décembre</label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div style="display: flex; justify-content: center;">
                                    <button class="w-25 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Valider</button>
                                </div>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer style="margin-top: 25%;">
        <p>ETU2444_Anthony_ETU2424_Mahaliana_ETU_2608_Kenny</p>
    </footer>
</body>
</html>