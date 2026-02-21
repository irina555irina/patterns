<?php

spl_autoload_register();

use animal\Bird;
use animal\Dog;
use animal\Cat;

use make\sound\Chirik;
use make\sound\Guv;
use make\action\Fly;


/* $bird = new Bird();
$bird->makeSound(); echo "<br>";
$bird->makeAction(); echo "<br>"; echo "<br>";

$dog = new Dog();
$dog->makeSound(); echo "<br>";
$dog->makeAction(); echo "<br>"; echo "<br>";

$cat = new Cat();
$cat->makeSound(); echo "<br>";
$cat->makeAction(); echo "<br>"; echo "<br>";
 */


//$bird = new Bird(new Chirik());
//$bird->makeSound();

$bird = new Bird();
$bird->makeSound(new Chirik());


 

 