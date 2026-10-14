<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: ../index.php');
}

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$email = $_POST['email'];

$hostDB = 'localhost';
$userDB = 'root';
$pwdDB = '';
$nameDB = 'estudiantes_db';

$conexDB = new mysqli($hostDB, $userDB, $pwdDB, $nameDB);

if ($conexDB->connect_error) {
    print($conexDB->connect_error);
    die();
}

$sql = "update estudiantes set ";
$sql .= " nombre='$nombre', ";
$sql .= " codigo='$codigo', ";
$sql .= " email='$email' ";
$sql .= " where id=$id";


$result = $conexDB->query($sql);
if ($result) {
    header('Location: ../index.php');
} else {
    header('Location: ../index.php?error_insert=1');
}
$conexDB->close();
