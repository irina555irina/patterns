<?php

namespace pets;
use observer\Visitor;

interface Pet extends Visitor
{
   

    public function call(): void;
   
   
}


?>