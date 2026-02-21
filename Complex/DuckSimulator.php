<?php

use ducks\DuckCall;
use ducks\duckfactory\CountingDuckFactory;
use ducks\MallardDuck;
use ducks\QuackCounter;
use ducks\RedheadDuck;
use ducks\RubberDuck;
use goose\GooseAdapter;
use iQuackable\iQuackable;
use goose\Goose;
use ducks\Flock;
use iQuackObservable\Quacklogist;

//use ducks\duckfactory\DuckFactory;

class DuckSimulator
{
    public $duckFactory; // AbstractDuckFactory
    //public $flockOfDucks; // Flock

    public function __construct()
    {
        $this->duckFactory = new CountingDuckFactory();
        //$this->flockOfDucks = new Flock();
    }

    public function simulate(? iQuackable $duck=null): void
    {
        if ($duck === null) {
            /* $mallardDuck = 
                new QuackCounter(new MallardDuck());
            $redheadDuck = 
                new QuackCounter(new RedheadDuck());
            $duckCall = 
                new QuackCounter(new DuckCall());
            $rubberDuck = 
                new QuackCounter(new RubberDuck());
            */

        
            //$mallardDuck = $this->duckFactory
            //    ->createMallardDuck();
            $redheadDuck = $this->duckFactory
                ->createRedheadDuck();
            $duckCall = $this->duckFactory
                ->createDuckCall();
            $rubberDuck = $this->duckFactory
                ->createRubberDuck();

            $gooseDuck = new GooseAdapter(new Goose());

            

            $flockOfDucks = new Flock();

            $flockOfDucks
                ->add($redheadDuck);
            $flockOfDucks
                ->add($rubberDuck);
            $flockOfDucks
                ->add($duckCall);  
            $flockOfDucks
                ->add($gooseDuck); 

               /*  echo "<pre>";
                    print_r($flockOfDucks);
                echo "</pre>"; */
    

            $flockOfMallards = new Flock();

            $mallardDuckOne = 
                $this->duckFactory
                    ->createMallardDuck();
            $mallardDuckTwo = 
                $this->duckFactory
                    ->createMallardDuck();
            $mallardDuckThree = 
                $this->duckFactory
                    ->createMallardDuck();
            $mallardDuckFour = 
                $this->duckFactory
                    ->createMallardDuck();

            $flockOfMallards->add($mallardDuckOne);
            $flockOfMallards->add($mallardDuckTwo);
            $flockOfMallards->add($mallardDuckThree);
            $flockOfMallards->add($mallardDuckFour);

            $flockOfDucks->add($flockOfMallards);

            /* $mallardDuck->quack();
            $redheadDuck->quack();
            $duckCall->quack();
            $rubberDuck->quack();
            $gooseDuck->quack(); */

            
           
            //$flockOfDucks->quack();
            
            echo "<br>";

            
            //$flockOfMallards->quack();

            $quacklogist = new Quacklogist();

            //var_dump($flockOfMallards->quackers[1]->duck);
        
            $flockOfMallards->registerObserver($quacklogist);
            //$quacklogist->update($flockOfMallards);
        

            //$flockOfMallards->quack();

           /*  $count = count($flockOfMallards->quackers);
            for($i=0; $i<$count; $i++){
                $flockOfMallards->quack();
                $quacklogist->update($flockOfMallards->quackers[$i]->duck);
            }
 */


            $flockOfDucks->registerObserver($quacklogist);
            $count = count($flockOfDucks->quackers);
            for($i=0; $i<$count; $i++){
                $flockOfDucks->quack();
                //var_dump($flockOfDucks->quackers);
                $quacklogist->update($flockOfDucks->quackers[$i]->duck);
            }
        
            //$flockOfMallards->registerObserver($quacklogist);
            //$quacklogist->update($flockOfMallards);

        }
        else {
            $counter = new QuackCounter($duck);
            $counter->quack();

            $duck->quack();
            $quacklogist = new Quacklogist();
            $duck->registerObserver($quacklogist);
            $quacklogist->update($duck);

        }
       
        echo "Утки крякнули " . 
            QuackCounter::getQuacks() ." раз.<br><br>";

    }

    


}