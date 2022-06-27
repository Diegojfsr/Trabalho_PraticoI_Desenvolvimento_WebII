<?php
try{
    $host = "127.0.0.1";
    $db = "noticias";
    $user = "root";
    $pass = "root";
$conexao = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
}catch(PDOException $e){
    echo "Erro ao conectar com o banco";
    die();
}
?>