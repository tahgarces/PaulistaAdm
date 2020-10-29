<?php
namespace Alura\Banco\Modelo\Conta;


abstract class Conta
{
    protected Titular $titular;
    protected $saldo;
    public static $numeroDeContas;
   

    public function __construct(Titular $titular)
    {
        $this->titular =  $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }
    public function saca(float $valorASacar) : void
    {
        $tarifaSaque = $valorASacar * $this->percentualtarifa();

        $valorSaque = $valorASacar + $tarifaSaque;
        if($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
            $this->saldo -= $valorSaque;

    }

    public function deposita(float $valorADepositar) : void
    {
        if($valorADepositar < 0){
            echo "Valor precisa ser positivo";
            return;
        }

            $this->saldo += $valorADepositar;

    }

    public function transfere(float $valor, Conta $conta) : void
    {
        if($valor > $this->saldo){
            echo "Saldo Indisponivel";
            return;
        }

        $this->sacar($valor);
        $conta->depositar($valor);

    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }


    public static function recuperaNumeroDeContas() : int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualtarifa() : float;

}