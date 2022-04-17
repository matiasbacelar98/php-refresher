<?php
// SIMPLE ARRAY
$numbersArr = [1,2,3,4,5,6];

// USANDO FUNCION ARRAY
$namesArr = array('matt','john','maria');

// ACCEDER A VALORES EN ARRAY usando index
$namesArr[0];

// ARRAYS PERSONALIZADOS (Los usamos como OBJETOS EN JS)
$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'age' => 40,
    'email' => 'traversy@gmail.com'
];

// ARRAYS MULTIDIMENSIONALES (Array de objetos en JS)
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

// Acceder a el segundo 'objeto' en el array y acceder al email 
// print_r($users[1]['email']);



// PHP a JSON OBJECT || JSON OBJECT a PHP
json_encode($users);
json_decode('users from api');