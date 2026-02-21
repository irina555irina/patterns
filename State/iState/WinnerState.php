<?php

namespace iState;

use GumballMachine;

class WinnerState implements iState
{

    public $gumballMachine; // GumballMachine

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }


    public function insertQuarter(): void
    {
        echo "Подождите, шарик выдаётся<br>";
    }

    public function ejectQuarter(): void
    {
        echo "Вы уже повернули рычаг";
    }

    public function turnCrank(): void
    {
        echo "Повтор дёргания рычага не даст ещё шарика<br>";
    }

    public function dispense(): void
    {
        echo "УРА !!! Вы СЧАСТЛИВЧИК! Вы получаете два шарика за одну монету<br><br>";
        
        $this->gumballMachine->releaseBall();

        if($this->gumballMachine->count == 0){
            $this->gumballMachine->setState(
                $this->gumballMachine->soldOutState
            );
        } else {
            $this->gumballMachine->releaseBall();

            if($this->gumballMachine->count > 0){
                $this->gumballMachine->setState(
                    $this->gumballMachine->noQuarterState
                );
            } else {
                echo "Ой, шариков в автомате нет<br>";
                $this->gumballMachine->setState(
                    $this->gumballMachine->soldOutState
                );
            }
        }
    }



}