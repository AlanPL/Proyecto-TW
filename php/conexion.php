<?php

function conectar(){
    /*$user="root";
    $pass="";
    $server="localhost";
    $db="semestre20202";//nombre de la base de datos
    $con= mysql_connect($server,$user,$pass) or die ("Error al conectar a la base de datos".mysql_error());

    mysql_select_db($db,$con);*/

    $host="127.0.0.1";
    $port=3306;
    $socket="";
    $user="root";
    $password="";
    $dbname="semestre20202";

    $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
     or die ('Could not connect to the database server' . mysqli_connect_error());

    return $con;

}

?>
