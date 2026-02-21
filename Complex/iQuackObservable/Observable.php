<?php

namespace iQuackObservable;

class Observable implements iQuackObservable
{

    public $observers = [];
    public $duck; // iQuackObservable

    public function __construct(iQuackObservable $duck)
    {
        $this->duck = $duck;
    }

    public function registerObserver(iObserver $observer): void
    {
        $this->observers[] = $observer;

    }

    public function notifyObservers(): void
    {
        //var_dump($this->duck);
        for($i=0; $i<count($this->observers); $i++){
            $this->observers[$i]->update($this->duck);
        //var_dump($this->observers[$i]);

        }  

        
 
    }


}