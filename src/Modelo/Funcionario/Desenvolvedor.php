<?php


namespace Alura\Banco\Modelo\Funcionario;


class Desenvolvedor extends Funcionario
{
    public function sobreDeNivel()
    {
         $this->recebeAumento($this->recuperaSalario() * 0.75);
    }
}