<?php

namespace pizza;

class ChicagoStyleVeggiePizza extends Pizza
{
    public function __construct()
    {
        echo "Чикагская Вегги ---";
    }

    public function prepare()
    {
        echo "приготовлено ";
    }

    public function bake()
    {
        echo "выпечено ";
    }

    public function cut()
    {
        echo "нарезано ";
    }

    public function box()
    {
        echo "упаковано ";
    }

}