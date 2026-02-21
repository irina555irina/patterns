<?php

namespace fordrink;

use drink\Drink;

class Sugar extends Fordrink
{
    public $drink;
    public $description = " сахар ";
    public $cost = 20;

    public function __construct(Drink $drink)
    {
        $this->drink = $drink;
    }

    public function cost(): int
    {
        return $this->cost+ $this->drink->cost();
    }

    public function getDescription(): void
    {
        echo $this->drink->getDescription()
            . " " . $this->description;
    }
}
