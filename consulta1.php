<?php
include 'conecta.php';

    $stmt = $conn->query("SELECT * FROM tb_camisa ");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['ds_cor'] . $row['sg_tamanhos'] . "<br>";
    }
?> // oi isis 