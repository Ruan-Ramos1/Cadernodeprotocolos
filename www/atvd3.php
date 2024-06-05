atvd3

<?php

$countImpares = 0;

for ($i = 0; $i <= 100; $i++) {
    
    if ($i % 2 != 0) {
        echo $i . "<br>";
       
        $countImpares++;
    }
}


echo "Quantidade de números ímpares: " . $countImpares;
?>
