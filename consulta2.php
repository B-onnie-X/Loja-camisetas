<?php

function inserir(){
include 'conecta.php';
    
    $stmt = $conn->query("SELECT * FROM tb_camisa");

    $resultado = "<table border = 1 class='table table-bordered table-striped' style='width: 50%; margin: auto;'>";
    while ($user = $stmt->fetchObject()) {
        $resultado .= "<tr> 
        <td> $user->cd_camisa </td>
        <td> $user->ds_cor </td>
         <td> $user->sg_tamanhos </td> 
         <td> <button class='excluir btn btn-danger btn-sm' id='$user->cd_camisa'> Excluir </button> </td>
         <td> <button class='editar btn btn-warning btn-sm' id='$user->cd_camisa' data-toggle='modal' data-target='#modaledit'> Editar </button></td></tr>";
    }
        $resultado .="</table>";
echo $resultado;
    }
?>



