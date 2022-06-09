<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$lucas = new Titular(new CPF('123.456.789-10', 'Lucas Eduardo de Oliveira'));
$primeiraConta = new Conta($lucas);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() .PHP_EOL;
echo $primeiraConta->recuperaCpfTitular().PHP_EOL;
echo $primeiraConta->recuperaSaldo().PHP_EOL;

$patricia = new Titular(new CPF('123.555.789-10', 'Lucas santos de Oliveira'));
$segundaConta = new Conta($patricia)

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
