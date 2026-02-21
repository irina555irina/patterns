<?php

namespace make\action;


class Fly implements Action
{
    public function getAction(): void
    {
        echo "Я лечу";
    }
}