<?php

namespace iState;

interface iState
{
    public function insertQuarter(): void;
    public function ejectQuarter(): void;
    public function turnCrank(): void;
    public function dispense(): void;
}