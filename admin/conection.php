<?php

function getConection()
{
    $hots = "localhost";
    $userid = "root";
    $pwd = "";
    $db = "website";
    
    $cn = mysqli_connect($hots, $userid, $pwd, $db);

    if($cn->connect_errno){
        echo 'Error de Conexion.php';
        return null;
    }else{
        return $cn;
    }
}
