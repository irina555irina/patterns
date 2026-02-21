<?php

class Tea extends CoffeineBeverage
{
    public function brew() : void
    {
        echo "Заварить чай в горячей воде <br>";
    }

    public function addCondiments() : void
    {
        echo "Добавить лимон<br>";        
    }
}