<?php
    $host = "localhost";
    $db_name = "bd_lojacamiseta";
    $port = "3307";
    $usuario = "root";
    $senha = "usbw";
    $endereco = "mysql:host=$host;dbname=$db_name;port=$port";

    $conn = new PDO ($endereco, $usuario, $senha);
?>