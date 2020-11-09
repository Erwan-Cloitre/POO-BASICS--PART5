<?php

require_once 'Car.php';
require_once 'Bike.php';

$tesla = new Car("black", 4, 'electric');
var_dump($tesla->switchOn());
var_dump($tesla->switchOff());

$bike = new Bike("black",1);
var_dump($bike->switchOn());
$bike->setCurrentSpeed(12);
var_dump($bike->switchOn());
var_dump($bike->switchOff());