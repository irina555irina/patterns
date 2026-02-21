<?php

namespace iQuackObservable;

class Quacklogist implements iObserver
{
    public function update(iQuackObservable $duck): void
    {
        //var_dump($duck);
        echo "<br>Уведомление: " . substr(get_class($duck), 6 ) . " прокрякало <br>";
        
    }
}