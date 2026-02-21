<?php

class Coffee extends CoffeineBeverage
{
    public function brew() : void
    {
        echo "Сварить кофе<br>";
    }

    public function addCondiments() : void
    {
        echo "Добавить сахар и молоко<br>";        
    }
}