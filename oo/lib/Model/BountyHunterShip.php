<?php

namespace Model;
use Model\AbstraShip;

class BountyHunterShip extends AbstraShip
{
    use SettableJedifactorTrait;

    public function getType()
    {
        return 'Bounty Hunter';
    }
    public function isFunctional()
    {
        return true;
    }
}