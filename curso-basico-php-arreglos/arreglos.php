<?php

$courses = [
    'backend' =>'PHP', 
    'frontend' => 'Javascript', 
    'framework' => 'Laravel'
];
echo "<pre>";
var_dump(array_flip($courses));
var_dump(array_slice($courses, 1));
var_dump(array_chunk($courses, 1));

$course = array_shift($courses);
$data = array_pop($courses);
print_r($data);

array_unshift($courses, "vuejs", "css");
print_r($courses);
array_push($courses, "vuejs");


echo "<h1>Ejemplo de Comparación</h1>";
echo "---------------";
echo "<br>";
$coursera = ['php', 'javascript'];
$wishes = ['php', 'javascript', 'laravel', 'vuejs'];

#array_diff();
//Calcula la diferencia entre arrays
echo "<pre>";
var_dump(array_diff($wishes, $coursera));
//Por ejemplo, tengo dos cursos(PHP y JS) pero quisiera saber que otros cursos le gustaría a mis estudiantes
//Con esto comparo los array y descarto los cursos que yo ya tengo.

echo "<br>";
$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];

var_dump(array_diff($arrayA, $arrayB));
//Evalua depende al orden que coloquemos
var_dump(array_diff($arrayB, $arrayA));

#array_diff_assoc()
//Calcula la diferencia entre arrays con un chequeo adicional de índices


echo "<h1>Unión</h1>";
echo "---------------";
echo "<br>";

$frontent = [
	'frontend' => 'javascript'
];

$backend = [
	'backend' => 'php', 
	'framework' => 'laravel'
];

echo "<pre>";
var_dump($frontent + $backend);

#array_merge()
//Combina dos o más arrays
$frontent1 = ['javascript'];
$backend1 = ['php', 'laravel'];

echo "<pre>";
var_dump(array_merge($frontent1, $backend1));

echo "<br>";
//Ejemplo con los mismo key
#array_merge_recursive
//Une dos o más arrays recursivamente
$frontent3 = [
	'a' => 'javascript'
];

$backend3 = [
	'a' => 'php', 
	'b' => 'laravel'
];

echo "<pre>";
var_dump(array_merge_recursive($frontent3, $backend3));
//Esto crea un array "a" donde mete unos elementos y otro "b" que mete los demás
//resultado
/* 
array(2) {
  ["a"]=>
  array(2) {
    [0]=>
    string(10) "javascript"
    [1]=>
    string(3) "php"
  }
  ["b"]=>
  string(7) "laravel"
}
*/

echo "<br>";
//Ejemplo con los mismo key
#array_combine
//Crea un nuevo array, usando una matriz para las claves y otra para sus valores
$courses = ['javascript', 'php', 'laravel'];
$categories = ['frontend', 'backend', 'framework'];

var_dump(array_combine($categories, $courses));


/*
sort: Ordena un array.
rsort: Ordena un array en orden inverso.
ksort: Ordena un array por clave.
krsort: Ordena un array por clave en orden inverso.
array_slice: Extrae una parte de un array.
array_chunk: Divide un array en fragmentos.
array_shift: Quita un elemento del principio del array.
array_pop: Extrae el último elemento del final del array.
array_unshift: Añadir al inicio de un array uno a más elementos.
array_push: Inserta uno o más elementos al final de un array.
array_flip: Intercambia todas las claves de un array con sus valores asociados.
*/