<?php

abstract class FiguraGeometrica
{
    public abstract function area();

    public function get(string $prop)
    {
        return $this->{$prop};
    }
}

class Cuadrado extends FiguraGeometrica
{
    // private int|null|string $arista = null;
    protected int $arista;

    public function __construct(int $arista)
    {
        $this->arista = $arista;
    }

    public function get_arista(): int
    {
        return $this->get("arista");
        // if (empty($this->arista)) {
        //     return 0;
        // }
        // return $this->arista;
    }

    public function set_arista(int $value)
    {
        $this->arista = $value;
    }

    public function area(): int
    {
        return pow($this->arista, 2);
        // return $this->arista * $this->arista;
    }
}

$figuraC = new Cuadrado(12); //objeto
// $figuraC->set_arista(20);

echo "El cuadrado es de arista " . $figuraC->get_arista() . " con area igual a " . $figuraC->area();
