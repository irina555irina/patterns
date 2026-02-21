<?php

namespace pizzastore;
use pizza\NYStyleCheesePizza;
use pizza\NYStyleVeggiePizza;

class NYStylePizzaStore extends PizzaStore
{

    public function createPizza(string $type)
    {
        if($type == "cheese"){
            return new NYStyleCheesePizza();
        };
        if($type == "veggie"){
            return new NYStyleVeggiePizza();
        }
    }

    
}