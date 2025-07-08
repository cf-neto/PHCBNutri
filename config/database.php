<?php

$dbHost = 'localhost'; // Apenas para desenvolvimento
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'phcb-nutri';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error){
    die("Falha na conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8");

?>