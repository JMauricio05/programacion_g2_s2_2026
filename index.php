<?php
$hostDB = 'localhost';
$userDB = 'root';
$pwdDB = '';
$nameDB = 'estudiantes_db';

$conexDB = new mysqli($hostDB, $userDB, $pwdDB, $nameDB);

if ($conexDB->connect_error) {
    print($conexDB->connect_error);
    die();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link rel="stylesheet" href="css/tarjetas.css">
</head>

<body>
    <h1>Lista de estudiantes</h1>
    <?php
        if($_GET['error_insert']){
            echo '<div>Error al guardar los datos!!!</div>';
        }
    ?>
    <a href="formulario.php">Registrar un estudiante</a>
    <section class="tarjetas">
        <?php
        $sql = "select * from estudiantes";
        $result = $conexDB->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="tarjeta">';
                echo '    <p>';
                echo '        <b>Codigo: </b><span>'.$row['codigo'].'</span>';
                echo '    </p>';
                echo '    <p>';
                echo '        <b>Nombre: </b><span>'.$row['nombre'].'</span>';
                echo '    </p>';
                echo '    <p>';
                echo '        <b>Email: </b><span>'.$row['email'].'</span>';
                echo '    </p>';
                echo '    <div>';
                echo '        <a href="#">Borrar</a>';
                echo '        <a href="#">Modificar</a>';
                echo '    </div>';
                echo '</div>';
            }
        }
        ?>
    </section>
    <?php
    $conexDB->close();
    ?>
</body>

</html>