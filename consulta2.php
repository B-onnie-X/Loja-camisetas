<?php

function inserir(){
include 'conecta.php';
    
    $stmt = $conn->query("SELECT * FROM tb_camisa");

    $resultado = "<table border = 1>";
    while ($user = $stmt->fetchObject()) {
        $resultado .= "<tr> 
        <td> $user->ds_cor </td>
         <td> $user->sg_tamanhos </td> 
         <td> <button class='excluir' id='$user->cd_camisa'> Excluir </button></td></tr>";
    }
        $resultado .="</table>";
echo $resultado;
    }
?>



