<?php

namespace animal;
use make\sound\Guv;
use make\action\Run;

class Dog extends Animal
{
   public function makeSound(): void
   {
      $this->sound = new Guv();
      $this->sound->getSound();
   }

   public function makeAction(): void
   {
      $this->action = new Run();
      $this->action->getAction();
   }


}