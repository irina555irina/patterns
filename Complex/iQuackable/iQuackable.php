<?php

namespace iQuackable;

use iQuackObservable\iQuackObservable;

interface iQuackable extends iQuackObservable
{
    public function quack(): void;
}
