<?php

namespace pets;
use observer\Visitor;


class Cat implements Pet  
{
    public function call(): void
    {
        echo "Мяу-мяу";
    }

}