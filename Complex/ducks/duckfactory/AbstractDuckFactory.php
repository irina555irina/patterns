<?php

namespace ducks\duckfactory;

use iQuackable\iQuackable;

abstract class AbstractDuckFactory
{
    public abstract function createMallardDuck(): object;
    public abstract function createRedheadDuck(): object;
    public abstract function createDuckCall(): object;
    public abstract function createRubberDuck(): object;
}