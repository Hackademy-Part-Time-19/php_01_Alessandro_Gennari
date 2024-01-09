<?php

/* Traccia 4
Create 4 variabili: $x = 10; $y = 20; $z = "20"; $w = 10; ed utilizzando var_dump() per
visualizzare l'esito dei seguenti confronti:
$x < $y [esempio: var_dump($x < $y); ]
$x <= $w
$y == $z
$y === $z
$y !== $z
$y != $z
cambiando anche a piacere le variabili per verificare il funzionamento dei diversi
operatori di confronto */

$x = 10;
$y = 20;
$z = "20";
$w = 10;

var_dump($x < $y);
var_dump($x + $y);
var_dump($x - $y);
var_dump($x * $y);
var_dump($x + $z);
var_dump($x % $y);
var_dump($x <= $w);
var_dump($y == $z);
var_dump($y === $z);
var_dump($y !== $z);
var_dump($y != $z);
