<?php

require_once('./Airplane.php');
require_once('./FighterAircraft.php');
require_once('./PassengerPlane.php');

// 戦闘機
$fighter = new FighterAircraft('戦闘機');
$fighter->showType();
$fighter->fly();
$fighter->fight();

// 旅客機
$plane = new PassengerPlane('旅客機');
$plane->showType();
$plane->fly();
$plane->carryPassengers();
