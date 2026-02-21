<?php

spl_autoload_register();

use pizzastore\NYStylePizzaStore;
use pizzastore\ChicagoStylePizzaStore;



$myPizza = new NYStylePizzaStore();
$myPizza->orderPizza("cheese");

echo "<br><br>";

$myPizza = new NYStylePizzaStore();
$myPizza->orderPizza("veggie");

echo "<br><br>";

$myPizza = new ChicagoStylePizzaStore();
$myPizza->orderPizza("cheese");

echo "<br><br>";

$myPizza = new ChicagoStylePizzaStore();
$myPizza->orderPizza("veggie");