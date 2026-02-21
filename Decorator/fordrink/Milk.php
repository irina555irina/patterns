<?php

namespace fordrink;

use drink\Drink;

class Milk extends Fordrink
{
   public $drink;
   public $description = " молоко ";
   public $cost = 50;

    public function __construct(Drink $drink)
    {
        $this->drink = $drink;
    }

   public function cost(): int
   {
        return $this->cost + $this->drink->cost();
        //var_dump($this->drink->cost());
   }

   public function getDescription(): void
   {
        echo $this->drink->getDescription()
            . " " . $this->description;
   }
}