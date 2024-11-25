<?php

$host = "localhost";
$port = 3306;
$socket = "";
$user = "root";
$password = "192621";
$dbname = "db_dumka";

// Criar conexão com validação
$con = new mysqli($host, $user, $password, $dbname, $port, $socket);

// Verificar se a conexão foi bem-sucedida
if ($con->connect_error) {
    die("Erro de conexão: " . $con->connect_error);
}


?>

