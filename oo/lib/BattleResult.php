<?php

class BattleResult
{
    private $winningShip;
    private $losingShip;
    private $usedJediPowers;

    public function __construct(Ship $winningShip, Ship $losingShip, $usedJediPowers)
    {
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
        $this->usedJediPowers = $usedJediPowers;
    }

    /**
     * @return boolean
     */
    public function wereJediPowersUsed()
    {
        return $this->usedJediPowers;
    }
    /**
     * @return Ship
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }
    /**
     * @return Ship
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }
}