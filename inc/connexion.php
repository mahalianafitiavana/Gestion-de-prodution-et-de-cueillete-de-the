<?php 
function dbconnect()
{
    static $connect=null;
    if($connect===null)
    {
        $connect=mysqli_connect('localhost','root','','the');
        // $connect=mysqli_connect('172.10.3.11','ETU002451','craaonXyv9f8','db_p16_ETU002451');
    }
    return $connect;
}
?>