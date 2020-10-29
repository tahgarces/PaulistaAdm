<?php


class Assistente extends Funcionario
{
   public function calculaSalario(): float
    {
        return $this->salario_base;
    }
}