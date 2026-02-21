<?php

use duck\iDuck;

class TurkeyAdapter implements iDuck
{
    public $turkey; // iTurkey

    public function __construct($turkey)
    {
        $this->turkey=$turkey;
    }

    public function quack(): void
    {
        $this->turkey->gobble();
    }

    public function fly(): void
    {
        for($i = 0; $i<5; $i++){
            $this->turkey->fly();
        }
    }


}