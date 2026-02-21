<?php

namespace iQuackObservable;

interface iObserver
{
    public function update(iQuackObservable $duck ): void;
}