<?php

namespace pizzastore;
use pizza;

abstract class PizzaStore
{
    public $pizza;

    // Factory Method
    abstract function createPizza(string $type);

    public function orderPizza(string $type)
    {
        $this->pizza = $this->createPizza($type);
        $this->pizza ->prepare();
        $this->pizza ->bake();
        $this->pizza ->cut();
        $this->pizza ->box(); 

        return $this->pizza;

    }
    

}
