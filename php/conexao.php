<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "bdlongin";

    $dbcon = new MySQLi("$host","$usuario","$senha","$banco");

    if($dbcon->connect_error){
        echo "conexao_erro";
    } /* else{
        echo "conexao_ok";
    }  */
?>