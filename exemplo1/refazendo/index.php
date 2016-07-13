<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$x = new IB\Conta\Types\ContaType();
$x->depositar(10);
echo $x->getSaldo();  

//require_once "Pessoa.php";
//
//$pessoa1 = new Pessoa("Asafe", 15);
//
//$pessoa2 = new Pessoa("Gabi", 13);
//
//echo $pessoa2->correr(20);