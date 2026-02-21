<?php

spl_autoload_register();

use observer\Visitor;
use pets\Cat;
use pets\Dog;
use subject\MorningKitchen;


$zavtrak = new MorningKitchen();
//var_dump($zavtrak);
$zavtrak->registerVisitor(new Dog());
$zavtrak->registerVisitor(new Cat());
//var_dump($zavtrak);
$zavtrak->callVisitors();
echo "<br>";
$zavtrak->removeVisitor(new Dog());
$zavtrak->callVisitors();




?>