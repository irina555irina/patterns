<?php

spl_autoload_register();


$cofe = new Coffee();
$cofe->prepareRecipe();

echo "<br><br>";

$tea = new Tea();
$tea->prepareRecipe();

