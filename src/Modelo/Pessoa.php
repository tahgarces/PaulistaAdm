<?php

namespace Alura\Banco\Modelo;
class Pessoa
{
    protected string $nome;
    protected Cpf $cpf;


    public function __construct(string $nome, Cpf $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCPF(): string
    {
        $this->cpf->recuperaNumero();
    }

    protected function validaNome(string $nome)
    {
        if(strlen($nomeTitular) < 5){
            echo "nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}