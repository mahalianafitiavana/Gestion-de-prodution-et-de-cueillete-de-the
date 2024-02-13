<?php
    include("../inc/function.php");
    $poids = $_GET['poids'];
    $idparcelle = $_GET['idparcelle'];
    $date = $_GET['date'];
    echo(validationPoidsCueillette($idparcelle,$date,$poids));
?>