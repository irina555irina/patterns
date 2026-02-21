<?php 

namespace pizza;

abstract class Pizza
{
    public $name;
    public $dough;  // Dough
    public $sauce;  // Sauce
    public $veggies;  // Veggy array
    public $cheese;  // Cheese
    public $pepperoni;  // Pepperoni
    public $clams;  // Clams

    abstract function prepare() : void;

    public function bake()
    {
        echo "выпечено ";
    }

    public function cut()
    {
        echo "нарезано ";
    }

    public function box()
    {
        echo "упаковано ";
    }

    public function setName(String $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        echo $this->name;
    }

}