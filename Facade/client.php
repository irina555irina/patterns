<?php

spl_autoload_register();

//use system\iSystem;
use system\PopcornPopper;
use system\TheaterLights;
use system\Amplifier;
use system\Screen;
use system\DvdPlayer;
use system\Projector;


$movie = new HomeTheaterFacade(
    new Amplifier(), 
    new DvdPlayer(),
    new Projector(),
    new TheaterLights(),
    new Screen(),
    new PopcornPopper() 
);

$movie->watchMovie("Маска");
echo "<br><br>";

$movie->endMovie();
