<?php

namespace iterator;


class MenuComponentIterator implements iIterator
{
    public $menuComponents = [];
    public $position = 0;

    public function __construct($menuComponents)
    {
        $this->menuComponents = $menuComponents;
    }

    public function hasNext(): bool
    {
        if( $this->position >= 
            count($this->menuComponents) 
           )
            {
        return false;
       
        } else {
            return true;
        }

    }

    public function next(): object
    {
        $menuComponents = $this->
           menuComponents[$this->position];
        $this->position = $this->position+1;
        
        return $menuComponents;
        
    }
}
