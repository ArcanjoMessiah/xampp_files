<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'ferramentaDAO.php';
// Excluir produto pelo ID
$cod_ferramenta = $_GET["id"];
$ferramentaDAO = new ferramentaDAO();
$ferramentaDAO->excluirFerramenta($cod_ferramenta);

echo "<script>";
echo "alert('Produto Excluido com Sucesso!');";
echo "window.location.href = 'consulta.php';";
echo "</script> ";