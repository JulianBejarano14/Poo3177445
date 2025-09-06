<?php

require_once "carro.php";

// $carro1 = new Carro();

$carro1 = new carro("amarillo","Ferrari","Gallardo",500,200,2);
$carro2 = new carro("Lila","Lamborginni","Alpha",1500,200,2);
$carro3 = new carro("Negro","audi","A5",1200,200,4);
$carro4 = new carro("Rosa","Mercedes","Clase a",500,200,2);

var_dump($carro1);
var_dump($carro2);
var_dump($carro3);
var_dump($carro4);