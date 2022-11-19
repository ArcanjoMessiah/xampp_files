<!DOCTYPE html>
<?php
include_once 'webcomplementes.html';
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
</head>
<?php
require_once 'ferramentaDAO.php';


$cod_ferramenta = $_GET["id"];
$ferramentaDAO = new FerramentaDAO();
$ferramenta = $ferramentaDAO->getFerramentaById($cod_ferramenta);
?>

<body>
    <div class="container">
        <form action="alterarFerramentaController.php" method="post">
            <div class="card bg-dark text-light text-center font-weight-bold">
                <div class="card-body">Editar Ferramenta</div>
            </div>
            <br>
            <div class="card-group">
                <div class="card bg-dark text-light">
                    <div class="card-body">
                        <label for="id">Codigo</label>
                        <input type="text" id="id" name="id" class="form-control col-2" readonly="" value="<?php echo $ferramenta["cod_ferramenta"] ?>">
                        <div class="card bg-dark text-white">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" size="50" id="nome" class="form-control" value="<?php echo $ferramenta["nome_ferramenta"] ?>">
                            <label for="marca">Marca:</label>
                            <input type="text" name="marca" id="marca" class="form-control col-6 " value="<?php echo $ferramenta["marca_ferramenta"] ?>">

                        </div>
                    </div>
                </div>
                <div class="card bg-dark text-white">

                    <div class="card-body text-white">

                        <br><br>
                        <a href="consulta.php" class="btn btn-warning">Voltar</a>
                        <button type="submit" name="update" class="btn btn-primary">Editar</button>
                    </div>
                </div>
            </div>


        </form>
    </div>
    <center>
        <?php
        if (!empty($_GET["msg"])) {
            echo $_GET["msg"];
        }
        ?>
    </center>
</body>

</html>