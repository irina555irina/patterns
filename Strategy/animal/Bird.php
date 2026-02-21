<?php

namespace animal;

use make\sound\Chirik;
use make\action\Fly;


class Bird extends Animal
{
    /* public $sound;
    public $action;
    public $name = "irina"; */

    /* public function __construct($snd, $actn=null)
    {
        parent::__construct($snd, $actn);
        //$this->sound = $snd;
        //$this->action = $actn;
        //var_dump($this->sound->getSound());
    } */

    public function makeSound($snd): void
    {
        //$this->sound = new Chirik();
        //$this->sound->getSound();
       
        //var_dump($this->name);
        //$this->sound ->getSound();
        //$this->action ->getAction();
        $this->sound = $snd;
        $this->sound->getSound();
    }

    public function makeAction(): void
    {
        $this->action = new Fly();
        $this->action->getAction();
    }
   
}