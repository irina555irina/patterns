<?php

namespace drink;

abstract class Drink
{
    public $description = "Unknown";
    
    public function getDescription(): void
    {
        echo $this->description;
    }

    abstract public function cost(): int;
}