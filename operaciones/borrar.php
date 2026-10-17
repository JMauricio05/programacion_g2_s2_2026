<?php
$id = $_GET['id'];

$hostDB = 'localhost';
$userDB = 'root';
$pwdDB = '';
$nameDB = 'estudiantes_db';

$conexDB = new mysqli($hostDB, $userDB, $pwdDB, $nameDB);

if ($conexDB->connect_error) {
    print($conexDB->connect_error);
    die();
}

$sql = "delete from estudiantes where id=$id";


$result = $conexDB->query($sql);
if ($result) {
    header('Location: ../index.php');
} else {
    header('Location: ../index.php?error_insert=1');
}
$conexDB->close();
