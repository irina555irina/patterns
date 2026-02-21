<?php

namespace iState;

use GumballMachine;

class SoldState implements iState
{

    public $gumballMachine; // GumballMachine

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }


    public function insertQuarter():void
    {
        echo "Подождите, шарик выдаётся<br><br>";
    }

    public function ejectQuarter(): void
    {
        echo "Вы уже повернули рычаг<br>";
    }

    public function turnCrank(): void
    {
        echo "Повтор дёргания рычага не даст ещё шарика<br>";
    }

    public function dispense(): void
    {
        $this->gumballMachine->releaseBall();

        if($this->gumballMachine->count > 0){
            $this->gumballMachine->setState(
                $this->gumballMachine->noQuarterState
            );
        } else {
            echo "Ой, шариков нет<br>";

            $this->gumballMachine->setState(
                $this->gumballMachine->soldOutState
            );
        }

    }


}