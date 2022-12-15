<?php


// ---- CALCULS ----
// fiche récap : https://kourou.oclock.io/ressources/fiche-recap/la-syntaxe-php/#arithm%c3%a9tique

/* -----------------------
|  LE COMPTE EST BON !!!  |
-------------------------*/


//* a) En utilisant uniquement les variables suivantes, créer une variable "calculA" ayant la valeur CALCULEE suivante : 73

$a = 10;
$b = 5;
$c = 7;
$d = 2;

// TON CODE ICI
$calculA = ($a * $c) + ($b - $d);
// FIN DE TON CODE


//* b) En utilisant uniquement les variables suivantes, créer une variable "calculB" ayant la valeur CALCULEE suivante : 37

$a = 5;
$b = 2;
$c = 3;
$d = 4;

// TON CODE ICI
$calculB = ($a * $d) + ($a * $c) + $b;
// FIN DE TON CODE


//* c) En utilisant uniquement les variables suivantes, créer une variable "calculC" ayant la valeur CALCULEE suivante : 26

$a = 5;
$b = 8;
$c = 3;
$d = 9;

// TON CODE ICI
$calculC = $b + $d + $d;
// FIN DE TON CODE



// Code permettant de tester tes réponses, pas touche ! 
require dirname(__DIR__).'/inc/functions.php';
checkExo('calculs');