<?php

use iState\iState;
use iState\HasQuarterState;
use iState\NoQuarterState;
use iState\SoldOutState;
use iState\SoldState;
use iState\WinnerState;

class GumballMachine
{
    public $soldOutState; // iState
    public $noQuarterState; // iState
    public $hasQuarterState; // iState
    public $soldState; // iState
    public $winnerState; // iState

    //public $state = $this->soldOutState;
    public $state;
    public $count = 0;

    public function __construct(
        $numberGumballs
    )
    {
        
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);

        $this->state = $this->soldOutState;
        $this->count = $numberGumballs;

        if($numberGumballs > 0){
            $this->state = $this->noQuarterState;
        }
    }


    public function insertQuarter():void
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter():void
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank():void
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function setState(iState $state)
    {
        $this->state = $state;
    }

    public function releaseBall()
    {
        echo "Шарик выкатывается из слота<br>";

        if($this->count != 0){
            $this->count = $this->count-1;
        }
    }


}