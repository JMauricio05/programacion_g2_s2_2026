<?php

namespace app\controllers\config;

use app\controllers\students\StudentsController;
use app\controllers\students\StudentsControllerInterface;
use app\models\config\ModelsConfig;

class ControllersConfig
{
    public static function get_students_controller(): StudentsControllerInterface
    {
        return new StudentsController(ModelsConfig::get_students_repository());
    }
}
