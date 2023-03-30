<?php

$tiendita_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24
);

foreach ($tiendita_de_cafes as $cafe => $price)
    echo "El café $cafe cuesta $$price USD \n";


echo "\n";

$courses = [
    'frontend' => 'JS', 
    'framework' => 'laravel',
    'backend' => 'php'
];

foreach ($courses as $key => $var) {
    echo "<h4> $key: $var <br><h4>";
}

function upper($course, $key)
{
    echo ucfirst($course) . "=> $key <br>";
}

array_walk($courses, 'upper');

/*
array_walk(‘key’, $array); → Nos ayuda a aplicar una función que le pasemos a cada miembro del array, es muy parecido a .maps() o .each() en JS o Ruby.
array_key_exists(‘key’, $array); → Para saber si un key existe.
in_array(‘valor’, $array); → Nos ayuda a buscar si existe un valor en el Array.
array_keys($array); → Nos imprime todos los keys en pantalla.
array_values($array); → Nos imprime todos los valores en pantalla.
*/