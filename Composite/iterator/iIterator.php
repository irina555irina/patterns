<?php

namespace iterator;

interface iIterator
{
    public function hasNext(): bool;
    public function next(): object;
    // public function remove();
}
