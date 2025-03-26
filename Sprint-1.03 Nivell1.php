<?php
//EXERCICI 1
echo "<h4>" . "Exercici 1" . "</h4>";
$numeros = [1,3,5,7,9];

foreach ($numeros as $numero) {
    echo $numero.PHP_EOL;
}

//EXERCICI 2
echo "<h4>" . "Exercici 2" . "</h4>";

echo count($numeros) . "<br>";
unset($numeros[1]);
$numeros = array_values($numeros);
print_r($numeros);

//EXERCICI 3
echo "<h4>" . "Exercici 3" . "</h4>";

$paraules = ["gat","gos","gorila","iguana","guacamai", "cangur","orangutan","pingui"];
$caracter = "g";

function conteCaracter (array $paraules, string $caracter): bool {
    foreach ($paraules as $paraula) {
        if (strpos($paraula, $caracter) === false) {
        return false;
        }
    }
    return true;
}

echo conteCaracter ($paraules,$caracter);

//EXERCICI 4
echo "<h4>" . "Exercici 4" . "</h4>";

$arrayAssociatiu = array("nom" => "Enric", "edat" => "31", "email" => "esalvador94@gmail.com", "menjar favorit" => "croquetes");
print_r($arrayAssociatiu);

?>