<!DOCTYPE html>

<?php
include_once 'webcomplementes.html';
require_once 'ferramentaDAO.php';


$ferramentaDAO = new FerramentaDAO();
$ferramenta = $ferramentaDAO->getAllFerramenta();
?>


<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title> COnsulta Ferramentas </title>
</head>

<body>
  

  <?php
  // Conectando ao banco de dados: 
  include_once("conectar.php");
  // Criando tabela e cabeçalho de dados:
 

  $sql = "SELECT * FROM tb_ferramenta";

  $resultado = mysqli_query($strcon, $sql) or die("Erro ao retornar dados");

  // Obtendo os dados por meio de um loop while
  



  ?>

  <br><br><br>


  <?php

  require_once 'ferramentaDAO.php';


  $ferramentaDAO = new FerramentaDAO();
  $ferramenta = $ferramentaDAO->getAllFerramenta();


  ?>

  <div class="card bg-dark text-white text-center font-weight-bold">
    <div class="card-body">
      Lista de Ferramentas
      <a href="index.php" target="centro" class="btn btn-light btn-sm float-right" data-toggle='tooltip' data-placement='left' title='Cadastrar nova ferramenta!'>
        Novo Produto <i class="fas fa-user-check"></i>
      </a>
    </div>
  </div>
  <br>
  <table class="table table-borderless table-hover">
    <thead class="thead-dark text-uppercase">
      <tr style="align:center">
        <th>Código</th>
        <th>Nome</th>
        <th>Marca</th>
        <th>Alterar</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($resultado as $p) {

// Criando tabela e cabeçalho de dados:

        echo "<tr>";
        echo "  <td>{$p["cod_ferramenta"]}</td>";
        echo "  <td>{$p["nome_ferramenta"]}</td>";
        echo "  <td>{$p["marca_ferramenta"]}</td>";
        echo "  <td class='text-center'><a href='alterarferramenta.php?id={$p["cod_ferramenta"]}' data-toggle='tooltip' data-placement='top' title='Editar Ferramenta!' onclick=\"return confirm('Tem certeza que deseja Editar  a Ferramenta!: {$p["nome_ferramenta"]}'); return false;\" ><i class='fas fa-user-edit text-dark'></i></a></td>";
        echo "  <td class='text-center'><a href='excluirFerramentaByidController.php?id={$p["cod_ferramenta"]}' data-toggle='tooltip' data-placement='top' title='Excluir a Ferramenta!!'  onclick=\"return confirm('Tem certeza que deseja Excluir a Ferramenta!: {$p["nome_ferramenta"]}'); return false;\"><i class='fas fa-trash-alt text-danger'></i></a></td>";
        echo "</tr>";

        }

      mysqli_close($strcon);
      ?>

      <i class="fa-solid fa-screwdriver-wrench"></i>
    </tbody>

  </table>
  <div class="card bg-dark text-white text-center font-weight-bold">
    <div class="card-body">
      <a href="consulta.php" target="centro" class="btn btn-light btn-sm float-right" data-toggle='tooltip' data-placement='left' title='Atualizar consulta!'>
        Refresh <i class="fa-duotone fa-arrows-rotate"></i>
      </a>
    </div>
  </div>
</body>

</html>