<?php

abstract class MenuComponent
{
    public function add(MenuComponent $menuComponent): void
    {
        throw new Exception("Не поддерживается");
    }

    public function remove(MenuComponent $menuComponent): void
    {
        throw new Exception("Не поддерживается");
    }

    public function getChild(int $i): MenuComponent
    {
        throw new Exception("Не поддерживается");
    }

    public function getName(): string
    {
        throw new Exception("Не поддерживается");
    }

    public function getDescription(): string
    {
        throw new Exception("Не поддерживается");
    }

    public function getPrice(): float
    {
        throw new Exception("Не поддерживается");
    }

    public function isVegetarian(): string
    {
        throw new Exception("Не поддерживается");
    }

    public function print(): void
    {
        throw new Exception("Не поддерживается");
    }

    public function createIterator()
    {
        
    }


}