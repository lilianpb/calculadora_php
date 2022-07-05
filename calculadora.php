<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <form class="caja" action="calculadora.php" method="get">
        <h1>Selecciona la operación que deseas realizar</h1>
        <div class="select">
            <select name="lista">
                <option selected disabled>Elija la opción</option>
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select>
        </div>
        <input type="text" name="numero1" value="" placeholder="Ingrese un número">
        <input type="text" name="numero2" value="" placeholder="Ingrese otro número">
        <input type="submit" name="" value="CALCULAR">
        <output type="number" name="">
    </form>
</body>

</html>
<?php
$operacion = $_GET['lista'];
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
if (
    isset($_GET['numero1']) && isset($_GET['numero2']) && is_numeric($_GET['numero1'])
    && is_numeric($_GET['numero2'])
) {
    switch ($operacion) {
        case 'sumar':
            echo $numero1 + $numero2;
            break;
        case 'restar':
            echo $numero1 - $numero2;
            break;
        case 'multiplicar':
            echo $numero1 * $numero2;
            break;
        case 'dividir':
            echo $numero1 / $numero2;
            break;

        default:
            echo "Opcion incorrecta";
            break;
    }
} else {
    echo "debes insertar todos los campos";
}
?>