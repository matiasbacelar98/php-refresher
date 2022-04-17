<?php 

$fruits = ['apple', 'orange', 'banana'];

// CONSEGUIR LENGTH (Numero absoluto al igual que en JS)
count($fruits); // 3 


// BUSCAR VALOR
// Si usamos var_dump retorna boolean , si usamos echo retorna 1 si existe o nada
in_array('apple', $fruits);


// ----- AGREGAR VALOR A ARRAY ----- // 

// AGREGAR AL FINAL

// $fruits[] = 'pear';  print_r($fruits);
// array_push($fruits, 'pear'); print_r($fruits);


// AGREGAR AL PRINCIPIO
// array_unshift($fruits, 'grapes'); print_r($fruits); 



// ----- REMOVER VALOR DE ARRAY ----- // 

// REMOVER AL FINAL
// array_pop($fruits); print_r($fruits); 

// REMOVER AL PRINCIPIO
// array_shift($fruits); print_r($fruits); 

// REMOVER VALOR ESPECIFICO (Remueve el index tamb)
// unset($fruits[2]); print_r($fruits);



// DIVIDIR ARRAY EN PEDAZOS (estos van a ser arrays tamb)
// $chunkedArr = array_chunk($fruits, 2); print_r($chunkedArr);



// ----- CONCATENAR ARRAYS ----- // 

// USANDO array_merge()  
$arr1 = [1,2,3];
$arr2 = [4,5,6];
// $finalArr = array_merge($arr1, $arr2); print_r($finalArr);


// USANDO EL SPREAD OPERATOR (Funciona igual que en JS)
$arr3 = [...$arr1, ...$arr2];
// print_r($arr3);



// COMBINAR ARRAYS
/* Toma los valores del primero y los usa como llaves y los valores son los 
del segundo

EN ESENCIA CREA UN OBJETO (DE PHP QUE ES UN ARRAY)
*/

$arrA = ['green', 'red', 'yellow']; // van a usarse como llaves
$arrB = ['avocado', 'apple', 'banana']; // van a usarse como valores

$resultsArr = array_combine($arrA, $arrB);
// print_r($resultsArr);



// CREAR ARRAYS USANDO LAS LLAVES DE UN OBJETO (EN PHP SE CONSTRUYE USANDO UN ARRAY)
$keysArr = array_keys($resultsArr);
// print_r($keysArr);



// CREAR ARRAYS DE NUMEROS USANDO UN RANGO
$numbersArr = range(1, 20);
// print_r($numbersArr);



// MAP en PHP
$newNumbers = array_map(fn($n) => "Number ${n} <br/>", $numbersArr);
// print_r($newNumbers);


// FILTER en PHP
$lessThanTen = array_filter($numbersArr, fn($n) => $n < 10);
// print_r($lessThanTen);


// REDUCE en PHP
$sum = array_reduce($numbersArr, fn($acumulation, $number) => $acumulation += $number);
var_dump($sum); 