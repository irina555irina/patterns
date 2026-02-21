<?php

namespace ducks;

use iQuackable\iQuackable;
use iQuackObservable\iObserver;
use iQuackObservable\Observable;

class QuackCounter implements iQuackable
{
    public $duck; // iQuackable
    public static $numberQuacks; // int
    public $observable; // Observable

    public function __construct(iQuackable $duck)
    {
        $this->duck = $duck;
        $this->observable = new Observable($this);
    }

    public function quack(): void
    {
        $this->duck->quack();
        self::$numberQuacks++;
    }

    public static function getQuacks()
    {
        return self::$numberQuacks;
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
