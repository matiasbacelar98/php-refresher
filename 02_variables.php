<?php

/* --------- PHP Data-Types --------- */
/*
- String
- Integer
- Float
- Boolean
- Array
- Object
- Null
- Resource
*/

/* --------- VARIABLES RULES --------- */
/*
- Tienen que empesar con el prefijo '$'
- Su nombre tiene que empesar con una LETRA o GUION BAJO
- No pueden empesar con un NUMERO
- Las variables solo pueden escribirse con caracteres alfa numericos y
  Guion bajo (A-z - 0-9 - _)
- Son CASE SENSITIVE por lo que '$name' y '$NAME' son variables diferentes
*/

$name = 'Matt';
$age = 24;
$weight = 66.5;
$isMarried = false;
$haveSisters = null;
$interests = ['Martial Arts', 'Boxing', "MMA", 'Programming'];

// echo $name, $age, $weight, $isMarried,$haveSisters;
// var_dump($interests);

// CONCATENACION CON VARIABLES
// echo 'El nombre de usuario es ' . $name . ' y tiene ' . $age;

// CONCATENACION USANDO DOUBLE QUOTES (USAR ESTA FORMA !!!)
// echo "El nombre de usuario es ${name} y tiene ${age} anos de edad";

// ARITMETICA
// echo 5 + 5;
/*
var_dump("5" + 5); // RESULTADO === 10 integer
var_dump("5" + '5'); // RESULTADO === 10 integer
echo 20 - 5; // RESULTADO === 15 integer
echo 20 * 2; // RESULTADO === 40 integer
echo 10 / 2; // RESULTADO === 5 integer
echo 15 % 5; // RESULATDO === 0
*/
 
/* --------- CONSTANTS --------- */
/*
Son variables que sabemos que no van a cambiar, en PHP se usan para guardar
credenciales o similares
*/

define('HOST', 'localhost');
define('API_KEY', '12345');

echo HOST, API_KEY;

?>