<?php

spl_autoload_register();

use duck\MallardDuck;
use turkey\WildTurkey;

$duck = new MallardDuck();
$duck->quack();
$duck->fly();

echo "<br>";

$turkey = new WildTurkey();
$turkey->gobble();
$turkey->fly();

echo "<br>";

//$adapter = new TurkeyAdapter(new WildTurkey());
$adapter = new TurkeyAdapter($turkey);
$adapter->quack();
$adapter->fly();
