<?php

/* --------- OPERATORS --------- */
/*
 < LESS THAN
 > GRATER THAN

 <= LESS THAN OR EQUAL
 >= GREATER THAN OR EQUAL

 == EQUAL TO (Chequea solo el valor)
 === IDENTICAL TO (Chequea valor y tipo de dato)

 != Not equal to
 !== Not identical to

 || OR OPERATOR
 && AND OPERATOR 
 
 ! NEGATION OPERATOR
*/


// IF STATEMENT 
$age = 15;

if($age <= 15) {
    // echo "${age} se encuentra en el rango correcto";
} else {
    // echo "${age} esta fuera del rango";
}

// ELSEIF
$t = date('H');

if($t < 12) {
    // echo 'Good morning!';
} elseif($t < 17) {
//    echo 'Good afternoon'; 
} else {
    // echo 'Good evening!'; 
}

// EMPTY() - Nos deja chequear si un array esta vacio
$postsArr = ['Post 1'];

if(empty($postsArr)){
    // echo 'the posts array is empty';
}

if(!empty($postsArr)) {
    // echo 'There is at least one post in the array';
}

// TERNARY OPERATOR (Igual que en Javascript)
$commentsArr = [];
// echo !empty($commentsArr) ? 'There is at least one comment' : 'There are no comments';

// COALESCING OPERATOR (Chequea si la condicion se cumple sino va a ser null)
$colorsArr = ['red'];
$firstColor = $colorsArr[0] ?? null;
// echo $firstColor;

// SWITCH CONDITIONAL
$favMusic = 'rock';

switch($favMusic) {
    case 'pop' :
        echo 'The music is Pop';
        break;
    case 'metal' :
        echo 'The music is Metal';
        break;
    case 'rock' :
        echo 'The music is Rock';
        break;
    default :
        echo 'We dont know what music do you enjoy :<';           
}







