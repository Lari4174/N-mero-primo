<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $numero;
    $divisor;
    $contador;
    //números primos só aceitam dois restos iguais a 0
    for ($numero; $numero<100; $numero++){
        $divisor = 1; //não existe divisão por 0
        $contador = 0;
        //setar os valores iniciais para que seja feito o processo inteiro com cada número
        for($divisor; $divisor<=$numero;$divisor++){
            if($numero%$divisor){
                $contador++;
            }
        }
        if($contador == 2){
            echo " $numero ";
        }
    }    
?>
</body>
</html>