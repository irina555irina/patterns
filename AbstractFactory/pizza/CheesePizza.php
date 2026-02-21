<?php

namespace pizza;

use factory\PizzaIngredientFactory;

class CheesePizza extends Pizza
{
    public $ingredientFactory; //Ingredient Factory

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare(): void
    {
        $this->dough = 
        $this->ingredientFactory->createDough();  // Dough
        
        $this->sauce = 
        $this->ingredientFactory->createSauce();  // Sauce
        
        $this->cheese = 
        $this->ingredientFactory->createCheese();   // Cheese
        
    }


}