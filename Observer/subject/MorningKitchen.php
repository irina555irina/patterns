<?php

namespace subject;

class MorningKitchen implements Kitchen
{
    public array $visitors = [];
    

    public function registerVisitor($visitor): void
    {
        array_push($this->visitors, $visitor);
    }

    public function removeVisitor($visitor): void
    {
        foreach($this->visitors as $key => $value){
            
            if($value==$visitor){
                unset($this->visitors[$key]);
            }
        } 
    }

    public function callVisitors(): void
    {
        foreach($this->visitors as $visitor){
            $visitor->call();
        }
    }

    public function getState()
    {

    }

    public function setState()
    {

    }
}