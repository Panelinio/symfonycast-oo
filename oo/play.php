<?php

require __DIR__.'/lib/Ship.php';
/**
 * @param Ship $someShip
 */
function printShipSummary($someShip)
{
    echo 'Ship Name: '.$someShip->getName();
    echo '<hr/>';
    $someShip->sayHello();
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(false);
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(true);
}

$myship = new Ship();
$myship->name = 'TIE Starfighter';
$myship->weaponPower = 10;

printShipSummary($myship);

$otherShip = new Ship();
$otherShip->name = 'Imperial Shuttle';
$otherShip->weaponPower = 5;
$otherShip->strength = 50;
echo '<hr/>';
printShipSummary($otherShip);
echo '<hr/>';
if ($myship->doesGivenShipHaveMoreStrength($otherShip)) {
    echo $otherShip->name.' has more strength';
} else {
    echo $myship->name.' has more strength';
}