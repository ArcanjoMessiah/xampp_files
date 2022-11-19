<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'ferramentaDTO.php';
require_once 'ferramentaDAO.php';
include_once 'conectar.php';
include_once 'conexao.php';


// recuperei os dados do formulario


$cod_ferramenta = $_POST["id"];
$nome_ferramenta = $_POST["nome"];
$marca_ferramenta = $_POST["marca"];


if (!isset($_POST['updade'])){

    $sqlUpdate = "UPDATE tb_ferramenta SET nome_ferramenta='$nome_ferramenta', marca_ferramenta= '$marca_ferramenta' WHERE cod_ferramenta= '$cod_ferramenta'";

    $result = $strcon->query($sqlUpdate);
}

/*  Conexão pelo PDO com erro , utilizado um Update alternativo

$ferramentaDTO = new ferramentaDTO();
$ferramentaDTO->setCod_ferramenta($cod_ferramenta);
$ferramentaDTO->setNome($nome_ferramenta);
$ferramentaDTO->setMarca($marca_ferramenta);

$ferramentaDAO = new FerramentaDAO();
$ferramentaDAO->updateFerramentaById($ferramentaDTO);
*/



echo "<script>";
echo "window.location.href = 'consulta.php';";
echo "</script> ";
        