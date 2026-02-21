<?php

namespace pizzastore;
use pizza\ChicagoStyleCheesePizza;
use pizza\ChicagoStyleVeggiePizza;


class ChicagoStylePizzaStore extends PizzaStore
{
    public function createPizza(string $type)
    {
        if($type == "cheese"){
            return new ChicagoStyleCheesePizza;
        };
        if($type == "veggie"){
            return new ChicagoStyleVeggiePizza;
        }
    }


}