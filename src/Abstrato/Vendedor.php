<?php


class Vendedor extends Funcionario
{
    private float $comissao;


    public function __construct(string $nome, string $matricula, float $salario_base, float $comissao)
    {
        parent::__construct($nome, $matricula, $salario_base);
        $this->comissao = $comissao;
    }

    public function retornaComissao() : float
    {
        return $this->comissao/100;
    }

    public function calculaSalario(): float
    {
        return $this->salario_base + ($this->salario_base * $this->retornaComissao());
    }

}