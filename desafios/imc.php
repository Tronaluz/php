<?php

$altura = 1.83;
$peso = 88;
$imc = $peso / $altura * 2;

echo "seu Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18.5) {
    echo "abaixo";
} else if ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado";
