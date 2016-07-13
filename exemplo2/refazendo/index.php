<?php

require_once "Produto.php";
require_once "Tenis.php";

$produto = new Produto();
$produto->setNome("Tenis All Star");
$produto->setDescricao("All Star é topizera");
$produto->setEstoque(10);
$produto->getValor(1000);
