<?php

namespace observer;

interface Visitor
{
    public function call(): void;
}