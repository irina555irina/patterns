<?php

namespace commands;
use devices\Light;

class LightOnCommand implements Command
{
    public $light; // Light

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light ->on();
    }
}