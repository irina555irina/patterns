<?php

spl_autoload_register();

use drink\Coffee;
use drink\Tea;
use fordrink\Milk;
use fordrink\Sugar;
use fordrink\Lemon;

$cofe = new Coffee();
//var_dump($cofe->getDescription);
//var_dump(new Milk(new Coffee()));
$cofe = new Milk($cofe);
$cofe = new Lemon($cofe);
$cofe = new Sugar($cofe);
$cofe = new Sugar($cofe);
$cofe = new Sugar($cofe);

echo $cofe->getDescription() . " " . 
    $cofe->cost();    echo "<br>";

$tea = new Tea();
$tea = new Lemon($tea);
$tea = new Sugar($tea);

echo $tea->getDescription() . " " . 
    $tea->cost();
