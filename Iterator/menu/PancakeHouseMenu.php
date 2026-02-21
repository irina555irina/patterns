<?php

namespace menu;

use iterator\PancakeMenuIterator;

class PancakeHouseMenu
{
    public $menuItems = array();

    public function __construct()
    {
        $this->data();
    }

    public function addItem(
        string $name,
        string $description,
        string $vegetarian,
        float $price
    ): void
    {
        $item = array(
            "Название " => $name,
            " Описание " => $description,
            " Вегетарианское " => $vegetarian,
            " Цена " => $price,
        );
        array_push($this->menuItems, $item);
    }

    public function data()
    {
        $this->addItem(
            "Breakfast", "Eggs and toast", "да",  2.99
        );
        
        $this->addItem(
            "Regular", "Sausage", "нет", 2.99
        );
        
        $this->addItem(
            "Blueberry", "Fresh blue", "да", 3.49
        );
        
        $this->addItem(
            "Waffles", "Waffles blue or straw", "да", 3.59
        );
    }

    public function createIterator()
    {
        return new PancakeMenuIterator(
            $this->menuItems
        );
    }

    /* public function getMenuItems(): void
    {
        foreach($this->menuItems as $item){
        
           foreach($item as $key => $value){
            echo $key. " " . $value;
            }
        echo "<br>";    
        }    
    } */

}