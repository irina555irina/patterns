<?php

namespace ducks;

use iQuackable\iQuackable;
use iQuackObservable\iObserver;
use iQuackObservable\Observable;

class DuckCall implements iQuackable
{

    public $observable; // Observable

    public function __construct()
    {
        $this->observable = new Observable($this);
    }

    public function quack(): void
    {
        echo "Крюх<br>";
        $this->notifyObservers();
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