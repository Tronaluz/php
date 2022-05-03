<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000,
    ],
    '123.666.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000,
    ],
    '123.456.711-10' => [
        'titular' => 'Alberto',
        'saldo' => 300,
    ],
];

 $contasCorrentes['173.496.711-90'] = [
     'titular' => 'Claudia',
     'saldo' => 2000
 ];


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
