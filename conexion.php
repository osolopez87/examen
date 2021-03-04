<?php
function conectar(){
    $user="root";
    $pass=" ";
    $server="localhost";
    $db= "base de datos usuario"; 
    $con= mysql_connect ($server,$user,$pass) or die("error en la conexion".mysql_error());
    mysql_select_db.($db,$con);
    return $con;
}

?>