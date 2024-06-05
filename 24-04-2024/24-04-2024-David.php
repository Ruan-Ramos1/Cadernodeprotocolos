<html>
    <head>
        <title>Primeiro código em pHp</title>
</head>
<body>
    <?php
    $num1 = 10; $num2 = 20;

    if($num1 <$num2 ){
        echo "O número ".$num1. " é menor que ".$num2;

    }else{
        echo "O número ".$num2. " é menor que ". $num1;
    }
    
    echo "<br>";
    echo "Imprime números inteiros de 0 a 20 ";
    for($i = 0; $i <= 20; $i++){
        echo "Número ".$i;
        echo "<br>";
    }
    ?>
    </body>
</html>
