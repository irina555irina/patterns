<?php

namespace system;

class Amplifier implements iSystem
{
    public function on()
    {
        echo "Включить усилитель..<br>";
    }

    public function setDvd()
    {
        echo "Связываем усилитель с dvd..<br>";
    }

    public function setArroundSound()
    {
        echo "Включается режим окружающего звука..<br>"; 
    }

    public function setVolume($num = 5)
    {
        echo "Установка громкости ". $num. "<br>";
    }

}
