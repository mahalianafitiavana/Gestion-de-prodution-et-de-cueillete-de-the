<?php
    session_start();
    if (!isset($_SESSION['admin'])) {
        header("Location:index.php");
    }
?>
<?php
    include('../inc/function.php');
    $liste =  getSalaire();
    $c =  getCeuilleurs();
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
    <title>Gestion de Salaires</title>
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
                            <b class="logo-icon">
                                <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            </b>
                            <span class="logo-text logo">
                                Tea Garden
                            </span>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-md-offset-3" style="text-align: center;">
                    <p>Insertion</p>
                    <form class="mt-3" method="get" action="create.php">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="hidden" name="type" value="salaire">
                                    <select name="id_cueilleur" id="">
                                        <option  checked>Liste  des Cueilleurs </option>
                                        <?php for ($i=0; $i < count($c); $i++) {  ?>
                                            <option value="<?php   echo $c[$i]['id_cueilleur'] ;   ?>"><?php   echo $c[$i]['nom'] ;   ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nametext" name="montant"
                                        placeholder="montant">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
                            <a class="sidebar-link" href="gestion_de_cueilleurs.php">
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
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 align-self-center">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Cueilleur </th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Montant</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i=0; $i < count($liste); $i++) { ?>
                                        <tr>
                                            <th scope="row"><?php  echo $liste[$i]['id_cueilleur'] ; ?></th>
                                            <th scope="row"><?php  echo $liste[$i]['nom'] ; ?></th>
                                            <th scope="row"><?php  echo $liste[$i]['montant'] ; ?></th>
                                            <td>
                                                <div class="form-actions">
                                                    <button type="button" class="btn btn-dark"><a href="action.php?type=salaire&action=update&id=<?php echo $liste[$i]['id_salaire'] ; ?>">Edit </a> </button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php  }   ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer style="margin-top: 25%;">
        <p>ETU2444_Anthony_ETU2424_Mahaliana_ETU_2608_Kenny</p>
        <div class="col-lg-12 lien">
            <label class="text-dark" for="pwd"><a href="deconnexion.php">Se deconnecter</a></label>
        </div>
    </footer>
</body>
</html>