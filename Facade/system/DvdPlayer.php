<?php

namespace system;

class DvdPlayer implements iSystem
{
    public function on()
    {
        echo "Включается dvd-проигрыватель..<br>";
    }

    public function play($movie)
    {
        echo "Ура! Смотрим фильм " 
            . $movie . " !<br>";
    }

}