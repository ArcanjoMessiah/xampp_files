<!DOCTYPE html>
<?php
include_once 'webcomplementes.html';

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <br>
    <div class="container">
        <div class="card bg-dark text-white text-center font-weight-bold">
            <div class="card-body">Cadastro de ferramentas </div>
        </div>
        <br>

        <form action="cadastrar_ferramenta.php" method="post">
            <div class="card-group">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <div class="custom-control ">

                            <h2>Tool</h2>
                            <br>
                        </div>
                        <br>
                        <label for="entidade">Nome da ferramenta</label>
                        <input type="text" name="nome_ferramenta" size="70" id="nome_ferramenta" class="form-control col-5">



                    </div>
                </div>
                <div class="card bg-dark text-white">
                    <div class="card-body">

                        <label for="marca_ferramenta">Marca da Ferramenta:</label>
                        <input type="text" name="marca_ferramenta" size="50" id="marca_ferramenta" class="form-control col-5">

                        <br>
                        <br>
                        <button type="reset" class="btn btn-warning float-left">Limpar</button>
                        <button type="submit" class="btn btn-success float-left" style="margin-left: 5px;">Cadastrar</button>
                    </div>
                </div>
            </div>
            <br>
            <center>

            </center>
        </form>

        <a href="consulta.php">Consultar ferramentas</a>


        <center>
            <?php
            if (!empty($_GET["msg"])) {
                echo $_GET["msg"];
            }
            ?>
        </center>
    </div>



</body>

</html>