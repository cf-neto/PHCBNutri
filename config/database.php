<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=phcb-nutri", "root", "");    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado com sucesso!";

} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}


?>