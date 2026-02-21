<?php

namespace iQuackObservable;

interface iQuackObservable
{
    public function registerObserver(iObserver $observer): void;
    public function notifyObservers(): void;
}