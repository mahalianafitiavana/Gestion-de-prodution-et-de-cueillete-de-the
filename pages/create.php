<?php
    include('../inc/function.php');
    if ($_GET['type'] == "variete"){
        createVariete($_GET['nom'],$_GET['occupation'],$_GET['rendement']);
        header("Location: gestion_de_variete.php");
    }
    if ($_GET['type'] == "parcelle"  ) {
        createParcelle($_GET['surface'],$_GET['id_variete']);
        header("Location: gestion_de_parcelle.php");
    }
    if ($_GET['type'] == "cueilleur"  ) {
        createCeuilleur($_GET['nom'],$_GET['genre'],$_GET['naissance']);
        header("Location: gestion_de_cueilleurs.php");
    }
    if ($_GET['type'] == "types"  ) {
        createtypes($_GET['nom']);
        header("Location: gestion_depense.php");
    }
    if ($_GET['type'] == "salaire"  ) {
        createSalaire($_GET['id_cueilleur'],$_GET['montant']);
        header("Location: gestion-salaire.php");
    }

?>