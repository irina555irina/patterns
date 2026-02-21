<?php

class GumballMachine
{
    protected static $_SOLD_OUT = 0;  // int
    protected static $_NO_QUARTER = 1; // int
    protected static $_HAS_QUATER = 2;  // int
    protected static $_SOLD = 3;  // int

    public $state = 0;
    public $count = 0; 
    
    public function __construct(int $count)
    {
        $this->count = $count;

        if($count > 0){
            $this->state = self::$_NO_QUARTER;
        }
    }

    public function insertQuarter()
    {
        if($this->state == self::$_HAS_QUATER){
            echo "Вы не можете добавить ещё монету<br>";
        } else if($this->state == self::$_NO_QUARTER){
            $this->state = self::$_HAS_QUATER;
            echo "Вы добавили монету<br>";
        } else if($this->state == self::$_SOLD_OUT){
            echo "Вы не можете добавить монету, шарики распроданы<br>";
        } else if($this->state == self::$_SOLD){
            echo "Подождите, мы уже выдаём вам шарик<br>";
        }
    }

    public function ejectQuarter()
    {
        if($this->state == self::$_HAS_QUATER){
            echo "Монета возвращена<br>";
            $this->state = self::$_NO_QUARTER; 
        } else if($this->state == self::$_NO_QUARTER){
            echo "Вы не вставляли монету<br>";
        } else if($this->state == self::$_SOLD){
            echo "Вы уже повернули рычаг, возврат невозможен<br>";
        } else if($this->state == self::$_SOLD_OUT){
            echo "Вы не можете вернуть монету - вы не вставляли монету<br>";
        } 
    }

    public function turnCrank()
    {
        if($this->state == self::$_SOLD){
            echo "Повторное дёргание рычага не даст ещё один шарик<br>";
        } else if($this->state == self::$_NO_QUARTER){
            echo "Сначала нужно бросить монету<br>";
        } else if($this->state == self::$_SOLD_OUT){
            echo "Выдача невозможна - в автомате нет шариков<br>";
        } else if($this->state == self::$_HAS_QUATER){
            echo "Вы повернули рычаг...<br>";
            $this->state = self::$_SOLD;
            $this->dispense();
        }
    }

    public function dispense()
    {
        if($this->state == self::$_SOLD){
            echo "Шарик выкатывается из слота<br>";
            $this->count = $this->count-1;
            if($this->count == 0 ){
                echo "Ох, шариков в автомате нет<br>";
                $this->state = self::$_SOLD_OUT;
            } else {
                $this->state = self::$_NO_QUARTER;
            }
        } else if($this->state == self::$_NO_QUARTER){
            echo "Сначала нужно бросить монету<br>";
        } else if($this->state == self::$_SOLD_OUT){
            echo "Нет выдачи шарика<br>";
        } else if($this->state == self::$_HAS_QUATER){
            echo "Нет выдачи шарика<br>";
        }
    }





}