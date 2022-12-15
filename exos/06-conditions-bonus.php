<?php

// ---- Conditions - BONUS ----

// fiche récap : https://kourou.oclock.io/ressources/fiche-recap/les-conditions/

// On détermine un nombre aléatoire comme âge d'un enfant entre 0 et 6 ans, pour l'exécution de ce script
// A chaque exécution, $age devrait avoir une nouvelle valeur
$age = mt_rand(0, 6);

echo PHP_EOL.'|---- $age = '.$age.' ----|'.PHP_EOL;

/* -----------------------------------
Selon l'âge de l'enfant, on veut savoir quel(s) service(s) peuvent s'occuper de lui.

Voici la liste des services :
    - protection maternelle et infantile : 0 – 6 ans
    - crèche : 0 – 3 ans
    - halte garderie, jardin d'enfants, jardins d'éveil et autres structures passerelles : 0 – 6 ans
    - assistante maternelle : 0 – 6 ans
    - école maternelle : 2 – 6 ans
    - centres d’action médico-sociale précoce : 0 – 6 ans

Remplir les $variables suivantes de type booléen, selon l'âge de l'enfant

! Attention !
Pense à exécuter plusieurs fois ce script (au moins 10 fois) afin que les âges aléatoires couvrent tous les cas de figure (0 à 6 ans)

*/
$protectionMaternelleEtInfantile = null; // null = aucune valeur d'aucun type
$creche = null;
$halteGarderie = null;
$jardinDEnfants = null;
$jardinDEveil = null;
$assistanteMaternelle = null;
$ecoleMaternelle = null;
$centreDActionMedicoSocialePrecoce = null; // aka le bien connu CAMSP !

// TON CODE ICI


// FIN DE TON CODE


// Code permettant de tester tes réponses, pas touche ! 
require dirname(__DIR__).'/inc/functions.php';
checkExo('conditions-bonus', $age);
