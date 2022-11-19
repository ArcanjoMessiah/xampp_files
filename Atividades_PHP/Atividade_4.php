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
        
        <?php
        $sorte = 0;
        

        while ($sorte < 1000){
            
            echo    "<h4> $sorte + </h4>";
            
            $sorte += rand(0, 100) ;
        }    



        ?>
    </div>    

</body>

</html>