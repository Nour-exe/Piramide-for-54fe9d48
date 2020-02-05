<?php
echo ("hoeveel stapels wil je hebben") . PHP_EOL;
$stapels = readline("");

for($i = 1; $i <= $stapels; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo "*";
            if($j < $i) {
               echo " ";
            }
        }
        echo PHP_EOL;
    }