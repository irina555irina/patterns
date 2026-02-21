<?php

namespace turkey;

class WildTurkey implements iTurkey
{
    public function gobble(): void
    {
        echo " кулдык-кулдык   ";
    }

    public function fly(): void
    {
        echo "  лечу мало  ";
    }
}