<?php
include 'conecta.php';

$tamanho_escolhido = $_POST['tamanho'];
$cor_escolhida = $_POST['cor'];

if ($conn->query("INSERT INTO `tb_camisa`(`cd_camisa`, `sg_tamanhos`, `ds_cor`) VALUES (NULL, '".$tamanho_escolhido."', '".$cor_escolhida."')")) {
    echo "registro inserido com sucesso";
} else {
    echo "erro ao inserir";
}
?>