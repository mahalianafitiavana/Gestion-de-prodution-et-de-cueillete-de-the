<?php
    include('../inc/function.php');
    $result = checkadmin($_GET['pseudo'] , $_GET['pwd']);
    if(is_array($result))
    {
        session_start();
        $_SESSION['admin'] = $result[0];
        header("Location: gestion_de_variete.php");
    }
    else{
        echo $result;
        header("Location: index.php?error=$result");
    }
?>