<?php

namespace make\sound;

use MakeSound;

class Hello implements MakeSound
{
    public function makeSound(): void
    {
        echo "Привет-привет";
    }
}