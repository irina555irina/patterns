<?php

namespace pizza;


abstract class Pizza
{
    abstract function prepare();
    abstract function bake();
    abstract function cut();
    abstract function box(); 
}