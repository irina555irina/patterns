<?php

namespace make\action;


class Run implements Action
{
    public function getAction(): void
    {
        echo "Я побежал";
    }
}