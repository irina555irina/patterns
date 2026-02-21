<?php

namespace devices;

class Light extends Device
{
    public function on() : void
    {
        echo "Свет включился";
    }

    public function off() : void
    {
        echo "Свет выключился";
    }
}