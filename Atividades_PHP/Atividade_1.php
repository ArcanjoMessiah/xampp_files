<?php


include_once 'webcomplementes.html';

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades PHP </title>
</head>

<body>

    <div class="container">
        <form action="" target="self" method="POST">
            <div class="card-body">

                <h2>Atividade 1</h2>
                <br>
                <h4>Verificar se o número é positivo</h4>
                <br>
                <label for="num">Informe um número </label>
                <input type="textnumber" name="num" size="50" id="num" class="form-control col-3">
                <br><br>

                <button type="reset" class="btn btn-warning float-left">Limpar</button>
                <button type="submit" class="btn btn-primary float-left" style="margin-left: 5px;">Verificar</button>

                <br><br><br>


            </div>
        </form>


            <?php

            $num = $_POST['num'];


            if ($num > 0) {
                $result = "Valor positivo";
            } elseif ($num < 0) {
                $result = "Valor negativo";
            } else {
                $result = "Esse é o Zero, espertinho você....";
            }
            echo    "<h2> $result </h2>";


            ?>
            <br><br>

            <a href="Atividade_2.php">Atividade 2 </a>

</body>

</html>