<?php

abstract class CoffeineBeverage
{

    final public function prepareRecipe() : void
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    abstract function brew() : void;
    abstract function addCondiments();

    public function boilWater() : void
    {
        echo "Вскипятить воду<br>";
    }

    public function pourInCup() : void
    {
        echo "Перелить в чашку<br>";
    }
}