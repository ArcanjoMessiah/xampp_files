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
  <h3>Consulta de Ferramentas</h3><br>
  <form name="Cadastro" action="consulta.php" method="POST">
    <label>Consulta a Banco de Dados completo:</label>
    <input type="submit" name="consulta-completa" value="Consultar">
  </form>

  
  <?php
// Conectando ao banco de dados: 
include_once("conectar.php");
// Criando tabela e cabeçalho de dados:
echo "<table border=1>";
echo "<tr>";
echo "<th> CÓDIGO </th>";
echo "<th> Nome da Ferramenta </th>";
echo "<th> Marca </th>";
echo "<th> Editar </th>";
echo "<th> Excluir </th>";
echo "</tr>";

$sql = "SELECT * FROM tb_ferramenta";

$resultado = mysqli_query($strcon, $sql) or die("Erro ao retornar dados");

  // Obtendo os dados por meio de um loop while
  foreach ($resultado as $tool) {

    echo "<tr>";
    echo "  <td>{$tool["cod_ferramenta"]}</td>";
    echo "  <td>{$tool["nome_ferramenta"]}</td>";
    echo "  <td>{$tool["marca_ferramenta"]}</td>";
    echo "  <td class='text-center'><a href='alterarferramenta.php?id={$tool["cod_ferramenta"]}' data-toggle='tooltip' data-placement='top' title='Editar Ferramenta!' onclick=\"return confirm('Tem certeza que deseja Editar  a Ferramenta!: {$tool["nome_ferramenta"]}'); return false;\" >Editar </a></td>";
    echo "  <td class='text-center'><a href='excluirFerramentaByidController.php?id={$tool["cod_ferramenta"]}' data-toggle='tooltip' data-placement='top' title='Excluir a Ferramenta!!'  onclick=\"return confirm('Tem certeza que deseja Excluir a Ferramenta!: {$tool["nome_ferramenta"]}'); return false;\">Excluir</a></td>";
    echo "</tr>";
  }
  
mysqli_close($strcon);
echo "</table>";


?>




</body>
</html>