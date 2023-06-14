<?php

//Función Json_encode y Json_decode 

//*La función json_encode() en PHP se utiliza para convertir una estructura de datos en PHP en una cadena JSON.

//* La función json_decode() en PHP se utiliza para convertir una cadena JSON en una estructura de datos de PHP. Esta función toma una cadena JSON y la convierte en un objeto, un array asociativo o un valor escalar según corresponda.

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
        <?php include("includes/header.php"); ?>
    </header>
    <nav>
        <?php include("includes/enlaces.php"); ?>
    </nav>

    <?php
        var_dump($productos);
        echo "<br><br>";
        $json = json_encode($productos, JSON_UNESCAPED_UNICODE);
        var_dump($json);
        
        echo "<br><br>".$data->nombre."<br>";
        echo $data->edad;


        //!En pocas palabras uno es el proceso inverso del otro. json_decode convierta algo a un objeto y json_encode transforma un objeto en un string :D
    ?>
</body>
</html>