<?php

$idadelist = [21, 23, 19, 25, 30, 41, 18];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadelist;

$idadelist[] = 20;

foreach ($idadelist as $idade) {
    echo $idade . PHP_EOL;
}