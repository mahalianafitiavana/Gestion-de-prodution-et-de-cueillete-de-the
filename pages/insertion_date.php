<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location:loginuser.php");
    }
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
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 align-self-center">
                        <div class="col-sm-12 col-md-8 col-lg-8 col-md-offset-3" style="text-align: center;">
                            
                            <form class="mt-3" method="get" action="bilan.php" style="min-height: 20vh;display: flex;justify-content: space-around;align-items: center;">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div style="display: flex; align-items: center;justify-content: space-around;">
                                            <p style="font-size: 20px;">Debut:</p>
                                            <div class="form-group">
                                                <input type="date" class="form-control" id="nametext" aria-describedby="name" name="debut">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div style="display: flex; align-items: center;justify-content: space-around;">
                                            <p style="font-size: 20px;">Fin:</p>
                                            <div class="form-group">
                                                <input type="date" class="form-control" id="nametext" aria-describedby="name" name="fin">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn btn-block btn-dark">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div id="list-example" class="list-group">
                                                <a class="list-group-item list-group-item-action" href="#list-item-1">Thé vert</a>
                                                <a class="list-group-item list-group-item-action" href="#list-item-2">Thé noir</a>
                                                <a class="list-group-item list-group-item-action" href="#list-item-3">Thé blanc</a>
                                                <a class="list-group-item list-group-item-action" href="#list-item-4">Thé jaune</a>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div data-spy="scroll" data-target="#list-example" data-offset="0"
                                                class="position-relative mt-2" style="height: 200px; overflow: auto;">
                                                <h4 id="list-item-1">Thé vert</h4>
                                                <p>
                                                    Le thé vert serait bon pour le cerveau, aiderait à rester mince et préviendrait maladies cardiovasculaires, cancers et diabète. Après l'eau, le thé est la boisson la plus consommée au monde. Le thé vert contient des polyphénols, flavonoïdes et catéchines, de puissants antioxydants.
                                                </p>
                                                <h4 id="list-item-2">Thé noir</h4>
                                                <p>Le thé noir serait bon pour le cerveau, aiderait à rester mince et préviendrait maladies cardiovasculaires, cancers et diabète. Après l'eau, le thé est la boisson la plus consommée au monde. Le thé vert contient des polyphénols, flavonoïdes et catéchines, de puissants antioxydants.
                                                </p>
                                                <h4 id="list-item-3">Thé blanc</h4>
                                                <p>Le thé blanc serait bon pour le cerveau, aiderait à rester mince et préviendrait maladies cardiovasculaires, cancers et diabète. Après l'eau, le thé est la boisson la plus consommée au monde. Le thé vert contient des polyphénols, flavonoïdes et catéchines, de puissants antioxydants.</p>
                                                <h4 id="list-item-4">Thé jaune</h4>
                                                <p>Le thé jaune serait bon pour le cerveau, aiderait à rester mince et préviendrait maladies cardiovasculaires, cancers et diabète. Après l'eau, le thé est la boisson la plus consommée au monde. Le thé vert contient des polyphénols, flavonoïdes et catéchines, de puissants antioxydants.</p>
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