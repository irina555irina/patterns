<?php

class Waitress
{
    public $allMenus; // MenuComponent

    public function __construct(
        MenuComponent $allMenus
    )
    {
        $this->allMenus = $allMenus;
    }

    public function printMenu(): void
    {
        //var_dump($this->allMenus);
        //$this->allMenus->print();
        $this->allMenus->createIterator();
    }
}