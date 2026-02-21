<?php

namespace iState;

use GumballMachine;

class SoldOutState implements iState
{

    public $gumballMachine; // GumballMachine

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }


    public function insertQuarter():void
    {
        echo "Вы не можете бросить монету, шариков нет<br>";
    }

    public function ejectQuarter(): void
    {
        echo "Вы не бросали монету<br>";
    }

    public function turnCrank(): void
    {
        echo "Выдача невозможна - шариков нет<br>";
    }

    public function dispense(): void
    {
        echo "Шариков для выдачи нет<br>";
    }

}