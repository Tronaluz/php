<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patricia',
    'Nicos',
    'Kilderson',
    'Daiane',
];

$alunos2022 = [...$alunos2021, 'Lucas Eduardo', ...$novosAlunos];
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');
$alunos2022[] = 'Luiz';

array_unshift($alunos2022, 'Stephane', 'Rafaela');

echo array_shift($alunos2022) . PHP_EOL;

echo array_pop($alunos2022) . PHP_EOL;

var_dump($alunos2022);