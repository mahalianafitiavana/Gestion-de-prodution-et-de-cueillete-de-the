<?php
    include("../inc/function.php");
    $date = $_GET['date'];
    $idtype = $_GET['idtype'];
    $montant = $_GET['montant'];
    insertDepense($date, $idtype, $montant);
    header("Location:f_depenses.php"); 
?>