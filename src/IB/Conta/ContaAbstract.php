<?php

namespace IB\Conta;

use IB\Conta\Util\ProcessoTrait;

abstract class ContaAbstract
{
    use ProcessoTrait;

    protected $saldo;

    public final function depositar($valor)
    {
        $this->iniciaProcesso();
        $this->saldo += $this->calculoDeposito($valor);
        $this->FinalizaProcesso();
        return true;
    }

    public function sacar($valor)
    {
        $this->iniciaProcesso();
        if($this->saldo >= $valor){
            $this->saldo -= $valor;
            $this->FinalizaProcesso();
            return true;
        }

        $this->FinalizaProcesso();
        return false;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    /*significa basicamente, se tu tem a minha class vai ter me levar junto ->*/ abstract public function calculoDeposito();
}