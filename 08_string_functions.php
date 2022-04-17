<?php

$str = 'Hello World';

// TOMAR LENGTH 
// echo strlen($str);

// ENCONTRAR LA PRIMERA OCURRENCIA EN UN STRING
// echo strpos($str, 'r');

// ENCONTRAR LA ULTIMA OCURRENCIA EN UN STRING
// echo strrpos($str, 'w');

// REVERTIR STRING
// echo strrev($str);

// TO LOWERCASE
// echo strtolower($str);

// TO UPPERCASE
// echo strtoupper($str);

// REEMPLAZAR PALABRA EN STRING
// echo str_replace('World', 'Everyone', $str);

// RETORNAR PORCION DE UN STRING 
// echo substr($str, 0, 5);
// echo substr($str, 5);

// CHEQUEAR SI UN STRING COMIENZA CON...
if(str_starts_with($str, 'Hello')){
    // echo 'SI EMPIEZA';
}

// CHEQUEAR SI UN STRING TERMINA CON...
if(str_ends_with($str, 'World')){
    // echo 'SI TERMINA';
}



// PREVENIR EJECUCION DE JS EN PHP
$string2 = '<script>alert(1);</script>';
// echo htmlspecialchars($string2); 


// FORMATEAR STRINGS
printf('20*2=%d', 20 * 2);