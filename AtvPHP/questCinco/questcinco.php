<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
</head>
<body>
<h1>Questão Cinco</h1>
    <?php
    echo ("5)Faça uma função que retorne um array de tamanho aleatório, contendo números aleatórios.");
    echo "<br/>";
    $aleatorio=aleatorio();
    for($i=0;$i<count($aleatorio);$i++){
        echo $aleatorio[$i]." ";
    }
    function aleatorio(){
        for($i=0;$i<rand(1,100);$i++){
            $array[]=rand(1,100);
        }
        return $array;
    }
    ?>
</body>
</html>