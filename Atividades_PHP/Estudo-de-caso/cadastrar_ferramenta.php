<?php


include_once("conectar.php");

$nome_ferramenta = $_POST['nome_ferramenta'];
$marca_ferramenta = $_POST['marca_ferramenta'];



if (!$strcon) {
 die('Não foi possível conectar ao Banco de Dados');
}

$sql = "INSERT INTO tb_ferramenta (nome_ferramenta, marca_ferramenta )
VALUES ('{$nome_ferramenta}', '{$marca_ferramenta}')";
    if (mysqli_query($strcon,$sql)){
        echo "Registro criado com sucesso";
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($strcon); 
    }
mysqli_close($strcon);
$msg = "O campo deve ser preenchido";



echo "<br><a href='index.php'>Clique aqui para realizar um novo cadastro</a><br>";
echo "<a href='consulta.php'>Clique aqui para realizar uma consulta</a><br>";
?>