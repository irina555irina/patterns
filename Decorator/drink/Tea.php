<?php

namespace drink;

class Tea extends Drink
{
    public $description = "Чай :";
    public $cost = 60;

    public function cost(): int
    {
        return $this->cost;
    }
}