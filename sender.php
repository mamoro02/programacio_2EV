<?php

declare(strict_types=1);
$randomParameter = 20;
f1($randomParameter);
function f1(int &$par): void
{
    $par + 10;
}
if (isset($_GET["parameter"])) {
    $p1 = $_GET["parameter"];
} else {
    $p1 = "valor no pasado";
}
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
    <h1><a href="receiver.php?parameter=<? $randomParameter ?>">Enlace</a></h1>
    <form action="" method="post">
        <label for="parameter">Parameter:</label>
        <input type="number" name="parameter" value="<?=$randomParameter ?>"><br>
        <label for="id">ID: </label>
        <input type="number" name="id" value="7"><br>
        <input type="submit" value="Enviar">
    </form>
    <p>El parámetro pasado por POST es: <?= $p1 ?></p>
</body>

</html>