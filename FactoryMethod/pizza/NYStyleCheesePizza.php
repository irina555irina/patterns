<?php

namespace pizza;

class NYStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        echo "Нью-Йоркская с Сыром  ---";
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
