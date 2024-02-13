<?php
    include("../inc/function.php");
    $date = $_GET['date'];
    $idcueilleur = $_GET['idcueilleur'];
    $idparcelle = $_GET['idparcelle'];
    $poids = $_GET['poids'];
    insert_cueillette($date,$idcueilleur,$idparcelle,$poids); 
    header("Location:f_cueillettes.php") 
?>