<?php
require "../models/entities/student.php";
require "../models/mappers/students_mappers.php";
require "../models/database/students_db_interface.php";
require "../models/database/students_db.php";
require "../models/repositories/students_repository_interface.php";
require "../models/repositories/students_repository.php";
require "../models/config/models_config.php";

require "../controllers/students/students_controller_interface.php";
require "../controllers/students/students_controller.php";
require "../controllers/config/controllers_config.php";

use app\controllers\config\ControllersConfig;

$controller = ControllersConfig::get_students_controller();

$list = $controller->get_students();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de estudiantes</title>
    <link rel="stylesheet" href="../public/css/tarjetas.css">
</head>

<body>
    <h1>Lista de estudiantes</h1>

    <section class="tarjetas">
        <?php
        foreach ($list as $item) {
            echo '<div class="tarjeta">';
            echo '    <p> ';
            echo '        <b>Codigo: </b><span>' . $item->get_code() . '</span> ';
            echo '    </p>';
            echo '    <p> ';
            echo '        <b>Nombre: </b><span>' . $item->get_name() . '</span> ';
            echo '    </p>';
            echo '    <p> ';
            echo '        <b>Email: </b><span>' . $item->get_email() . '</span> ';
            echo '    </p>';
            echo '    <div>';
            echo '        <a href="#">Borrar</a>';
            echo '        <a href="#">Modificar</a>';
            echo '    </div>';
            echo '</div>';
        }
        ?>
    </section>
</body>

</html>