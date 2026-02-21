<?php

class MenuItem extends MenuComponent
{
    public $name; // string
    public $description; // string
    public $vegetarian; // string
    public $price; // float

    public function __construct(
        string $name,
        string $description,
        string $vegetarian,
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

    public function print(): void
    {
        
        echo "--   Название: " . $this->getName() . "<br>" .
            "--   Вегетарианское: " . $this->isVegetarian() . "<br>" .
            "--   Цена: " . $this->getPrice() . "<br>" . 
            "--   Описание: " . $this->getDescription() . "<br><br>";
    
    }

}