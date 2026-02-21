<?php

use system\PopcornPopper;
use system\TheaterLights;
use system\Amplifier;
use system\Screen;
use system\DvdPlayer;
use system\Projector;

class HomeTheaterFacade
{
    public $amp; // Amplifier
    //public $tuner; // Tuner
    public $dvd; // DvdPlayer
    //public $cd; // CdPlayer
    public $projector; // Projector
    public $lights; // TheaterLights
    public $screen; // Screen
    public $popper; // PopcornPopper

    public function __construct(
        Amplifier $amp,
        //Tuner $tuner,
        DvdPlayer $dvd,
        //CdPlayer $cd,
        Projector $projector,
        TheaterLights $lights,
        Screen $screen,
        PopcornPopper $popper
        )
        
    {
        $this->amp = $amp;
        //$this->tuner = $tuner;
        $this->dvd = $dvd;
        //$this->cd = $cd;
        $this->projector = $projector;
        $this->lights = $lights;
        $this->screen = $screen;
        $this->popper = $popper;
    }
 
    public function watchMovie($movie)
    {
        echo "Готовься смотреть фильм..<br>";
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setDvd();
        $this->amp->setArroundSound();
        $this->amp->setVolume(5);
        $this->dvd->on();
        $this->dvd->play($movie);

    }

    public function endMovie()
    {
        echo "Выключаем аппаратуру...<br>";
    }

}