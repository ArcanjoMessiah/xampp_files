<?php


include_once 'webcomplementes.html';

$lata = 18;
$galao = 3.6;

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

                <h2>Atividade 3</h2>
                <br>
                <h4>Operação</h4>
                <br>
                <label for="num1">A área a ser pintada </label>
                <input type="textnumber" name="area" size="50" placeholder="10m" id="num1" class="form-control col-3"><p>metros quadrados</p>
                                
                <br><br>

                <button type="reset" class="btn btn-warning float-left">Limpar</button>
                <button type="submit" class="btn btn-primary float-left" style="margin-left: 5px;">Calcular</button>

                <br><br><br>


            </div>
        </form>


        <?php   


        $area = $_POST['area'];
        
        $area= ($area*0.10)+$area;

            $result1 = ($area / 6) / $galao;

            $valor1 = ceil($result1)*60;

            echo "<h3> Somente com latas de 3,6 litros serão precisas ".ceil($result1). " Latas no valor de R$ ".$valor1. "</h3>";

       
            $result2 = ($area / 6) / $lata;

            $valor2 = ceil($result2) * 110;

        echo "<h3> Somente com latas de 18 litros serão precisas " . ceil($result2) . " Latas no valor de R$ " . $valor2 . "</h3>";

            $result = ($area / 6) ;
            $resto = 5;
            $result3 = floor($result) / $lata ;

            $valor3 = floor($result3) * 110;
            $valor4 = ceil($resto) * 60;
            $total = $valor3+$valor4;

        echo "<h3> Serão precisas latas de 18 litros serão precisas " . floor($result3) . " Latas no valor de R$ " . $valor3 . "<br> e mais " .ceil($resto). " no valor de " .$valor4 . "</h3> <br>";
        echo "<h3> O total será de R$ " . $total . "</h3>"



        ?>

    </body>

</html>