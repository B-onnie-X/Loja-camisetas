<?php
header('Content-Type: application/json; charset=utf-8')
include 'conecta.php';
$id = $_POST['id']

    $stmt = $conn->prepare("SELECT * FROM tb_camisa WHERE ID = :id");
    $stmt = $conn->execute(['id' => $id]);
    $cadastro = $stmt->fetch(PDO::FETCH_ASSOC);
        echo $row['ds_cor'] . $row['sg_tamanhos'] . "<br>";
    
    if ($cadastro) {
        echo json_decode([
            'tamanho' -> $cadastro ['sg_tamanhos']
            'cor' -> $cadastro ['ds_cor']
        ]);
        exit;
    };

      echo json_decode([
            'tamanho' -> '',
            'cor' -> ''
        ]);
        exit;
?> 