<?php

spl_autoload_register();

$balls = 50;

$ball = new GumballMachine($balls);

//$ball->dispense();

/* $ball->insertQuarter();
$ball->turnCrank();

$ball->insertQuarter();
$ball->ejectQuarter();
$ball->turnCrank();

$ball->insertQuarter();
$ball->turnCrank();
$ball->insertQuarter();
$ball->turnCrank();
$ball->ejectQuarter();

$ball->insertQuarter();
$ball->insertQuarter();
$ball->turnCrank();
$ball->insertQuarter();
$ball->turnCrank();
$ball->insertQuarter();
$ball->turnCrank();

$ball->insertQuarter();
$ball->turnCrank();


 $ball->insertQuarter();
 $ball->turnCrank(); */

for($i=0; $i<30; $i++){
    $ball->insertQuarter();
    $ball->turnCrank();
}
