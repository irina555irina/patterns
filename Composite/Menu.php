<?php

use iterator\CompositeIterator;
use iterator\MenuComponentIterator;

class Menu extends MenuComponent
{
    public $menuComponents = array();
    public $name; // string
    public $description; // string
    public $iterator = null; // iIterator

    public function __construct(
        string $name, string $description
    )
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function add(MenuComponent $menuComponent): void
    {
        array_push($this->menuComponents, $menuComponent);
    }

    public function remove(MenuComponent $menuComponent): void
    {
        if(in_array($menuComponent, $this->menuComponents))
        {
            unset($this->menuComponents[$menuComponent]);
        }
    }

    public function getChild(int $i): MenuComponent
    {
        return $this->menuComponents[$i];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function print(): void
    {
        echo "Название МЕНЮ:" . $this->getName() . "<br>" . 
            "Описание: " . $this->getDescription() . "<br><br>";
    
        $iterator = new 
            MenuComponentIterator(
                $this->menuComponents
            );

        
        while($iterator->hasNext()){
            $menuComponent = $iterator->next();
            $menuComponent->print();
        }        
    
    }


    public function createIterator()
    {
        /* if($this->iterator == null){
            $this->iterator = 
                new CompositeIterator(
                    $this->menuComponents);
        } */
    }



}