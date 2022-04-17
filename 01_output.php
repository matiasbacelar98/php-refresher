<?php 
    // echo - CONSOLE.LOG DE PHP (STRINGS,NUMBERS,HTML ETC)
    // echo 'test', 2;

    // print - IGUAL A ECHO PERO SOLO TOMA UN ARGUMENTO
    // print('test');

    // print_r() - Imprime valores unicos y arrays
    // print_r(['test', 1, true]);

    // var_dump() - Retorna mas info como tipo_de_dato y length
    // var_dump([1,2,3,4]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'HeadingOne con echo'; ?></h1>
    <h2><?= 'HeadingOne sin echo'; ?></h2>
</body>
</html>



