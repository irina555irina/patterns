<?php

namespace iterator;


class DinerMenuIterator implements Iterator
{
    public $menuItems;

    public function __construct($menuItems)
    {
        $this->menuItems = $menuItems;
    }

    public function getMenuItems(): void
    {
        $count = count($this->menuItems);

        for($i = 0; $i<$count; $i++){

            for($j = 0; $j<4; $j++){
                echo $this->menuItems[$i][$j]." ";
            }
        echo "<br>";
        }
    }
}