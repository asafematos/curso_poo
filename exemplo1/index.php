<?php

require_once "Pessoa.php";

$pessoa1 = new pessoa("Gabriela ", 13);

$pessoa2 = new pessoa("Luiz ", 14);

echo $pessoa2->correr(20);