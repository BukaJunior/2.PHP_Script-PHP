<?php


// ---- CONCATÉNATION ----
// fiche récap : https://kourou.oclock.io/ressources/fiche-recap/la-syntaxe-php/#concat%c3%a9nation
//! Conseil : attention aux espaces, aux virgules (,) et aux points (.) !

//* a) En utilisant les variables suivantes, créer une 3ème variable "bestVideoGames1" qui contiendra la chaîne de caractères suivantes :
//*    les meilleures portables sont GameBoy, GameGear, PSP.


$videoGamesPortable = 'GameBoy, GameGear, PSP';
$videoGames = 'SuperNintendo, MegaDrive, Playstation';


// TON CODE ICI
$bestVideoGames1 = "les meilleures portables sont $videoGamesPortable.";
echo "$bestVideoGames1";
// FIN DE TON CODE


//* b) En utilisant les variables définies, créer une 4ème variable "bestVideoGames2" qui contiendra la chaîne de caractères suivantes :
//*     Les meilleures consoles de jeux sont SuperNintendo, MegaDrive, Playstation

// TON CODE ICI
$bestVideoGames2 = "Les meilleures consoles de jeux sont $videoGames";
echo "$bestVideoGames2";

// FIN DE TON CODE


//* c) En utilisant les variables que tu as créées dans a) et b), créer une variable "$bestVideoGames3", pour obtenir la chaîne de caractères suivante :
//*    Les meilleures consoles de jeux sont SuperNintendo, MegaDrive, Playstation, et les meilleures portables sont GameBoy, GameGear, PSP.

// TON CODE ICI
$bestVideoGames3 = "$bestVideoGames2, et $bestVideoGames1";
echo "$bestVideoGames3";
// FIN DE TON CODE


// Code permettant de tester tes réponses, pas touche ! 
require dirname(__DIR__).'/inc/functions.php';
checkExo('concatenation');