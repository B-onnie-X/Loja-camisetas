<?php
include 'conecta.php';
include 'consulta2.php';

$tamanho_escolhido = $_POST['tamanho'];
$cor_escolhida = $_POST['cor'];

$sql = "INSERT INTO `tb_camisa`(`cd_camisa`, `sg_tamanhos`, `ds_cor`) VALUES (NULL, '$tamanho_escolhido', '$cor_escolhida')";

if($conn->exec($sql)){
    inserir();
}else {
    echo "Falha ao registrar!";
}

?>