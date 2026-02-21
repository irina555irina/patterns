<?php

use menu\DinerMenu;
use menu\PancakeHouseMenu;


class Waitress
{
    public $dinerMenu; // DinerMenu
    public $pancakeHouseMenu; //PancakeHouseMenu

    public function __construct(
        DinerMenu $dinerMenu,
        PancakeHouseMenu $pancakeHouseMenu
    )
    {
        $this->dinerMenu = $dinerMenu;
        $this->pancakeHouseMenu = $pancakeHouseMenu;
    }

    public function printMenu()
    {
        $dinerIterator = 
            $this->dinerMenu
                ->createIterator()
                ->getMenuItems();

        echo "<br><br>";
                
        $pancakeIterator = 
            $this->pancakeHouseMenu
                ->createIterator()
                ->getMenuItems();
                
    }

}