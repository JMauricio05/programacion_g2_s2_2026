<?php
class ValidarNumero
{
    private int $numero;

    function __construct(int $numero)
    {
        $this->numero = $numero;
    }

    function getMsg(): string
    {
        $modulo = $this->numero % 2;
        if ($modulo == 0) {
            return "El numero " . $this->numero . " es par";
        } else {
            return "El numero " . $this->numero . " es impar";
        }
    }
}
