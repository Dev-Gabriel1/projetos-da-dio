<?php
//conexão
$serverName = "localhost";
$userName= "root";
$senha = "";
$dbname ="sistema_de_materiais";

$connect = mysqli_connect($serverName, $userName, $senha, $dbname);
    if(mysqli_connect_error()){
        echo "Falha na conexão: ".mysqli_connect_error(); 
    }
    
?>
