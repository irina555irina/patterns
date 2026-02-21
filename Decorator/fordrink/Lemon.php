<?php

namespace fordrink;

use drink\Drink;

class Lemon extends Fordrink
{
    public $drink;
    public $description = " лимон ";
    public $cost = 30;

    public function __construct(Drink $drink)
    {
        $this->drink = $drink;
    } 

    public function cost(): int
    {
        return $this->cost + $this->drink->cost();
    }

    public function getDescription(): void
    {
        echo $this->drink->getDescription()
            . " " . $this->description;
    }

}