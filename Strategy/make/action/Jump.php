<?php

namespace make\action;


class Jump implements Action
{
    public function getAction(): void
    {
        echo "Я прыгаю";
    }
}