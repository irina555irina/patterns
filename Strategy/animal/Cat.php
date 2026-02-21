<?php

namespace animal;
use make\sound\Myau;
use make\action\Jump;

class Cat extends Animal
{
    public function makeSound(): void
    {
        $this->sound = new Myau();
        $this->sound->getSound();
    }

    public function makeAction(): void
    {
        $this->action = new Jump();
        $this->action->getAction();
    }
}