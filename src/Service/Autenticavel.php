<?php


namespace Alura\Banco\Service;


interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}