<?php

/* --------- FOR LOOP --------- */

for($i = 0; $i <= 10; $i++){
    // echo $i;
}

/* --------- WHILE LOOP --------- */
$x = 0;

while($x <= 10){
    // echo "${x} <br/>";
    $x++;
}

/* --------- DO WHILE --------- */
$y = 1;

do{
    // echo $y;
    $y++;
} while ($y <= 6);

/* --------- FOREACH LOOP --------- */
$users = [
    [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'age' => 40,
        'email' => 'traversy@gmail.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'age' => 34,
        'email' => 'jdoe85@gmail.com'
    ]
];

foreach($users as $user){
    $fullName = $user['first_name'] . ' ' . $user['last_name'];
    // echo "{$fullName} <br/>";
}

// USAR INDEX EN EL FOREACH
foreach($users as $index => $user){
    echo $index + 1;
    echo $user['first_name'];
    echo '<br/>';
}