<?php

namespace system;

class PopcornPopper implements iSystem
{
    public function on()
    {
        echo "Включается машинка для попкорна...<br>";
    }

    public function pop()
    {
        echo "Готовится попкорн...<br>";
    }
}