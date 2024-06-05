<?php

$count = 0;

for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
        $count++;
    }
}
echo " <br> A quantidade de números ímpares é: " . $count;

?>
