<?php

namespace factory;
use ingredients\Cheese;
use ingredients\Clams;
use ingredients\Dough;
use ingredients\FreshClams;
use ingredients\Garlic;
use ingredients\MarinaSauce;
use ingredients\Mushrooms;
use ingredients\Onion;
use ingredients\Pepperoni;
use ingredients\RedPepper;
use ingredients\ReggianoCheese;
use ingredients\Sauce;
use ingredients\SlicedPepperoni;
use ingredients\ThinCrustDough;
use ingredients\Veggy;


class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough() : Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce() : Sauce
    {
        return new MarinaSauce();
    }

    public function createCheese() : Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies() : array
    {
        $veggies = array(
            new Garlic(),
            new Onion(),
            new Mushrooms(),
            new RedPepper(),
        );
        return $veggies; 
    }

    public function createPepperoni() : Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam() : Clams
    {
        return new FreshClams();
    }

}
