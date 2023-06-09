<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <label>y:</label>
        <input type="text" name="y">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php 

    $x = $_POST["x"];
    $y = $_POST["y"];
    $total = null;

    //Todo: -> funciones matemáticas

    // abs($x) -> //? Retorna el valor absoluto
    // round($x) -> //? Transforma un número flotante a entero al valor que más se aproxime
    // floor($x) -> //? Transforma un número flotante a entero hacia abajo 4.12 = 4
    // ceil($x) -> //? Transforma un número flotante a entero hacia arriba 4.12  = 5
    // pow($x, $y) -> //? Retorna la potencia
    //sqrt($x) -> //? Retorna la raiz cuadrada
    // max($x, $y, ...) -> //? Retorna el valor mayor en un arreglo. 
    // min($x, $y, ...) -> //? Lo mismo de max pero el menor
    // pi() -> //? Retorna 3.1416...
    // rand() or rand(1,100) -> //? Retorna un número random entre dos parámetros
    
 ?>