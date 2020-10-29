<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;


$endereco = new Endereco('Paço do Lumiar','Maiobão','Rua 101 Quadra 73', '17');
$taynara = new Titular(new Cpf('049.942.173-60'), 'Taynara Garces de Lima', $endereco);
$primeiraConta = new Conta($taynara);
//var_dump($primeiraConta);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$maria = new Funcionario('Maria de Jesus', new Cpf('049.942.173-60'), 'Estagiária do Márcio');

echo $maria->recuperaCpf() . PHP_EOL;
echo $maria->recuperaNome() . PHP_EOL;
echo $maria->recuperaCargo() . PHP_EOL;

