<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
</head>
<body>
<h1>Questão Quatro</h1>
    <?php
    echo ("4)Criar uma função que retorna a data atual por extenso. Ex: 12 de Maio de 2020.");
    echo "<br/>";
    function dataExtenso() {

        $data = date('D');
        $mes = date('M');
        $dia = date('d');
        $ano = date('Y');
    
        $semana = array(
            'Sun' => 'Domingo',
            'Mon' => 'Segunda-Feira',
            'Tue' => 'Terca-Feira',
            'Wed' => 'Quarta-Feira',
            'Thu' => 'Quinta-Feira',
            'Fri' => 'Sexta-Feira',
            'Sat' => 'Sábado'
        );
    
        $mes_extenso = array(
            'Jan' => 'Janeiro',
            'Feb' => 'Fevereiro',
            'Mar' => 'Marco',
            'Apr' => 'Abril',
            'May' => 'Maio',
            'Jun' => 'Junho',
            'Jul' => 'Julho',
            'Aug' => 'Agosto',
            'Nov' => 'Novembro',
            'Sep' => 'Setembro',
            'Oct' => 'Outubro',
            'Dec' => 'Dezembro'
        );

    $data= $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}";

    return $data;	
        
    }	
    echo dataExtenso();
    ?>
</body>
</html>