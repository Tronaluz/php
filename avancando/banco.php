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
    'saldo' => 2000,
];

if (500 > $contasCorrentes['123.666.789-10']['saldo']) {
    echo "Você não pode sacar";
} else {
    $contasCorrentes['123.666.789-10']['saldo'] -= 500;
}

if (500 > $contasCorrentes['123.456.711-10']['saldo']) {
    echo "Você não pode sacar este valor" . PHP_EOL;
} else { $contasCorrentes['123.456.711-10']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}
