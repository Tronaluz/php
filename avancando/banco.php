<?php

function exibeMensagem ($mensagem) {
    echo $mensagem . PHP_EOL;
}

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


if (500 > $contasCorrentes['123.666.789-10']['saldo']) {
    exibeMensagem (mensagem:"Você não pode sacar");
} else {
    $contasCorrentes['123.666.789-10']['saldo'] -= 500;
}

if (500 > $contasCorrentes['123.456.711-10']['saldo']) {
    exibeMensagem (mensagem:"Você não pode sacar");
} else { $contasCorrentes['123.456.711-10']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem( $cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
