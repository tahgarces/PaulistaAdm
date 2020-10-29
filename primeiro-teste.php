<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\{Titular, ContaPoupanca};
use Alura\Banco\Modelo\{Cpf, Endereco};



require_once 'autoload.php';

$conta = new ContaPoupanca(new Titular(new Cpf('049.942.173-60'),'Taynara Garces de Lima', new Endereco('Paço do Lumiar','Maiobão', 'Rua 101 Quadra 73', '17')));

echo $conta->recuperaNomeTitular() . PHP_EOL;
echo $conta->recuperaCpfTitular() . PHP_EOL;
$conta->deposita(500);
echo $conta->recuperaSaldo() . PHP_EOL;
$conta->saca(100);
echo $conta->recuperaSaldo() . PHP_EOL;

