<?php
// include require
include "validar_numero.php";

if(empty($_POST['numero'])){
    header("Location: index.html");
}

$numero = $_POST['numero'];

$validarNumero = new ValidarNumero($_POST['numero']);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Validar</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <h1>Validar numero!!!</h1>
    <a href="index.html">Volver</a>
    <br>
    <?php
    $modulo = $numero % 2;
    if ($modulo == 0) {
        echo '<p class="green">El numero ' . $numero . ' es par</p>';
    } else {
        echo "<p>El numero $numero es impar</p>";
    }
    ?>
    <br>
    <p><?php echo $validarNumero->getMsg(); ?></p>
</body>

</html>