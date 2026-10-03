<?php
echo "Hola mundo!!!\n";
echo "<br>";
echo 2 + 5;
echo "<br>";
echo "\n";
print(2 + 5);

$nombre = "Pepe"; //string
$apellido = 'Gomez';  //string
$edad = 27;  //int
$mayorEdad = TRUE;  //boolean
$sueldo = 1250.50; //float
$ejemplo = null;
$numeros = array();
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$ejemplos = [1, "ascv", TRUE, 12.5, null, []];
echo '<br>' . $numeros[3] . '<br>';
// echo '<br>' , $numeros[3] , '<br>';
$persona = [
    "nombre" => "Pepe",
    "edad" => 34,
    "jobs" => ["Cine", "Libros", "musica"]
];
echo '<br>' . $persona['nombre'] . '<br>';
echo '<br>' . $persona['edad'] . '<br>';
echo '<br>' . $persona['jobs'][0] . '<br>';
echo '<br>For------------------------<br>';

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($x = 0; $x < count($numeros); $x++) {
    $numero = $numeros[$x];
    if (($numero % 2) == 0) {
        echo $numero . ' es par <br>';
    } else {
        echo $numero . ' es impar <br>';
    }
}

echo '<br>While------------------------<br>';
$estado = TRUE;
$x = 0;
while ($estado) {
    $numero = $numeros[$x];
    if (($numero % 2) == 0) {
        echo $numero . ' es par <br>';
    } else {
        echo $numero . ' es impar <br>';
    }
    $x++;
    if ($x == count($numeros)) {
        // $estado = FALSE;
        break;
    }
}

$x = 0;
while ($x < count($numeros)) {
    $numero = $numeros[$x];
    if (($numero % 2) == 0) {
        echo $numero . ' es par <br>';
    } else {
        echo $numero . ' es impar <br>';
    }
    $x++;
}

echo '<br>Do While------------------------<br>';
$x = 0;
do {
    $numero = $numeros[$x];
    if (($numero % 2) == 0) {
        echo $numero . ' es par <br>';
    } else {
        echo $numero . ' es impar <br>';
    }
    $x++;
} while ($x < count($numeros));

echo '<br>Foreach------------------------<br>';

foreach ($numeros as $num) {
    if (($num % 2) == 0) {
        echo $num . ' es par <br>';
    } else {
        echo $num . ' es impar <br>';
    }
}

foreach ($numeros as $i => $num) {
    if (($num % 2) == 0) {
        echo $i . ': ' . $num . ' es par <br>';
    } else {
        echo $i . ': ' . $num . ' es impar <br>';
    }
}

echo '<br>IF------------------------<br>';
$numero = 100;
if ($numero < 50) {
    //código --------
} else if ($numero >= 50 || $numero < 70) {
    //código --------
} elseif ($numero < 100) {
    //código --------
} else {
    //código --------
}
/**
 * || or
 * && and
 * ! negación
 * == igual a (valor)
 * === igual a (valor + tipo de dato)
 * <  menor que
 * > mayor que
 * <= menor o igual
 * >= mayor o igual
 * != diferente
 * !== diferente
 */
echo '<br>';
echo 12 == "12" ? "True" : "False";
echo '<br>';
echo 12 === "12" ? "True" : "False";

echo '<br>Switch------------------------<br>';
$categoria = "a";

switch ($categoria) {
    case "a":
        //bloque codigo
        break;
    case "b":
        //bloque codigo
        break;
    case "c":
        //bloque codigo
        break;
    default:
        //bloque codigo
        break;
}

function tipo_numero($numero)
{
    if (($numero % 2) == 0) {
        echo $numero . ' es par <br>';
    } else {
        echo $numero . ' es impar <br>';
    }
}
echo '<br>';
tipo_numero(100);

function get_tipo_numero(int $numero): string
{
    if (($numero % 2) == 0) {
        return $numero . ' es par <br>';
    } else {
        return $numero . ' es impar <br>';
    }
}

echo '<br>'. get_tipo_numero(200);
