<?php


abstract class Funcionario
{
    protected string $nome;
    protected string $matricula;
    protected float $salario_base;


    public function __construct(string $nome, string $matricula, float $salario_base)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->salario_base = $salario_base;
    }


    public function retornaNome(): string
    {
        return $this->nome;
    }


    public function retornaMatricula(): string
    {
        return $this->matricula;
    }


    public function retornaSalarioBase(): float
    {
        return $this->salario_base;
    }

    abstract public function calculaSalario() : float;



}