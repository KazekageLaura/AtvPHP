<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
</head>
<body>
<h1>Questão Tres</h1>
    <?php
    echo ("3)Criar uma função que receba o intervalo entre dois números, retornando um array com os números impares divisíveis por 7, encontrados no intervalo informado.");
    echo "<br/>";
    function impares($numUm,$numDois){
        $impar=[];
        for($i=0; $i<10; $i++){
            if($i % 2 == 1 && $i%7 == 0)
            echo " ".$i;
    }
    return $impar;
    }
    impares(5,10);
    ?>
</body>
</html>