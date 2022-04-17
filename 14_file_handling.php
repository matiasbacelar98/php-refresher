<?php

$file = 'extras/users.txt';

 // Chequea si el archivo existe
if(file_exists($file)){
    //echo readfile(($file));  readfile() LEER CONTENIDO

    $handle = fopen($file, 'r');   // ABRE EL ARCHIVO , (arch, accion)
    $contents = fread($handle, filesize($file)); // LEE EL ARCHIVO (arch abierto, tamano de arch)
    fclose($handle); // CIERRA EL ARCHIVO
    echo $contents;
}

// Crear archivo
if(!file_exists($file)) {
 $handle = fopen($file, 'w'); // ABRIR ARCHIVO , usamos la 'w' que es WRITE
 $contents = 'Brad' . PHP_EOL . 'Sara' . PHP_EOL . 'Mike'; // AGREGAMOS EL CONTENIDO 
 fwrite($handle, $contents); // LO ESCRIBIMOS , (arch abierto, contenido)
 fclose($handle); // LO CERRAMOS
}

