<?php


// ---- MEGAMIX des notions du jour ----
// fiche récap : https://kourou.oclock.io/ressources/fiches-recap/

/*
On veut calculer le tarif d'une place de cinéma

TARIF PLEIN : 8,30 €
TARIF REDUIT : 6,80 € (pour +60ans et -16ans)
TARIF ENFANT : 4,50 € (pour -14ans)

SUPPLEMENT 3D : +1 €

*/

//* a) Créer une variable nommée "tarifPlein" avec pour valeur 8,3

// TON CODE ICI
$tarifPlein = 8.3;
// FIN DE TON CODE

//* b) Créer une variable nommée "tarifReduit" avec pour valeur 6,8

// TON CODE ICI
$tarifReduit = 6.8;
// FIN DE TON CODE


//* c) Créer une variable nommée "tarifEnfant" avec pour valeur 4,5

// TON CODE ICI
$tarifEnfant = 4.5;
// FIN DE TON CODE


/*
* d)  
*    - Ecrire les conditions qui vont permettre de connaitre le tarif selon l'âge du client (variable $age)
*    - stocker le tarif dans la variable $montant
*    - oui il y a du code bizarre qu'on n'a pas vu, mais c'est quelque chose qu'on verra plus tard
*/

function calculTarif($age) {
    global $tarifEnfant, $tarifReduit, $tarifPlein;

    $montant = 0;
    // TON CODE ICI
    // On peut utiliser ici les variables $tarifEnfant, $tarifReduit, $tarifPlein, $montant et $age
    if ($age <=14) {
        $montant = $tarifEnfant;
    } else if ($age >= 60 || $age <=16) {
        $montant = $tarifReduit;
    }
    else {
        $montant = $tarifPlein;
    }
    // FIN DE TON CODE
    return $montant;
}


/* 
* BONUS
*    - récupérer le code de d)
*    - le placer dans le code du bonus ci-dessous (copier/coller)
*    - ajouter la prise en charge du supplément 3D grâce à la variable $is3D qui serait "vrai" si film en 3D ou "faux" si film en 2D
*/

function calculTarifAvec3D($age, $is3D) {
    global $tarifEnfant, $tarifReduit, $tarifPlein;

    $montant = 0;
    // TON CODE ICI
    // On peut utiliser ici les variables $tarifEnfant, $tarifReduit, $tarifPlein, $montant, $age et $is3D
    if ($age <=14) {
        $montant = $tarifEnfant;
    } else if ($age >= 60 || $age <=16) {
        $montant = $tarifReduit;
    }
    else {
        $montant = $tarifPlein;
    }

    if ($is3D) {
        $montant ++;
    } else {
        $montant;
    }

    // FIN DE TON CODE
    return $montant;
}



/*
MEGA BONUS (de la mort, attention, ça pique ^^)
    - récupérer l'âge du client en argument de la ligne de commande (http://php.net/manual/en/reserved.variables.argv.php)
    - stocker l'âge dans la variable $ageArgv
    - et vérifier visuellement que le montant correspond
*/

// TON CODE ICI

// FIN DE TON CODE


// Pas de tests automatiques ici, à toi de vérifier avec un var_dump ;)


// Code permettant de tester tes réponses, pas touche ! 
require dirname(__DIR__).'/inc/functions.php';
checkExo('megamix');
