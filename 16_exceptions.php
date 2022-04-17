<?php

function inverse($x){
    if(!$x){
        throw new Exception('Division by zero');
    }

    return 1 / $x;
}


// TRY & CATCH + FINALLY
// OBJECT OPERATOR '->' : Permite acceder a propiedades y metodos en un objeto (este esta construido con un array)
try {
    // echo inverse(5);
    echo inverse(0);
} catch(Exception $e){
    echo 'Caught Exception', $e -> getMessage(); 
} finally {
    // echo 'First Finally';
}
