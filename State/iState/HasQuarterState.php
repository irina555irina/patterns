<?php

namespace iState;

use GumballMachine;


class HasQuarterState implements iState
{

    public $randomWinner; 

    public $gumballMachine; // GumballMachine

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }


    public function insertQuarter(): void
    {
        echo "Вы не можете кинуть ещё монету<br>";
    }

    public function ejectQuarter(): void
    {
        echo "Монета возвращена<br>";

        $this->gumballMachine->setState(
            $this->gumballMachine->noQuarterState
        );

    }

    public function turnCrank(): void
    {
        echo "Вы повернули рычаг...<br>";

        $this->randomWinner = rand(0, 9);
     
        if( ($this->randomWinner == 0) && 
            ($this->gumballMachine->count > 1)){
            $this->gumballMachine->setState(
                $this->gumballMachine->winnerState
            );
        } else {
            $this->gumballMachine->setState(
                $this->gumballMachine->soldState
            );
        }

    }

    public function dispense(): void
    {
        echo "Нет шариков для выдачи<br>";
    }

}