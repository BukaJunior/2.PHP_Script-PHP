<?php


// ---- CONDITIONS ----

// fiche récap : https://kourou.oclock.io/ressources/fiche-recap/les-conditions/

/* **************************************************** */

// On détermine un nombre aléatoire comme âge pour l'exécution de ce script
// A chaque exécution, $age devrait avoir une nouvelle valeur
$age = mt_rand(1,40);

echo PHP_EOL.'|---- $age = '.$age.' ----|'.PHP_EOL;

/* **************************************************** */

//* a) On souhaite savoir si une personne est adulte ou non $age contient un age aléatoire compris en 1 et 40.
//* $adulte est la variable à remplir, de type booléen (vrai/faux)

$adulte = null; // null = aucune valeur d'aucun type

// TON CODE ICI
if ($age >= 18) {
    $adulte = true;
} else {
    $adulte = false;
}
// FIN DE TON CODE


//* b) Selon Wikipédia : "La Convention des droits de l'enfant des Nations Unies définit l'enfance comme la période allant de la naissance à 18 ans et l'adolescence comme la période allant de 10 à 19 ans"
//* En partant des informations de cette phrase, et à partir de la variable $age, remplir les valeurs (vrai/faux) dans les variables $estEnfant, $estAdolescent, $estAdulte.
//* Exécuter à plusieurs reprises le script afin de tester plusieurs "tranches" d'âge aléatoirement

$estEnfant = null; // null = aucune valeur d'aucun type
$estAdolescent = null;
$estAdulte = null;

// TON CODE ICI
if ($age >= 18) {
    $estAdulte = true;
    $estEnfant = false;
} else {
    $estAdulte = false;
    $estEnfant = true;
}

if ($age >= 10 && $age <= 19) {
    $estAdolescent = true;
} else {
    $estAdolescent = false;
}
// FIN DE TON CODE


/* UN BONUS ? => direction le fichier 06-conditions-bonus.php ! */

// Code permettant de tester tes réponses, pas touche ! 
require dirname(__DIR__).'/inc/functions.php';
checkExo('conditions', $age);
