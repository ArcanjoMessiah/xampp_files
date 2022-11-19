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

                <h2>Atividade </h2>
                <br>
                <h4>Operação</h4>
                <br>
                <label for="num1">Informe os números </label>
                <input type="textnumber" name="num1" size="50" id="num1" class="form-control col-3">
                <br>
                <label for="num2"> </label>
                <input type="textnumber" name="num2" size="50" id="num2" class="form-control col-3">
                <br><br>

                <label for="operador"> Selecione a operação: </label>


                <br><br>
                <div class="custom-control custom-radio custom-control-inline" style="margin-top:2px; ">

                    <input type="radio" class="custom-control-input" id="soma" name="operador" value="1">
                    <label class="custom-control-label" for="soma">Soma</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="subtracao" name="operador" value="2">
                    <label class="custom-control-label" for="subtracao">Subtração</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="divisao" name="operador" value="3">
                    <label class="custom-control-label" for="divisao">Divisao</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="multiplicacao" name="operador" value="4">
                    <label class="custom-control-label" for="multiplicacao">Multiplicação</label>
                </div>

                <br><br>

                <button type="reset" class="btn btn-warning float-left">Limpar</button>
                <button type="submit" class="btn btn-primary float-left" style="margin-left: 5px;">Calcular</button>

                <br><br><br>


            </div>
        </form>


        <?php      
        


            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operador = $_POST['operador'];
            



            if ($operador == "1") {
                $result = $num1 + $num2;
            } elseif ($operador == "2") {
                $result = $num1 - $num2;
            } elseif ($operador == "3") {
                $result = $num1 / $num2;
            } elseif ($operador == "4") {
                $result = $num1 * $num2;
            }
        



        echo    "<h2> $result </h2>";


        ?>
    </body>

</html>