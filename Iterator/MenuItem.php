<?php

class MenuItem
{
    public $name; // string
    public $description; // string
    public $vegetarian; // string
    public $price; // float

    public function __construct(
        string $name,
        string $description,
        bool $vegetarian,
        float $price
    )
    {
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function isVegetarian(): string 
    {
        return $this->vegetarian;
    }
    
    
}