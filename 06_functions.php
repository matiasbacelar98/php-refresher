<?php
/* --------- SCOPE --------- */
/*
En php los '{}' crean un bloque de codigo, a este se le crea un SCOPE
*/


// FUNCIONES DECLARADAS
function registerUser(){
    // echo 'User register';
}

registerUser(); 


// USANDO VARIABLES EN EL SCOPE GLOBAL dentro DE UNA FUNCION
$age = 24; // variable en scope global

function printAge(){
    global $age; // Tenemos que decir que queremos que esta variable este disponible
    // echo $age;
}

printAge();

// FUNCIONES CON ARGUMENTOS
function saveEmail($email){ // Los argumentos los pasamos usando '$arg'
    // echo $email . ' saved in db';
}

saveEmail('johndoe@gmail.com');


// FUNCIONES USANDO return , FUNCIONES como FIRST CLASS CITIZENZ , PARAMETROS DEFAULT
function sum($n1 = 1, $n2 = 1){
    return $n1 + $n2;
}

$sumA = sum(5, 10); // Al igual que en JS, se tratan como VALORES

// echo $sumA;
// echo '<br/>';
// echo sum();



// FUNCIONES ANONIMAS
$substract = function($n1 = 0, $n2 = 0){
    return $n1 - $n2;
}; // Necesitamos el semicolon !!!

// echo $substract(10, 1);



// FUNCIONES ANONIMAS usando Lambda expressions(ARROW FUNCIONS)
$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(2, 2);









