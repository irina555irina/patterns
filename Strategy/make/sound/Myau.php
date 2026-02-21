<?php

namespace make\sound;


class Myau implements Sound
{
    public function getSound(): void
    {
        echo "Мяу-мяу";
    }
}