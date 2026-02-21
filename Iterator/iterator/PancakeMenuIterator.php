<?php

namespace iterator;


class PancakeMenuIterator implements Iterator
{

    public $menuItems;

    public function __construct($menuItems)
    {
        $this->menuItems = $menuItems;
    }

    public function getMenuItems(): void
    {
        foreach($this->menuItems as $item){
        
           foreach($item as $key => $value){
            echo $key. " " . $value;
            }
        echo "<br>";    
        }    
    }
}