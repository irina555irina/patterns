<?php

spl_autoload_register();

use ducks\DuckCall;
use ducks\MallardDuck;
use ducks\RedheadDuck;
use ducks\RubberDuck;



$simulator = new DuckSimulator();
//$simulator->simulate(new MallardDuck());

$simulator->simulate();

echo "<br>";
/*
$simulator->simulate(new RubberDuck());
$simulator->simulate(new MallardDuck());
$simulator->simulate(new DuckCall());
$simulator->simulate(new RedheadDuck());
 */




