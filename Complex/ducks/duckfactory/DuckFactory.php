<?php

namespace ducks\duckfactory;

use ducks\MallardDuck;
use ducks\DuckCall;
use ducks\RedheadDuck;
use ducks\RubberDuck;
use iQuackable;

class DuckFactory extends AbstractDuckFactory
{
    public function createMallardDuck(): object
    {
        return new MallardDuck();
    }
    
    public function createRedheadDuck(): object
    {
        return new RedheadDuck();
    }

    public function createDuckCall(): object
    {
        return new DuckCall();
    }

    public function createRubberDuck(): object
    {
        return new RubberDuck();
    } 


}