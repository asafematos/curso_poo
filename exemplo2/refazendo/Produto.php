<?php

class Produto
{
    private $nome;
    private $descricao;
    private $valor;
    private $estoque;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }
    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;
    }

    private function baixaEstoque()
    {
        $this->estoque = $this->estoque - 1;
    }
}