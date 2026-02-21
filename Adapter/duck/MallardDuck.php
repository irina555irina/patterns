<?php

namespace duck;

class MallardDuck implements iDuck
{
    public function quack(): void
    {
        echo "ква-ква  ";
    }

    public function fly() : void
    {
        echo "  лечу";
    }
}