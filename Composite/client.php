<?php

spl_autoload_register();

$pancakeHouseMenu = new Menu(
    "Pancake MENU", "Breakfast");
$dinerMenu = new Menu("Dinner MENU", "Lunch");
$cafeMenu = new Menu("Cafe MENU", "Dinner");
$dessertMenu = new Menu("Dessert MENU", 
    "Dessert of course!");

$allMenus = new Menu("ALL MENUS", "all menus");

$allMenus->add($pancakeHouseMenu);
$allMenus->add($dinerMenu);
$allMenus->add($cafeMenu);

//var_dump($allMenus);

$dinerMenu->add(
    new MenuItem(
        "Pasta", "Marinara Pasta", "yes", 3.89
    )
);

$dinerMenu->add($dessertMenu);

$dessertMenu->add(
    new MenuItem(
        "Apple Pie", "vanilla icecream", "yes", 1.59
    )
);

$waitress = new Waitress($allMenus);
$waitress->printMenu();

