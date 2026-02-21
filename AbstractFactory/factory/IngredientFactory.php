<?php

namespace factory;

use ingredients\Dough;
use ingredients\Sauce;
use ingredients\Cheese;
use ingredients\Pepperoni;
use ingredients\Clams;


interface PizzaIngredientFactory
{
    public function createDough() : Dough;
    public function createSauce() : Sauce;
    public function createCheese() : Cheese;
    public function createVeggies() : array;
    public function createPepperoni() : Pepperoni;
    public function createClam() : Clams;
}