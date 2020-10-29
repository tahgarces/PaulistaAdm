<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Diretor(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);
$gerente = new Gerente(
    'Taynara da Silva',
    new CPF('049.456.789-10'),
     5000
);

$autenticador->tentaLogin($diretor, '1234');
$autenticador->tentaLogin($gerente, '1234');