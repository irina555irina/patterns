<?php

spl_autoload_register();

use commands\LightOnCommand;
use devices\Light;


$command = new LightOnCommand(new Light());
$command->execute();