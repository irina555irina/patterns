<?php

namespace animal;

abstract class Animal
{

   public $sound;
   public $action;


  /*  public function __construct($snd, $actn)
   {
      $this->sound = $snd;
      $this->action = $actn;
      //var_dump($this->sound);
      
   } */

   abstract public function makeSound($snd): void;
   abstract public function makeAction(): void;

}