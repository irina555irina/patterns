<?php

namespace ducks\duckfactory;

use ducks\MallardDuck;
use ducks\RedheadDuck;
use ducks\DuckCall;
use ducks\RubberDuck;

use ducks\QuackCounter;

class CountingDuckFactory extends AbstractDuckFactory
{
    public function createMallardDuck(): object
    {
        return new QuackCounter(new MallardDuck());
    }
    
    public function createRedheadDuck(): object
    {
        return new QuackCounter(new RedheadDuck());
    }

    public function createDuckCall(): object
    {
        return new QuackCounter(new DuckCall());
    }

    public function createRubberDuck(): object
    {
        return new QuackCounter(new RubberDuck());
    }

}