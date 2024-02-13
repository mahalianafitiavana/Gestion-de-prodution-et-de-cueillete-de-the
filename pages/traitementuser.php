<?php
    include('../inc/function.php');
    $result = checkuser($_GET['pseudo'] , $_GET['pwd']);
    if(is_array($result))
    {
        session_start();
        $_SESSION['user'] = $result[0];
        header("Location: insertion_date.php");
    }
    else{
        echo $result;
        header("Location: loginuser.php?error=$result");
    }
?>