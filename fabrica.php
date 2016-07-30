<?php

require_once "Carro.php";
require_once './Motor/Motor.php';
require_once './Motor/Motor20.php';

$motor = new Motor20();
$motor ->ligar(true);
$motor ->acelerar(10);
$motor ->alterarRebinboca('kjfd');
 
        
$carro  = new Carro($motor);
$carro ->abastecer(10);


var_dump($carro);