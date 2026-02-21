<?php

spl_autoload_register();

use menu\DinerMenu;
use menu\PancakeHouseMenu;


$waitress= new Waitress(
    new DinerMenu(),
    new PancakeHouseMenu()
);

$waitress->printMenu();

