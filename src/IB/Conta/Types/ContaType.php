<?php

namespace IB\Conta\Types;

use IB\Conta\ContaAbstract as ContaAbstrata;

class Conta extends ContaAbstrata
{
    protected function calculoDeposito($valor)
    {
        return $valor += 10;
    }
}