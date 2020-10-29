<?php
require_once 'autoload.php';
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor, EditorVideo};
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Service\ControladorDeBonificacoes;

$taynara = new Desenvolvedor('Taynara Garces',
    new Cpf('049.942.173-60'),
    1000
);
$taynara->sobreDeNivel();


$joana = new Gerente('Joana Viana',
    new Cpf('123.456.789-10'),
    3000
);

$maria = new Diretor('Joana Viana',
    new Cpf('127.488.789-10'),
    6000
);

$clara = new EditorVideo('Clara Viana',
    new Cpf('127.488.789-10'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($clara);
$controlador->adicionaBonificacaoDe($taynara);
$controlador->adicionaBonificacaoDe($joana);
$controlador->adicionaBonificacaoDe($maria);
echo $controlador->recuperaBonificacao();