<?php

namespace pizza;

class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        echo "Чикагская с Сыром ---";
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