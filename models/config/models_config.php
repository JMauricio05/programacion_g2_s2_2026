<?php

namespace app\models\config;

use app\models\database\StudentsDBInterface;
use app\models\database\StudentsDB;
use app\models\repositories\StudentsRepositoryInterface;
use app\models\repositories\StudentsRepository;

class ModelsConfig
{
    public static function get_students_db(): StudentsDBInterface
    {
        return new StudentsDB();
    }

    public  static function get_students_repository(): StudentsRepositoryInterface
    {
        return new StudentsRepository(ModelsConfig::get_students_db());
    }
}
