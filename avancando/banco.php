<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 100,
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

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem(mensagem:"Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar) : array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem(mensagem:"Depositos precisam ser positivos");
    }

    return $conta;
}

$contasCorrentes['123.666.789-10'] = sacar($contasCorrentes['123.666.789-10'], valorASacar:500);

$contasCorrentes['123.456.711-10'] = sacar($contasCorrentes['123.456.711-10'], valorASacar:200);

$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], valorADepositar:900);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
