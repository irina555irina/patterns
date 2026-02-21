<?php

namespace goose;

use iQuackable\iQuackable;
use iQuackObservable\Observable;
use iQuackObservable\iObserver;

class GooseAdapter implements iQuackable
{
    public $goose; // Goose
    public $observable; // Observable

    public function __construct(Goose $goose)
    {
        $this->goose = $goose;
        $this->observable = new Observable($this);
    }

    public function quack(): void
    {
        $this->goose->honk();
    }

    public function registerObserver(iObserver $observer): void
    {
        $this->observable->registerObserver($observer);
    }

    public function notifyObservers(): void
    {
        $this->observable->notifyObservers();
    }
}