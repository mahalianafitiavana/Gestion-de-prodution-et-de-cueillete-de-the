<?php
    include('../inc/function.php');
    if ($_GET['type'] == "variete"  && $_GET['action'] == "delete"  ){
        deleteVariete($_GET['id']);
        header("Location: gestion_de_variete.php");
    }
    if ($_GET['type'] == "parcelle"  && $_GET['action'] == "delete" ) {
        deleteParcelle($_GET['id']);
        header("Location: gestion_de_parcelle.php");
    }
    if ($_GET['type'] == "cueilleur"  && $_GET['action'] == "delete" ) {
        deleteCeuilleurs($_GET['id']);
        header("Location: gestion_de_cueilleurs.php");
    }
    if ($_GET['type'] == "types"  && $_GET['action'] == "delete" ) {
        deletetypes($_GET['id']);
        header("Location: gestion_depense.php");
    }

?>