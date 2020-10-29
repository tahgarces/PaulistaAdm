<?php
require_once 'autoload.php';
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor};
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Service\ControladorDeBonificacoes;

$taynara = new Desenvolvedor('Taynara Garces',
    new Cpf('049.942.173-60'),
    'Assistente de Programação',
    1000
);
$taynara->sobreDeNivel();


$joana = new Gerente('Joana Viana',
    new Cpf('123.456.789-10'),
    'Gerente',
    3000
);

$maria = new Diretor('Joana Viana',
    new Cpf('127.488.789-10'),
    'Diretor',
    6000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($taynara);
$controlador->adicionaBonificacaoDe($joana);
$controlador->adicionaBonificacaoDe($maria);
echo $controlador->recuperaBonificacao();