<?php

require_once 'funcoes.php';

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

$contasCorrentes['123.666.789-10'] = sacar($contasCorrentes['123.666.789-10'], valorASacar:500);

$contasCorrentes['123.456.711-10'] = sacar($contasCorrentes['123.456.711-10'], valorASacar:200);

$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], valorADepositar:900);

titularComLetraMaiusculas($contasCorrentes['123.456.789-10']);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        mensagem:"$cpf  {$conta['titular']}  {$conta['saldo']}"
    );
}
