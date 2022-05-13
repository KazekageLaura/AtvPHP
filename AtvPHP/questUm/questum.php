<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
</head>
<body>
<h1>Questão Um</h1>
    <?php
    echo ("1) Faça um script em PHP, capaz de gerar um array contendo os números pares encontrados no intervalo de 0 a 10.");
    echo "<br/>";
    $pares=[];
    for($pares=0; $pares<10; $pares++){
        if($pares % 2 == 0)
        echo " ".$pares;
    }
    ?>
</body>
</html>