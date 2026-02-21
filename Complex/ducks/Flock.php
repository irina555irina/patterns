<?php

namespace ducks;

use iQuackable\iQuackable;
use iQuackObservable\iObserver;
use iQuackObservable\Observable;

class Flock implements iQuackable
{

    public $quackers = []; // array
    public $observable; // Observable

    public function __construct()
    {
        $this->observable = new Observable($this);
    }

    public function add(iQuackable $quacker): void
    {
        $this->quackers[] = $quacker;
        //var_dump($this->quackers);
    }

    public function quack(): void
    {

        /* for($i=0; $i<count($this->quackers); $i++){
            $this->quackers[$i]->duck->quack();
            //var_dump($this->quackers[$i]->duck);
            $this->notifyObservers(); 
        } */
        
        echo "Кряк<br>";
            
        $this->notifyObservers(); 
           
       
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
