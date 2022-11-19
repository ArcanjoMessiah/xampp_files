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

    <div class="container ">
        <div class="card ">
            <div class="card-body">

                <?php
                $alunos = ["Guilherme", "Anashelly", "Estela", "Douglas", "Paulo Vitor", "Gabriele", "David", "João Vitor"];

                echo "<table border=2>";
                echo "<tr>";
                echo "<th>NOME</th>";
                echo "</tr>";


                for ($i = 0; $i < 8; $i++) {


                    echo "<tr>";
                    echo "<td>" . $alunos[$i] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";

                ?>
            </div>
        </div>
    </div>

</body>

</html>