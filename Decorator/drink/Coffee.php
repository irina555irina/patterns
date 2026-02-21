<?php

namespace drink;

class Coffee extends Drink
{
    public $description = "Кофе :";
    public $cost = 100;

    public function cost(): int
    {
        return $this->cost; 
    }
}