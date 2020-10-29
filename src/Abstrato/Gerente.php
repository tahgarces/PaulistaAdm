<?php





class Gerente extends Funcionario
{
    public function calculaSalario(): float
    {
        return $this->salario_base * 2;
    }
}