<?php

namespace pets;
use observer\Visitor;

class Dog implements Pet
{
    public function call(): void
    {
        echo "Гав-гав ";
    }
    
}