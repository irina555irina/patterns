<?php

namespace menu;

use iterator\DinerMenuIterator;

class DinerMenu
{
    public $menuItems = [];

    public function __construct()
    {
        $this->data();
    }

    public function addItem(
        string $name,
        string $description,
        string $vegetarian,
        float $price
    )
    {

        $item = array(
            $name,
            $description,
            $vegetarian,
            $price
        );

        array_push(
            $this->menuItems,
                $item
        );

    
    }

    public function data()
        {
           
        $this->addItem(
        "Vega", "Bacon and tomato", "да", 2.99
        );

        $this->addItem(
        "Bacon", "Bacon and tomato", "нет", 2.99
        );

        $this->addItem(
        "Soap", "Potato salad", "да", 3.29
        );

        $this->addItem(
        "Hotdog", "Onion and cheese", "нет", 3.05
        );
    
    }

    public function createIterator()
    {
        return new DinerMenuIterator(
            $this->menuItems
        );
    }


    /* public function getMenuItems(): void
    {
        $count = count($this->menuItems);

        for($i = 0; $i<$count; $i++){

            for($j = 0; $j<4; $j++){
                echo $this->menuItems[$i][$j]." ";
            }
        echo "<br>";
        }
        
    }
 */

}