<?php

namespace system;

class Projector implements iSystem
{
    public function on()
    {
        echo "Включить проектор..<br>";
    }

    public function setInput($dvd)
    {
        echo "Вставляется диск...<br>";
    }

    public function wideScreenMode()
    {
        echo "Выбирается широкоэкранный режим..<br>";
    }

}