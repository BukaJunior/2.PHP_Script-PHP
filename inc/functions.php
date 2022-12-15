<?php

function checkExo($exoName, $age = null) {
    // Liste des exos et les valeurs attendues
    $exoList = [
        'variables' => [
            'variables-a' => ['toto'=>45],
            'variables-b' => ['tata'=> 'Oclock'],
            'variables-c' => ['titi'=> true],
        ],
        'calculs' => [
            'calculs-a' => ['calculA' => 73],
            'calculs-b' => ['calculB' => 37],
            'calculs-c' => ['calculC' => 26],
        ],
        'conditions' => [
            'conditions-a' => ['adulte'=>($age>=18)],
            'conditions-b' => ['estEnfant'=>$age<18, 'estAdolescent'=>$age>9&&$age<20, 'estAdulte'=>($age>=18)],
        ],
        'concatenation' => [
            'concatenation-a' => ['bestVideoGames1' => 'les meilleures portables sont GameBoy, GameGear, PSP.'],
            'concatenation-b' => ['bestVideoGames2' => 'Les meilleures consoles de jeux sont SuperNintendo, MegaDrive, Playstation'],
            'concatenation-c' => ['bestVideoGames3' => 'Les meilleures consoles de jeux sont SuperNintendo, MegaDrive, Playstation, et les meilleures portables sont GameBoy, GameGear, PSP.'],
        ],
        'megamix' => [
            'megamix-a' => ['tarifPlein'=>8.3],
            'megamix-b' => ['tarifReduit'=>6.8],
            'megamix-c' => ['tarifEnfant'=>4.5],
            'megamix-d' => ['test25ans'=>8.3, 'test15ans'=>6.8, 'test10ans'=>4.5, 'test61ans'=>6.8 ],
            'megamix-bonus' => ['test25ans3D'=>9.3, 'test25ansno3D'=>8.3, 'test10ans3D'=>5.5, 'test10ansno3D'=>4.5, 'test61ansno3D'=>6.8, 'test61ans3D'=>7.8 ],
        ],
        'conditions-bonus' => [
            'conditions-bonus' => ['protectionMaternelleEtInfantile'=>$age<7,'creche'=>$age<4,'halteGarderie'=>$age<7,'jardinDEnfants'=>$age<7,'jardinDEveil'=>$age<7,'assistanteMaternelle'=>$age<7,'ecoleMaternelle'=>$age>1&&$age<7,'centreDActionMedicoSocialePrecoce'=>$age<7]
        ]
    ];

    

    if(isset($exoList[$exoName])){
        // Pour chaque sous-exo, on affiche le titre et on teste la réponse
        foreach ($exoList[$exoName] as $name => $answer) {
            displayExo($name);
            
            // Messages d'infos supplémentaires pour certains exos
            if($name == 'megamix-d') {
                echo "Je teste la fonction 'calculTarif' avec les âges 10, 15, 25 et 61 ans. Voici le résultat : ".PHP_EOL;
            }
            else if($name == 'megamix-bonus') {
                echo "Je teste la fonction 'calculTarifAvec3D' avec les âges 10, 25 et 61 ans, avec et sans 3D. Voici le résultat : ".PHP_EOL;
            }

            // Vérification de la réponse
            if(!checkVariableValue($answer)){
                exit;
            }
        }
        displayEnd($name);
    }
}

function checkVariableValue($variableList) {
    $retour = true;
    if (is_array($variableList)) {
        
        foreach ($variableList as $varName=>$expectedValue) {
            if (!array_key_exists($varName, $GLOBALS)) {
                echo 'A toi de jouer...'.PHP_EOL;
                $retour = $retour && false;
            }
            else {
                $var = $GLOBALS[$varName];
                if ($var === $expectedValue) {
                    if (is_array($var)) {
                        echo PHP_EOL.'$'.$varName.'=> OK'.PHP_EOL.PHP_EOL;
                    }
                    else {
                        $var = stringifyValue($var);
                        echo PHP_EOL.'$'.$varName.' = '. $var;
                        echo ' ==> OK'.PHP_EOL.PHP_EOL;
                    }
                }
                else {
                    $var = stringifyValue($var);
                    echo  PHP_EOL.'$'.$varName." = ".$var." ==> La valeur n'est pas bonne !".PHP_EOL;
                    
                    $retour = $retour && false;
                }
            }
        }
    }
    return $retour;
}

function displayExo($str) {
    echo PHP_EOL.'----------------------------------------'.PHP_EOL;
    echo '|'.str_pad(' EXO '.$str, 38, ' ', STR_PAD_BOTH).'|'.PHP_EOL;
    echo '----------------------------------------'.PHP_EOL.PHP_EOL;
}

function displayEnd() {
        echo PHP_EOL.'----------------------------------------'.PHP_EOL;
        echo '|'.str_pad(' EXO TERMINE ! BRAVO !!! ', 38, ' ', STR_PAD_BOTH).'|'.PHP_EOL;
        echo '----------------------------------------'.PHP_EOL.PHP_EOL;
}

// Transforme les valeurs booléennes/nulles en string afin de les afficher proprement dans le terminal.
function stringifyValue($value) {
    if($value === false) {
        $value = "false";
    } elseif($value === true) {
        $value = "true";
    } elseif($value === null) {
        $value = "null";
    }
    
    return $value;
}


// Création d'une fonction vide pour éviter les erreurs dans les autres exos que le 5
if(!function_exists('calculTarif')){
    function calculTarif(){
        return false;
    }
}

if(!function_exists('calculTarifAvec3D')){
    function calculTarifAvec3D(){
        return false;
    }
}


// Génération des valeurs pour l'exo 5
$test25ans = calculTarif(25);
$test15ans = calculTarif(15);
$test10ans = calculTarif(10);
$test61ans = calculTarif(61);

$test25ans3D = calculTarifAvec3D(25, true);
$test25ansno3D = calculTarifAvec3D(25, false);
$test10ans3D = calculTarifAvec3D(10, true);
$test10ansno3D = calculTarifAvec3D(10, false);
$test61ansno3D = calculTarifAvec3D(61, false);
$test61ans3D = calculTarifAvec3D(61, true);