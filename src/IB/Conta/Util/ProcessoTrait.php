<?php

namespace IB\Conta\Util;

trait ProcessoTrait // O trait é usado quando tem uma informação que é muito repitida em varias paginas e para simplificar o codigo vc poe no trait. Vc importa os dados do trait para a classe usando o use. //
{
    public function iniciaProcesso()
    {
        echo "------ Iniciando Processo ---------";
    }

    public function finalizaProcesso()
    {
        echo "------ Processo Finalizado --------";
    }
}