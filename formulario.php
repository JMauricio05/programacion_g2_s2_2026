<?php
$titulo = "Registrar estudiante";
$action = "operaciones/registrar.php";
$id = "";
$nombre = "";
$codigo = "";
$email = "";
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $titulo = "Modificar estudiante";
    $action = "operaciones/modificar.php";

    $hostDB = 'localhost';
    $userDB = 'root';
    $pwdDB = '';
    $nameDB = 'estudiantes_db';
    $conexDB = new mysqli($hostDB, $userDB, $pwdDB, $nameDB);
    if ($conexDB->connect_error) {
        print($conexDB->connect_error);
        die();
    }
    $sql = "select * from estudiantes where id=$id";
    $result = $conexDB->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $codigo = $row['codigo'];
            $nombre = $row['nombre'];
            $email = $row['email'];
        }
    }
    $conexDB->close();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>
</head>

<body>
    <h1><?php echo $titulo; ?></h1>
    <a href="index.php">Volver</a>
    <br>
    <form action="<?php echo $action; ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div>
            <label for="codigo">Código: </label>
            <input type="text" name="codigo" id="codigo" value="<?php echo $codigo; ?>" required>
        </div>
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $email; ?>" required>
        </div>
        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
</body>

</html>