<?php

namespace iState;

use GumballMachine;

class NoQuarterState implements iState
{
    public $gumballMachine; // GumballMachine

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo "Вы бросили монету<br>";
        $this->gumballMachine->setState(
            $this->gumballMachine->hasQuarterState
        );
    }

    public function ejectQuarter(): void
    {
        echo "Вы не бросили монету<br>";
    }

    public function turnCrank(): void
    {
        echo "Вы повернули рычаг, но нет монеты<br>";
    }

    public function dispense(): void
    {
        echo "Сначала нужно бросить монету<br>";
    }

}