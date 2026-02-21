<?php

namespace subject;

class EveningKitchen implements Kitchen
{
    public function registerVisitor($visitor): void;
    public function removeVisitor($visitor): void;
    public function callVisitors(): void;

    public function getState()
    {

    }

    public function setState()
    {
        
    }
}