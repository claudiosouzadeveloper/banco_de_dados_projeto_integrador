<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


$dbhost = "localhost";
$dbuser = "root";
$dbname="frequencia";
$dbpass="senac123456789";
$conexao= new mysqli($dbhost, $dbuser, $dbpass,$dbname);

if($conexao-> connect_errno){
    echo "não conectado";
}
else
{
    echo "conectado";
}



//$db = sqlite_open('mysqlitedb', 0666, $sqliteerror);

?>