<?php

for($i = 1; $i <= 15; $i++){
    if($i == 13){
        continue;               //faz o i == 13 pular para o proximo loop
    }
    echo "#$i" . PHP_EOL;
}
