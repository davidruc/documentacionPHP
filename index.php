<?php

// TODO: include, require, include_once, require_once

//* Son funciones que se utilizan para incluir archivos externos de un programa.

//? El include e include_once permite incluir un archivo PHP en el programa, la diferencia está en que el once permite la inclusión una única vez.

//! El require y require_once, son muy similares que el include e include_once, pero con la diferencia de que si no encuentran el archivo que van a incluir detienen la ejecución del programa 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php include("includes/header.php")?>
    </header>
</body>
</html>