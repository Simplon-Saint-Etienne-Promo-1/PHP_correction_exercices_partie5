<?php

// Exercice 1
$months = array('janvier','février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');

//Exercice 2
echo $months[2] . "<br>";

// Exercice 3
echo $months[5] . "<br>";

// Exercice 4
$months[7] = 'août';

// Exercice 5
$departements = array(
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-calais',
    80 => 'Somme'
);

// Exercice 6
echo $departements[59] . "<br>";

// Exercice 7
$departements[51] = 'Marne';

// Exercice 8 
for($i = 0; $i < count($month); $i++) {
    echo $months[$i] . "<br>";
}

// Exercice 8 V2
foreach ($months as $month) {
    echo $month . "<br>"; 
}

// Exercice 9 et 10
foreach ($departements as $key => $value) {
    echo "Département: " . $value . " Numéro: " . $key . "<br>";
}