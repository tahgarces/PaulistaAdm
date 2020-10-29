<?php

require_once 'src/Abstrato/Funcionario.php';
require_once 'src/Abstrato/Assistente.php';
require_once 'src/Abstrato/Gerente.php';
require_once 'src/Abstrato/Vendedor.php';

$assistente = new Assistente('Taynara Garces de Lima', '123456', 250.0);
$gerente = new Gerente('Erick Augusto de Lima', '123456', 250.0);
$vendedor = new Vendedor('Pipoca Garces', '253689', 250.0, 0.50);


echo $assistente->retornaNome() . PHP_EOL;
echo $assistente->calculaSalario() . PHP_EOL;

echo $gerente->retornaNome() . PHP_EOL;
echo $gerente->calculaSalario() . PHP_EOL;

echo $vendedor->retornaNome() . PHP_EOL;
echo $vendedor->calculaSalario() . PHP_EOL;
