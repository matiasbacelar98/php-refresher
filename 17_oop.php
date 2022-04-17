<?php

class User {
    // Constructor
    public function __construct($name, $email, $password){
        $this -> name = $name;
        $this -> email = $email;
        $this -> password = $password;
    }

    // ACCESS MODIFIERS
    // public : Se puede acceder desde fuera de la clase
    // private : Se puede acceder solo desde dentro de la clase
    // protected : iguales a las privadas pero se heredan
    // public $name;
    // public $email;
    // public $password;

    // METHODS

    // SETTER
    // function set_name($name){
    //     $this -> name = $name;
    // }

    // GETTER
    // function get_name(){
    //     return $this -> name;
    // }
}

// Instanciar objeto en PHP
// $userOne = new User('John','jdoe@gmail.com',12345);
// echo $userOne -> name, $userOne -> email, $userOne -> password;


// INHERITANCE
class Employee extends User{
    public function __construct($name, $email, $password, $title){
        parent::__construct($name, $email, $password);
        $this -> title = $title;
    }

    public function get_title(){
        return $this -> title;
    }
}

$employee = new Employee('John', 'jdoe@gmail.com', 12345, 'Developer');

// var_dump($employee);
echo $employee -> get_title();