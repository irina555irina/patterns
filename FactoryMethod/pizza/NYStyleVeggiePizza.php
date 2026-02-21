<?php

namespace pizza;
 

class NYStyleVeggiePizza extends Pizza
{
    public function __construct()
    {
        echo "Нью-Йоркская Вегги ---";
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