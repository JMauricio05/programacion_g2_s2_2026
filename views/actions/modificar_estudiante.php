<?php
require "../../models/entities/student.php";
require "../../models/mappers/students_mappers.php";
require "../../models/database/students_db_interface.php";
require "../../models/database/students_db.php";
require "../../models/repositories/students_repository_interface.php";
require "../../models/repositories/students_repository.php";
require "../../models/config/models_config.php";

require "../../controllers/mappers/students_mappers.php";
require "../../controllers/students/students_controller_interface.php";
require "../../controllers/students/students_controller.php";
require "../../controllers/config/controllers_config.php";

use app\controllers\config\ControllersConfig;

$controller = ControllersConfig::get_students_controller();
$success = $controller->student_update($_POST);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la acción</title>
</head>

<body>
    <h1>Resultado de la operación</h1>
    <br>
    <?php
    if ($success) {
        echo '<p>Datos guardados!!!!</p>';
    } else {
        echo '<p>Error al guardar los datos!!!!</p>';
    }
    ?>
    <br>
    <a href="../estudiantes.php">Volver</a>
</body>

</html>