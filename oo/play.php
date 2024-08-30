<?php

class Ship{
    public $name;
    public $weaponPower = 0;
    public $jediFactor = 0;
    public $strength = 0;

    public function sayHello()
    {
        echo 'Hello!';
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNameAndSpecs($useShortFormat)
    {
        if ($useShortFormat) {
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }
    }
}

$myship = new Ship();
$myship->name = 'TIE Starfighter';
$myship->weaponPower = 10;

echo 'Ship Name: '.$myship->getName();
echo '<hr/>';
$myship->sayHello();
echo '<hr/>';
echo $myship->getNameAndSpecs(false);
echo '<hr/>';
echo $myship->getNameAndSpecs(true);
