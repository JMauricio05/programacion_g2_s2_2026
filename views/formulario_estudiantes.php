<?php
require "../models/entities/student.php";
require "../models/mappers/students_mappers.php";
require "../models/database/students_db_interface.php";
require "../models/database/students_db.php";
require "../models/repositories/students_repository_interface.php";
require "../models/repositories/students_repository.php";
require "../models/config/models_config.php";

require "../controllers/mappers/students_mappers.php";
require "../controllers/students/students_controller_interface.php";
require "../controllers/students/students_controller.php";
require "../controllers/config/controllers_config.php";

use app\controllers\config\ControllersConfig;

$controller = ControllersConfig::get_students_controller();

$id = empty($_GET["id"]) ? null : $_GET["id"];
$titulo = empty($id) ? "Resgitrar estudiantes" : "Modificar estudiante";
$action_form = empty($id) ? "actions/registrar_estudiante.php"
    : "actions/modificar_estudiante.php";
$codigo = "";
$nombre = "";
$email = "";

if (!empty($id)) {
    $student = $controller->get_student($id);
    $codigo = $student->get_code();
    $nombre = $student->get_name();
    $email = $student->get_email();
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>

<body>
    <h1><?php echo $titulo; ?></h1>
    <br>
    <a href="estudiantes.php">Volver</a>
    <br>
    <form action="<?php echo $action_form; ?>" method="post">
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