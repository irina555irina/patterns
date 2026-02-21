<?php

namespace iterator;


class CompositeIterator implements iIterator
{
    public $stack = array();

    public function __construct(iIterator $iterator)
    {
        // $stack[] = $iterator;
        array_push($stack, $iterator);
    }

    public function hasNext(): bool
    {
        if(empty($stack)){
            return false;
        } else {
            $iterator = end($stack);

            if(!$iterator->hasNext()){
                array_pop($stack);
                return $this->hasNext();
            } else {
                return true;
            }
        }
    }

    public function next(): object
    {
        if($this->hasNext()){
            $iterator = end($stack);
            $component = $iterator->next();

            if($component instanceof Menu){
                array_push($component->createIterator());
            }
            return $component;
        } /* else {
            return null;
        } */
    }


}