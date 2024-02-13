<?php
    include('../inc/function.php');
    if ($_GET['type'] == "variete"){
        createVariete($_GET['nom'],$_GET['occupation'],$_GET['rendement'],$_GET['prix']);
        header("Location: gestion_de_variete.php");
    }
    if ($_GET['type'] == "parcelle"  ) {
        createParcelle($_GET['surface'],$_GET['id_variete']);
        header("Location: gestion_de_parcelle.php");
    }
    if ($_GET['type'] == "cueilleur"  ) {
        createCeuilleur($_GET['nom'],$_GET['genre'],$_GET['naissance'],$_GET['minimum']);
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
    if ($_GET['type'] == "saison"  ) {
        $valeurs = array();
        if (isset($_GET["mois"])) {
            // Récupération des valeurs des mois sélectionnés
            $mois_selectionnes = $_GET["mois"];
            // Ajout des valeurs dans le tableau
            foreach ($mois_selectionnes as $mois) {
                $valeurs[] = intval($mois); // Conversion en entier
            }
        }
        var_dump($valeurs);
        updateSaison($valeurs);
        //header("Location: gestion-saison.php");
    }

?>