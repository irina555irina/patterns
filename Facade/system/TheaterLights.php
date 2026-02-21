<?php

namespace system;

class TheaterLights implements iSystem
{
    public function dim($num=10)
    {
        echo "Яркость света уменьшается на ". $num . "<br>";
    }
}