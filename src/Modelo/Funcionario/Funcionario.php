<?php

namespace Alura\Banco\Modelo\Funcionario;



use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{

    private string $cargo;
    private float $salario;


    public function __construct(string $nome, Cpf $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }


    public function recuperaNome(): string
    {
        return $this->nome;
    }


    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }


    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome($nome)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if($valorAumento < 0){
            echo "Aumento deve ser positivo";
            return;
        }
        $this->salario += $valorAumento;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }



}